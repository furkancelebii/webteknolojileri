<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5698c55166.js" crossorigin="anonymous"></script>



    <title>SİİRT</title>
</head>
<body style="background-size: 0%;">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">ANASAYFA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="iletisim.php">İletişim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ilgialanlarım.html">İlgi Alanlarım</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Giriş</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mirasımız.html">Mirasımız</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ozgecmis.html">Özgeçmişim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sehrim.html">Şehrim</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section id="iletisim">
        <div class="container">
          <h3 id="iletisim3">İletişim</h3>
          <form action="iletisim.php" method="post">
          <div id="iletisimcss">

            <div id="form">
              <div id="leftform">
                <input type="text" name="isim" placeholder="Ad ve Soyad" required class="form-control">
                <input type="number" name="tel" placeholder="Telefon Numarası" required class="form-control">
              </div>
              <div id="rightform">
                <input type="email" name="mail" placeholder="E-mail Adresi" required class="form-control">
                <input type="text" name="konu" placeholder="Konu" required class="form-control">
              </div>
              <textarea name="mesaj" placeholder="Mesaj Giriniz" required class="form-control" cols="30" rows="10"></textarea>
              <input type="submit" value="Gönder">
              <input type="reset" value="Temizle">


            </div>
          </div>
          
        </div>
        </form>

      </section>
      <div class="bg-dark text-light text-center mb-0" id="footer">
        <p class="align-middle p-0 mb-0 ">
          <span>Copyright by Furkan. &copy; | 2021</span><br>

      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


</body>

</html>
<?php
include("baglanti.php");
if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{
  $adsoyad=$_POST["isim"];
  $telefon=$_POST["tel"];
  $posta=$_POST["mail"];
  $subject=$_POST["konu"];
  $message=$_POST["mesaj"];
  $ekle="INSERT INTO iletisim(adsoyad, tel, email, konu, mesaj) VALUES 
  ('".$adsoyad."','".$telefon."','".$posta."','".$subject."','".$message."')";

  if($baglan->query($ekle)===TRUE)
  {
    echo "<script>alert('Mesajınız Başarı ile Gönderilmiştir.')</script>";

  }
  else{
    echo "<script>alert('Mesajınız Gönderilirke Bir Hata Oluştu.')</script>";
  }
  
  
}

?>
