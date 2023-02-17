<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pessoa'), ['action' => 'edit', $pessoa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pessoa'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pessoas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pessoa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pessoas view content">
            <h3><?= h($pessoa->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($pessoa->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cpf') ?></th>
                    <td><?= h($pessoa->cpf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($pessoa->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado Civil') ?></th>
                    <td><?= h($pessoa->estado_civil) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pessoa->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Nascimento') ?></th>
                    <td><?= h($pessoa->data_nascimento) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Enderecos') ?></h4>
                <?php if (!empty($pessoa->enderecos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Pessoa Id') ?></th>
                            <th><?= __('Cep') ?></th>
                            <th><?= __('Estado') ?></th>
                            <th><?= __('Cidade') ?></th>
                            <th><?= __('Endereco') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Complemento') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($pessoa->enderecos as $enderecos) : ?>
                        <tr>
                            <td><?= h($enderecos->id) ?></td>
                            <td><?= h($enderecos->pessoa_id) ?></td>
                            <td><?= h($enderecos->cep) ?></td>
                            <td><?= h($enderecos->estado) ?></td>
                            <td><?= h($enderecos->cidade) ?></td>
                            <td><?= h($enderecos->endereco) ?></td>
                            <td><?= h($enderecos->numero) ?></td>
                            <td><?= h($enderecos->complemento) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Enderecos', 'action' => 'view', $enderecos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Enderecos', 'action' => 'edit', $enderecos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enderecos', 'action' => 'delete', $enderecos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enderecos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
