<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            
            $nama_beasiswa = $_POST['nama_beasiswa'];
            $nilai_raport = $_POST['nilai_raport'];
            $penghasilan = $_POST['penghasilan'];
            $tanggungan = $_POST['tanggungan'];

            $query = "INSERT INTO tb_beasiswa VALUES(null, '$nama_beasiswa', '$nilai_raport', '$penghasilan', '$tanggungan')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: index.php");
                //echo "DATA BERHASIL DITAMBAHKAN <a href='index.php'>[Home]</a>";
            } else {
                echo $query;
            }

            echo $nama_beasiswa." | ".$nilai_raport." | ".$penghasilan." | ".$tanggungan;

            echo "<br>Tambah Data <a href='index.php'>[Home]</a>";
        } else if($_POST['aksi'] == "edit"){
            //echo "Edit Data <a href='index.php'>[Home]</a>";
            //var_dump($_POST);
            $id = $_POST['id'];
            $nama_beasiswa = $_POST['nama_beasiswa'];
            $nilai_raport = $_POST['nilai_raport'];
            $penghasilan = $_POST['penghasilan'];
            $tanggungan = $_POST['tanggungan'];

            $query = "UPDATE tb_beasiswa SET nama_beasiswa='$nama_beasiswa', nilai_raport='$nilai_raport', penghasilan='$penghasilan', tanggungan='$tanggungan' WHERE id='$id';";

            $sql = mysqli_query($conn, $query);
            header("location: index.php");

        }
    }

    if(isset($_GET['hapus'])){
        $id = $_GET['hapus'];
        $query = "DELETE FROM tb_beasiswa WHERE id = '$id';";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index.php");
            //echo "DATA BERHASIL DIHAPUS <a href='index.php'>[Home]</a>";
        } else {
            echo $query;
        }
        //echo "Hapus Data <a href='index.php'>[Home]</a>";
    }
?>