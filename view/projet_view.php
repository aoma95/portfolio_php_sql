<?php ob_start(); ?>
<h1>Projets</h1>
<div class="container general" id="projet">
    <div class=" row justify-content-between block-projets">
    <?php post_proje()?>
</div>
</div>
<?php $projet_content = ob_get_clean(); ?>
<?php require('template/projet_template.php'); ?>