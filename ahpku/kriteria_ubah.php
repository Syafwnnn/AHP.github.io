<?php
$row = $db->get_row("SELECT * FROM tb_kriteria WHERE kode_kriteria='$_GET[ID]'");
?>
<div class="page-header">
    <h1>Ubah Kriteria</h1>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if ($_POST) include 'aksi.php' ?>
        <form method="post">
            <div class="form-group">
                <label>Kode <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kode_kriteria" readonly="readonly" value="<?= $row->kode_kriteria ?>" />
            </div>
            <div class="form-group">
                <label>Nama kriteria <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_kriteria" value="<?= set_value('nama_kriteria', $row->nama_kriteria) ?>" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                <a class="btn btn-danger" href="?m=kriteria"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
        </form>
    </div>
</div>