<?php include('./templates/include/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta name="author" content="<?= $slots->get('author', '') ?>"/>
    <meta name="publisher" content="<?= $slots->get('publisher', '') ?>"/>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content="<?= $slots->get('keywords', '') ?>"/>
    <meta name="description" content="<?= $slots->get('description', '') ?>"/>

    <title><?= $slots->get('title', '') ?></title>

    <?php /** Bootstrap */ ?>
    <link href="./templates/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="./templates/css/style.css" rel="stylesheet"/>
    <?php /* jQuery (necessary for Bootstrap's JavaScript plugins) */ ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <?php /* Include all compiled plugins (below), or include individual files as needed */ ?>
    <script src="./templates/js/bootstrap.min.js"></script>

</head>
<body>

<!-- DEBUG -->
<?php /* echo var_dump($slots->output('active'))*/ ?>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home"> <?= $slots->get('project_name', 'Default Name') ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?= $slots->get('active') == 'home' ? 'active' : ''; ?>">
                    <a href="home" class="glyphicon glyphicon-home"> Home</a>
                </li>
                <li class="<?= $slots->get('active') == 'blog' ? 'active' : ''; ?>">
                    <a href="blog" class="glyphicon glyphicon-th-list"> Blog</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle glyphicon glyphicon-collapse-down" data-toggle="dropdown"
                       role="button" aria-haspopup="true"
                       aria-expanded="false">
                        More <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="<?= $slots->get('active') == 'contact' ? 'active' : ''; ?>">
                            <a href="contact">Contact</a>
                        </li>
                        <li class="<?= $slots->get('active') == 'about' ? 'active' : ''; ?>">
                            <a href="about">About</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="newpost" class="glyphicon glyphicon-pencil"> newpost</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <?php
            //   if($session->get('email');
            ?>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input placeholder="Email" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <input placeholder="Password" class="form-control" type="password">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<?php /* ------------content -------------- */ ?>
<div id="content" class="col-sm-12">
    <?php $slots->output('_content') ?>
</div>
<?php /* ------------Footer -------------- */ ?>
<footer class="col-sm-12">
    Hier steht ein Wunderschöner Footer
</footer>
</body>
</html>