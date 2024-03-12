<?php
    include_once 'header.php';
?>

<form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="" action="form_nilai.php">
<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

        
                <?php
                    require_once 'libfungsi.php';
                    if(isset($_POST['kirim'])){
                        $nme = $_POST['nama'];
                        $mtkul = $_POST['matkul'];
                        $uts = $_POST['nilai_uts'];
                        $uas = $_POST['nilai_uas'];
                        $tugas = $_POST['nilai_tugas'];
                        
                        // Menghitung rata-rata
                        $kelulusan = number_format(($uts + $uas + $tugas) / 3, 2);
                        
                        // Menghitung Grade
                        $grade = grade($kelulusan);
                        
                        // Menentukan predikat
                        $predikat = predikat($grade);
                
                        // Menentukan kelulusan
                        $lulus = cekKelulusan($kelulusan);
                        
                        // Memanggil data
                        echo '<tr>';
                        echo '<td>3</td>';
                        echo '<td>' . $nme . '</td>';
                        echo '<td>' . $mtkul . '</td>';
                        echo '<td>' . $uts . '</td>';
                        echo '<td>' . $uas . '</td>';
                        echo '<td>' . $tugas . '</td>';
                        echo '<td>' . $kelulusan . '</td>';
                        echo '<td>' . $grade . '</td>';
                        echo '<td>' . $predikat . '</td>';
                        echo '<td>' . $lulus . '</td>';
                        echo '</tr>';
                    } else {
                        // Belum submit
                        echo "<tr><td colspan='10'>Form belum dikirim, data akan muncul setelah klik kirim.</td></tr>";
                    }
                ?>



      </tbody>
  </table>
</div>

<?php
    include_once 'footer.php';
?>