<?php include('./templates/include/config.php'); ?>
<?php $view->extend('layout.html.php') ?>

<?php /* ------------Global Config -------------- */ ?>
<?php $slots->set('active', '') ?>

<?php /* ------------Current Config -------------- */
/**
 * @var $success int
 * $success == 0 --> no action
 * $success == 1 --> Success
 * $success == 2 --> Fehler bei der Eingabe
 */
?>

<?php /* ------------content -------------- */ ?>
<?php
// Post Success?
if ($success) {
    if ($success == 1) {
        echo "<span class=\"label label-success col-xs-offset-2 col-xs-6\"><br>Post Erfolgreich<br/><br/>
            </span>
        <br/><br/>";
    } else if ($success == 2) {
        echo "<span class=\"label label-danger col-xs-offset-2 col-xs-6\"><br>Bitte Überprüfe deine Eingaben<br/><br/>
            </span>
        <br/><br/>";
    }
}
?>
<div class="row">
    <form class="form-horizontal" action="/newpost" method="post">
        <?php /*<!--<div class="form-group col-sm-12">
            <label class="control-label col-sm-2 " for="email">Email:</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" id="email" name="email" required placeholder="Enter email">
            </div>
        </div>-->*/ ?>
        <div class="form-group col-sm-12">
            <label class="control-label col-sm-2" for="text">Title:</label>
            <div class="col-sm-6 ">
                <input type="text" class="form-control" id="title" name="title" required placeholder="Title...">
            </div>
        </div>
        <div class="form-group col-sm-12">
            <label class="control-label col-sm-2" for="text">Text:</label>
            <div class="col-sm-6 ">
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