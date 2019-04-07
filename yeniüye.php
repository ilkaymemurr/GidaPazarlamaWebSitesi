<?php
	include "bootsrap.php";
	include "veritabani.php";
	
?>	
<?php

	if($_POST) 		// POST işlemi gerçekleştiyse
{
	$adsoyad=$_POST["adsoyad"];
	$eposta=$_POST["eposta"];
	$parola=$_POST["parola"];
	$adres=$_POST["adres"];
	
	if(!empty($adsoyad) && !empty($eposta) && !empty($parola) && !empty($adres))	
	{
		$sorgu="INSERT INTO `uye` (`adsoyad`, `eposta`, `parola`, `adres`, `sepet`) VALUES ('$adsoyad','$eposta','$parola','$adres', '');";
		
		
		$baglanti->query($sorgu); 
	}
}
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Yeni Üye</title>
	<style>
	.yesil {
	  width: 50%;
    height: 50%;
    padding: 20px;
    background-color: skyblue;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -460px;
    margin-top: -300px;
}
</style>
</head>
<body>				
	<div class="card-header yesil" align="center">	
		<form action="" method="POST" >
			<label >Ad Soyad</label>
			<input type="text" name="adsoyad" class="form-control"  placeholder="Ad Soyad">
			<label >E-Posta</label>
			<input type="text" name="cacaca" class="form-control"  placeholder="E-Posta">			
			<label >Kullanıcı Adı</label>
			<input type="text" name="eposta" class="form-control" placeholder="Kullanıcı Adı">
			<label >Parola</label>
			<input type="text" name="parola" class="form-control" placeholder="Parola">
			<label >Adres</label>
			<input type ="text" name="adres" class="form-control"><br>
			<button type="submit" class="btn btn-primary">Hesap Oluştur</button>
		</form>  
	</div>  
</body>			
			
			