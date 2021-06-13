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


<!-- Page Titile Area -->
<section class="page-title-section" style="padding: 10px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-center">
                    <div class="title-middle" style="text-align: center;">
                        <h3 class="page-tagline" style="color:white;">Hizmetler Hakkında</h3>
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
            <div class="col-md-12 col-lg-12 col-xs-12">
                <div class="Material-tab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#jpegmetin" role="tab"><i class="mdi mdi-image-filter-black-white"></i></br>JPG SIKIŞTIRMA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#goruntu" role="tab"><i class="mdi mdi-image-album"></i></br>GÖRÜNTÜ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kompress" role="tab"><i class="mdi mdi-image-area-close"></i></br>GÖRÜNTÜ SIKIŞTIRMA</a>
                        </li>

                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!-- GÖRÜNTÜ  -->
                        <div class="tab-pane fade show active" id="goruntu" role="tabpanel">
                            <p><p><H2><strong>Görüntü Nedir? </strong></H2>
                            </p><p>Görüntü, cisimlerden ışık yardımıyla elde edilen ve onlar hakkında bilgi taşıyan bir araçtır. Görüntü sayesinde; cisimler orada olmasa bile onların şekli, rengi, büyüklüğü hakkında bilgi edinebiliriz.dijital görüntüleri kameralar yardımıyla elde ederiz ve dijital hafıza bitlerinde saklarız. Bu hafıza bitleri ya 1 ya da 0 değeri alabilir dolayısıyla matematiksel olarak işlenebilir. Herhangi bir bilginin dijital ortamda saklanabilmesi, yorumlanabilmesi, işlenebilmesi için mutlaka matematiksel bir anlamı olmalıdır. Bilgisayarlar, matematiksel olarak ifade edilemeyen şeyleri anlayamaz veya saklayamazlar. Renkler, görüntüler, sesler, yazılar kolayca matematiksel olarak ifade edilebilirdir.

