# ImageCompression (İMCO)
İPT dersi kapsamında Görüntü Sıkıştırma konulu proje.

https://imco.osmankaradeniz.com/

<a href="https://gifyu.com/image/1TPq"><img src="https://s6.gifyu.com/images/GIF-15.06.2021-19-25-17.md.gif" alt="GIF-15.06.2021-19-25-17.gif" border="0" /></a>
<br/>
Kullanım ile iglili kısa bir kesit [İzlemek için görüntüye tıklayınız.]

<h2>Local Ortama projeyi kurma adımları</h2>

<p>
  Sisteminiz ;
  1) Wampserver veya XAMPP vs. benzeri bir Apache web sunucusu kurulu olduğu
  2) Mysql Workbench , phpMyAdmin vs. veritabanı yönetim sistemi olduğu
  varsayılmıştır.
  <p>
    
 
<h4>Adım 1: </h4> 
Sunucunuzun kök dizinine (www/htdocs vs.)  projeyi indirip sıkıştırılmış arşivden dışarı çıkartınız.

<h4>Adım 2: </h4> 
Projenin içerisinde bulunan imco_db.sql veritabanı dosyasını veritabanı yönetim sistemine içeri aktarma işlemi yaparak veritabanını oluşturunuz/hazır hale getiriniz.

<h4>Adım 3: </h4> 
Görsel 1'deki şekilde src klasörünün içindeki tüm dosyaları sunucunun kök dizinine aktarınız. <br><br>
<img width=500 height=300 src="https://user-images.githubusercontent.com/59146912/122083762-d0521580-ce09-11eb-9fe7-5cb4c6f64f42.png" />
[Görsel 1]
İsterseniz bu şekilde bırakarak daha sonraki ayarlamalarıda projenin bulunduğu src dizinine görede ayarlayabilirsiniz lakin tavsiyem daha hızlı şekilde kurulum adına adımları birebir takip etmenizdir.

<h4>Adım 3: </h4> 
Proje içerisinde düzenlenecek dosyalar ve yolları ;<br>

  1)  assets/other/js/<b>dropupload-jpeg.js</b> <br>
         <img width=420 height=60 src="https://user-images.githubusercontent.com/59146912/122084849-db597580-ce0a-11eb-87fa-0c3dc00b191d.png" /><br>
  Görselde bulunan ilk satırdaki base_url adresini localhost adresiniz eğer farklı ise değiştirmeniz gerekmektedir , bu durum yayınlama noktasında da geçerli bu adresi kullandığınız sunucu adresine göre düzenlemeniz gerekli eğer localhost ise bir değişikliğe gerek bulunmamaktadır bu şekilde kalabilir.
<br><br>
 2)  application/config/<b>database.php</b><br>
  <img width=500 height=400 src="https://user-images.githubusercontent.com/59146912/122085506-718d9b80-ce0b-11eb-9a26-15aeace47ab3.png" /><br>
Bu dosya içerisinde veritabanı bilgilerini güncellememiz gerekebilir , buradaki hostname(sunucu adresi),username(mysql kullanıcı bilgisi),password(mysql şifre),database(mysql veritabanı ismi) şeklindeki bilgileri sizin local ortamınıza göre ayarlamanız gereklidir.
<br><br>
3)  application/config/<b>config.php</b><br>
     <img width=420 height=60 src="https://user-images.githubusercontent.com/59146912/122086087-0e503900-ce0c-11eb-855c-07de68ed5ef6.png" /><br>
     global sunucu adresi sabitinin (base_url) değeri burada local ortamınızda ne ise ona göre düzenlemeniz gerekmektedir. , genel olarak http://localhost/ olmaktadır. bu şekilde ise düzenlemeye gerek yoktur.<br>
 
 4)  application/controllers/<b>Iletisim.php</b><br>
     <img width=1000 height=230 src="https://user-images.githubusercontent.com/59146912/122086599-861e6380-ce0c-11eb-9b70-c1282c346838.png" /><br>
     Burada bulunan  protocol/smtp-> host,user,pass,port bilgilerini'de düzenlemeniz gerekmektedir buda iletişim formunu göndermek için gerekli 
     smtp konfigrasyonlarıdır.
     
     
<h2>İMCO kurulumu tamamlanmıştır , iyi sıkıştırmalar...</h2> 
 



