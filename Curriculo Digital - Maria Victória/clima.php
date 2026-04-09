<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Projetos | Calculadora</title>
<link rel="icon" type="image/png" href="img/MV.png">

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="projetosmobile.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<header>
<?php include 'navbar.php'; ?>
</header>

<section class="pagina-projeto">

<div class="projeto-container">

<div class="texto-projeto">

<a href="projetos.php" class="voltar">←</a>

<h1>Climas do Brasil - Aplicativo Climático</h1>

<p>
Aplicativo de consulta de climas de todas as cidades do Brasil, através de uma API. Ele também conta com um sistema de internacionalização, que muda o idioma do aplicativo rapidamente
</p>

<br><br>

<h1>Funcionalidades</h1>

<ul>
<li>Consulta do clima (celsius) de cidades do Brasil</li>
<li>Internacionalização de idiomas</li>
<li>Layout simples e intuitivo</li>
</ul>

<br><br>

<h1>Tecnologias Utilizadas</h1>

<ul>
<li>Android Studio</li>
<li>Java</li>
<li>XML</li>
<li>API de clima</li>
</ul>

<br>

<a href="https://github.com/mariavhernandes/ClimasBrasil" class="botao github" target="_blank" rel="noopener">
    <img src="img/github_logo.png" style="width: 20px; height: 20px" alt="github"> Ver Código
</a>

</div>


<div class="imagens-projeto">

<img src="img/clima1.jpeg">
<img src="img/clima2.jpeg">
<img src="img/clima3.jpeg">

</div>

</div>

</section>

<?php include 'footer.php'; ?>

<script src="script.js"></script>

</body>
</html>