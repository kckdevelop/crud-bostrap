<?php
function jenkel($jenkel)
{ 
  if($jenkel == 'L')
  { 
    $jk = 'Laki - Laki';
    return $jk;
  }
  else
  {
    $jk = 'Perempuan';
    return $jk;
  }
}
function rupiah($angka) {
    $hasil = 'Rp ' . number_format($angka, 2, ",", ".");
    return $hasil;
}
function tglindo($tanggal)
{
    $tglbaru = date("d-m-Y | H:i:s", strtotime($tanggal));
    return $tglbaru;
}
function select($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    return $result;
}
function selectubah($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    
    $row = mysqli_fetch_assoc($result);
    
    return $row;
}
function create_barang($post){
  global $koneksi;

  $nama = $post['nama'];
  $jumlah = $post['jumlah'];
  $harga = $post['harga'];

  //query tambah barang
  $query = "INSERT INTO barang VALUES (null,'$nama','$jumlah','$harga',CURRENT_TIMESTAMP())";
  mysqli_query($koneksi, $query);
  return mysqli_affected_rows($koneksi);
}
function update_barang($post)
{
  global $koneksi;
  $idbarang = $post['idbarang'];
  $nama = $post['nama'];
  $jumlah = $post['jumlah'];
  $harga = $post['harga'];

  $query2 = "UPDATE barang SET nama = '$nama', jumlah = '$jumlah', harga = '$harga'
  WHERE idbarang = '$idbarang'
  ";
  mysqli_query($koneksi, $query2);
  return mysqli_affected_rows($koneksi);

}



?>