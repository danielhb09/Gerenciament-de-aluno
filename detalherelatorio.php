<?php

    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    
      require_once "conexao.php";

    
        $sql = "SELECT * FROM tbnotas WHERE id = ?";

    if($stmt = mysqli_prepare($conn, $sql)){
        
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        $param_id = trim($_GET["id"]);

    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result)  == 1){
               
         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

              
         $nome = $row["nome"];

 } else{
            header("location: error.php");
            exit();
         }

 } else{
            echo "Opa! Algo deu errado. Por favor, tente novamente mais tarde.";
        }
    }

    mysqli_stmt_close($stmt);

    mysqli_close($conn);
} else{

    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Dados</title>
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        
        body{background-image: url(2.png);
        background-attachment:fixed;
        background-size:100%;
        background-repeat:no-repeat;
        
        }.wrapper{
            width: 500px;
            color: white;
           
        }
    </style>
</head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Visualizar Detalhes do Aluno</h1>
                    </div>
                    <div class="form-group">
                        <label>Nome do aluno</label>
                        <p class="form-control-static"><?php echo $row["nome"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Nome da Disciplina</label>
                        <p class="form-control-static"><?php echo $row["disciplina"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Nota Avaliação 1</label>
                        <p class="form-control-static"><?php echo $row["av1"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Nota Avaliação 2</label>
                        <p class="form-control-static"><?php echo $row["av2"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Nota Avaliação 3</label>
                        <p class="form-control-static"><?php echo $row["av3"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Média das Provas</label>
                        <p class="form-control-static"><?php echo $row["media"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Situação</label>
                        <p class="form-control-static"><?php echo $row["conceito"]; ?></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Voltar</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>