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
		
		$cust = new Customer();
		
	?>
  </head>
 <body>  

 	<!-- Memanggil file header.php yang akan ditampilkan --> 
 	<?php include "includes/header.php" ?>

	 <div id="container" >
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<h1>Data Customer</h1>
					<table class="table table-hover able-striped">
						<thead>
							<tr>
								<th>KODE CUSTOMER</th>
								<th>NAMA CUSTOMER</th>
								<th>ALAMAT CUSTOMER</th>
								<th>TELPON</th>
								<th>Action/Modifikasi</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							//Tampilkan semua mahasiswa
							
							$arrayCustomer=$cust->tampilCustomerSemua();
							
							foreach($arrayCustomer as $row) {
							?>
	
								<tr>
									<td><?php echo $row['KodeCustomer']; ?></td>
									<td><?php echo $row['NamaCustomer']; ?> </td>
									<td><?php echo $row['AlamatCustomer']; ?></td>
									<td><?php echo $row['NoTelepon'] ;?></td>
				
									<td>
										<a href="customer_edit.php?Kode=<?php echo $row['KodeCustomer'];?>" class ="btn btn-success">
										<img src="images/ico_edit.gif" class="ico" border="0" title="Edit" />
										</a>
										&nbsp;&nbsp;&nbsp;
										<a href="customer_del.php?Kode=<?php echo $row['KodeCustomer'];?>" class="btn btn-danger">
										<img src="images/ico_del.gif" class="ico" border="0" title="Hapus" onClick="return confirm('Apakah Anda Yakin?');"/>
										</a>
		
									</td>
								</tr>
							<?php } ; ?>
						</tbody>
					</table>
					<a href="Customer_add.php" class="btn btn-primary">Tambah Data Customer</a>
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
