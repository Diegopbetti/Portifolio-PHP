<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Meu Portifolio</title>
</head>
<body class="bg-slate-900 text-gray-200">
    <?php include('./components/header.php'); ?>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
        <!-- Hero -->
        <?php include('./components/hero.php'); ?>

        <section class="space-y-3 py-6" id="projetos ">
            <!-- Projeto -->
            <?php include('./components/projetos.php') ?>
        </section>
    </main>

     <!-- Rodapé -->
      <footer class="mx-auto max-w-screen-lg min-h-20">
         <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">
            ₢ Copyright <?=date('Y') ?>. Construído por mim mesmo.
         </div>

          <div></div>
      </footer>
</body>
</html>