<?php
$pageTitle = "Galeria";
require __DIR__ . "/includes/header.php";
$dir = __DIR__ . "/uploads";     // carpeta on tens les imatges
$files = scandir($dir);

?>

<h1>Galeria web</h1>
<div class="galeria">
    <?php
    foreach ($files as $file) {
        # code...
        // Ignorar "." i ".."
        if ($file === "." || $file === "..") {
            continue;
        }
        $cadena=strpos($file, "thumb");
        if($cadena){
            ?>
            <img src="uploads/<?=$file?>" alt="" srcset="">
            <?php
        }
    }
    ?>
</div>
<?php
require __DIR__ . "/includes/footer.php";