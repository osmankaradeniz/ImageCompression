<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>


    <?php $this->load->view("includes/head"); ?>
    <link rel="stylesheet" href="<?php echo base_url("assets/other/css/dropupload.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/other/css/range.css"); ?>">
    <script>
        MAX_UPLOAD_SIZE = <?=str_replace('M', null, ini_get('upload_max_filesize')) * 1024 * 1024?>
    </script>
</head>
<body>
<!-- Header Start -->
<?php $this->load->view("includes/header"); ?>
<!-- Header End -->


<!-- İMAGE COMPRESS SECTİON -->


<!-- Page Titile Area -->
<section class="page-title-section" style="padding: 10px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-center">
                    <div class="title-middle" style="text-align: center;">
                        <h3 class="page-tagline" style="color:white;">JPEG SIKIŞTIRMA</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Titile Area End -->

<!-- Welcome Section Start -->
<section class="welcome-section section-padding section-dark">
    <div class="container">

        <div class="row">
            <div class="value">Sıkıştırma Oranı : 3</div>
            <input class="oran" type="range" min="3" max="9" step="1" value="3">
        </div>

        <div class="row">

                <div class="dropzone">
                    <div class="dropzone-form">
                        <input type="file" accept="image/jpeg">
                        <p>Sıkıştırılacak Görüntüleri buraya sürükleyin veya seçmek için tıklayın!</p>
                    </div>
                    <div class="dropzone-result-text"></div>
                    <div class="dropzone-result"></div>
                </div>
        </div>

    </div>
</section>
<!-- Welcome Section End -->
<script>

    var elem = document.querySelector('input[type="range"]');

    var rangeValue = function(){
        var newValue = "Sıkıştırma Oranı : "+elem.value;
        var target = document.querySelector('.value');
        target.innerHTML = newValue;
    }

    elem.addEventListener("input", rangeValue);

</script>

<script src="<?php echo base_url("assets/other/js/dropupload-jpeg.js"); ?>"></script>

<!-- İMAGE COMPRESS SECTİON-->



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
