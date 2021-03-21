<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
$proses = $_POST['proses'];
        $nama_siswa = $_POST['nama'];
        $nim = $_POST['nim'];
        $mata_kuliah = $_POST['matkul'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $kalk = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
        $nilai_akhir = number_format($kalk, 2);
        
        require_once 'libfungsi.php';
        
?>        
    <div class="d-flex justify-content-center" style="margin: 100px;">
        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 60rem; padding:50px;">
            <br>
            <h4 class="text-center">Daftar Nilai Mahasiswa</h4>
            <br>
            <table border="1" width="100%" style="text-align: center;" class="table">
                <tbody>
                    <tr>
                        <td>Nama Siswa</td>
                        <td><?php echo $nama_siswa?></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td><?php echo $nim?></td>
                    </tr> 
                    <tr>
                        <td>Mata Kuliah</td>
                        <td><?php echo $mata_kuliah?></td>
                    </tr>
                    <tr>
                        <td>Nilai UTS</td>
                        <td><?php echo $nilai_uts?></td>
                    </tr>
                    <tr>
                        <td>Nilai UAS</td>
                        <td><?php echo $nilai_uas?></td>
                    </tr> 
                    <tr>
                        <td>Nilai Tugas</td>
                        <td><?php echo $nilai_tugas?></td>
                    </tr> 
                    <tr>
                        <td>Nilai Keseluruhan</td>
                        <td><?php echo $nilai_akhir?></td>
                    </tr>  
                    <tr>
                        <td>Grade Nilai</td>
                        <td><?php echo grade_nilai($nilai_akhir)?></td>
                    </tr> 
                    <tr>
                        <td>Predikat Nilai</td>
                        <td><?php echo predikat_nilai($nilai_akhir)?></td>
                    </tr>    
                    <tr>
                        <td>Mahasiswa Dinyatakan</td>
                        <td><?php echo nilai($nilai_akhir)?></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <a class="btn btn-success" href="form_nilai.php" role="button">Kembali</a>
        </div>
    </div>
    <footer class="main-footer mt-auto py-3 bg-dark text-white ">
          <div class="container-fluid">
              <div class="pull-right hidden-xs">
                  Made with <i class="text-red fa fa-heart" title="love"></i>  & <i class="fa fa-coffee" title="coffee"></i>  by <a href="#" class="text-light">DREAMURZ</a>
              </div>
              <strong>Copyright &copy; 2021 <a href="#" class="text-light">Praktikum 02</a>.</strong> All rights reserved.
          </div>
    </footer>