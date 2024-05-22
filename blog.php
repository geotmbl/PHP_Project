<?php
require 'koneksi.php';
$blog = query("SELECT * FROM blog");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <h1>Blog</h1>
    </header>
    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="gallery.html">Gallery</a>
        <a href="blog.php">Blog</a>
        <a href="contact.html">Contact</a>
    </nav>
    <div class="containerblog">
    <?php foreach ($blog as $b) : ?>
        <div class="content">
            <h2><?= $b["header"];?></h2>
            <p><?= $b["kategori_teknologi"];?></p>
            <p><a href=<?= $b["link_teknologi"];?>><?= $b["judul_teknologi"];?></a></p>
            <p><?= $b["kategori_seni"];?></p>
            <p><a href=<?= $b["link_seni"];?>><?= $b["judul_seni"];?></a></p>
            <p><?= $b["kategori_olahraga"];?></p>
            <p><a href=<?= $b["link_olahraga"];?>><?= $b["judul_olahraga"];?></a></p>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
