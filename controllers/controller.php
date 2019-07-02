<?php
require('model/connect.php');

function post_image($image)
{
    $stmt = get_image($image);
    if ($stmt->rowCount() > 0) {
        $img = $stmt->fetch(PDO::FETCH_ASSOC);
        return $img['picture'];
    } else {
        return "Pas d'image";
    }
}

function post_skill(){
    $stmt = get_skill();
    while ($ligne = $stmt->fetch()) {
        echo "<div class='progress'>";
        $color=$ligne['classe'];
        $colorbar= "class='$color'";
        echo "<div $colorbar' role='progressbar' style='width:". $ligne['value_skill'] ."%' aria-valuenow='". $ligne['value_skill'] ."' aria-valuemin='0' aria-valuemax='100' data-preset='line'>";
        echo "<font color='black'><strong> ". $ligne['name_skill'] . ":" . $ligne['value_skill'] ."%</strong></font>";
        echo "</div>";
        echo "</div>";
    }
}

function post_parcours(){
    $stmt=get_parcourt();
    while ($ligne = $stmt->fetch()) {
        echo "<div class='block-parcours'>";
        echo"<div class='contenu-parcours'>";
        echo"<h2>". $ligne['name_pro_or_stu'] ."<br></h2>";
        $date_begin=$ligne['date_begin'];
        $date_end=$ligne['date_end'];
        echo"<p>". $ligne['description'] ."</p>";
        echo"<span class='date'>$date_begin - $date_end";
        echo"</div>";
        echo"</div>";
    }
}

function post_proje(){
    $stmt=get_projet();
    while($ligne = $stmt->fetch()) {
        $image_get=$ligne['picture'];
        $insert_image_projet="<img src='$image_get'";
        $alt_get=$ligne['title_projet'];
        echo"<div class='col-xs-12 col-sm-12 col-md-3 col-lg-3 col-lg-offset-3 col-lg-pa' class='block'>";
        echo"$insert_image_projet alt='$alt_get' class='img-fluid' alt='$alt_get'>";
        echo"<div class='affichage'>";
        echo"<div class='texte'><a href='/html/wait.html'>". $ligne['title_projet'] ."</a></div>";
        echo"</div>";
        echo"</div>";
    }
}



