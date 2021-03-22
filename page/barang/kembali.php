<?php

$id = $_GET['id'];

$sql = $koneksi->query("select * from tb_barang where id='$id'");

$tampil = $sql->fetch_assoc();

$divisi = $tampil['divisi'];
?>

<div class="panel panel-default">
    <div class="panel-heading">
        Kembali
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">

                <form method="POST">
                    <div class="form-group">
                        <label>Nip</label>
                        <input class="form-control" name="nip" value="<?php echo $tampil['nip'] ?>" readonly />

                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" value="<?php echo $tampil['nama'] ?>" />

                    </div>

                    <div class="form-group">
                        <label>Barang</label>
                        <input class="form-control" name="barang" value="<?php echo $tampil['barang'] ?>" readonly />

                    </div>

                    <div class="form-group">
                        <label>Pengirim</label>
                        <input class="form-control" name="pengirim" value="<?php echo $tampil['pengirim'] ?>" readonly />

                    </div>

                    <div class="form-group">
                        <label>Tanggal Datang</label>
                        <input class="form-control" name="tgl_datang" type="date" value="<?php echo $tampil['tgl_datang'] ?>" readonly />

                    </div>

                    <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input class="form-control" name="tgl_kembali" type="date" />

                    </div>

                    <div class="form-group">
                        <label>Divisi</label>
                        <select class="form-control" name="divisi" readonly>
                            <option value="it" <?php if ($divisi == 'it') {
                                                    echo "selected";
                                                } ?>>Informasi Teknologi</option>
                            <option value="tnk" <?php if ($divisi == 'tnk') {
                                                    echo "selected";
                                                } ?>>Teknik</option>
                            <option value="kom" <?php if ($divisi == 'kom') {
                                                    echo "selected";
                                                } ?>>Komersial</option>
                            <option value="keu" <?php if ($divisi == 'keu') {
                                                    echo "selected";
                                                } ?>>Keuangan</option>
                            <option value="qrm" <?php if ($divisi == 'qrm') {
                                                    echo "selected";
                                                } ?>>Menegement Resiko & Mutu</option>
                            <option value="tpkb" <?php if ($divisi == 'tpkb') {
                                                        echo "selected";
                                                    } ?>>TPKB</option>
                            <option value="trs" <?php if ($divisi == 'trs') {
                                                    echo "selected";
                                                } ?>>Trisakti</option>
                            <option value="hsse" <?php if ($divisi == 'hsse') {
                                                        echo "selected";
                                                    } ?>>HSSE</option>
                            <option value="umum" <?php if ($divisi == 'umum') {
                                                        echo "selected";
                                                    } ?>>SDM & Umum</option>
                        </select>
                    </div>


                    <div>
                        <input type="hidden" name="id" value=<?= $id ?>>
                        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php

$id = isset($_POST['id']) ? $_POST['id'] : '';
$nip = isset($_POST['nip']) ? $_POST['nip'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$barang = isset($_POST['barang']) ? $_POST['barang'] : '';
$pengirim = isset($_POST['pengirim']) ? $_POST['pengirim'] : '';
$tgl_datang = isset($_POST['tgl_datang']) ? $_POST['tgl_datang'] : '';
$tgl_kembali = isset($_POST['tgl_kembali']) ? $_POST['tgl_kembali'] : '';
$divisi = isset($_POST['divisi']) ? $_POST['divisi'] : '';

$simpan = isset($_POST['simpan']) ? $_POST['simpan'] : '';

if ($simpan) {


    $sql = $koneksi->query("insert into tb_histori (id, nip, nama, barang, pengirim, tgl_datang, tgl_kembali, divisi)value('$id', '$nip', '$nama', '$barang', '$pengirim', '$tgl_datang', '$tgl_kembali', '$divisi')");
    $koneksi->query("delete from tb_barang where id ='$id'");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Ubah Berhasil Disimpan");
            window.location.href = "?page=barang&surat";
        </script>
<?php
    }
}

?>