$(document).ready(function() {
  $.ajax({
    url: "http://localhost:8765/pessoa",
    type: "GET",
    success: function(response) {
      var registros = JSON.parse(response);
      var tabela = $("#pessoa-table");
      registros.forEach(function(registro) {
        var linha = $("<tr></tr>");
        linha.append($("<td></td>").text(registro.id));
        linha.append($("<td></td>").text(registro.nome));
        linha.append($("<td></td>").text(registro.data_nascimento));
        linha.append($("<td></td>").text(registro.cpf));
        linha.append($("<td></td>").text(registro.email));
        linha.append($("<td></td>").text(registro.estado_civil));
        tabela.append(linha);
      });
    }
  });
});
