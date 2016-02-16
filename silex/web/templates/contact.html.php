<?php include('./templates/include/config.php'); ?>
<?php $view->extend('layout.html.php') ?>

<?php /* ------------Global Config -------------- */ ?>
<?php $slots->set('active', 'contact') ?>

<?php /* ------------Current Config -------------- */ ?>

<?php /* ------------content -------------- */ ?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if ($success == 1) {
                echo "
            <div class=\"alert alert-success\"><strong><span class=\"glyphicon glyphicon-send\"></span> Success! Message
                    sent.</strong></div>";
            } else if ($success == 2) {
                echo "
            <div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-alert\"></span><strong> Error! Please check
                    the inputs.</strong></div>";
            }
            ?>
        </div>
        <form action="/contact" method="post">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="InputName">Your Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name"
                               required>
                        <span class="input-group-addon"><i
                                class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Your Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmail" name="InputEmail"
                               placeholder="Enter Email" required>
                        <span class="input-group-addon"><i
                                class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                </div>
                <div class="form-group">
                    <label for="InputMessage">Message</label>
                    <div class="input-group"
                    >
                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5"
                                  required></textarea>
                        <span class="input-group-addon"><i
                                class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                </div>
                <div class="form-group">
                    <label for="InputReal">What is 4 plus 3?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputReal" id="InputReal" required>
                        <span class="input-group-addon"><i
                                class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
        <hr class="featurette-divider hidden-lg">
        <div class="col-lg-5 col-md-push-1">
            <h3>Office Location</h3>
            <address>
                <p class="lead"><a
                        href="https://www.google.com/maps/preview?ie=UTF-8&q=The+Pentagon&fb=1&gl=us&hq=1400+Defense+Pentagon+Washington,+DC+20301-1400&cid=12647181945379443503&ei=qmYfU4H8LoL2oATa0IHIBg&ved=0CKwBEPwSMAo&safe=on">The
                        Pentagon<br>
                        Washington, DC 20301</a><br>
                    Phone: XXX-XXX-XXXX<br>
                    Fax: XXX-XXX-YYYY</p>
            </address>
        </div>
    </div>
</div>
