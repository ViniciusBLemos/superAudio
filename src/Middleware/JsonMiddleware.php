<?php
namespace App\Middleware;

use Cake\Http\Response;
use Cake\Utility\Inflector;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class JsonMiddleware implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // Executa o próximo middleware
        $response = $handler->handle($request);

        // Obtém o corpo da resposta
        $body = $response->getBody()->__toString();

        // Converte o corpo para JSON, se possível
        $data = json_decode($body);

        // Se a decodificação falhar, retorna a resposta original
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $response;
        }

        // Cria uma nova resposta JSON
        $newResponse = new Response([
            'type' => 'application/json',
            'body' => json_encode($data),
            'status' => $response->getStatusCode(),
        ]);

        // Retorna a nova resposta JSON
        return $newResponse;
    }
}
