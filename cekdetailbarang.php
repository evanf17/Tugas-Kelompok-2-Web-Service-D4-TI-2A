<div class="col-md-12">
    <ol class="breadcrumb">
        <li><a href="#">Beranda</a></li>
        <li class="active">Masukan Informasi</li>
    </ol>
</div>
<div class="col-md-4">
    <div class="layout1">
        <div class="title">
            Input Informasi
        </div>
        <?php
            echo '<form action="client.php" method="post">
                <div class="input">
                    <p>Nama</p>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anda">
                </div>
                <div class="input">
                    <p>NPM</p>
                    <input type="text" name="npm" class="form-control" placeholder="Masukan NPM anda">
                </div>
                <div class="input">
                    <p>agama</p>
                    <input type="text" name="agama" class="form-control" placeholder="Masukan Agama Anda">
                </div>
                <div class="input">
                    <p>kelahiran</p>
                    <input type="text" name="kelahiran" class="form-control" placeholder="Masukan Kelahiran Anda">
                </div>
                <div class="button">
                    <input type="submit" name="proses" value="Input Informasi" class="btn btn-primary">
                </div?
            </form>';
        ?>
    </div>
</div>
