<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include librari phpmailer
include('phpmailer/Exception.php');
include('phpmailer/PHPMailer.php');
include('phpmailer/SMTP.php');

$email_pengirim = 'bait.almaqdiscanva@gmail.com'; // Isikan dengan email pengirim
$nama_pengirim = 'Bait Almaqdiscanva'; // Isikan dengan nama pengirim
// $email_penerima = $_POST['email_penerima']; // Ambil email penerima dari inputan form
$subjek = $_POST['subjek']; // Ambil subjek dari inputan form
$pesan = $_POST['pesan']; // Ambil pesan dari inputan form
$attachment = $_FILES['attachment']['name']; // Ambil nama file yang di upload

$mail = new PHPMailer;
$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->Username = $email_pengirim; // Email Pengirim
$mail->Password = 'cmfhvgjzeodvfdpr'; // Isikan dengan Password email pengirim
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
// $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging

$mail->setFrom($email_pengirim, $nama_pengirim);
//$mail->addAddress($email_penerima, ''); //klo satu penerima
include("../config.php");
$sql = "SELECT * FROM mailling_list ";
$query = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($query)){
    $mail->addAddress($data['email'], '');
}
$mail->isHTML(true); // Aktifkan jika isi emailnya berupa html

// Load file content.php
ob_start();
include "phpmailer/mailling_content.php";

$content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
ob_end_clean();

$mail->Subject = $subjek;
$mail->Body = $content;
$mail->AddEmbeddedImage('image/logo.png', 'logo_mynotescode', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email

if(empty($attachment)){ // Jika tanpa attachment
    $send = $mail->send();

    if($send){ // Jika Email berhasil dikirim
        // echo $email_pengirim;
        // echo $subjek;
        // echo $pesan;
        // echo $attachment;
            // $sql = "SELECT * FROM mailling_list ";
            // $query = mysqli_query($conn, $sql);
            // while ($data = mysqli_fetch_array($query)){
            //     $cari_email[] = $data['email'];
            // }
            // $email_penerima = array_sum(str($cari_email));

            // $query = mysqli_query($conn, $sql);
            // $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

            // $values = array();
            // foreach ($data as $row) {
            //     $values[] = "('" . $row['email'] . "')";
            // }

            // $email_penerima = print_r($data);
            // echo $data;
            // $load_driver = mysqli_fetch_assoc($query);
            // $email_penerima = $load_driver['email'];
            // while ($load_driver = mysqli_fetch_assoc($query)){
            //     echo $email_penerima = $load_driver['email'];
            // }
        echo "<h1>Email berhasil dikirim tanpa</h1><br />";

        mysqli_query($conn, "INSERT INTO mailling_riwayat VALUES(NULL,'$email_pengirim','$subjek','$pesan','$attachment',NULL)");
        header("location: mailling_riwayat.php?");

    }else{ // Jika Email gagal dikirim
        echo "<h1>Email gagal dikirim</h1><br /><a href='mailling.php'>Kembali ke Form</a>";
        // echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
    }
}else{ // Jika dengan attachment
    $tmp = $_FILES['attachment']['tmp_name'];
    $size = $_FILES['attachment']['size'];

    if($size <= 25000000){ // Jika ukuran file <= 25 MB (25.000.000 bytes)
        $mail->addAttachment($tmp, $attachment); // Add file yang akan di kirim

        $send = $mail->send();

        if($send){ // Jika Email berhasil dikirim
            mysqli_query($conn, "INSERT INTO mailling_riwayat VALUES(NULL,'$email_pengirim','$subjek','$pesan','$attachment',NULL)");
            echo "<h1>Email berhasil dikirim</h1><br />";
            header("location: mailling_riwayat.php?");
        }else{ // Jika Email gagal dikirim
            echo "<h1>Email gagal dikirim</h1><br /><a href='mailling.php'>Kembali ke Form</a>";
            // echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
        }
    }else{ // Jika Ukuran file lebih dari 25 MB
        echo "<h1>Ukuran file attachment maksimal 25 MB</h1><br /><a href='mailling.php'>Kembali ke Form</a>";
    }
}
?>
