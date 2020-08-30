<?php
function getTransaksi()
{
   global $koneksi;
   $transaksi = [];
   $sql = "SELECT * FROM transaksi inner join tracking_history on transaksi.no_resi=tracking_history.no_resi";
   $query  = mysqli_query($koneksi, $sql);
   while ($data = mysqli_fetch_assoc($query)) {
      $transaksi[] = $data;
   }

   return $transaksi;
}

function getTransaksiById($noResi)
{
   global $koneksi;
   $sql = "SELECT * FROM transaksi inner join tracking_history on transaksi.no_resi=tracking_history.no_resi WHERE transaksi.no_resi = '$noResi'";
   $query  = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
   $data = mysqli_fetch_assoc($query);

   return $data;
}

function addTransaksi($data)
{
   global $koneksi;
   $sql = "INSERT INTO transaksi VALUES (
   '$data[noResi]',
   '$data[namaBarang]',
   '$data[beratBarang]',
   '$data[jenisBarang]',
   '$data[namaPengirim]',
   '$data[kontakPengirim]',
   '$data[namaPenerima]',
   '$data[kontakPenerima]',
   '$data[totalBiaya]',
   '$data[layanan]',
   '$data[ongkir]'
   )";

   $insertTransaksi = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

   return $insertTransaksi;
}

function addTrackingHistory($noResi)
{
   global $koneksi;
   $statusPertama = 'On Progress Curier';
   $sql = "INSERT INTO tracking_history (no_resi, history, datetime) VALUES ('$noResi','$statusPertama', CURRENT_TIMESTAMP())";

   $insertTracking = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

   return $insertTracking;
}

function deleteTransaksi($idTransaksi)
{
   global $koneksi;
   $sql = "DELETE FROM transaksi WHERE no_resi = '$idTransaksi'";
   $deleteTransaksi = mysqli_query($koneksi, $sql);
   return $deleteTransaksi;
}

// function updateTransaksi($data)
// {
//    global $koneksi;

//    $query = "UPDATE transaksi (no_resi, nama_barang, jenis_barang, berat_barang, nama_pengirim, kontak_pengirim, nama_penerima, kontak_penerima, id_layanan, id_ongkir) VALUES ('$data[noResi]', '$data[namaBarang]', '$data[jenisBarang]', '$data[beratBarang]' , '$data[namaPengirim]' , '$data[kontakPengirim]', '$data[namaPenerima]' , '$data[kontakPenerima]' , '$data[layanan]', '$data[ongkir]')";
//    $eks   = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
//    return $eks;
// }



// if ($pass == md5('')) {
//    $sql = "UPDATE users SET username = '$user', level = '$level',status= '$status' WHERE id_user = '$idUser'";
// } else {
//    $sql = "UPDATE users SET username = '$user', password='$pass', level = '$level',status= '$status' WHERE id_user = '$idUser'";
// }

// $sql = "UPDATE tracking_history SET history = '$data[history]' WHERE id_tracking = '$data[idtracking]'";

// function updateTransaksi($data)
// {
//    global $koneksi;
//    $sql = "UPDATE transaksi SET
//    no_resi = '$data[noResi]',
//    nama_barang ='$data[namaBarang]',
//    '$data[beratBarang]',
//    '$data[jenisBarang]',
//    '$data[namaPengirim]',
//    '$data[kontakPengirim]',
//    '$data[namaPenerima]',
//    '$data[kontakPenerima]',
//    '$data[layanan]',
//    '$data[ongkir]' where no_resi = '$data[noResi]'"
//    ;

//    $updateTransaksi = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

//    return $updateTransaksi;
// }

function updateTransaksi($noResi, $namaBarang, $beratBarang, $jenisBarang, $namaPengirim, $namaPenerima, $kontakPengirim, $kontakPenerima,$layanan, $ongkir)
{
   global $koneksi;
   $sql2 = "UPDATE transaksi SET nama_barang='$namaBarang', jenis_barang='$jenisBarang', berat_barang='$beratBarang', nama_pengirim = '$namaPengirim', 
   nama_penerima='$namaPenerima', kontak_pengirim ='$kontakPengirim', kontak_penerima='$kontakPenerima', id_layanan ='$layanan', id_ongkir='$ongkir' WHERE no_resi='$noResi'";
   $updateTransaksi = mysqli_query($koneksi, $sql2);
   return $updateTransaksi;

}