</p><p>Dijital görüntüyü oluşturan şey piksellerdir ve her piksel 0 ile 255 arasında bir değer alır. Yani 256 farklı değer alabilir. Bu sayı hafızada ikili (binary) sayı sisteminde tutulur. Taban aritmetiği ile bizim kullandığımız onluk sayı sisteminden herhangi bir sayıyı ikili sayı sistemindeki karşılığına dönüştürebiliriz.</p>


   <img width="600" height="220" src="<?php echo base_url("assets/other/images/goruntu.png"); ?>" alt="" >





                        </div>

                        <!-- KOMPRESS  -->
                        <div class="tab-pane fade" id="kompress" role="tabpanel">
                            <article id="fullArticle" style="height: auto !important;">
                                <h3 class="title">Görüntü Sıkıştırma Nedir?</h3>
                                <p>

                                </p><p>  Görüntü sıkıştırma, görüntü kalitesini korurken dijital görüntü dosyası boyutlarını küçültmeyi amaçlar.  Bu, veri sıkıştırma yöntemlerini te dosyalarına uygulayarak elde edilir.  Bir görüntünün dosya boyutu, görüntünün kalitesinde bir kayıpla veya kayıp olmadan küçültülebilir;  bunlara sırasıyla kayıplı sıkıştırma ve kayıpsız sıkıştırma denir.  Görüntü sıkıştırma, bir bilgisayar kullanıcısı gerekli depolama alanını en aza indirmek veya bir görüntünün veri aktarım hızlarını en üst düzeye çıkarmak istediğinde yararlıdır. </p><p>  İlk görüntü sıkıştırma türü kayıplı sıkıştırmadır.  Bir görüntü dosyasının boyutunu önemli ölçüde azaltmak isteyen bir kullanıcı, görüntü kalitesinde bir miktar azalma dosya boyutunda önemli bir düşüşe değerse, kayıplı bir sıkıştırma yöntemini tercih edebilir.  Dijital kameralardan gelen resimler ve videolar, genellikle kayıplı yöntemler kullanılarak sıkıştırılan dijital dosyalara örnektir.  Bir kullanıcı orijinal görüntüyü geri yükleyemez, çünkü görüntüde sıkıştırma eserleri veya geri dönüşü olmayan değişiklikler olacaktır. </p><p>  Kayıplı görüntü sıkıştırmanın basit bir yöntemi, renk alanını daha küçük bir renk kümesine düşürmektir.  Renk uzayları yalnızca sekiz farklı renkten milyonlarca renge kadar değişebilir.  Renk alanı ne kadar büyük olursa, belirli bir rengi belirtmek için o kadar fazla veri gerekir.  Bir görüntüyü gri tonlamaya veya gri tonlarına dönüştürmek de benzer bir kayıplı görüntü sıkıştırma tekniğidir. </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"></div><p>  Kayıpsız görüntü sıkıştırma, görüntüyle ilgili bilgileri feda etmeden görüntünün dosya boyutunu küçültmenin herhangi bir yöntemidir - orijinaline özdeş bir görüntü her zaman elde edilebilir.  Kalitedeki düşüşler kabul edilemez sayılırsa, kayıpsız veri sıkıştırma formları gereklidir.  Tıbbi görüntüleme, teknik çizimler ve astronomik gözlemler tipik olarak kayıpsız sıkıştırma teknikleri kullanır. </p><p>  Kayıpsız bir görüntü sıkıştırma yöntemine çalışma boyu ekolama denir.  Genellikle, basit görüntülerde birçok tekrarlayan piksel ya da küçük renkli noktalar bulunur.  Örneğin, siyah arkaplanlı bir görüntüde, piksellerin üst sırasının tamamı siyah olabilir.  Çalışma uzunluğu kodlama yöntemi bu siyah piksel dizesini iki değerde saklar: biri renk için diğeri de pikseldeki piksel sayısı için.  Bu yöntem aynı miktarda bilgiyi daha az veri ile saklayabilir. </p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"></div><p>  Birleşik Fotoğraf Uzmanları Grubu (JPEG), değişken sıkıştırma düzeyinde bir görüntü sıkıştırma yöntemine örnektir.  JPEG sıkıştırması tipik olarak bir miktar sıkıştırma artefaktı geride bırakır ancak dosya kalitesinde yalnızca küçük kayıplarla dosya boyutlarını 10 kattan daha fazla azaltabilir.  Bazı JPEG'ler, kullanıcının görüntünün yüklenirken bir önizlemesini görmesini sağlayan, aşamalı olarak daha ayrıntılı bir görüntüyü yükler.  JPEG görüntü formatının bu yönleri, World Wide Web’de çok popüler olmasını sağlamıştır. </p>

                                <p></p>
                            </article>

                        </div>

                        <!-- JPEG -->
                        <div class="tab-pane fade" id="jpegmetin" role="tabpanel" >
                            <h1>JPG (Joint Photographic Experts Group) </h1>

                            <p>JPG, Birleşik Fotoğraf Uzmanları Grubu tarafından profesyonel fotoğrafçılar için ortak bir resim biçimi olması için geliştirildi. Sıkıştırma programlarının dosyalardaki fazlaıkları bulması gibi JPG formatında da resim bölümleri, piksellere ya da karelere küçültülüyor.  JPG sıkıştırma yönteminin kötü bir yan etkisi bulunuyor. JPG olarak yapılan sıkıştırma işlemi kalıcı oluyor ve geri alınamıyor. Zaten JPG'in geliştirilmesinde fotoğraf düzenleme değil, büyük resimlerin küçük alanlarda saklanabilmesi amaçlanmıştı.   </p>
                            <p>
                                JPG , sıkıştırma kapasitesi sayesinde internetin gayri resmi imaj formatı oldu. Tipik bir JPG yapılan ayarlara göre 2'ye 1 bir hatta 100'e 1  oranında sıkıştırılabilir. Henüz ortalıkta ADSL ve fiber optik kablolar yokken çevirmeli ağ (Dial-up) zamanında JPG tek kullanışlı resim türüydü.
                            </p>
                            <p>Fazlalıklardan kurtularak resimlerin daha ufak boyutlarda saklanmasını sağlayan JPG, resimlerin kalitesinin düşmesine neden olduğundan doğal olarak herkese uygun değildir. Özellikle  keskin hatalar sahip resimler ve tipografide (yazı tipi oluşturma tekniği ve sanatı) pek iyi sonuç vermez. Mümkün olan en yüksek kalitede de sıkıştırılsa JPG, resmin görünüşünü değiştirir   </p>

                            <p>
                                Birleşik Fotoğraf Uzmanları Grubu kalitenin azalması problemini çözmek için kayıpsız JPG teknoloji geliştirdi. Ancak yavaş bağlantı hızları ve yüksek kalite kayıpsız resimlere olan ilginin fazla olmaması nedeniyle JPG-LS standardı tutmadı.
                            </p>
                            <p>
                                JPG 24-bit RGB ve CMYK ayrıca 8-bit Grayscale (siyah beyaz) renk derinliğini destekler. Ancak siyah beyaz resimler, renkliler kadar küçülmez.
                            </p>

                            <p>Daha teknik ve detaylı Bilgi için ;<br/>
                                <STRONG>"JPEG Sıkıştırma Algoritmasının Dünü Bugünü ve Geleceği"</STRONG> isimli makaleyi incelemenizi tavsiye ediyoruz.
                                <a href="https://dergipark.org.tr/tr/download/article-file/539391">MAKALEYE GİT -></a>
                            <br/><br/>
                            Diğer ilgili konu ve kaynaklar ;<br/>
                                <a href="https://en.wikipedia.org/wiki/JPEG">Jpeg Wiki</a><br/>
                                <a href="https://en.wikipedia.org/wiki/Discrete_cosine_transform">DCT Wiki</a>
                            </p>


                        </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Welcome Section End -->




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
