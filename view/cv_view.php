<?php ob_start(); ?>
<section class="presentation" class="container">
      <p>
         <div class='text-justify'><img src="<?php echo $image_profil; ?>" id="Photo_Dan" alt="Dan ESPOSITO"></div>
         N'ayant toujours pas changé d'identité je me présente un peu, depuis petit je suis passionné par l'informatique,
         je suis de nature curieuse ainsi je n'hésite pas a poser des questions afin de parvenir à comprendre et réussir.<br>
         J'ai eu des difficultés afin de trouver ma voie pour ma future carrière comme vous pourriez le voir dans mon
         parcourt professionnel, dans mon portfolio et dans mon CV que vous pouvez télécharger <a
            href="CV Dan.pdf"><strong>ICI</strong></a>.<br>
         Mais tout cela m'a apporté beaucoup d'expérience que cela sois en individuel ou en groupe.
      </p>
   </section>
   <div class="general" class="container">
      <div class="left Parcours" class="container">
         <div class="container">
            <div class="header_parcours">
               <p><span>MON PARCOURS</span></p>
               <h1>Études &amp; expériences</h1>
            </div>
         </div>
          <section id="ligne">
          <?php $parcours=post_parcours();?>
         </section>-->

      </div>
      <div class="right Competence" class="container">
         <div class="container" class="text-justify">
            <h2>Compétences :</h2>
         </div>
         <?php $skills= post_skill();?>
      </div>
   </div>
<?php $cv_content = ob_get_clean(); ?>
<?php require('template/cv_template.php'); ?>