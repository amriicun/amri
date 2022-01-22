<?php 
include_once 'includes/myclass.php';


// proses hapus data
if (isset($_GET['Kode']))
{
		$pblnDel = new Customer();
		// baca ID dari parameter customeryang akan dihapus
		$kodepembelian = $_GET['Kode'];
		// proses hapus data  customer berdasarkan nimvia method
		$pblnDel->hapusCustomer($kodepembelian);	
	echo "<meta http-equiv='Refresh' content='2; URL=pembelian_display.php'>";
}
?>
