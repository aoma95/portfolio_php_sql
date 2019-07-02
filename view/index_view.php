<?php ob_start(); ?>
<div class="container-fluid">
    <h1>Bienvenue dans mon Portfolio</h1>
</div>
<div class="container-fluid" id="Pacceuil">
    <p>Je m'appelle Dan ESPOSITO, j'ai 23 ans, actuellement étudiant à Ynov sur le campus Aix-En-Provence dans le domaine de l'informatique, en parcourant mon portfolio.<br>
        Vous trouverez ici mes compétences acquises pendant ma formation et mes différents projet.</p>
    <div class="divOuro"><img src="picture/ouroboros.gif" id="Ouro" alt="ImageOuroboros" class="container-fluid"></div>
</div>
<?php $index_content = ob_get_clean(); ?>
<?php require('template/index_template.php'); ?>
