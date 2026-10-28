<?php
 $phpReleaseDate = new DateTime("1995-06-08");
 $phpAge = $phpReleaseDate->diff(new DateTime());
?>
<!DOCTYPE html>
<html lang="en">
<?= include 'header.php' ?>
<body>
    <?= include 'menu.php' ?>
    <h1>Learning PHP</h1>
    <p>Welcomr to the <b>Learning PHP</b> home page!</p>
    <div>
        select a link above to start learning about a language with <?= $phpAge ->y ?> of heritage.
    </div>
</body>

<?= include 'footer.php' ?>
</html>