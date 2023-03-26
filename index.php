<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?i=tt3896198&apikey=f5e73320&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>Tempat Wisata</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="Pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container_new" style="background-image:url('download.jpg');>
<div class="container>
<div class="row mt-3 text-center">
  <div class="col">
<h1>Daftar Objek Wisata Di Toraja</h1>
<div class="spinner-border text primary" role="status">
  <span class="sr-only"></span>
</div>
</div>
</div>
    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="1..jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title text-danger">Bori Kalimbuang</h5>
        <p class="card-text">Dihiasi hamparan batu menhir warisan masa megalitikum atau zaman batu besar, sepintas Bori Kalimbuang terlihat seperti situs Stonehenge yang menawan di Inggris. Menurut data yang tercatat dalam informasi wisatawan yang kumparan temukan ketika menyambangi Bori Kalimbuang, terdapat 102 menhir yang terpasang dan berdiri dengan tegak di kawasan rante. Rante adalah kawasan tempat upacara pemakaman Rambu Solo dilakukan bagi penduduk tingkat tertinggi di Toraja.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="2..jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title text-danger">Ke'te Kesu</h5>
        <p class="card-text">Kete Kesu adalah suatu desa wisata di kawasan Tana Toraja yang dikenal karena adat dan kehidupan tradisional masyarakat dapat ditemukan di kawasan ini.[1] Di dalam Kete Kesu terdapat peninggalan purbakala berupa manusia purba yang biasa disebut oky kete kesu yang berasal dari salodong dan mempunyai adik kembar nunang tongkonan. Dilain itu juga terdapat berupa kuburan batu yang diperkirakan berusia 500 tahun lebih.[2] Di dalam kubur batu yang menyerupai sampan atau perahu tersebut, tersimpan sisa-sisa tengkorak dan tulang manusia. Hampir semua kubur batu diletakkan menggantung di tebing atau gua. Selain itu, di beberapa tempat juga terlihat kuburan megah milik bangsawan yang telah meninggal dunia.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="3..jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title text-danger">Kolam Alam Tilanga'</h5>
        <p class="card-text">Di luar mitosnya yang sangat melegenda di kalangan masyarakat, pemandian Tilanga memang memiliki air jernih yang begitu sega. Kesejukan airnya ini tidak akan mampu untuk Anda tolak. Dengan adanya pepohonan yang rimbun di sekitar kolam, serta suara gesekan daun bambu yang tertiup angin bisa membuat Anda betah untuk berlama lama duduk di pinggiran kolam..</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="4..jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title text-danger">Ollon</h5>
        <p class="card-text">Ollon adalah hamparan pegunungan yang dilapisi dengan padang rumput yang hijau. Di sini lekukan bukit berjejer, menghiasi pandangan mata Anda. Pemandangan yang sangat indah membuat Anda ingin berlama-lama hingga bermalam di tempat ini. Untuk menuju ke lokasi Bukit Ollon, jalur tempuhnya bisa melalui 2 akses utama, yaitu lewat Buakayu menggunakan motor dan jalan kaki lewat Mappa. Untuk bisa sampai ke tempat ini, Anda harus menempuh perjalanan naik turun bukit hingga melintasi rumah-rumah warga.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="5..jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title text-danger">Burake</h5>
        <p class="card-text">Disebut Sebagai Patung Yesus Tertinggi di Dunia Patung Yesus Buntu Burake beserta undakannya ini memiliki ketinggian sekitar 45 disebut-sebut sebagai patung Yesus tertinggi di dunia. Hal ini pernah diungkap Menteri Pariwisata dan Ekonomi Kreatif Sandiaga Salahuddin Uno pun sempat mengunjungi tempat ini pada 2021. "Ini adalah salah satu ikon di Tana Toraja yang merupakan patung tertinggi di dunia, dibandingkan dengan patung serupa yang ada di Rio de Janeiro,” kata Sandiaga dalam rilis Kemenparekraf, Kamis (25/11/2021), 
</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="8.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title text-danger">MentiroTiku</h5>
        <p class="card-text">Wilayah dengan nama lengkap Mentirotiku Batutumonga ini, terletak di Desa atau dalam bahasa daerah setempat disebut Lembang, Sesean Matallo, Kecamatan Sesean Suloara’, Kabupaten Toraja Utara.Salah satu wisatawan lokal, Frans Pongsamma’ mengaku hampir setiap akhir pekan mengunjungi tempat ini.

Menurutnya selain menikmati pemandangan panorama alam seperti hamparan sawah warga yang begitu apik, wisatawan juga disuguhi pemandangan rumah adat toraja yang berada di tengah-tengah persawahan. Selain itu yang tidak kalah menarik dari kampung Mentirotiku ini, kita dapat menyaksikan awan yang menutupi kota Rantepao dan sekitarnya, serasa berada diatas langit.</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
