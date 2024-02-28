<?php
    include 'dados.php';
    
    function filtro($ar){
        $resultado = array(); //nao entendi
        foreach($ar as $a){
            if($a['musica'] == 'rock'){
                $resultado[]=$a;
            }
        }
        return $resultado;

    }
    $rock = filtro($dados);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Início</title>
</head>
<body>
    <div class="container-fluid py-2">
        <ul class="nav">
            <li class="nav-item text-center">
                <p class="nav-link disabled">Utilizando arrays em PHP</p>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./index.html">Início</a>
            </li>
        </ul>
        <div class="jumbotron">
            <p class="h1 text-center">Manipulação de arrays em PHP</p>
            <p class="p text-center">Exibindo todos os dados em ordem alfabética (crescente).</p>
        </div>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope='col'>Nome</th>
                        <th scope='col'>Idade</th>
                        <th scope='col'>Gênero musical</th>
                    </tr>
                </thead>
                <?php foreach($rock as $linha => $item):?>
                    <tr>
                        <th scope="row"><?php echo $item['nome'] ?></th>   <!-- O que é scope=row?? -->
                        <td><?php echo $item['idade']?></td>
                        <td><?php echo $item['musica']?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="row py-4 text-center">
            <p class="p text-center">CEFET-MG Varginha</p>
        </div>
    </div>
</body>
</html>