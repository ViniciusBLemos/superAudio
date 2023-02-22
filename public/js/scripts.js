$(document).submit(function(e) {
    adicionarPessoa();
    e.preventDefault();
});

function adicionarPessoa() {
    var pessoa = {
        nome: $("#nome-completo").val(),
        email: $("#email").val(),
        cpf: $("#cpf").val(),
        data_nascimento: $("#data-nascimento").val(),
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

            $("#nome-completo").val("");
            $("#email").val("");
            $("#cpf").val("");
            $("#data-nascimento").val("");
            $("#cep").val("");
            $("#estado").val("");
            $("#cidade").val("");
            $("#endereco").val("");
            $("#numero").val("");
            $("#complemento").val("");
        }
    });
}

function removerPessoa(id) {
    $.ajax({
        type: "DELETE",
        url: "http://localhost:8765/pessoas/" + id,
        success: function() {
            listarPessoas();
        }
    });
}

function listarPessoas() {
    $.ajax({
        type: "GET",
        url: "http://localhost:8765/pessoas",
        success: function(response) {
            $("#table-pessoas tbody").empty();
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
