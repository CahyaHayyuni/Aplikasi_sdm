<?php

$id = $_GET['id'];
$judul = $_GET['judul'];


$sql = $koneksi->query("update tb_transaksi set status='Diserahkan' where id='$id'");

$sql = $koneksi->query("update tb_buku set jumlah_buku = (jumlah_buku+1) where judul='$judul'");

?>
<script type="text/javascript">
    alert("Proses Diserahkan Barang Berhasil");
    window.location.href = "?page=transaksi";
</script>
<?php


?>