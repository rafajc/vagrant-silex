<?php include('./templates/include/config.php'); ?>
<?php $view->extend('layout.html.php') ?>

<?php /* ------------Global Config -------------- */ ?>
<?php $slots->set('active', 'home') ?>

<?php /* ------------Current Config -------------- */ ?>


<?php /* ------------content -------------- */ ?>
<div class="login">
    <div class="row">
        <div class="col-lg-6 col-offset-3 loginpanel">
            <h1 class="margin-base-vertical">Have you ever seen the rain?</h1>
            <p>
                Someone told me long ago there's a calm before the storm. I know, It's been comin for some time.
            </p>
            <p>
                When it's over, so they say, it'll rain a sunny day. I know,    Shinin down like water.
            </p>
            <p>
                I want to know, have you ever seen the rain?
            </p>
            <form class="login-margin-base-vertical">
                <p class="input-group">
                    <span class="input-group-addon"><span class="icon-envelope"></span></span>
                    <input type="text" class="form-control input-large" name="email" placeholder="jonsnow@knowsnothi.ng" />
                </p>
                <p class="help-block text-center"><small>We won't send you spam. Unsubscribe at any time.</small></p>
                <p class="text-center">
                    <button type="submit" class="btn btn-success btn-large">Keep me posted</button>
                </p>
            </form>
            <div class="margin-base-vertical">
                <small class="text-muted"><a href="http://www.flickr.com/photos/erwlas/6133364748/">Background picture by erwlas @flickr</a>. Used under <a href="http://creativecommons.org/licenses/by/2.0/deed.en">Creative Commons - Attribution</a>.</small>
            </div>
        </div><!-- //main content -->
    </div><!-- //row -->
</div> <!-- //container -->
