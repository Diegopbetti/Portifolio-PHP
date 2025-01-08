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
        $ano = 2024;
        $projeto = "Meu portifólio";
        $finalizado = true;
        $dataDoProjeto = "2024-10-11";
        $descricao = "Meu primeiro portifolio. Escrito em PHP e HTML.";

        $projetos = [
            [
                "titulo" => "Meu Portifólio",
                "finalizado" => false,
                "ano" => "2020",
                "descricao" => "Meu primeiro portifolio. Escrito em PHP e HTML."
            ],
            [
                "titulo" => "Lista de tarefas",
                "finalizado" => true,
                "ano" => "2024",
                "descricao" => "Lista de tarefas. Escrito em PHP e HTML."
            ],
            [
                "titulo" => "Controle de leitura de livros",
                "finalizado" => true,
                "ano" => "2024",
                "descricao" => "Lista de livros. Escrito em PHP e HTML."
            ],
            [
                "titulo" => "Mais um projeto",
                "finalizado" => false,
                "ano" => "2025",
                "descricao" => "Projeto em andamento. Escrito em PHP e HTML."
            ],
            // "Meu Portifolio",
            // "Lista de Tarefas",
            // "Controle de leitura de livros",          
        ];

        function verificaSeEstaFinalizado($p){
            if(! $p['finalizado']){
                return '<span style="color: red">⛔ não finalizado</span>';
            }
            else {
                 return '<span style="color: green">✅ finalizado</span>';
            }

        }

        function filtro($itens, $funcao){

            $filtrados = [];

            foreach($itens as $item){
                if($funcao($item)){
                    $filtrados [] = $item;
                }
            }
            return $filtrados;
        };

        $filtroProjetos = function(){};

        $projetosFiltrados = filtro($projetos, function($projeto){
            return $projeto['ano'] < 2024;
        });

    ?>

    <h1><?=$titulo ?></h1>
    <p><?=$subtitulo ?></p>
    <p><?php echo $ano ?></p>

    <hr/>

    <ul>
        <?php foreach($projetosFiltrados as $projeto): ?>
            <div
                <?php if( ! ((2024 - $ano) > 2) ): ?>
                    style="background-color: burlywood;"
                <?php endif; ?>
            >
            <h2><?= $projeto['titulo'] ?></h2>
            <div><?= $projeto['descricao'] ?></div>
        
        <div>
            <div><?= $projeto['ano'] ?></div>

            <div> Projeto:
                <?=verificaSeEstaFinalizado($projeto); ?>

                <!-- <?php if(! $projeto['finalizado']): ?> 
                    <span style="color: red;">⛔ não finalizado</span>
                <?php else: ?>
                    <span style="color: green;">✅ finalizado</span>
                <?php endif; ?>  -->

                <!-- <?php
                    if($projeto['finalizado']){
                        echo "✅ finalizado";
                    }
                    else{
                        echo "⛔ não finalizado";
                    }
                
                ?> -->
            </div>
        </div>
    </div>
        <?php endforeach; ?>
        
    </ul>

</body>
</html>