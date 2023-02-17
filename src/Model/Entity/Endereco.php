<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Endereco Entity
 *
 * @property int $id
 * @property int $pessoa_id
 * @property string $cep
 * @property string $estado
 * @property string $cidade
 * @property string $endereco
 * @property string $numero
 * @property string $complemento
 *
 * @property \App\Model\Entity\Pessoa $pessoa
 */
class Endereco extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'pessoa_id' => true,
        'cep' => true,
        'estado' => true,
        'cidade' => true,
        'endereco' => true,
        'numero' => true,
        'complemento' => true,
        'pessoa' => true,
    ];
}
