<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 * @var string[]|\Cake\Collection\CollectionInterface $pessoas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $endereco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Enderecos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="enderecos form content">
            <?= $this->Form->create($endereco) ?>
            <fieldset>
                <legend><?= __('Edit Endereco') ?></legend>
                <?php
                    echo $this->Form->control('pessoa_id', ['options' => $pessoas]);
                    echo $this->Form->control('cep');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('cidade');
                    echo $this->Form->control('endereco');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('complemento');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
