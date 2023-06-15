<?php
$tanggal = date('d-m-Y');
$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$id = $_POST['id'];

echo $tanggal_pemesanan;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
require '../config.php';
$query = "UPDATE checkout_produk SET status_bayar = 'Pesanan Dibatalkan' , Pembatalan = '$pesan' WHERE id_checkout = '$id'";
mysqli_query($conn,$query);
header("location:konfirmasi_pembayaran.php");

if(isset($_POST['submit'])) {

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
     
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'umkmmauasjkm@gmail.com';                     //SMTP username
        $mail->Password   = 'eohjrstoivqjyyvl';                               //SMTP password
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 587; 
                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('umkmmauasjkm@gmail.com', 'UMKM Mauas JKM');
        $mail->addAddress($email, $username);     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo('umkmmauasjkm@gmail.com', 'UMKM Mauas JKM');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        // //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Pembatalan Pemesanan';
        $mail->Body    = "Tobasa, <b>".$tanggal."</b><br> Perihal : Pembayaran Tidak Sesuai<br>"."Tanggal Pemesanan : ".$tanggal_pemesanan."<br><br>"."<b>Alasan Pembatalan Konfirmasi Pemesanan</b><br>".$pesan."<br><br><br><br><br>Salam,<br>Tim Mauas JKM<br><br><br><br>Butuh bantuan? Hubungi Kami umkmmauasjkm@gmail.com";
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        if($mail->send())
        {
        echo 'Message has been sent';
        }else {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Tekan dulu tombolnya";
}

