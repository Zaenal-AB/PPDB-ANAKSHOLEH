<?php

function select($query)
{
    //panggil koneksi database
    global $conn;

    //eksekusi query
    $result = mysqli_query($conn, $query);
    $row = [];

    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
    return $data;
}



// ================ BAGIAN DATA SISWA ========================= //

//fungsi menambahkan calon siswa
function daftar_siswa($post)
{
    global $conn;

    $nama           = htmlspecialchars($post['nama']);
    $jk             = htmlspecialchars($post['jk']);
    $ttl            = htmlspecialchars($post['ttl']);
    $nisn           = htmlspecialchars($post['nisn']);
    $sekolahasal    = htmlspecialchars($post['sekolahasal']);
    $kelas           = htmlspecialchars($post['kelas']);
    $jalur           = htmlspecialchars($post['jalur']);
    $keterangan      = htmlspecialchars($post['keterangan']);
    $namaayah        = htmlspecialchars($post['namaayah']);
    $noayah          = htmlspecialchars($post['noayah']);
    $pekerjaanayah   = htmlspecialchars($post['pekerjaanayah']);
    $namaibu         = htmlspecialchars($post['namaibu']);
    $noibu           = htmlspecialchars($post['noibu']);
    $pekerjaanibu    = htmlspecialchars($post['pekerjaanibu']);
    $namawali        = htmlspecialchars($post['namawali']);
    $nowali        = htmlspecialchars($post['nowali']);
    $pekerjaanwali   = htmlspecialchars($post['pekerjaanwali']);
    $foto            = upload_file();


    $query      = "INSERT INTO data_ppdb VALUES (null, null, '$nama', '$jk', '$ttl', '$nisn', '$sekolahasal', '$kelas', '$jalur', '$keterangan', '$namaayah', '$noayah', '$pekerjaanayah', '$namaibu', '$noibu', '$pekerjaanibu', '$namawali', '$nowali', '$pekerjaanwali', '$foto')";
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// =========== UPLOAD GAMBAR =============== //

// fungsi mengupload file
function upload_file()
{
    $namaFile   = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error      = $_FILES['foto']['error'];
    $tmpName    = $_FILES['foto']['tmp_name'];

    // check file yang diupload
    $extensifileValid = ['jpg', 'jpeg', 'png'];
    $extensifile      = explode('.', $namaFile);
    $extensifile      = strtolower(end($extensifile));

    // check format/extensi file
    if (!in_array($extensifile, $extensifileValid)) {
        // pesan gagal
        echo "<script>
                alert('Format File Tidak Valid');
                document.location.href = 'index.php';
              </script>";
        die();
    }

    // check ukuran file 10 MB
    if ($ukuranFile > 10048000) {
        // pesan gagal
        echo "<script>
                alert('Ukuran File Max 10 MB');
                document.location.href = 'index.php';
              </script>";
        die();
    }

    // generate nama file baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extensifile;

    // pindahkan ke folder local
    move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);
    return $namaFileBaru;
}
