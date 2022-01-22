<?php require_once("includes/auth.php"); ?>
<!DOCTYPE HTML>
 <HTML> 
   <head>
    <title>Navbar Bootstrap - ITBU.ac</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
    <?php
		include "includes/myclass.php";
		/** QUERY **/
		
		$pbln = new Customer();
		
	?>
  </head>
 <body>  

 	<!-- Memanggil file header.php yang akan ditampilkan --> 
 	<?php include "includes/header.php" ?>

	 <div id="container" >
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<h1>Data Pembelian Customer</h1>
					<table class="table table-hover able-striped">
						<thead>
							<tr>
								<th>KODE PEMBELIAN</th>
								<th>NAMA BARANG</th>
								<th>JUMLAH BARANG</th>
								<th>HARGA PERBARANG</th>
								<th>TOTAL HARGA</th>
								<th>Action/Modifikasi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							//Tampilkan semua mahasiswa
							
							$arrayCustomer=$pbln->tampilCustomerSemua();
							
							foreach($arrayCustomer as $row) {
							?>
	
								<tr>
									<td><?php echo $row['kodepembelian']; ?></td>
									<td><?php echo $row['namabarang']; ?> </td>
									<td><?php echo $row['jumlahbarang']; ?></td>
									<td><?php echo $row['hargaperbarang']; ?></td>
									<td><?php echo $row['totalharga'] ;?></td>
				
									<td>
										<a href="pembelian_edit.php?Kode=<?php echo $row['kodepemebelian'];?>" class ="btn btn-success">
										<img src="images/ico_edit.gif" class="ico" border="0" title="Edit" />
										</a>
										&nbsp;&nbsp;&nbsp;
										<a href="pembelian_del.php?Kode=<?php echo $row['kodepembelian'];?>" class="btn btn-danger">
										<img src="images/ico_del.gif" class="ico" border="0" title="Hapus" onClick="return confirm('Apakah Anda Yakin?');"/>
										</a>
		
									</td>
								</tr>
							<?php } ; ?>
						</tbody>
					</table>
					<a href="pembelian.php" class="btn btn-primary">Data Pembelian Customer</a>
			</div><!-- Penutup div   col-md-8 --> 
			<div class="col-md-1"></div>
		</div><!-- Penutup div  row --> 
	</div><!-- Penutup div "container --> 

	<!-- memanggil file footer.php untuk menampilkan footer --> 
    <?php include "includes/footer.php" ?>

    <script src="js/jQuery v3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>	 

 </body>
</html>
