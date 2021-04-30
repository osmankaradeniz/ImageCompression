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


<!-- İMAGE COMPRESS SECTİON -->




GİF İŞLEMLERİ





<!-- İMAGE COMPRESS SECTİON-->



<!-- Services Section -->
<?php $this->load->view("anasayfa_blocks/servisler"); ?>
<!-- Services Section End -->

<!-- work-counter area -->
<?php $this->load->view("anasayfa_blocks/istatistikler"); ?>
<!-- work-counter area end -->

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
