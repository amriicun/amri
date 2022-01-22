<?php
class Database {
	// properti
	private $dbHost="localhost";
	private $dbUser="root";
	private $dbPass="";
	private $dbName="inv";
	
	// method koneksi mysql
	function connectMySQL() {
		
		$conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass,$this->dbName);

		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		return $conn;
	}
		
}

Class Login{
	
		function CheckLogin($username) 
	{
		
		try {
		  $db=new Database;
		  $mysqli = $db->connectMySQL();
		
		  // Tampilkan semua data di tabel barang
		  $query = "SELECT password FROM users WHERE username='$username' or email='$username'";
		  $result = $mysqli->query($query);

			$row = $result->fetch_array(MYSQLI_BOTH);
			    return $row;
	 	   
			}

		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}
	
}

class Customer {

function tampilCustomerSemua() 
	{
		
		try {
		  $db=new Database;
		  $mysqli = $db->connectMySQL();
		
		  // Tampilkan semua data di tabel barang
		  $query = "SELECT * FROM customer ORDER BY KodeCustomer";
		  $result = $mysqli->query($query);

			   while ($row = $result->fetch_array(MYSQLI_BOTH))
			    $data[]=$row;
			
			    return $data;
	 	   
			}

		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}
 
	
// method untuk proses tambah data customer
	function tambahDataCustomer( $kodeCustomer, $namaCustomer,   $alamatCustomer,  $notelepon) 
	{
		
		try {
			$db=new Database;
			$mysqli = $db->connectMySQL();
			
			  // Insert data
			 $query = "INSERT INTO Customer (KodeCustomer, NamaCustomer, AlamatCustomer,  NoTelepon)
			          VALUES ( '$kodeCustomer', '$namaCustomer',   '$alamatCustomer',  '$notelepon')";

			$hasil = $mysqli->query($query);

			}
		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}




	// method untuk proses update data customer
	function updateDataCustomer($kodecustomer, $namacustomer,  $alamatcustomer, $notelepon)

	{
		try {
			$db=new Database;
			$mysqli = $db->connectMySQL();
			$query = "UPDATE customer SET
					  NamaCustomer = '$namacustomer', AlamatCustomer = '$alamatcustomer', NoTelepon = '$notelepon' 
					  WHERE KodeCustomer = '$kodecustomer'";
			$hasil = $mysqli->query($query);
			
		}
		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}
	
	// method menghapus data Mahasiswa
	function hapusCustomer($kodeCustomer) 
	{
		try {
		$db=new Database;
		$mysqli = $db->connectMySQL();
		$query = "DELETE FROM customer WHERE KodeCustomer = '$kodeCustomer'";
		$hasil = $mysqli->query($query);
		echo "Data Customer dengan kode  ".$kodeCustomer." sudah di hapus";
		}
       	catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}
	
	


	// method mengambil data Customer
	function bacaDataCustomer($field, $kodeCustomer) 
	{
		
		try {
			$db=new Database;
			$mysqli = $db->connectMySQL();
			$result  = $mysqli->query("SELECT * FROM customer WHERE KodeCustomer= '$kodeCustomer'");
			$data=$result->fetch_array(MYSQLI_BOTH);
		    if ($field == 'KodeCustomer') return $data['KodeCustomer'];
			else if ($field == 'NamaCustomer') return $data['NamaCustomer'];
			else if ($field == 'AlamatCustomer') return $data['AlamatCustomer'];
			else if ($field == 'NoTelepon') return $data['NoTelepon'];
		}
		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}
}

Class UserRegister {
function tambahUser( $name, $username, $email,$password) 
	{
		
		try {
			$db=new Database;
			$mysqli = $db->connectMySQL();
		  // Insert data

 			$query = "INSERT INTO users (name, username, email, password) 
            VALUES ('$name', '$username', '$email','$password' )";
    


			$hasil = $mysqli->query($query);

			}
		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}

}


