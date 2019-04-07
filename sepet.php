<?php
	
include "bootsrap.php";



?>

<!doctype html>
<html>
<head>
	<style>
		.strong-danger
		{
			color: #d9534f;
		}
		.item-count-input
		{
			width:50px;
			text-align:center;
		}td
		{
				vertical-align:middle!important;
		}table
		{
			box-shadow:0 0 8px rgba(5,5,5,.3);
		}
	</style>
</head>
<body>
	<div class ="container">
		<h2 class="text-center">Sepetinizde <strong class="strong-danger">5</strong> adet ürün bulunmaktadır.</h2>
	</div>
	<div class="row">
		<div class="col-md-12 ">
			<table class="table table-hover table-bordered table-striped">
				<thead>
					<th class="text-center">Ürün Resmi</th>
					<th class="text-center">Ürün Adı</th>
					<th class="text-center">Fiyatı</th>
					<th class="text-center">Adeti</th>
					<th class="text-center">Toplam</th>
					<th class="text-center">Sepetten Çıkar</th>
				</thead>
				<tbody>
					<tr>
						<td class ="text-center" width="120">
							<img src="kedi.jpg" alt="" width="50">
						</td>
						<td class="text-center">Propalan Kedi Maması</td>
						<td class="text-center"><strong>100 TL</strong></td>
						<td class="text-center">
							<a href ="#" class="btn btn-xs btn-success">
								<span class="glyphicon glyphicon-plus">+</span>
							</a>
							<input type="text" class="item-count-input" value="3">
							<a href ="#" class="btn btn-xs btn-danger">
								<span class="glyphicon glyphicon-minus">-</span>
							</a>
						</td>
						<td class="text-center">300 TL</td>
						<td class="text-center">
						<a href="#" class="btn btn-danger btn-sm">
						<span class="glyphicon glyphicon-remove"></span>
						Sepetten Çıkar
						</a>
						</td>
					</tr>
					<tr>
						<td class ="text-center" width="120">
							<img src="kedi.jpg" alt="" width="50">
						</td>
						<td class="text-center">Propalan Kedi Maması</td>
						<td class="text-center"><strong>100 TL</strong></td>
						<td class="text-center">
							<a href ="#" class="btn btn-xs btn-success">
								<span class="glyphicon glyphicon-plus">+</span>
							</a>
							<input type="text" class="item-count-input" value="3">
							<a href ="#" class="btn btn-xs btn-danger">
								<span class="glyphicon glyphicon-minus">-</span>
							</a>
						</td>
						<td class="text-center">300 TL</td>
						<td class="text-center">
						<a href="#" class="btn btn-danger btn-sm">
						<span class="glyphicon glyphicon-remove"></span>
						Sepetten Çıkar
						</a>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<th colspan="2" class="text-right">
						Toplam Ürün: <span class="strong-danger">4 adet</span>
					</th>
					<th colspan="4" class="text-right">
						Toplam Tutar: <span class="strong-danger">250 TL</span>
					</th>
				</tfoot>
			</table>
		</div>
	</div>
</body>
</html>