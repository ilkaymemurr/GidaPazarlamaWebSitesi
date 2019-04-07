<?php
	include "bootsrap.php";
	include "veritabani.php";
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Giriş Ekranı</title>
	<style>
	.yesil {
	width: 320px;
    height: 200px;
    padding: 20px;
    background-color: skyblue;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -160px;
    margin-top: -70px;
}
</style>
</head>
<body background="https://st2.depositphotos.com/4831367/9633/v/950/depositphotos_96339474-stock-illustration-vector-seamless-pattern-modern-line.jpg">
<header>
  <div class="bg-dark collapse" id="navbarHeader" style="">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Hakkımızda</h4>
          <p class="text-muted">Merkezi Balıkesir'de Türkiyenin gelişmekte olan en büyük Pazarlama grubu
</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Bizi Takip Edin</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Twitter</a></li>
            <li><a href="#" class="text-white">Facebook</a></li>
            <li><a href="#" class="text-white">İnstagram</a></li>
            <li><a href="yönetici.php" class="text-white">Yönetici Girişi</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
      
        <strong>Vefa Gıda Pazarlama</strong>
      </a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
<div class=" yesil" align="center">	
	<form action ="" method="get">
		<table cellpadding="5" cellspacing="5">
			<tr>			
				<td><input type="text"placeholder="Kullancı Adı" class="form-control"name="adsoyad" /></td>
				
			</tr>
			<tr>			
				<td><input type="password"class="form-control" placeholder="Parola" name="eposta" /></td>
			</tr>
			<tr>				
				<td><input type="submit" class="btn btn-primary" name ="Gönder"value="Giriş" />			
				<input type="submit" class="btn btn-primary" name ="Gönder2"value="Yeni Hesap" /></td>			
			</tr>			
		</table>
	</form>
	</div> 
</body>
</html>
<?php



	include "bootsrap.php";
	$baglanti = new mysqli("localhost","root","","proje"); //bağlantı nesnesi oluşturduk. Sunucu adı, Kullanıcı Adı, Parola, Veritabanı Adı
if($baglanti)
	{
		$sorgu="Select * from uye";
		$sonuc = $baglanti->query($sorgu);
		$kayit = $sonuc->fetch_assoc();		
}
if(isset($_GET['Gönder']))
{
$eposta=$_GET["adsoyad"];
$parola=$_GET["eposta"];
	session_start();

$_SESSION['veri']=$eposta;

$_SESSION['verim']=$parola;

			if($sonuc->num_rows>0)
			{
				while($kayit = $sonuc ->fetch_assoc()) // fetch bir kayit geliyor sırayla diğerleride
				{
					if ($kayit["eposta"]==$eposta && $kayit["parola"]==$parola )
					{					
					header('Location: sayfa.php');
					 exit();				
					}	
				}
			}
}

if(isset($_GET['Gönder2']))
{					
	header('Location:yeniüye.php');
	exit();				
	}	

?>
