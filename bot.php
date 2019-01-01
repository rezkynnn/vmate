<?php
echo"\033[69 =====BOT VMATE=======
";

echo "\033[96m DOWNLOAD APLIKASI VMATE MENGGUNAKAN LINK YG TELASH SAYA (DULL) 
SEDIAKAN DI DESKRIPSI...SEBELUM MENGGUNAKAN BOT, BUATLAH SEBUAH VIDEO TERLEBIH 
DAHULU, KONEKSI INTERNET SANGAT DI BUTUHKAN!!!!! MASUKAN KODE LINK KAMU DI BAWAH

";
echo"\033[92 link anda : ";
$uid 	= trim(fgets(STDIN));
echo"\033[93m jumlah yg mau di undang :";
$jumlah = trim(fgets(STDIN));
echo"\033[91m waktu per detik :";
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
	echo "BERHASIL...POINT REF BERTAMBAH = 200 POINT VIDEO BERTAMBAH = 5000
";
	
	}
function news($uid,$n){ 
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, 
CURLOPT_URL, 
"https://ai.caping.co.id/v2/event/news/view/$rand"); 
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
"https://ai.caping.co.id/v2/event/video/view/$rand"); 
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
"https://ai.caping.co.id/v2/event/share/news/$rand"); 
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
"https://ai.caping.co.id/v2/event/share/code"); 
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
"https://ai.caping.co.id/v2/event/share/click/push"); 
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
 !!!!!KESALAHAN LINK DOWNLOAD, GUNAKAN LINK YG TELAH DI SEDIAKAN...
   *untuk mengulang ketik php baca.php*
