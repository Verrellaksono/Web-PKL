<?php
include ('../config.php');

if (isset($_POST['Simpan'])) {
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    $intro = $_POST['intro'];
    $project_deskripsi = $_POST['project_deskripsi'];
    $kesan = $_POST['kesan'];
    
    // highlight
    $namagambar = $_FILES['highlight']['name'];
    $ukuran = $_FILES['highlight']['size'];
    $file_tmp = $_FILES['highlight']['tmp_name'];
    
    // project_gambar
    $jumlahFile = count($_FILES['project_gambar']['name']);

    // gambar
    // $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    // $x = explode('.', $namagambar);
    // $ekstensi = strtolower(end($x));
    // if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    //     if ($ukuran < 1044070) {
    //         move_uploaded_file($file_tmp, '../asset/img/highlight/' . $namagambar);

    //         for($j=0; $j<$jumlahFile; $j++){
    //             $namafile = $_FILES['project_gambar']['name'][$j];
    //             $tmp = $_FILES['[project_gambar]']['tmp_name'][$j];
    //             $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
    //             $size = $_FILES['foto']['size'][$j];	
    //             if($size <= 1044070){
    //                 if(in_array($tipe_file, $ekstensi_diperbolehkan)){
    //                     move_uploaded_file($tmp, '../asset/img/project_gambar/'.date('d-m-Y').'-'.$namafile);
    //                     $j = date('d-m-Y').'-'.$namafile;
    //                 }
    //             }
    //         }
    //     }
    // } else {
    //     $_SESSION['gagalposting'] = "Maaf Postingan tidak berhasil disimpan karena Format tidak sesuai atau ukuran terlalu besar";
    //     header("location:data.php?gagal");
    // }

    move_uploaded_file($file_tmp, '../asset/img/highlight/' . $namagambar);

    for($i=0; $i<$jumlahFile; $i++){
        $namafile = $_FILES['project_gambar']['name'][$i];
        $tmp = $_FILES['project_gambar']['tmp_name'][$i];
        $size = $_FILES['project_gambar']['size'][$i];	
        // if($size <= 1044070){
        //     if(in_array($tipe_file, $ekstensi_diperbolehkan)){
        //         move_uploaded_file($tmp, '../asset/img/project_gambar/'.date('d-m-Y').'-'.$namafile);
        //         $j = date('d-m-Y').'-'.$namafile;
        //     }
        // }


        move_uploaded_file($tmp, '../asset/img/project_gambar/'.$namafile);
        // $j = date('d-m-Y').'-'.$namafile;
    }

    $koneksi->query("INSERT INTO data(tanggal, highlight, deskripsi, intro, project_gambar, project_deskripsi, kesan) VALUES ('$tanggal', '$namagambar', '$deskripsi', '$intro', '$namafile', '$project_deskripsi', '$kesan')");
    header("location:data.php?tambah+data");
}
