<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/teste.css">
    <title>teste</title>
</head>
<body>

  <?php
      include_once 'menu.php';
  ?>
 
  <div class="formulario">
    <form style="text-align: center">
      <div class="form-row">
        <div class="col">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome" placeholder="Nome" required><br />
        </div>
        <div class="col">
          <label for="sobrenome">Sobrenome</label>
          <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome" required><br />
        </div>
      </div>

      <div class="form-group">
        <label for="email">Endereço de email</label>
        <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com" required><br /><br />
      </div>
      Escolha uma opção
      <select>
        <option>Dúvidas</option>
        <option>Reclamação</option>
        <option>Outros</option>
      </select><br /><br />
      <div class="form-group">
        <label for="Textarea">Deixe sua mensagem</label>
        <textarea class="form-control" id="Textarea" rows="3" required></textarea><br />
      </div>
      <p><i>Todos os campos devem ser preenchidos</i></p>
      <button type="submit " class="btn1 my-3 mx-2 float-right ">Enviar</button>
      <button type="submit " class="btn1 my-3 mx-2 float-right " data-toggle="modal "
        data-target="#exampleModal ">Limpar</button>
    </form>
  </div>
  <div id="fundo"></div>
  
<?php
    include_once 'footer.php';
?>
</body>

</html>
</body>
</html>