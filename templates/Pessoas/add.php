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
            <?= $this->Html->link(__('List Pessoas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
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
        console.log(response);
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      form.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(form);
        fetch('/pessoas/add', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.error(error));
      });
    });
  </script>
</div>
