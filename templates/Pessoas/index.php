<head>
  ...
  <style>
    .btn-cadastrar {
      display: inline-block;
      padding: 10px 20px;
      background-color: blue;
      color: white;
      border-radius: 5px;
      text-decoration: none;
      position: absolute;
      top: 40px;
      right: 20px;
    }


    .side-nav {
      position: fixed;
      top: 70px;
      left: 0;
      width: 200px;
      padding: 20px;
    }




    .table-responsive {
      margin-top: 70px;
    }

    @media only screen and (max-width: 768px) {
      .btn-cadastrar,
      .pessoas h3 {
        position: static;
      }
    }
  </style>
</head>

<body>
  <?php
  /**
   * @var \App\View\AppView $this
   * @var \App\Model\Entity\Endereco $endereco
   * @var iterable<\App\Model\Entity\Pessoa> $pessoas
   *
   */
  ?>
  <div class="pessoas index content">

  <div class="side-nav">
    <h4 class="heading"><?= __('Actions') ?></h4>
    <?= $this->Html->link(__('List Enderecos'), ['controller' => 'Enderecos', 'action' => 'index'], ['class' => 'side-nav-item']) ?>
  </div>

      <h3><?= __('Pessoas') ?></h3>
      <a href="/pessoas/add" class="btn-cadastrar">Cadastrar Pessoa</a>
      <div class="table-responsive">
          <table>
              <thead>
                  <tr>
                      <th><?= __('ID') ?></th>
                      <th><?= __('Nome') ?></th>
                      <th><?= __('Data Nascimento') ?></th>
                      <th><?= __('CPF') ?></th>
                      <th><?= __('Email') ?></th>
                      <th><?= __('Estado Civil') ?></th>


                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($pessoas as $pessoa): ?>
                  <tr>
                      <td><?= $this->Number->format($pessoa->id) ?></td>
                      <td><?= h($pessoa->nome) ?></td>
                      <td><?= h($pessoa->data_nascimento) ?></td>
                      <td><?= h($pessoa->cpf) ?></td>
                      <td><?= h($pessoa->email) ?></td>
                      <td><?= h($pessoa->estado_civil) ?></td>
                      <td class="actions">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id)]) ?>
                    </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {

    $('.delete-button').click(function(event) {
      event.preventDefault();

      const pessoaId = $(this).data('pessoa-id');
      const url = '/pessoas/delete/' + pessoaId;

      fetch(url, {
        method: 'DELETE',
        headers: {
          'Content-Type': 'application/json'
        }
      })
      .then(response => {
        if (response.ok) {
          return response.json();
        } else {
          throw new Error('Erro ao deletar pessoa');
        }
      })
      .then(data => {
        const tableRow = $(this).closest('tr');
        tableRow.remove();
      })
      .catch(error => {
        console.error(error);
      });
    });


    $('#list-enderecos-link').click(function(event) {
      event.preventDefault();

      const url = '/enderecos/index';

      fetch(url)
      .then(response => {
        if (response.ok) {
          return response.text();
        } else {
          throw new Error('Erro ao listar endereços');
        }
      })
      .then(html => {
        $('#pessoa-table').html(html);
      })
      .catch(error => {
        console.error(error);
      });
    });
  });
</script>
  <!-- <script src="js/scripts.js"></script> -->
</body>
