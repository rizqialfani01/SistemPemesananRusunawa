<?php
    include "../config.php";

    session_start();
    if($_SESSION['status']!="login_rusunawa"){
        header("location: ../login?pesan=belum_login");
    }

    else {
        if (isset($_GET['insert'])){
            if ($_GET['insert'] == "penghuni"){
                $stmt = $conn->prepare("INSERT INTO penghuni SET id_kamar=?, nama=?, nim=?, id_fakultas=?, id_prodi=?, tempat_lahir=?, tgl_lahir=?, agama=?, alamat=?, no=?, nama_ortu=?, pekerjaan_ortu=?, alamat_ortu=?, no_ortu=?, tahun_masuk=?, masa_huni=?, kategori=?, biaya=?, bayar=?, piutang=?, status=?");
                $stmt->bind_param("sssiissssssssssisiiis", $_POST['id_kamar'], $_POST['nama'], $_POST['nim'], $_POST['id_fakultas'], $_POST['id_prodi'], $_POST['tempat_lahir'], $_POST['tgl_lahir'], $_POST['agama'], $_POST['alamat'], $_POST['no'], $_POST['nama_ortu'], $_POST['pekerjaan_ortu'], $_POST['alamat_ortu'], $_POST['no_ortu'], $_POST['tahun_masuk'], $_POST['masa_huni'], $_POST['kategori'], $_POST['biaya'], $_POST['bayar'], $_POST['piutang'], $_POST['status']);
                $stmt->execute();

                if ($stmt){
                    echo "New record created successfully";
                }
                else {
                    echo "Error: " . $stmt . "<br>" . $conn->error;
                }

                $stmt->close();
            }
        }

        else if (isset($_GET['update'])){
            if ($_GET['update'] == "peserta"){
                $stmt = $conn->prepare("UPDATE peserta SET nama=?, jenis_kelamin=?, email=?, hp=?, id_kota=?, id_seminar=? WHERE id=?");
                $stmt->bind_param("ssssiii", $_POST['nama'], $_POST['gender'], $_POST['email'], $_POST['hp'], $_POST['kota'], $_POST['seminar'], $_POST['no_id']);
                $stmt->execute();
        
                if ($stmt){
                    header("location: detailpeserta.php");
                }
        
                $stmt->close();
            }
            else if ($_GET['update'] == "seminar"){
                $stmt = $conn->prepare("UPDATE seminar SET nama_seminar=?, waktu=?, tempat=?, htm=? WHERE id_seminar=?");
                $stmt->bind_param("sssii", $_POST['judul'], $_POST['waktu'], $_POST['tempat'], $_POST['htm'], $_POST['id_seminar']);
                $stmt->execute();
        
                if ($stmt){
                    header("location: seminar.php");
                }
        
                $stmt->close();
            }
        }

        else if (isset($_GET['delete_peserta_id'])){
            $stmt = $conn->prepare("DELETE FROM peserta WHERE id=?");
            $stmt->bind_param("s", $_GET['delete_peserta_id']);
            $stmt->execute();

            if ($stmt){
                header("location: detailpeserta.php");
            }

            $stmt->close();
        }

        else if (isset($_GET['delete_seminar_id'])){
            $stmt = $conn->prepare("DELETE FROM seminar WHERE id_seminar=?");
            $stmt->bind_param("s", $_GET['delete_seminar_id']);
            $stmt->execute();

            if ($stmt){
                header("location: seminar.php");
            }

            $stmt->close();
        }
        
        else if (isset($_GET['action'])){
            if ($_GET['action'] == "cari"){
                if (isset($_POST['search_seminar'])) {
                    $search = "%{$_POST['search_seminar']}%";
                    $data_seminar = $conn->prepare("SELECT * FROM seminar WHERE nama_seminar LIKE ? OR tempat LIKE ?");
                    $data_seminar->bind_param("ss", $search, $search);
                    $data_seminar->execute();
                    $result = $data_seminar->get_result();
                    while ($row = $result->fetch_assoc()) {
                        echo
                        "<tr>
                            <td class='text-center'>".$row['id_seminar']."</td>
                            <td>".$row['nama_seminar']."</td>
                            <td class='text-center'>".$row['waktu']."</td>
                            <td>".$row['tempat']."</td>
                            <td class='text-right'>Rp. ".$row['htm']."</td>
                            <td class='text-center'>
                                <a class='btn btn-sm btn-info' href='edit_seminar.php?id=".$row['id_seminar']."'>
                                    <span class='ti-pencil'>
                                    </span> Edit
                                </a>
                                <a class='btn btn-sm btn-danger' href='action.php?delete_seminar_id=".$row['id_seminar']."'>
                                    <span class='ti-trash'>
                                    </span> Hapus
                                </a>
                            </td>
                        </tr>";
                    }
                    $data_seminar->close();
                }
                else if (isset($_POST['search_peserta'])) {
                    $no = 1;
                    $search = "%{$_POST['search_peserta']}%";
                    $data_peserta = $conn->prepare("SELECT * FROM datapeserta WHERE nama LIKE ? OR nama_seminar LIKE ?");
                    $data_peserta->bind_param("ss", $search, $search);
                    $data_peserta->execute();
                    $result = $data_peserta->get_result();
                    while ($row = $result->fetch_assoc()) {
                        echo
                        "<tr>
                            <td class='text-center'>".$no++."</td>
                            <td>".$row['nama']."</td>
                            <td>".$row['id']."</td>
                            <td>".$row['nama_seminar']."</td>
                            <td class='text-center'>".$row['waktu']."</td>
                            <td class='text-center'>
                                <a class='btn btn-sm btn-info' href='edit_peserta.php?id=".$row['id']."'>
                                    <span class='ti-pencil'>
                                    </span>Edit
                                </a>
                                <a class='btn btn-sm btn-danger' href='action.php?delete_peserta_id=".$row['id']."'>
                                    <span class='ti-trash'>
                                    </span>Hapus
                                </a>
                            </td>
                        </tr>";
                    }
                    $data_peserta->close();
                }
                else if (isset($_POST['search_detailpeserta'])) {
                    $no = 1;
                    $search = "%{$_POST['search_detailpeserta']}%";
                    $detail_peserta = $conn->prepare("SELECT * FROM detailpeserta WHERE nama LIKE ? OR kota LIKE ? OR provinsi LIKE ? ORDER BY nama");
                    $detail_peserta->bind_param("sss", $search, $search, $search);
                    $detail_peserta->execute();
                    $result = $detail_peserta->get_result();
                    while ($row = $result->fetch_assoc()) {
                        echo
                        "<tr>
                            <td class='text-center'>".$no++."</td>
                            <td>".$row['nama']."</td>
                            <td>".$row['id']."</td>
                            <td class='text-center'>".$row['jenis_kelamin']."</td>
                            <td>".$row['hp']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['kota'].", ".$row['provinsi']."</td>
                            <td class='text-center'>".$row['id_seminar']."</td>
                            <td class='text-center'>".$row['waktu']."</td>
                            <td class='text-center'>
                                <a class='btn btn-sm btn-info' href='edit_peserta.php?id=".$row['id']."'>
                                    <span class='ti-pencil' title='Edit'>
                                    </span>Edit
                                </a>
                                <a class='btn btn-sm btn-danger' href='action.php?delete_peserta_id=".$row['id']."'>
                                    <span class='ti-trash' title='Edit'>
                                    </span>Hapus
                                </a>
                            </td>
                        </tr>";
                    }
                    $detail_peserta->close();
                }
            }
        }
        else{
            echo "403 FORBIDDEN";
        }
    }
?>