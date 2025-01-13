    <?php

    $projetos = [
        [
            "titulo" => "Lista de tarefas",
            "finalizado" => true,
            "ano" => "2024",
            "descricao" => "Lista de tarefas. Escrito em PHP e HTML.",
            "stack" => ["Astro.js", "Web desing", "TailWind", "Typescript"],
            "img" => "/images/project1.jpg"
        ],
        [
            "titulo" => "Controle de leitura de livros",
            "finalizado" => true,
            "ano" => "2024",
            "descricao" => "Lista de livros. Escrito em PHP e HTML.",
            "stack" => ["Blog" ,"Next.js", "JavaScript"],
            "img" => "/images/project2.jpg"
        ],
        [
            "titulo" => "Mais um projeto",
            "finalizado" => false,
            "ano" => "2025",
            "descricao" => "Projeto em andamento. Escrito em PHP e HTML.",
            "stack" => ["Astro.js", "Web design", "Typescript"],
            "img" => "/images/project3.jpg"
        ],
    ];


    ?>

    <div>
        <h1 class="text-2xl font-bold py-6">Projetos Recentes</h1>
    </div>
    <?php foreach ($projetos as $projeto): ?>

        <div>
            <div>
                <div class="bg-slate-800 flex rounded-lg p-3 items-center">
                    <div class="w-1/5 flex items-center justify-center">
                        <img src="<?= $projeto['img'] ?>" alt="" class="h-28">
                    </div>
                    <div class="w-4/5 space-y-3">
                        <div class="flex justify-between">
                            <h3 class="font-semibold text-xl">
                                <?php if ($projeto['finalizado']): ?> ✅ <?php endif; ?>
                                <?= $projeto['titulo'] ?>
                                <?php if ($projeto['finalizado']): ?>
                                    <span class="text-xs text-gray-400">(finalizado em <?= $projeto['ano'] ?>)</span>
                                <?php else: ?>
                                    <span class="text-xs text-gray-400">(em desenvolvimento)</span>
                                <?php endif; ?>

                            </h3>
                            <div class="space-x-1">
                                <?php
                                $colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];
                                foreach ($projeto['stack'] as $posicao => $language):
                                ?>
                                    <span class="bg-<?= $colors[$posicao] ?>-600 rounded-md px-2 py-1 text-black font-semibold text-xs">
                                        <?= $language ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <p class="leading-6"><?=$projeto['descricao'] ?>.</p>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach ?>