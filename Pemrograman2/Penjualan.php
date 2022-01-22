<!DOCTYPE HTML>
 <HTML> 
   <head>
    <title>Navbar Bootstrap - ITBU.ac</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
  
  </head>
			
 <body style="background-color: #ffffff">  
	 <div id="container" >
		<?php include "includes/header.php" ?>			
		<div class="row">
			<div class="col-md-3"></div>
				<div class="col-md-6">
					<h1>Transaksi Penjualan</h1>

					<?php
					include "includes/myclass.php";
							$trans  = new Transaksi();
					
							$arrayBarang=$trans->TampilkanKodeBarang();
							$arrayCustomer=$trans->TampilkanKodeCustomer();
						
					?>
					<form name="penjualan" action="" method="post" >

					<div class="form-group">
						<label>Tanggal Penjualan</label>
						<input type="date" name="tgljual" class="form-control"/>
					</div>

					<div class="form-group">
			 			<label>Kode Barang</label>
					    <select class="form-group" name="kodebarang">
					    	<?php
								foreach($arrayBarang as $row) {
							
					    	?>
					         <option value="<?php echo $row['KodeBarang']; ?>"><?php echo $row['KodeBarang']; ?></option>​

							 <?php

								}
					    	?>
					    </select>
				  	</div>

				  	<div class="form-group">
			 			<label>Kode Customer</label>
					    <select class="form-group" name="kodecustomer">
					    	<?php
								foreach($arrayCustomer as $row) {
								
					    	?>
					         <option value="<?php echo $row['KodeCustomer']; ?>"><?php echo $row['KodeCustomer']; ?></option>​

							 <?php

								}
					    	?>
					    </select>
				  	</div>

					<div class="form-group">
						<label>Quantity</label>
						<input type="text" name="qty" class="form-control"/>
					</div>
					
					<div class="form-group">
						<input name="submit" type="submit"  value="Save" class="btn btn-success"/>&nbsp;&nbsp;
						<input type="button"  value="Cancel" class="btn btn-warning" onclick=self.history.back()>
					</div>			
						
					</form>
				</div><!-- penutup col-md-8 -->
			<div class="col-md-3"></div>
		</div><!-- penutup row -->
	
	</div><!-- penutup container -->

		<?php
		if (isset($_POST['submit']))
		{
			 

			// Tampung ke variable
			$tgljual = $_POST['tgljual'];
			$kodebarang = SUBSTR($_POST['kodebarang'],0, STRPOS($_POST['kodebarang'],'-'));
			$kodecustomer = SUBSTR($_POST['kodecustomer'],0, STRPOS($_POST['kodecustomer'],'-'));
			$qty =$_POST['qty'];
	

			$trans->tambahDataPenjualan( $tgljual, $kodebarang, $kodecustomer,  $qty) ;
	

			 echo "Data Customer  sudah di ditambahkan";
			 //panggil kembali page customer _display.php
			 echo "<meta http-equiv='Refresh' content='0; URL=index.php'>";
		 	 
		}
		?>
   <?php include "includes/footer.php" ?>
    <script src="js/jQuery v3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>











