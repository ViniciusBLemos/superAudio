<?php

use Cake\I18n\Date;
use Cake\ORM\TableRegistry;
use Cake\Utility\Text;
use Phinx\Seed\AbstractSeed;
use Faker\Factory;

class PessoasSeed extends AbstractSeed
{
    public function run() : void
    {
        $faker = Factory::create('pt_BR');

        $pessoas = [];

        for ($i = 0; $i < 15; $i++) {
            $pessoa = [
                'nome' => $faker->name,
                'data_nascimento' => $faker->date(),
                'cpf' => $faker->cpf,
                'email' => $faker->email,
                'estado_civil' => $faker->randomElement(['Solteiro', 'Casado', 'Divorciado', 'Viúvo'])
            ];

            $pessoas[] = $pessoa;
        }

        $pessoasTable = TableRegistry::getTableLocator()->get('Pessoas');
        $pessoas = $pessoasTable->newEntities($pessoas);
        $pessoasTable->saveMany($pessoas);

        $enderecos = [];

        foreach ($pessoas as $pessoa) {
            for ($i = 0; $i < rand(1, 3); $i++) {
                $endereco = [
                    'pessoa_id' => $pessoa->id,
                    'cep' => $faker->postcode,
                    'estado' => $faker->stateAbbr,
                    'cidade' => $faker->city,
                    'endereco' => $faker->streetName,
                    'numero' => $faker->buildingNumber,
                    'complemento' => $faker->secondaryAddress
                ];

                $enderecos[] = $endereco;
            }
        }

        $enderecosTable = TableRegistry::getTableLocator()->get('Enderecos');
        $enderecos = $enderecosTable->newEntities($enderecos);
        $enderecosTable->saveMany($enderecos);
    }
}
