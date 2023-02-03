<div class="page-header">
    <h1>Login</h1>
</div>
<div class="row">
    <div class="col-md-4">
        <?= show_msg() ?>
        <?php if ($_POST) include 'aksi.php'; ?>
        <form class="form-signin" action="?m=login" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Username" name="user" autofocus />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" />
            </div>
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-log-in"></span> Masuk</button>
            <a class="btn btn-danger" onclick="location.href='../index.html'"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
            </div>
        </form>
    </div>
</div>