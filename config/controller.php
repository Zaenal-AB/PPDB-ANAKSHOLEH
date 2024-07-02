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


    $query      = "INSERT INTO data_ppdb VALUES (null, null, '$nama', '$jk', '$ttl', '$nisn', '$sekolahasal', '$kelas', '$jalur', '$keterangan', '$namaayah', '$noayah', '$pekerjaanayah', '$namaibu', '$noibu', '$pekerjaanibu', '$namawali', '$nowali', '$pekerjaanwali')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
