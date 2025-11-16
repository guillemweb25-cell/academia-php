<?php
$pageTitle = "Galeria";
require __DIR__ . "/includes/header.php";

$dir = __DIR__ . "/uploads";
$files = scandir($dir);
?>

<h1>Galeria web</h1>

<div class="galeria">
<?php foreach ($files as $file): ?>

    <?php
    if ($file === "." || $file === "..") {
        continue;
    }

    // només thumbnails (nom que contingui "thumb")
    if (strpos($file, "thumb") === false) {
        continue;
    }

    $thumb = "uploads/$file";
    $full  = "uploads/" . str_replace('.thumb', '', $file);
    ?>

    <img src="<?= $thumb ?>" 
         data-full="<?= $full ?>" 
         alt="" 
         class="thumb">

<?php endforeach; ?>
</div>

<!-- Lightbox amb prev/next -->
<div id="lightbox">
    <button class="lb-btn lb-prev">&#10094;</button>
    <img id="lightbox-img" src="" alt="">
    <button class="lb-btn lb-next">&#10095;</button>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const lightbox    = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    const btnPrev     = document.querySelector(".lb-prev");
    const btnNext     = document.querySelector(".lb-next");
    const images      = Array.from(document.querySelectorAll(".galeria img.thumb"));

    let currentIndex = 0;

    function showImage(index) {
        if (images.length === 0) return;
        if (index < 0) index = images.length - 1;        // torna a la darrera
        if (index >= images.length) index = 0;           // torna a la primera

        currentIndex = index;
        const img = images[currentIndex];
        const fullSrc = img.dataset.full || img.src;
        lightboxImg.src = fullSrc;
        lightbox.classList.add("active");
    }

    images.forEach((img, index) => {
        img.addEventListener("click", () => {
            showImage(index);
        });
    });

    btnPrev.addEventListener("click", (e) => {
        e.stopPropagation();
        showImage(currentIndex - 1);
    });

    btnNext.addEventListener("click", (e) => {
        e.stopPropagation();
        showImage(currentIndex + 1);
    });

    // tancar fent clic al fons negre
    lightbox.addEventListener("click", (e) => {
        if (e.target === lightbox) {
            lightbox.classList.remove("active");
            lightboxImg.src = "";
        }
    });

    // opcional: tancar amb ESC
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            lightbox.classList.remove("active");
            lightboxImg.src = "";
        }
    });
});
</script>

<?php
require __DIR__ . "/includes/footer.php";
