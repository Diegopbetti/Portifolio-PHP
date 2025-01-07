<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portifolio</title>
</head>
<body>
    <?php 
        $nome = "Diego";
        $saudacao = "oi ";
        $titulo = $saudacao . "Portifílio do" . $nome;
        $subtitulo = "...";
        $ano = 2020;
        $projeto = "Meu portifólio";
        $finalizado = true;
        $dataDoProjeto = "2024-10-11";
        $descricao = "Meu primeiro portifolio. Escrito em PHP e HTML.";

        $projetos = [
            [
                "titulo" => "Meu Portifolio",
                "finalizado" => false,
                "data" => "2024-10-11",
                "descricao" => "Meu primeiro portifolio. Escrito em PHP e HTML."
            ],
            // "Meu Portifolio",
            // "Lista de Tarefas",
            // "Controle de leitura de livros",

        ];
    ?>

    <h1><?= $titulo ?></h1>
    <p><?= $subtitulo ?></p>
    <p><?php echo $ano ?></p>

    <hr/>

    <ul>
        <?php foreach($projetos as $projeto){
            echo "<li>{$projeto['titulo']} ...</li>";
            echo "<li>{$projeto['data']} ...</li>";
            echo "<li>{$projeto['descricao']} ...</li>";
        }
        
        ?>

    </ul>


    <!-- <div
        <?php if((2024 - $ano) > 2): ?>
            style="background-color: burlywood;"
        <?php endif; ?>
    >
        <h2><?= $projeto ?></h2>
        <p><?= $descricao ?></p>
        <div><?= $dataDoProjeto ?></div>

        <div> Projeto:
            <?php if($finalizado): ?> 
                <span style="color: green;">✅ finalizado</span>
            <?php else: ?>
                <span style="color: red;">⛔ não finalizado</span>
            <?php endif; ?> 

            <?php
                if($finalizado){
                    echo "✅ finalizado";
                }
                else{
                    echo "⛔ não finalizado";
                }
            
            ?>
        </div>
    </div>  -->
</body>
</html>