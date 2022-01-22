<!DOCTYPE HTML>
 <HTML> 
   <head>
    <title>Navbar Bootstrap - ITBU.ac</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
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
		<?php
			
			include "includes/myclass.php";
			$cust = new Customer();
			if (isset($_GET['Kode']))
					{
						$Kode = $_GET['Kode'];
					}else{
						header("Location:index.php");
					}
		
		?>
 </head>		
 <body style="background-color: #ffffff">  
	 <div id="container" >
		<?php include "includes/header.php" ?>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h1>Edit Data Customer</h1>
				<form name="customer" action="" method="post" onsubmit="return checkForm(this)">
							<div class="form-group">
								<label>Kode Customer</label>
								<input type="text" name="kodecustomer" value="<?php echo $cust->bacaDataCustomer('KodeCustomer', $Kode); ?>" readonly class="form-control"/>
							</div>

							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="namacustomer" value="<?php echo $cust->bacaDataCustomer('NamaCustomer', $Kode); ?>" class="form-control"/>
							</div>

							<div class="form-group">
								<label>Alamat</label>
								<textarea name="alamatcustomer" class="form-control"><?php echo $cust->bacaDataCustomer('AlamatCustomer', $Kode); ?></textarea>
							</div>
	
							<div class="form-group">
								<label>Telpon</label>
								<input type="text" name="notelepon" value="<?php echo $cust->bacaDataCustomer('NoTelepon', $Kode); ?>"  class="form-control"/>
							</div>
							<div class="form-group">
								<input name="submit" type="submit"  value="Save" class="btn btn-success"/>&nbsp;&nbsp;
								<input type="button"  value="Cancel" class="btn btn-warning" onclick=self.history.back()>
							</div>			
				</form>
			</div><!-- penutup col-md-8-->
			<div class="col-md-2"></div>
				
				
		</div><!-- penutup row -->
		
	</div><!--penutup container -->

		<?php
			if (isset($_POST['submit']))
			{

			// Tampung ke variable
			$kodecustomer = $_POST['kodecustomer'];
			$namacustomer =$_POST['namacustomer'];
			$alamatcustomer = $_POST['alamatcustomer'];
			$notelepon = $_POST['notelepon'];
			$cust->updateDataCustomer($kodecustomer, $namacustomer,  $alamatcustomer, $notelepon);

			 //panggil kembali page customer_display.php
			echo "<meta http-equiv='Refresh' content='1; URL=customer_display.php'>";
			}
		
		?>

   <?php include "includes/footer.php" ?>
    <script src="js/jQuery v3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
