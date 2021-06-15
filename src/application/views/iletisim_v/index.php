<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php $this->load->view("includes/head"); ?>
    <script src="<?php echo base_url("assets/front/sweet/"); ?>sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/front/sweet/"); ?>sweetalert.css">


</head>
<body>
<!-- Header Start -->
<?php $this->load->view("includes/header"); ?>
<!-- Header End -->



<!-- Page Titile Area -->
<section class="page-title-section" style="padding: 10px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-center">
                    <div class="title-middle" style="text-align: center;">
                        <h3 class="page-tagline" style="color:white;">İLETİŞİM</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Titile Area End -->

<section class="welcome-section section-dark">
    <div class="container">
        <div class="row">
            <div>
                <style type="text/css">
                    input[type=text], select, textarea {
                        width: 100%; /* Full width */
                        padding: 12px; /* Some padding */
                        border: 1px solid #ccc; /* Gray border */
                        border-radius: 4px; /* Rounded borders */
                        box-sizing: border-box; /* Make sure that padding and width stays in place */
                        margin-top: 6px; /* Add a top margin */
                        margin-bottom: 16px; /* Bottom margin */
                        resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
                    }

                    /* Style the submit button with a specific background color etc */
                    input[type=submit] {
                        background-color: #4CAF50;
                        color: white;
                        padding: 12px 20px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                    }

                    /* When moving the mouse over the submit button, add a darker green color */
                    input[type=submit]:hover {
                        background-color: #45a049;
                    }


                    label{

                        color:#000000;
                    }
                </style>

                <?php if ($this->session->flashdata('uyari'))
                {
                    echo $this->session->flashdata('uyari');
                }
                ?>

                <p>
                <div class="container">
                    <form action="<?php echo base_url("Iletisim/iletisim_form"); ?>" method="post">

                        <label for="fname">Ad Soyad</label>
                        <input type="text" id="adsoyad" name="adsoyad" placeholder="Ad ve Soyad ">

                        <label for="lname">Eposta</label>
                        <input type="text" id="eposta" name="eposta" placeholder="E-posta adresiniz">

                        <label for="lname">Telefon</label>
                        <input type="text" id="telefon" name="telefon" placeholder="size ulaşabileceğimiz bir telefon numarası">

                        <label for="subject">Görüş , İstek veya Önerileriniz :</label>
                        <textarea id="mesaj" name="mesaj" placeholder="Mesaj" style="height:200px"></textarea>

                        <input type="submit" value="GÖNDER">

                    </form>
                </div>
                </p>

            </div><!-- /col -->
        </div><!-- /row -->
        </div>


    </div>
</section>

<!-- CONTACT SECTİON-->


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
