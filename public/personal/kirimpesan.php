<?php
 if(isset($_POST['msg'])){
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];

  $phone='+6289668258695';
  $apikey='524660';
  $message= "Ada Pesan Dari $nama%0A%0AKontak%0A$email%0A%0APesan%0A$pesan%0A";
  
  $url='https://api.callmebot.com/whatsapp.php?source=php&phone='.$phone.'&text='.urlencode($message).'&apikey='.$apikey;
  $html=file_get_contents($url);
  header("Location: ./");
 }

?>