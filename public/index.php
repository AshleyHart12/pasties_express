<?php include('../private/initialize.php'); ?>

<?php
    $sticker_set = find_all_stickers();
?>

<?php $page_title = 'Pasties Express'; ?>

<?php include('../private/shared/page_header.php'); ?>

<div class='content'>
    <h1>Welcome to Pasties Express</h1>
</div>

<?php

    while ($sticker = mysqli_fetch_assoc($sticker_set)) { ?>
        <h2><?php echo($sticker['brand']); ?></h2>
    <?php } ?>
 
<?php mysqli_free_result($sticker_set); ?>

<?php include('../private/shared/page_footer.php'); ?>