Class Barang {

function tampilBarangSemua() 
	{
		
		try {
		  $db=new Database;
		  $mysqli = $db->connectMySQL();
		
		  // Tampilkan semua data di tabel barang
		  $query = "SELECT * FROM barang ORDER BY KodeBarang";
		  $result = $mysqli->query($query);

			   while ($row = $result->fetch_array(MYSQLI_BOTH))
			    $data[]=$row;
			
			    return $data;
	 	   
			}

		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}


function tambahDataBarang( $kodeBarang, $namaBarang,   $harga,  $satuan, $stok) 
	{
		
		try {
			$db=new Database;
			$mysqli = $db->connectMySQL();
			
			  // Insert data
			 $query = "INSERT INTO Barang(Kode_Barang, NamaBarang, Harga,  satuan, Stok)
			          VALUES ( '$kodeBarang', '$namaBarang',   '$harga',  '$satuan', '$stok')";

			$hasil = $mysqli->query($query);

			}
		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}


function hapusBarang($kodeBarang) 
	{
		try {
		$db=new Database;
		$mysqli = $db->connectMySQL();
		$query = "DELETE FROM barang WHERE KodeBarang = '$kodeBarang'";
		$hasil = $mysqli->query($query);
		echo "Data Barang dengan kode  ".$kodeBarang." sudah di hapus";
		}
       	catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}

function bacaDataBarang($field, $kodeBarang) 
	{
		
		try {
			$db=new Database;
			$mysqli = $db->connectMySQL();
			$result  = $mysqli->query("SELECT * FROM barang WHERE KodeBarang= '$kodeBarang'");
			$data=$result->fetch_array(MYSQLI_BOTH);
		    if ($field == 'KodeBarang') return $data['KodeBarang'];
			else if ($field == 'NamaBarang') return $data['NamaBarang'];
			else if ($field == 'HargaBeli') return $data['HargaBeli'];
			else if ($field == 'HargaJual') return $data['HargaJual'];
			else if ($field == 'StokAkhir') return $data['StokAkhir'];
		}
		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}

function updateDataBarang($kodebarang, $namabarang,  $harga, $satuan, $stok)

	{
		try {
			$db=new Database;
			$mysqli = $db->connectMySQL();
			$query = "UPDATE Barang SET	  nama_barang = '$namabarang', harga = '$harga', satuan = '$satuan', stok ='$stok'   WHERE KodeBarang = '$kodebarang'";
					 
			$hasil = $mysqli->query($query);
			
			
		}
		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}


}



Class Transaksi {

function TampilkanKodeBarang() 
	{
		
		try {
		  $db=new Database;
		  $mysqli = $db->connectMySQL();
		
		  // Tampilkan semua data di tabel barang
		  $query = "SELECT CONCAT(RPAD(KodeBarang,10,'-') , NamaBarang ) as  KodeBarang fROM barang ORDER BY KodeBarang";
		  $result = $mysqli->query($query);

			   while ($row = $result->fetch_array(MYSQLI_BOTH))
			    $data[]=$row;
			
			    return $data;
	 	   
			}

		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}

function TampilkanKodeCustomer()
	{
		
		try {
		  $db=new Database;
		  $mysqli = $db->connectMySQL();
		
		  // Tampilkan semua data di tabel customer
		  $query = "SELECT CONCAT(RPAD(KodeCustomer,10,'-') , NamaCustomer ) as KodeCustomer FROM customer ORDER BY KodeCustomer";
		  $result = $mysqli->query($query);

			   while ($row = $result->fetch_array(MYSQLI_BOTH))
			    $data[]=$row;
			
			    return $data;
	 	   
			}

		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}
	}

function tambahDataPenjualan( $tgljual, $kodebarang, $kodecustomer,  $qty)
 {

try {
			$db=new Database;
			$mysqli = $db->connectMySQL();
			
			  // Insert data
			 $query = "INSERT INTO TransaksiJual (TglJual, KodeBarang, KodeCustomer, Qty)
			          VALUES ( '$tgljual', '$kodebarang', '$kodecustomer',  '$qty')";

			$hasil = $mysqli->query($query);

 		
			 
			
			}
		catch (Exception $e) {
		 		 echo "Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
			}
		finally {
		  if (isset($mysqli)) {
		    $mysqli->close();
		  }
		}



}


}