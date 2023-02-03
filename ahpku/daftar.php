<div class="page-header">
    <h1>Registrasi</h1>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if ($_POST) include 'aksi.php' ?>
        <form method="post">
            <div class="form-group">
                <label>Nama User <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama_user" value="<?= set_value('nama_user') ?>" />
            </div>
            <div class="form-group">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="user" value="<?= set_value('user') ?>" />
            </div>
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="pass1" value="<?= set_value('pass1') ?>" />
            </div>
            <div class="form-group">
                <label>Konfirmasi Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="pass2" value="<?= set_value('pass2') ?>" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Registrasi</button>
                <a class="btn btn-danger" onclick="location.href='../index.html'"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
        </form>
    </div>
</div>