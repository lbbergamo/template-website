<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="mit" content="2019-09-04T04:10:36-03:00+28440">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?= $head; ?>
    <link rel="icon" type="image/png" href="<?= theme("/assets/images/favicon.png"); ?>"/>
    <link rel="stylesheet" href="<?= theme("/assets/style.css"); ?>"/>
</head>
<body>

<!--HEADER-->
<header class="main_header gradient gradient-green">
Aqui vai o menu
</header>

<!--CONTENT-->
<main class="main_content">
    <?= $v->section("content"); ?>
    aqui vai o conteudo
</main>


<!--FOOTER-->
<footer class="main_footer">
    <h2>Aqui vai o footer</h2>
</footer>

<script src="<?= theme("/assets/scripts.js"); ?>"></script>
<?= $v->section("scripts"); ?>

</body>
</html>