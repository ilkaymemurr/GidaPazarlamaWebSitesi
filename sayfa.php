
<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Sıra</th>
              <th>id</th>
              <th>Adi</th>
              <th>Fiyat</th>
            </tr>
          </thead>
		 
		<tbody>
		<?php
			$toplam=0;
			$adet=0;
			include "bootsrap.php";
		$baglanti = new mysqli("localhost","root","","proje"); //bağlantı nesnesi oluşturduk. Sunucu adı, Kullanıcı Adı, Parola, Veritabanı Adı
if($baglanti)
	{
		$sorgu="Select * from sepet";
$sonuc = $baglanti->query($sorgu);

$i=1;
$k="";

	
			if($sonuc->num_rows>0)
			{
				while($kayit = $sonuc ->fetch_assoc()) // fetch bir kayit geliyor sırayla diğerleride
				{		
				$adet=$i;
					echo "<tr>";				
					echo "<td>".$i."</td>";$i++;
					echo "<td>".$kayit["id"]."</td>";
					echo "<td>".$kayit["adi"]."</td>";
					$k=$k.",".$kayit["adi"];
			
					echo "<td>".$kayit["fiyat"]."</td>";
							$toplam+=(int)$kayit["fiyat"];
					echo "</tr>";
					
				}
		}	}
			
		  ?>
         
           
          </tbody>
        </table>
      </div>
<?php
	echo "Sepetinizde <strong>".$adet. "</strong> adet ürün bulunmaktadır. Ödemeniz Gereken Toplam Tutar: <strong>".$toplam."₺<strong>";
?>

    <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
   
    <h2>Ödeme İşlemleri</h2>
    <p class="lead">Lütfen kart bilgilerinizi eksiksiz doldurunuz.</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
     
   

      
    </div>
    <div class="col-md-11 order-md-1">
     
      <form method="get" class="needs-validation" novalidate="">  

    

      
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Ad Soyad</label>
            <input name="kartadi" type="text" class="form-control" id="cc-name" placeholder="" required="">
            <small class="text-muted">Kart Üzerindeki Tam Ad Soyad</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Kart Numarası</label>
            <input name="kartno"type="text" class="form-control" id="cc-number" placeholder="" required="">
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="cc-expiration">Son Kullanma Tarihi</label>
            <input name="skt"type="text" class="form-control" id="cc-expiration" placeholder="" required="">
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVC</label>
            <input name="cvc"type="text" class="form-control" id="cc-cvv" placeholder="" required="">
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
       <h5><input  class="btn btn-primary"type="submit" name="kaydet2" value="Tamamla"></h5>
      </form>
    </div>
  </div>
<?php
$baglanti = new mysqli("localhost","root","","proje"); //bağlantı nesnesi oluşturduk. Sunucu adı, Kullanıcı Adı, Parola, Veritabanı Adı


	$kartadi=@$_GET["kartadi"];
	$kartno=@$_GET["kartno"];
	$skt=@$_GET["skt"];
	$cvc=@$_GET["cvc"];	
	session_start();
$gelenadsoyad=$_SESSION['veri'];
$gelenparola=$_SESSION['verim'];


if(isset($_GET["kaydet2"]))		// SİL TUŞUNA TIKLANDIYSA
		{
			if(!empty($kartadi)&&!empty($kartno)&&!empty($skt)&&!empty($cvc))			// adsoyad ve eposta boş değilse
	{
		
		$sorgu="UPDATE `uye` SET `sepet`='$k' WHERE `eposta`='$gelenadsoyad' AND `parola`='$gelenparola'";
		
		$baglanti->query($sorgu); 	
		echo"İşleminiz Başarıyla Tamamlanmıştır. Kargonuz 3 işgünü içerisinde teslim edilecektir. Bizi Tercih Ettiğiniz için Teşekkür Ederiz.";
		
		$sorgu2="TRUNCATE TABLE `sepet`";
		$baglanti->query($sorgu2); 
		
			
	}
				
		}

?>
<?php

?>
 
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script>

</body>   
