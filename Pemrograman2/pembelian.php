<!DOCTYPE HTML>
 <HTML> 
   <head>
    <title>Navbar Bootstrap - ITBU.ac</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
  
  </head>
			<script>
				function checkForm(formZ){
					if(formZ.kodecustomer.value==''){
						alert('Kode Customer tidak boleh kosong.');
						formZ.kodecustomer.focus();
						return false;
					}
					if(formZ.namacustomer.value==''){
						alert('Nama Customer tidak boleh kosong.');
						formZ.namacustomer.focus();
						return false;
					}

					if(formZ.alamatcustomer.value==''){
						alert('Alamat tidak boleh kosong.');
						formZ.alamatcustomer.focus();
						return false;
					}
								
					if(formZ.notelepon.value==''){
						alert('Telpon tidak boleh kosong.');
						formZ.notelepon.focus();
						return false;
					}
				
				}
			</script>
 <body style="background-color: #ffffff">  
	 <div id="container" >
		<?php include "includes/header.php" ?>			
		<div class="row">
			<div class="col-md-3"></div>
				<div class="col-md-6">
					<h1>Data Pembelian Customer</h1>
					<form name="customer" action="" method="post" onsubmit="return checkForm(this)">
					<div class="form-group">
						<label>Kode Pembelian</label>
						<input type="text" name="kodepembelian" class="form-control"/>
					</div>

					<div class="form-group">
						<label>Nama Barang</label>
						<textarea name="namabarang" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label>jumlah Barang</label>
						<input type="text" name="jumlahbarang" class="form-control"/>
					</div>
		
					<div class="form-group">
						<label>Harga Perbarang</label>
						<input type="text" name="hargaperbarang" class="form-control"/>
					</div>

					<div class="form-group">
						<label>Total Harga</label>
						<input type="text" name="totalharga" class="form-control"/>
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
			 
			include "includes/myclass.php";
			$pbln = new Customer();


			// Tampung ke variable
			$kodepembelian = $_POST['kodepembelian'];
			$namabarang =$_POST['namabarang'];
			$jumlahbarang =$_POST['jumlahbarang'];
			$hargaperbarang =$_POST['hargaperbarang'];
			$totalharga =$_POST['totalharga'];
			
			$pbln->JumlahPerhitungan( $kodepembelian, $namabarang, $jumlahbarang, $hargaperbarang, $totalharga) ;
	

			 echo "Data Customer  Sudah Di Hitung";
			 //panggil kembali page barang _display.php
			 echo "<meta http-equiv='Refresh' content='0; URL=pembelian_dispaly.php'>";
		 	 
		}
		?>
   <?php include "includes/footer.php" ?>
    <script src="js/jQuery v3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>











