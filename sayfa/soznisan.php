<?php
	
include "../bootsrap.php";
?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico"> 

    <title>Türkiye'nin En Yarım Alışveriş Sitesi - Yarısıburada.com</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
	 <link href="css/sticky-footer.css" rel="stylesheet">
	<style>
		.blog-masthead {
			margin-bottom: 1rem;
			background-color: #428bca;
			box-shadow: inset 0 -.1rem .25rem rgba(0,0,0,.1);
			line-height: 0.3;
		}
		/* Nav links */
.nav-link {
  position: relative;
  padding: 1rem;
  font-weight: 500;
  color: #cdddeb;
}
.nav-link:hover,
.nav-link:focus {
  color: #fff;
  background-color: transparent;
}

.navlink2 {
	font-size:12px;
}
.navlink2:hover,
.navlink2:focus {
  color: #fff;
  background-color: transparent;
}

.navlink3 {
	font-size:16px;
	color:blue;
}
.navlink3:hover,
.navlink3:focus {
  color: blue;
  background-color: #000;
}
body {
    padding-top: 0rem;
	
}

/*
 * Sidebar
 */



.sidebar .nav {
  margin-bottom: 20px;
}

.sidebar .nav-item {
  width: 100%;
}

.sidebar .nav-item + .nav-item {
  margin-left: 0;
}

.sidebar .nav-link {
  border-radius: 0;
}

	</style>
</head>

<body>



			
	
    <div class="container">

      <header class="masthead">
		<div class="nav-scroller py-1 mb-2">
			<nav class="nav d-flex justify-content-between">
				<a class="p-2 text-muted" href="../anasayfa.php">Anasayfa</a>
				<a class="p-2 text-muted" href="../sayfa/draje.php">Ürünler</a>
				<a class="p-2 text-muted" href="../kendintasarla/cikolata.php">Kendin Tasarla</a>
				<a class="p-2 text-muted" href="../iletisim.php">İletişim</a>
				<a class="p-2 text-muted" href="../girisekrani.php">Üye Giriş/Yeni Üye</a>
				
			</nav>
		</div>
      </header>


      <main role="main">

	  <div class="row">
        <nav class="col-sm-3 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link navlink3" href="draje.php">Draje Çikolata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navlink3" href="madlen.php">Madlen Çikolata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navlink3" href="pastalik.php">Pastalık Çikolata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navlink3" href="special.php">Special Çikolata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link navlink3" href="ozelgunler.php">Özel Günler</a>
				   <nav class="nav nav-pills flex-column">
						<a style="color:blue;"class="nav-link ml-3 my-1 navlink3" href="annelergunu.php">Anneler Günü</a>
						<a style="color:blue;"class="nav-link ml-3 my-1 navlink3" href="bayramlar.php">Bayramlar</a>
						<a style="color:blue;"class="nav-link ml-3 my-1 navlink3" href="bebek.php">Bebek</a>
						<a style="color:blue;"class="nav-link ml-3 my-1 navlink3" href="soznisan.php">Söz-Nişan</a>
						<a style="color:blue;"class="nav-link ml-3 my-1 navlink3" href="sevgililergunu.php">Sevgililer-Günü</a>
						
					</nav>
            </li>
            <li class="nav-item">
              <a class="nav-link navlink3" href="kolonya.php">Kolonya</a>
            </li>
            
          </ul>
        </nav>
	
		<div class="col-sm-9">
			<h1>Ürünlerimiz</h1>
<form action="" method="get">
          <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
				<img src="../veri/ozelgunler/söz-nişan/1.jpg" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
				<h4>Nişan Tepsisi</h4>             
			
				<span class="badge badge-success">299.90₺</span></p>
				<h5><input  class="btn btn-primary"type="submit" name="kaydet1" value="Sepete Ekle"></h5>
            </div>	
                       
          </section></form>
		  
		  <!-- *******************************************************  -->
		    <?php
	$baglanti = new mysqli("localhost","root","","proje"); //bağlantı nesnesi oluşturduk. Sunucu adı, Kullanıcı Adı, Parola, Veritabanı Adı
		if(isset($_GET["kaydet1"]))		// POST işlemi gerçekleştiyse
{
			$sorgu="Select * from urunler ";
$sonuc = $baglanti->query($sorgu);
				
		
			if($sonuc->num_rows>0)
			{
				while($kayit = $sonuc ->fetch_assoc()) // fetch bir kayit geliyor sırayla diğerleride
				{
					
					if($kayit["adi"]=="Nisan Tepsisi")
					{
					$id=$kayit["id"];
					$adi=$kayit["adi"];
					$fiyat= $kayit["fiyat"];
					$sorgu="INSERT INTO `sepet` (`id`, `adi`, `fiyat`) VALUES ('$id', '$adi', '$fiyat');";		//klavyeden alınan değeri ekledik
		
					$baglanti->query($sorgu); 
					}					
				}
			}
		
		
		
		
	
	}			

?>
<div style="position: fixed; right:10px; top: 100px;">
<div style="overflow: hidden; height: 100%; width:250px;">
		<p>
		<button type="button" class="btn btn-outline-info" data-toggle="collapse" data-target="#collapseExample">Sepetim
		<?php
				$sayac=0;
					$baglanti = new mysqli("localhost","root","","proje");	
					$sorgu="Select * from sepet ";
					$sonuc = $baglanti->query($sorgu);	
			if($sonuc->num_rows>0)
			{
				while($kayit = $sonuc ->fetch_assoc())
				{					
				$sayac++;
				}
			}
			echo $sayac;
				?>
		</button>				
				<span class="badge cart-count"></span>	
		</p>
		<div class="collapse" id="collapseExample">
<table>
    <tr>
        <td>Id&nbsp;&nbsp;&nbsp;</td>
        <td>Ürün Adı&nbsp;&nbsp;&nbsp;</td>
        <td>Fiyatı</td>
    </tr>
    <?php 
	$toplam=0;
                 $sorgu="Select * from sepet";
$sonuc = $baglanti->query($sorgu);
			
			if($sonuc->num_rows>0)
			{
				while($kayit = $sonuc ->fetch_assoc()) // fetch bir kayit geliyor sırayla diğerleride
				{
					 $bir=$kayit['id'];
                    $iki = $kayit['adi'];
                    $uc = $kayit['fiyat'];
					$toplam+=(int)$uc;					
					 echo "<tr>				
                    <td>$bir</td>					
                    <td>$iki</td>
                    <td>$uc</td>
					<td>
					<form action ='' method='post'>
					<input type='hidden' name='kayit_no' value='".$kayit["id"]."'>
					<input type='submit' name='sil' value='Kaldır'>
					</form>
					</td>
					</tr>";				
				}
			}                 
                 
   ?>
                 
</table>
<?php
	echo "Toplam Tutar= ".$toplam;
	
	
?>
<?php
 $baglanti = new mysqli("localhost","root","","proje");	
		if(isset($_POST["sil"]))
		{
			$kayitno=$_POST['kayit_no'];
			$sorgu="DELETE FROM `sepet` WHERE `sepet`.`id` = $kayitno";
			$baglanti->query($sorgu);
		}
		$sorgu="SELECT * FROM `sepet`";
		
		$sonuc=$baglanti->query($sorgu);
	
?>
		</div>
		
	</div>
		</div>
		<!-- *******************************************************  -->
		  
		</div>
		</div>
	 </main>
    </div>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>