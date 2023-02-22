<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>

<style>
    .container {
        height: 80vh;
        display: grid;
        place-items: center;
    }
    .pessoas.form.content {
        min-width: 600px;

    }
    @media(max-width: 768px) {
        .pessoas.form.content {
            min-width: 100%;

        }
    }
</style>

<div class="container">

    <div class="side-nav">
            <!-- <h4 class="heading"><?= __('Actions') ?></h4> -->
             <?= $this->Html->link(__(' VOLTAR'), ['controller' => 'Pessoas', 'action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>

    <div class="pessoas form content">
        <?= $this->Form->create($pessoa) ?>
        <fieldset>
            <legend><?= __('Add Pessoa') ?></legend>
            <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('data_nascimento');
            echo $this->Form->control('cpf');
            echo $this->Form->control('email');
            echo $this->Form->control('estado_civil');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(form);
            fetch('/pessoas/add', {
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
    });
</script>

