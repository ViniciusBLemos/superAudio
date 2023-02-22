<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Endereco> $enderecos
 */
?>

<head>
    <style>
        .btn-cadastrar {
            display: inline-block;
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-cadastrar-wrapper {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-top: 20px;
        }
        .enderecos {
            position: relative;
        }
        @media only screen and (max-width: 768px) {
            .btn-cadastrar-wrapper {
                justify-content: flex-start;
            }

            .btn-cadastrar,
            .enderecos h3 {
                position: static;
                display: block;
                margin: 20px 0;
            }
        }
        .heading {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .side-nav-item {
            display: block;
            padding: 5px;
            border-radius: 3px;
            color: #333;
            text-decoration: none;
            margin-bottom: 5px;
            transition: all 0.2s ease-in-out;
        }
        .side-nav {
            background-color: #f2f2f2;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .side-nav-item:hover {
            background-color: #ccc;
            color: #fff;
        }

        .table-responsive {
            margin-top: 70px;
        }

        @media only screen and (max-width: 768px) {

            .btn-cadastrar,
            .enderecos h3 {
                position: static;
            }
        }

        @media only screen and (max-width: 768px) {
            .btn-cadastrar-wrapper {
                justify-content: flex-start;
            }
        }
    </style>
</head>

<div class="enderecos index content">

    <div class="side-nav">
        <h4 class="heading"><?= __('Actions') ?></h4>
        <?= $this->Html->link(__('List Pessoas'), ['controller' => 'Pessoas', 'action' => 'index'], ['class' => 'side-nav-item']) ?>
    </div>

    <h3><?= __('Enderecos') ?></h3>
    <div class="btn-cadastrar-wrapper">
        <a href="/enderecos/add" class="btn-cadastrar">Cadastrar Endereço</a>
    </div>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pessoa_id') ?></th>
                    <th><?= $this->Paginator->sort('cep') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('cidade') ?></th>
                    <th><?= $this->Paginator->sort('endereco') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('complemento') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enderecos as $endereco) : ?>
                    <tr>
                        <td><?= $this->Number->format($endereco->id) ?></td>
                        <td><?= $endereco->has('pessoa') ? $this->Html->link($endereco->pessoa->id, ['controller' => 'Pessoas', 'action' => 'view', $endereco->pessoa->id]) : '' ?></td>
                        <td><?= h($endereco->cep) ?></td>
                        <td><?= h($endereco->estado) ?></td>
                        <td><?= h($endereco->cidade) ?></td>
                        <td><?= h($endereco->endereco) ?></td>
                        <td><?= h($endereco->numero) ?></td>
                        <td><?= h($endereco->complemento) ?></td>
                        <td class="actions">
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $endereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
