<?php include('include/config.php'); ?>
<?php $view->extend('layout.html.php') ?>

<?php /* ------------Global Config -------------- */ ?>
<?php $slots->set('active', 'blog') ?>

<?php /* ------------Current Config -------------- */ ?>

<?php /* ------------content -------------- */ ?>

<div class="row">
    <div class="col-md-4 hidden-sm hidden-xs">
        <br/>
        <?php
        // Post Success?
        if ($success) {
            if ($success == 1) {
                echo "<span class=\"label label-success col-xs-offset-2 col-xs-9\"><br>Post Erfolgreich
                    <br/><br/></span><br/><br/><br/>";
            } else if ($success == 2) {
                echo "<span class=\"label label-danger col-xs-offset-2 col-xs-9\"><br>Bitte Überprüfe deine Eingaben
                    <br/><br/></span><br/><br/><br/>";
            }
        } else {
            echo "<span class=\"label label-primary col-xs-offset-2 col-xs-9\"><br>Quick Post
                    <br/><br/></span><br/><br/><br/>";
        }
        ?>
        <?php $action = ($all?"/blog/":"/blogone/").$count; ?>

        <form class="form-horizontal" action="<?=$action?>" method="post">
            <?php /*<!--<div class="form-group col-sm-12">
            <label class="control-label col-sm-2 " for="email">Email:</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" id="email" name="email" required placeholder="Enter email">
            </div>
        </div>-->*/ ?>
            <div class="form-group col-sm-12">
                <label class="control-label col-sm-2" for="text">Title:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" required placeholder="Title...">
                </div>
            </div>
            <div class="form-group col-sm-12">
                <label class="control-label col-sm-2" for="text">Text:</label>
                <div class="col-sm-10 ">
                <textarea rows="10" class="form-control" id="text" name="text" required
                          placeholder="Text..."></textarea>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-offset-2 col-sm-8 col-md-offset-0 col-md-6" style="word-break:break-all;word-wrap:break-word">
        <div class="">
            <a href="/blog/10">Top 10</a> |
            <a href="/blog/50">Top 50</a> |
            <a href="/blog/100">Top 100</a> |
            <a href="/blog/0">All</a>
        </div>
        <div class="list-group">
            <?php foreach ($posts as $post) { ?>
                <a class="list-group-item" href="/blogone/<?= $post['id'] ?>">
                    <div class="post-preview">
                        <?php
                        $date = new DateTime($post['created_at']);
                        ?>

                        <div class="right"><p class="glyphicon glyphicon-time"><?= ' ' . $date->format('d-m-Y'); ?></p>
                            <span class="left label label-default label-pill pull-xs-right"><?= $post['id'] ?></span>
                        </div>
                        <h2 class="post-title">
                            <?= $post['title'] ?>
                        </h2>
                        <br>
                        <h4 class="list-group-item-text word-break:break-all;word-wrap:break-word">
                            <?php if (!$all) { ?>
                                <?= $post['text'] ?>
                            <?php } else { ?>
                                <?= substr($post['text'], 0, 80) . (strlen($post['text']) > 80 ? '<br> ...' : '') ?>
                            <?php } ?>
                        </h4>
                        <br>
                        <p class="post-meta right">
                            <?= (isset($post['author']) ? 'Geschrieben von ' . $post['author'] : ''); ?>
                        </p>
                    </div>
                </a>
            <?php }
            if ($error) { ?>
                <span class="label label-danger col-xs-12"><br>Der Blogeintrag wurde nicht gefunden<br/><br/>
            </span>
                <br/><br/>
            <?php } ?>
        </div>
        <?php if (!$all) { ?>
            <p class="left"><a href="/blog/10">zurück</a></p>
        <?php } ?>
    </div>
</div>