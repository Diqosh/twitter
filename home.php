<?php
include 'header.php';
?>
<div class="sim">
    <?php echo $_SERVER['DOCUMENT_ROOT']?>

    <section class="leftbar">
        <?php
        include 'left-sidebar.php';
        ?>
    </section>
    <section class="main">
        <?php
        include 'pages/home_page.php';
        ?>
    </section>
    <section class="rightbar">
        <?php
        include 'right-sidebar.php';
        ?>
    </section>
</div>
