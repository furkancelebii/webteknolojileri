<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>E-mail</th>
    <th>Konu</th>
    <th>Mesaj</th>
  </tr>

  <?php

  session_start();

  if($_SESSION["user"]=="")
  {
    echo "<script>window.location.href='cikis.php'</script>";
  }
  else
  {

    echo "<script>alert('Giriş Başarılı Hoşgeldin G191210033.')</script>";
    echo "<a href='cikis.php'>ÇIKIŞ YAP</a>";
    include("baglanti.php");
    $select="Select * From iletisim";
    $sonuc=$baglan->query($select);
  
    if($sonuc->num_rows>0)
    {
      while($cek=$sonuc->fetch_assoc())
      {
        echo "
        <tr>
          <td>".$cek['adsoyad']."</td>
          <td>".$cek['tel']."</td>
          <td>".$cek['email']."</td>
          <td>".$cek['konu']."</td>
          <td>".$cek['mesaj']."</td>
        </tr>
        ";
      }
    }
    else
    {
      echo "<script>alert('Veritabanında Kayıtlı Hiçbir veri Bulunmamıştır.')</script>";
  
    }

  }

  ?>
</table>

</body>
</html>
