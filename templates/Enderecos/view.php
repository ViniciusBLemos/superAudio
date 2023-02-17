<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Endereco'), ['action' => 'edit', $endereco->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Endereco'), ['action' => 'delete', $endereco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Enderecos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Endereco'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="enderecos view content">
            <h3><?= h($endereco->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Pessoa') ?></th>
                    <td><?= $endereco->has('pessoa') ? $this->Html->link($endereco->pessoa->id, ['controller' => 'Pessoas', 'action' => 'view', $endereco->pessoa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cep') ?></th>
                    <td><?= h($endereco->cep) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($endereco->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cidade') ?></th>
                    <td><?= h($endereco->cidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= h($endereco->endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($endereco->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Complemento') ?></th>
                    <td><?= h($endereco->complemento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($endereco->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
