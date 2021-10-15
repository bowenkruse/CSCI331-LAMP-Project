<?php
require_once 'header.php';
if (!$loggedin) die("</div></body></html>");
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

    $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152) {
        $errors[]='File size must be excately 2 MB';
    }

    if(empty($errors)==true) {
        move_uploaded_file($file_tmp,"vaultfiles/".$file_name);
        echo "Successful upload";
    }else{
        print_r($errors);
    }
}
echo <<<_END
<h2 style="text-align: center;">Upload images here for all members to access</h2>
<div class="row">
    <div class="column" id="upload">
        <form method="post" action="vault.php" enctype="multipart/form-data">
            <h3 class="upload-header">Upload a new file</h3>
            <input type='file' name='image'/>
            <input type='submit' value='Upload selected file'/>
        </form>
        
    </div>

    <div class="column" id="upload">
        <h3 class="upload-header">Community Files (Uploaded images may not appear immediately)</h3>
        <div class="carousel-wrapper">
        <div class="image-area">
            <div class="single-image image-1">
                <img src="vaultfiles/chewbacca-solo-a-star-wars-story-age-1100459-1280x0-1544456080.jpeg" alt="">
            </div>

            <div class="single-image image-2">
                <img src="vaultfiles/Darth-Vader_6bda9114.jpeg" alt="">
            </div>

            <div class="single-image image-3">
                <img src="vaultfiles/Hansoloprofile.jpeg" alt="">
            </div>

            <div class="single-image image-4">
                <img src="vaultfiles/Obi-Wan-Kenobi.jpeg" alt="">
            </div>

            <div class="single-image image-5">
                <img src="vaultfiles/Yoda_Empire_Strikes_Back.png" alt="">
            </div>

            <div class="single-image image-6">
                <img src="vaultfiles/profilelinkedin.jpeg" alt="">
            </div>

        </div>
    </div>
_END;


echo '</div></div>';


require_once 'footer.php';
