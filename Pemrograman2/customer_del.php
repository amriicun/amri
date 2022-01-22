<?php 
include_once 'includes/myclass.php';


// proses hapus data
if (isset($_GET['Kode']))
{
		$custDel = new Customer();
		// baca ID dari parameter customeryang akan dihapus
		$kodeCustomer = $_GET['Kode'];
		// proses hapus data  customer berdasarkan nimvia method
		$custDel->hapusCustomer($kodeCustomer);	
	echo "<meta http-equiv='Refresh' content='2; URL=customer_display.php'>";
}
?>
