<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style
     type="text/css">
        body{background-image: url(2.png);
        background-attachment:fixed;
        background-size:100%;
        background-repeat:no-repeat;
        
        }

        .wrapper{
            width: 650px;
            color: gray;
            
        }
       
        .page-header h2{
            margin-top: 150;
        }
        table tr td:last-child a{
            margin-right: 10px;
            
            
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Relatorio dos Estudantes</h2>
                        <a href="cadastraaluno.php" class="btn btn-success pull-right">Cadastrar novo aluno</a>
                        
                        <a href="INDEX.php" class="btn btn-success pull-right">Voltar</a>
                    </div>
                   
                    <?php
                    
                    require_once "conexao.php";
                    
                    
                    $sql = "SELECT * FROM tbnotas";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Código</th>";
                                        echo "<th>Nome</th>";
                                        echo "<th>Disciplina</th>";
                                        echo "<th>Av1</th>";
                                        echo "<th>Av2</th>";
                                        echo "<th>Av3</th>";
                                        echo "<th>Media</th>";
                                        echo "<th>Conceito</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['nome'] . "</td>";
                                        echo "<td>" . $row['disciplina'] . "</td>";
                                        echo "<td>" . $row['av1'] . "</td>";
                                        echo "<td>" . $row['av2'] . "</td>";
                                        echo "<td>" . $row['av3'] . "</td>";
                                        echo "<td>" . $row['media'] . "</td>";
                                        echo "<td>" . $row['conceito'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='detalherelatorio.php?id=". $row['id'] ."' title='Visualizar Dados' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                           
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>Não há dados para serem apresentados.</em></p>";
                        }
                    } else{
                        echo "ERRO: Não foi possível executar $sql. " . mysqli_error($conn);
                    }
 
                    
                    mysqli_close($conn);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>