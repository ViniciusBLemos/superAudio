<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 * @var \Cake\Collection\CollectionInterface|string[] $pessoas
 */
?>

<style>
    .container {
        height: 80vh;
        display: grid;
        place-items: center;
    }

    .enderecos.form.content {
        min-width: 600px;

    }

    @media(max-width: 768px) {
        .enderecos.form.content {
            min-width: 100%;

        }

    }
</style>

<div class="container">

    <div class="side-nav">
        <!-- <h4 class="heading"><?= __('Actions') ?></h4> -->
        <?= $this->Html->link(__('VOLTAR'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
    </div>


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

    <script>
        const form = document.querySelector('form');
        form.addEventListener('submit', (event) => {
            event.preventDefault();

            const formData = new FormData(form);
            const url = '<?= $this->Url->build(['action' => 'add']) ?>';

            fetch(url, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (response.redirected) {
                        window.location.href = response.url;
                    }
                })
                .catch(error => console.error(error));
        });
    </script>
</div>
