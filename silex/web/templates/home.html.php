<?php include('./templates/include/config.php'); ?>
<?php $view->extend('layout.html.php') ?>

<?php /* ------------Global Config -------------- */ ?>
<?php $slots->set('active', 'home') ?>

<?php /* ------------Current Config -------------- */ ?>

<?php $slots->set('title', "Blogdats") ?>

<?php /* ------------content -------------- */ ?>


<header class="container col-xs-12">
    <div class="row">
        <h1 class="col-xs-12 col-sm-6">
            <?php $slots->output('title', 'Default title') ?>
        </h1>
        <img
            src="http://studium.dhbw-stuttgart.de/typo3conf/ext/dhbwsstudium_core/Resources/Public/Images/dh-logo-h77.png"
            id="logo" alt="DHBW Stuttgart Logo" class="col-sm-6 hidden-xs"/>
    </div>
    <div class="col-xs-12 col-sm-6">
        <button class="btn btn-lg btn-danger" type="button">Danger</button>
    </div>
</header>
<div class="col-xs-12">
    <div class="col-sm-4">
        <ul class="list-group">
            <li class="list-group-item" style="background-color: brown">Cras justo odio</li>
            <li class="list-group-item" style="background-color: blue">Dapibus ac facilisis in</li>
            <li class="list-group-item" style="background-color: sandybrown">Morbi leo risus</li>
            <li class="list-group-item" style="background-color: lightcoral">Porta ac consectetur ac</li>
            <li class="list-group-item" style="background-color: cornflowerblue">Vestibulum at eros</li>
        </ul>
    </div>
    <div class="col-sm-4">
        <div class="list-group">
            <a class="list-group-item" href="#"> Cras justo odio </a>
            <a class="list-group-item" href="#">Dapibus ac facilisis in</a>
            <a class="list-group-item active" href="#">Morbi leo risus</a>
            <a class="list-group-item" href="#">Porta ac consectetur ac</a>
            <a class="list-group-item" href="#">Vestibulum at eros</a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="list-group">
            <a class="list-group-item" href="#">
                <h4 class="list-group-item-heading">List group item heading</h4>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget
                    risus varius blandit.</p>
            </a>
            <a class="list-group-item" href="#">
                <h4 class="list-group-item-heading">List group item heading</h4>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget
                    risus varius blandit.</p>
            </a>
            <a class="list-group-item" href="#">
                <h4 class="list-group-item-heading">List group item heading</h4>
                <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget
                    risus varius blandit.</p>
            </a>
        </div>
    </div>
</div>


