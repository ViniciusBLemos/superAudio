function listarPessoas() {
    $.ajax({
      type: "GET",
      url: "http://localhost:8765/pessoas",
      success: function(response) {
        // Limpa a tabela
        $("#table-pessoas tbody").empty();
        // Preenche a tabela com as pessoas
        console.log(response);
        response.forEach(function(pessoa) {
          var html = "<tr>";
          html += "<td>" + pessoa.nome + "</td>";
          html += "<td>" + pessoa.email + "</td>";
          html += "<td>" + pessoa.cpf + "</td>";
          html += "<td>" + pessoa.data_nascimento + "</td>";
          html += "<td>";
          pessoa.enderecos.forEach(function(endereco) {
            html += endereco.cep + ", " + endereco.cidade + ", " + endereco.estado + ", " + endereco.endereco + " " + endereco.numero + " " + endereco.complemento + "<br>";
          });
          html += "</td>";
          html += "<td>";
          html += "<button class='btn btn-danger' onclick='removerPessoa(" + pessoa.id + ")'>Remover</button>";
          html += "</td>";
          html += "</tr>";
          $("#table-pessoas tbody").append(html);
        });
      }
    });
  }

  // Função para adicionar uma pessoa
  function adicionarPessoa() {
    var pessoa = {
      nome: $("#nome").val(),
      email: $("#email").val(),
      cpf: $("#cpf").val(),
      data_nascimento: $("#data_nascimento").val(),
      enderecos: [
        {
          cep: $("#cep").val(),
          estado: $("#estado").val(),
          cidade: $("#cidade").val(),
          endereco: $("#endereco").val(),
          numero: $("#numero").val(),
          complemento: $("#complemento").val()
        }
      ]
    };
    $.ajax({
      type: "POST",
      url: "http://localhost:8765/pessoas",
      data: pessoa,
      success: function() {
        listarPessoas();
        // Limpa os campos do formulário
        $("#nome").val("");
        $("#email").val("");
        $("#cpf").val("");
        $("#data_nascimento").val("");
        $("#cep").val("");
        $("#estado").val("");
        $("#cidade").val("");
        $("#endereco").val("");
        $("#numero").val("");
        $("#complemento").val("");
      }
    });
  }

  // Função para remover uma pessoa
  function removerPessoa(id) {
    $.ajax({
      type: "DELETE",
      url: "http://localhost:8765/pessoas/" + id,
      success: function() {
        listarPessoas();
      }
    });
  }

  // Ao carregar a página, lista todas as pessoas
  $(document).submit(function(e) {
      listarPessoas();
      e.preventDefault()
  });
