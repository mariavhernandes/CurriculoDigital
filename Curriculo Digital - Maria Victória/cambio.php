<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Projetos | Câmbio Fácil</title>
<link rel="icon" type="image/png" href="img/MV.png">

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="projetosweb.css">

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

<h1>Câmbio Fácil - Conversor de Moedas</h1>

<p>
O projeto Câmbio Fácil foi pensado para auxiliar usuários que precisam realizar conversões de valores entre diferentes moedas de forma rápida, prática e confiável. O projeto visa entregar uma alternativa simples e eficiente e que garanta acesso a informações atualizadas de câmbio para fins pessoais, profissionais ou acadêmicos
</p>

<br><br>

<h1>Funcionalidades</h1>

<ul>
<li>Conversão em tempo real por possuir integração com API</li>
<li>Identificação visual de ícones e bandeiras para facilitar a escolha das moedas de origem e destino</li>
<li>Exibição do valor informado e do valor convertido</li>
</ul>

<br><br>

<h1>Tecnologias Utilizadas</h1>

<ul>
<li>HTML5, CSS3</li>
<li>Python</li>
<li>JavaScript</li>
<li>API de Câmbio</li>
</ul>

<br>

<a href="https://github.com/mariavhernandes/CambioFacil" class="botao github" target="_blank" rel="noopener">
    <img src="img/github_logo.png" style="width: 20px; height: 20px" alt="github"> Ver Código
</a>

</div>


<div class="imagens-projeto">

<img src="img/cambio1.png">
<img src="img/cambio2.png">
<img src="img/cambio3.png">

</div>

</div>

</section>

<?php include 'footer.php'; ?>

<script src="script.js"></script>

</body>
</html>