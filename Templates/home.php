<!DOCTYPE html>
<html>
    <?php
    include_once('defaults/head.php');
    ?>
    <body>
        <div class="container">
            <?php
            include_once ('defaults/header.php');
            include_once ('defaults/menu.php');
            include_once ('defaults/pictures.php');
            ?>
            <?php if(!empty($message)): ?>
                <div class="alert alert-success" role="alert">
                    <?=$message?>
                </div>
            <?php endif;?>
            <h4>Epics Foodshop</h4>
            Bij Epics Foodshop kan je eten en drinken bestellen en ook een review van geven.
            Deze website is gemaakt door Karan Kandhai en Mitchell Verseput.
            <hr>
            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
