<?php

$id = $_GET['id'];
$judul = isset($_GET['judul']) ? $_GET['judul'] : '';
$tgl_kembali = isset($_GET['tgl_kembali']) ? $_GET['tgl_kembali'] : '';
$lambat = isset($_GET['lambat']) ? $_GET['lambat'] : '';


if ($lambat > 7) {
?>

    <script type="text/javascript">
        alert("Pinjam Buku Tidak Dapat Diperpanjang, Karena Lebih Dari 7 Hari. Kembalikan Dahulu Kemudian Pinjam Kembali");
        window.location.href = "?page=transaksi";
    </script>

    <?php
} else {
    $pecah_tgl_kembali = explode("-", $tgl_kembali);
    $next_7_hari = mktime(0, 0, 0, $pecah_tgl_kembali[1], $pecah_tgl_kembali[0] + 7, $pecah_tgl_kembali[2]);
    // var_dump($pecah_tgl_kembali[1]);
    // var_dump($pecah_tgl_kembali[0]);
    // var_dump($pecah_tgl_kembali[2]);
    // var_dump($next_7_hari);

    $hari_next = date("d-m-Y", $next_7_hari);
    // var_dump($hari_next);
    // die;

    $sql = $koneksi->query("update tb_transaksi set tgl_kembali='$hari_next' where id='$id'");
    // var_dump($sql);
    // die;
    if ($sql) {
    ?>
        <!-- notif berhasil pinjam -->
        <script type="text/javascript">
            alert("Berhasil diperpanjang 7 hari");
            window.location.href = "?page=transaksi";
        </script>
<?php
    }
}
?>