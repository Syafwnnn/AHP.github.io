


<?php
//Include file koneksi ke database


include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran






$nama_user=$_POST['nama_user'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$level="user";


	

// referensi https://stackoverflow.com/questions/15723221/php-login-ifemptypassword-doesnt-work-in-my-code-why
if(empty($nama_user)) {

     header('location:index.php?error= mber !');
} {


 if(empty($user)) {

     header('location:index.php?error= mber !');
} {

 if(empty($pass)) {
     header('location:index.php?error= mber !');



 

      } else {









// referensi malasngoding.com/cara-membuat-form-validasi-dengan-php/
   $sql="insert into tb_user (nama_user,user,pass,level) values
    ('$nama_user','$user','$pass','$level')";

//Mengeksekusi/menjalankan query diatas 
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	
	echo "<script>alert('Akun Berhasil Dibuat Silahkan Login Untuk lebih lanjut!'); window.location = '../../123/spkku/login.php'</script>";
	
                  
                           

	exit;
  }

}  
}
}





?>