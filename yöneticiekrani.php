
<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Sıra</th>
              <th>Adsoyad</th>
              <th>E-Posta</th>
              <th>Parola</th>
              <th>Adres</th>
              <th>Sepet</th>
            </tr>
          </thead>
		 
		<tbody>
		<?php
			
			include "bootsrap.php";
		$baglanti = new mysqli("localhost","root","","proje"); //bağlantı nesnesi oluşturduk. Sunucu adı, Kullanıcı Adı, Parola, Veritabanı Adı
if($baglanti)
	{
		$sorgu="Select * from uye";
$sonuc = $baglanti->query($sorgu);

$i=1;
	
			if($sonuc->num_rows>0)
			{
				while($kayit = $sonuc ->fetch_assoc()) // fetch bir kayit geliyor sırayla diğerleride
				{		
					echo "<tr>";				
					echo "<td>".$i."</td>";$i++;
					echo "<td>".$kayit["adsoyad"]."</td>";
					echo "<td>".$kayit["eposta"]."</td>";
					echo "<td>".$kayit["parola"]."</td>";
					echo "<td>".$kayit["adres"]."</td>";
					echo "<td>".$kayit["sepet"]."</td>";
					
					echo "</tr>";
					
				}
		}	}
			
		  ?>
         
           
          </tbody>
        </table>
      </div>


       