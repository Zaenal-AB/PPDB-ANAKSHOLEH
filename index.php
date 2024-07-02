<?php

$title = 'Formulir Pendaftaran';
include 'config/app.php';
include 'layout/header.php';

//jika tombol ditekan, jalankan script berikut
if (isset($_POST['daftar'])) {
    if (daftar_siswa($_POST) > 0) {
        echo "<script> alert('Pendaftaran Calon Siswa Baru Berhasil')
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script> alert('Pendaftaran Calon Siswa Baru Gagal')
        document.location.href = 'index.php';
        </script>";
    }
}

?>

<!-- ini buat spasi antara navbar dan greeting section -->
<div class="margin-bottom-100"></div>

<!-- Start Form-pendaftaran -->
<section class="form-pendaftaran margin-bottom-100">

    <div class="container">
        <div class="row">

            <form action="" method="post">
                <h3>Form Pendaftaran</h3>
                <hr>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Lengkap *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="nama" placeholder="Contoh: Fulan bin Fulan">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jk" class="col-sm-2 control-label">Jenis Kelamin *</label>
                        <div class="col-sm-10">
                            <select type="text" class="form-control" id="jk" name="jk" required>
                                <option value=""> -- Jenis Kelamin --</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tempat, Tanggal Lahir *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="ttl" placeholder="Mataram, 1 Januari 2010 *">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">NISN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nisn" placeholder="Masukan NISN Siswa">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Sekolah Asal *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="sekolahasal" placeholder="Contoh: SDIT Anak Sholeh Mataram *">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kelas" class="col-sm-2 control-label">Pilihan Kelas *</small></label>
                        <div class="col-sm-10">
                            <select type="text" class="form-control" id="kelas" name="kelas" required>
                                <option value=""> -- Pilihan Kelas --</option>
                                <option value="Kelas Reguler">Kelas Reguler</option>
                                <option value="Kelas Tahfidz">Kelas Tahifz</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jalur" class="col-sm-2 control-label">Jalur Masuk Yang Dipilih *</small></label>
                        <div class="col-sm-10">
                            <select type="text" class="form-control" id="jalur" name="jalur" required>
                                <option value=""> -- Jalur Masuk Yang Dipilih --</option>
                                <option value="Kelas Reguler">Jalur Tahfidz (Jumlah juz hafalan ditulis di keterangan)</option>
                                <option value="Kelas Tahfidz">Jalur Prestasi (Prestasi yang diraih ditulis di keterangan)</option>
                                <option value="Kelas Tahfidz">Jalur Reguler (Jalur masuk tanpa beasiswa)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label class="col-sm-2 control-label" for="keterangan">Keterangan Jalur masuk</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" placeholder="Keterangan jalur masuk" id="keterangan" name="keterangan" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <br>
                    <!-- INPUT DATA ORANG TUA  -->
                    <!-- DATA AYAH -->
                    <div class="form-group mt-3">
                        <label class="col-sm-2 control-label">Nama Ayah *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="namaayah" placeholder="Fulan bin Fulan">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nomor HP/WA Ayah *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="noayah" placeholder="08x xxx xxx xxx">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pekerjaan Ayah *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="pekerjaanayah" placeholder="Contoh: Wiraswasta">
                        </div>
                    </div>

                    <!-- DATA IBU -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Ibu *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="namaibu" placeholder="Fulanah Binti Fulan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nomor HP/WA Ibu *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="noibu" placeholder="08x xxx xxx xxx">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pekerjaan Ibu *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required name="pekerjaanibu" placeholder="Contoh: Ibu Rumah Tangga">
                        </div>
                    </div>

                    <!-- DATA Wali -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Wali</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="namawali" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nomor HP/WA Wali</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nowali" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pekerjaan Wali</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="pekerjaanwali" placeholder="">
                        </div>
                    </div>

                    <div class="form-group" style="color: red;">
                        <label class="col-sm-2 control-label">* : Wajib di Isi</label>
                    </div>
                    <button type="submit" name="daftar" class="btn btn-daftar btn-lg btn-primary">Daftar</button>
                </div>

            </form>

        </div>
    </div>

</section>
<!-- /End Form-pendaftaran -->

<?php
include 'layout/footer.php';
?>