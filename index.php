<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Envio de Email</title>
</head>
<body>

<form class="container p-3" method="POST" action="data.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
  <input type="email" class="form-control">
  <div id="emailHelp" class="form-text" name="email">Nunca compartilhamos os seus dados com ninguém.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Mensagem</label><br/>
    <textarea class="form-control" name="message"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</body>
</html>