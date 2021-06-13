<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php $this->load->view("includes/head"); ?>

</head>
<body>

<!-- Header Start -->
<?php $this->load->view("includes/header"); ?>
<!-- Header End -->


<!-- Call to action Section -->
<section class="call-to-action-section" style="background: none;" >
    <div class="container" style="padding-top: 65px;padding-bottom: 65px;">
        <div class="row justify-content-between">
            <div class="container">
                <div class="sub-wrapper" style="text-align: center;">
                    <img src="<?php echo base_url("assets/theme/images/404.png"); ?>" style="width: 300px;height:180px;"/><br/>
                    <a href="<?php echo base_url() ?>"> Geri Dönmek İçin tıklayınız.</a>
                </div><!-- /sub-wrapper -->
            </div><!-- /container -->
        </div>
    </div>
</section>
<!-- Call to action Section End -->




</section>

<!--Footer-->
<?php $this->load->view("includes/footer"); ?>
<!--/.Footer-->

<!-- mini plugins start-->
<?php $this->load->view("includes/mini_plugins_includes"); ?>
<!-- mini plugins stop-->

<!-- Optional JavaScript -->
<?php $this->load->view("includes/scripts_include"); ?>

</body>
</html>
