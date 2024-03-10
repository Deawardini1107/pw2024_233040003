<?php 
$binatang = ["😺", "🐰", "🐵", "🐶", "🐻", "🐊"];
$makanan = ["🍔", "🍟", "🍕", "🍣", "🍦", "🍩"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>
<body>
    <h3>Daftar Binatang</h3>
    <ol>
        <?php foreach ($binatang as $b) : ?>
            <li><?= $b; ?></li>
        <?php endforeach; ?>
    </ol>


    <h3>Daftar $makanan</h3>
    <ol>
        <?php foreach ($makanan as $b) : ?>
            <li><?= $b; ?></li>
        <?php endforeach; ?>
    </ol>
</body>

</html>