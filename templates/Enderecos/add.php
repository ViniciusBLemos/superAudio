<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 * @var \Cake\Collection\CollectionInterface|string[] $pessoas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Enderecos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="enderecos form content">
            <?= $this->Form->create($endereco) ?>
            <fieldset>
                <legend><?= __('Add Endereco') ?></legend>
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
