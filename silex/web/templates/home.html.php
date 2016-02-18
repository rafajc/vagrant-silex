<?php include('./templates/include/config.php'); ?>
<?php $view->extend('layout.html.php') ?>

<?php /* ------------Global Config -------------- */ ?>
<?php $slots->set('active', 'home') ?>

<?php /* ------------Current Config -------------- */ ?>

<?php $slots->set('title', "Blogdats") ?>

<?php /* ------------content -------------- */ ?>

<div id="startseite" class="col-xs-offset-3 col-xs-6">
    <h1>Willkommen auf Blogdat</h1>
    <hr class="col-xs-offset-3 col-xs-6"/>
    <p class="col-xs-12">Dies ist ein Projekt im Rahmen der Web-Engeneering Vorlesung<br>
        an der DHBW Stuttgart STG-INF15C.</p>
</div>


