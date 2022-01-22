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
					<h1>Add Data Customer</h1>
					<form name="customer" action="" method="post" onsubmit="return checkForm(this)">
					<div class="form-group">
						<label>Kode Customer</label>
						<input type="text" name="kodecustomer" class="form-control"/>
					</div>

					<div class="form-group">
						<label>Nama Customer</label>
						<input type="text" name="namacustomer" class="form-control"/>
					</div>

			

					<div class="form-group">
						<label>Alamat Customer</label>
						<textarea name="alamatcustomer" class="form-control"></textarea>
					</div>

		
					<div class="form-group">
						<label>Telpon</label>
						<input type="text" name="notelepon" class="form-control"/>
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
			$cust = new Customer();


			// Tampung ke variable
			$kodecustomer = $_POST['kodecustomer'];
			$namacustomer =$_POST['namacustomer'];
			$alamatcustomer = $_POST['alamatcustomer'];
			$telpon = $_POST['notelepon'];

			$cust->tambahDataCustomer( $kodecustomer, $namacustomer, $alamatcustomer, $telpon) ;
	

			 echo "Data Customer  sudah di ditambahkan";
			 //panggil kembali page customer _display.php
			 echo "<meta http-equiv='Refresh' content='0; URL=customer_display.php'>";
		 	 
		}
		?>
   <?php include "includes/footer.php" ?>
    <script src="js/jQuery v3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>











