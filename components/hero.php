<?php
$itens = [
    ['href' => 'https://x.com/r2luna', 'src' => '/images/twitter.png', 'alt' => 'Twitter Logo'],
    ['href' => 'https://x.com/r2luna', 'src' => '/images/facebook.png', 'alt' => 'Facebook Logo'],
    ['href' => 'https://x.com/r2luna', 'src' => '/images/linkedin.png', 'alt' => 'Linkedin Logo'],
    ['href' => 'https://x.com/r2luna', 'src' => '/images/youtube.png', 'alt' => 'Youtube Logo'],
]

?>

<section class="flex gap-x-3">
    <!-- Titulo e Descrição -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Oi, meu nome é Goldie,</h1>
        <p class="text-xl leading-6 mt-6">
            Falando um pouco sobre mim, sou um desenvolvedor web que adora criar coisas novas e aprender novas tecnologias.
            Especializado em PHP e HTML, mas também tenho conhecimento em outras linguagens como C++ e React.
        </p>
        <ul class="flex gap-x-3 mt-3">
            <?php foreach ($itens as $item): ?>
                <li>
                    <a href="<?= $item['href'] ?>" target="_blank">
                        <img class="h-8 hover:animate-bounce" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>">
                    </a>

                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- imagem -->
    <div class="w-1/3 flex items-center justify-center">
        <div><img src="/images/avatar.svg" alt="" class="h-60 -mt-6 hover:animate-pulse"></div>
    </div>
</section>