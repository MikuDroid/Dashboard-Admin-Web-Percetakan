<?php 

require '../function.php';
session_start();
if ( !isset( $_SESSION['login']) ) {
    echo (" <script>
                    alert('Anda Harus login terlebih dahulu');
                    document.location.href = 'login.php';
                </script>");
    
    } 

$id = $_POST["id_cetak"];

if (isset($_POST["disable"])) {
	$set = 1;
} else {
	$set = 0;
}

	if (set_ambil($id, $set) > 0) {
	echo (" <script>
					alert('set ambil sukses');
					document.location.href = 'dashboard.php?page=daftar_cetak';
				</script>");
	} else {
		echo (" <script>
					alert('set ambil gagal');
					document.location.href = 'dashboard.php?page=daftar_cetak';
				</script>");
	}

?>