<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Endereco> $enderecos
 */
?>
<div class="enderecos index content">
    <?= $this->Html->link(__('New Endereco'), ['action' => 'add'], ['class' => 'button float-right']) ?>

    <h3><?= __('Enderecos') ?></h3>
    <div class="table-responsive">
        <table>
        <div class="side-nav">
    <h4 class="heading"><?= __('Actions') ?></h4>
        <?= $this->Html->link(__('List Pessoas'), ['controller' => 'Pessoas', 'action' => 'index'], ['class' => 'side-nav-item']) ?>
    </div>
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
                <?php foreach ($enderecos as $endereco): ?>
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
