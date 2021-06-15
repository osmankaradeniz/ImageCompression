<header id="header">
<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar nav-bg">
    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="mdi mdi-menu"></span>
                <span class="mdi mdi-menu"></span>
                <span class="mdi mdi-menu"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="<?php echo base_url("assets/theme/images/logo.png"); ?>" alt=""> </a>
        </div>


        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(""); ?>">
                        Anasayfa
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Görüntü Sıkıştırma Hizmetleri
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url("imco/jpeg"); ?>">JPEG SIKIŞTIRMA</a>,
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("hizmetler-hakkinda"); ?>">
                        Hizmetler Hakkında
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url("iletisim"); ?>">
                        İletişim
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <!-- Mobile Menu Start -->
    <ul class="wpb-mobile-menu">
        <li>
            <a href="<?php echo base_url(""); ?>">
                Anasayfa
            </a>
        </li>
        <li>
            <a href="#">
                Görüntü Sıkıştırma Hizmetleri
            </a>
            <ul class="dropdown">
                <li>
                    <a href="<?php echo base_url("imco/jpeg"); ?>">JPEG SIKIŞTIRMA</a>
                </li>
            </ul>
        </li>
        <li>
            <a  href="<?php echo base_url("hizmetler-hakkinda"); ?>">
                Hizmetler Hakkında
            </a>
        </li>
        <li>
            <a  href="<?php echo base_url("iletisim"); ?>">
                İletişim
            </a>
        </li>

    </ul>
    <!-- Mobile Menu End -->

</nav>


</header>