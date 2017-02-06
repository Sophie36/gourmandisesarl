<?php

if(isset($_POST['go'])){
    if(isset($_FILES)){
        $nom=$_FILES['fichier_source']['name'];
        //$nom='repertoireImages/'.$nom;
        move_uploaded_file($_FILES['fichier_source']['tmp_name'],$nom);
        //echo 'Image téléchargée,'.'('.$nom.')'.': <img src="'.$nom.'" alt=""></br>';
        $type=$_FILES['fichier_source']['type'];
        $size=$_FILES['fichier_source']['size'];
        $error=$_FILES['fichier_source']['error'];
    }
}
?>
<form method="POST" action="" enctype="multipart/form-data">
    <input type="file" id="fichier_source" name="fichier_source" value="" size="20"/>
    <input type="submit" name="go" value="Go">
</form>
