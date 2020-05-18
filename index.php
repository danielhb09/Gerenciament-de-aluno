<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    
</head>
<body>
    <div  class="middle">
      <div class="menu">
        <li class="item" id='profile'>
          <a href="#profile" class="btn"><i class="far fa-user"></i>Professor</a>
          <div class="smenu">
            <a href="cadastradisciplina.php">Cadastrar Disciplina</a>
            <a href="cadastraaluno.php">Cadastrar Estudante</a>
          </div>
        </li>

        <li class="item" id="messages">
          <a href="#messages" class="btn"><i class="far fa-file-alt"></i>Notas</a>
          <div class="smenu">
            <a href="lancanota.php">Lançar notas</a>
            <a href="alterarnota.php">Alterar nota</a>
            <a href="relatorio.php">Relatório dos estudantes</a>
          </div>
        </li>
        <li class="item">
          <a class="btn" href="#"><i class="fas fa-sign-out-alt"></i>Sair</a>
        </li>
      </div>
    </div>
  </body>
</html>


