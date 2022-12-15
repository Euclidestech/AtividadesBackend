<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Usuario</title>
</head>

<body>

  <form action="cadastrar_dados.php" name="frmCadastro" id="frmCadastro" method="POST">
    Nome: <br />
    <input type="text" name="nome" required><br />
    E-mail: <br />
    <input type="email" name="email" required><br />
    Senha: <br />
    <input type="password" name="senha" required><br />
    Ativo: <br />
    <select name="Ativo">
      <option></option>
      <option value="1">Ativado</option>
      <option value="0">Desativado</option>
    </select><br /><br />

    <button type="submit" id="cadastrar">Cadastrar</button>
  </form>



  <script>
    $(function() {

      $("#cadastrar").click(function() {

        $("#frmCadastro").submit(function(e) {

          var postData = $(this).serializeArray();
          var formURL = $(this).attr("action");
          $.ajax({
            url: formURL,
            type: "POST",
            data: postData,
            success: function(data, textStatus, jqXHR) {
              $("#simple-msg").html(data);
              $('#frmCadastro')[0].reset();

            },
            error: function(jqXHR, textStatus, errorThrown) {

              var error = textStatus + '<br/>' + errorThrown;
              $("#simple-msg").html(error);
            }
          });
          e.preventDefault(); //STOP default action
          e.unbind();
        });

      });

    });
  </script>


















</body>

</html>