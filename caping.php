<?php 
echo"=====BOT CAPING  AUTO INVITE=======
";
echo"\033[90mBOT KHUSUS PENNGUNA CAPING,BOT DALAM 
PROSES 
UJI COBA JADI MUNGKIN ADA BEBERAPA DEVICE YG GK BISA 
DAN BEBERAPA YG BISA MOHON BERI INFO KE PADA AKUN 
PEMBERI SCRIP INI KALAU SCRIP GK JALAN DI DEVICE 
AKUN KALIAN AGAR BISA DI UPGRADE LAGI SCRIPNYA OKE 
";


echo "\033[96mSEBELUM MENNGUNAKAN SCRIPNYA
HARAP MASUKAN KODE REFF MODIFIKASI TERLEBIH 
DAHULU DI APK CAPING NYA DI KOLOM UNDANG 
TEMAN AGAR GAK TERDETEKSI SISTEM(wjisg8)

";
echo"\033[92mEMAIL OR NO PHONE : ";
$uid 	= trim(fgets(STDIN));
echo"\033[92mYOUR PASSWORD:";
$n 	= trim(fgets(STDIN));
echo"\033[93mJUMLAH YG MAU DI INVITE :";
$jumlah = trim(fgets(STDIN));
echo"\033[97mDELAY (5-9999sec) :";
$wait	= trim(fgets(STDIN));
    $i=0;
while($i<$jumlah){
			sleep($wait);
			$i++;
			flush();
			
		$news		=	
news($uid,$n);
		$video		=	
video($uid,$n);
		$share		=	
share($uid,$n);
		$code		=	
code($uid,$n);
		$klik		=	
klik($uid,$n);
	echo"\033[91m MEMASUKAN KODE FAILED 301 PLISE RESEND DATA
";
	
	}
function news($uid,$n){ 
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, 
CURLOPT_URL, 
"http://caping.co.id/invite/user/database/googeldrive/email15k"); 
			curl_setopt($ch, 
CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, 
CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
				$headers[] = 
"Cookie: u=$uid;n=$n";
				$headers[] = 
"User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; 
Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 
(KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 
Mobile Safari/537.36;CapingNews/4.1.4";
		curl_setopt($ch, CURLOPT_HTTPHEADER, 
$headers);
		$result = curl_exec($ch);
	return $result;
}
function video($uid,$n){
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, 
CURLOPT_URL, 
"http://caping.co.id/invite/user/database/googeldrive/email15k"); 
			curl_setopt($ch, 
CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, 
CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = 
"Cookie: u=$uid;n=$n";
					$headers[] = 
"User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; 
Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 
(KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 
Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function share($uid,$n){
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, 
CURLOPT_URL, 
"http://caping.co.id/invite/user/database/googeldrive/email15k"); 
			curl_setopt($ch, 
CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, 
CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = 
"Cookie: u=$uid;n=$n";
					$headers[] = 
"User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; 
Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 
(KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 
Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function code($uid,$n){
		$ch = curl_init();
			curl_setopt($ch, 
CURLOPT_URL, 
"http://caping.co.id/invite/user/database/googeldrive/email15k"); 
			curl_setopt($ch, 
CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, 
CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = 
"Cookie: u=$uid;n=$n";
					$headers[] = 
"User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; 
Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 
(KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 
Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function klik($uid,$n){
		$ch = curl_init();
			curl_setopt($ch, 
CURLOPT_URL, 
"http://invite.frend.caping.co.id"); 
			curl_setopt($ch, 
CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, 
CURLOPT_SSL_VERIFYPEER, 0);
			$headers = array();
					$headers[] = 
"Cookie: u=$uid;n=$n";
					$headers[] = 
"User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; 
Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 
(KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 
Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, 
CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
?>
 !!!!!KESALAHAN 301 PERMINTAAN ANDA DI ALIHKAN 
KEMUNGKINAN ANDA DI DETEKSI SPAM OLEH SISTEM ATAU KODE REFF 
YG ANDA MASUKAN SALAH MOHON MASUKAN KODE REFF MODIFIKASI NYA 
DENGAN BENAR AGAR TIDAK KEDETEKSI OLEH SISTEM (wjisg8)
JIKA MASIH SEPERTI INI MOHON BERI TAU ADMIN UNTUK SEGERA 
MENGUPGRADENYA OKE 
