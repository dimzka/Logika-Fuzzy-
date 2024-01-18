<?php
$nama_lengkap = $_POST['nama_lengkap'];
$nilai_1 = $_POST['nilai_1'];
$nilai_2 = $_POST['nilai_2'];
$nilai_3 = $_POST['nilai_3'];
$nilai_4 = $_POST['nilai_4'];
$nilai_5 = $_POST['nilai_5'];
$nilai_6 = $_POST['nilai_6'];
$nilai_7 = $_POST['nilai_7'];
$nilai_8 = $_POST['nilai_8'];
$nilai_9 = $_POST['nilai_9'];
$nilai_10 = $_POST['nilai_10'];
$nilai_11 = $_POST['nilai_11'];
$nilai_12 = $_POST['nilai_12'];
$nilai_13 = $_POST['nilai_13'];
$nilai_14 = $_POST['nilai_14'];
$nilai_15 = $_POST['nilai_15'];
$nilai_16 = $_POST['nilai_16'];
$nilai_17 = $_POST['nilai_17'];
$nilai_18 = $_POST['nilai_18'];

//cek nilai 1
if ($nilai_1 <= 40) {
  $cukup_1 = 1;
} else if ($nilai_1 > 40 and $nilai_1 < 60) {
  $cukup_1 = (60 - $nilai_1) / 20;
} else {
  $cukup_1 = 0;
}

if ($nilai_1 >= 60) {
  $baik_1 = 1;
} else if ($nilai_1 > 40 and $nilai_1 < 60) {
  $baik_1 = ($nilai_1 - 40) / 20;
} else {
  $baik_1 = 0;
}

if ($cukup_1 < $baik_1) {
  $resultnilai_1 = ['Baik', $baik_1];
} else {
  $resultnilai_1 = ['cukup', $cukup_1];
}

//cek nilai 2
if ($nilai_2 <= 40) {
  $cukup_2 = 1;
} else if ($nilai_2 > 40 and $nilai_2 < 60) {
  $cukup_2 = (60 - $nilai_2) / 20;
} else {
  $cukup_2 = 0;
}

if ($nilai_2 >= 60) {
  $baik_2 = 1;
} else if ($nilai_2 > 40 and $nilai_2 < 60) {
  $baik_2 = ($nilai_2 - 40) / 20;
} else {
  $baik_2 = 0;
}

if ($cukup_2 < $baik_2) {
  $resultnilai_2 = ['Baik', $baik_2];
} else {
  $resultnilai_2 = ['cukup', $cukup_2];
}

//cek nilai 3
if ($nilai_3 <= 40) {
  $cukup_3 = 1;
} else if ($nilai_3 > 40 and $nilai_3 < 60) {
  $cukup_3 = (60 - $nilai_3) / 20;
} else {
  $cukup_3 = 0;
}

if ($nilai_3 >= 60) {
  $baik_3 = 1;
} else if ($nilai_3 > 40 and $nilai_3 < 60) {
  $baik_3 = ($nilai_3 - 40) / 20;
} else {
  $baik_3 = 0;
}

if ($cukup_3 < $baik_3) {
  $resultnilai_3 = ['Baik', $baik_3];
} else {
  $resultnilai_3 = ['cukup', $cukup_3];
}

//cek nilai 4
if ($nilai_4 <= 40) {
  $cukup_4 = 1;
} else if ($nilai_4 > 40 and $nilai_4 < 60) {
  $cukup_4 = (60 - $nilai_4) / 20;
} else {
  $cukup_4 = 0;
}

if ($nilai_4 >= 60) {
  $baik_4 = 1;
} else if ($nilai_4 > 40 and $nilai_4 < 60) {
  $baik_4 = ($nilai_4 - 40) / 20;
} else {
  $baik_4 = 0;
}

if ($cukup_4 < $baik_4) {
  $resultnilai_4 = ['Baik', $baik_4];
} else {
  $resultnilai_4 = ['cukup', $cukup_4];
}

//cek nilai 5
if ($nilai_5 <= 40) {
  $cukup_5 = 1;
} else if ($nilai_5 > 40 and $nilai_5 < 60) {
  $cukup_5 = (60 - $nilai_5) / 20;
} else {
  $cukup_5 = 0;
}

if ($nilai_5 >= 60) {
  $baik_5 = 1;
} else if ($nilai_5 > 40 and $nilai_5 < 60) {
  $baik_5 = ($nilai_5 - 40) / 20;
} else {
  $baik_5 = 0;
}

if ($cukup_5 < $baik_5) {
  $resultnilai_5 = ['Baik', $baik_5];
} else {
  $resultnilai_5 = ['cukup', $cukup_5];
}

//cek nilai 6
if ($nilai_6 <= 40) {
  $cukup_6 = 1;
} else if ($nilai_6 > 40 and $nilai_6 < 60) {
  $cukup_6 = (60 - $nilai_6) / 20;
} else {
  $cukup_6 = 0;
}

if ($nilai_6 >= 60) {
  $baik_6 = 1;
} else if ($nilai_6 > 40 and $nilai_6 < 60) {
  $baik_6 = ($nilai_6 - 40) / 20;
} else {
  $baik_6 = 0;
}

if ($cukup_6 < $baik_6) {
  $resultnilai_6 = ['Baik', $baik_6];
} else {
  $resultnilai_6 = ['cukup', $cukup_6];
}

//cek nilai 7
if ($nilai_7 <= 40) {
  $cukup_7 = 1;
} else if ($nilai_7 > 40 and $nilai_7 < 60) {
  $cukup_7 = (60 - $nilai_7) / 20;
} else {
  $cukup_7 = 0;
}

if ($nilai_7 >= 60) {
  $baik_7 = 1;
} else if ($nilai_7 > 40 and $nilai_7 < 60) {
  $baik_7 = ($nilai_7 - 40) / 20;
} else {
  $baik_7 = 0;
}

if ($cukup_7 < $baik_7) {
  $resultnilai_7 = ['Baik', $baik_7];
} else {
  $resultnilai_7 = ['cukup', $cukup_7];
}

//cek nilai 8
if ($nilai_8 <= 40) {
  $cukup_8 = 1;
} else if ($nilai_8 > 40 and $nilai_8 < 60) {
  $cukup_8 = (60 - $nilai_8) / 20;
} else {
  $cukup_8 = 0;
}

if ($nilai_8 >= 60) {
  $baik_8 = 1;
} else if ($nilai_8 > 40 and $nilai_8 < 60) {
  $baik_8 = ($nilai_8 - 40) / 20;
} else {
  $baik_8 = 0;
}

if ($cukup_8 < $baik_8) {
  $resultnilai_8 = ['Baik', $baik_8];
} else {
  $resultnilai_8 = ['cukup', $cukup_8];
}

//cek nilai 9
if ($nilai_9 <= 40) {
  $cukup_9 = 1;
} else if ($nilai_9 > 40 and $nilai_9 < 60) {
  $cukup_9 = (60 - $nilai_9) / 20;
} else {
  $cukup_9 = 0;
}

if ($nilai_9 >= 60) {
  $baik_9 = 1;
} else if ($nilai_9 > 40 and $nilai_9 < 60) {
  $baik_9 = ($nilai_9 - 40) / 20;
} else {
  $baik_9 = 0;
}

if ($cukup_9 < $baik_9) {
  $resultnilai_9 = ['Baik', $baik_9];
} else {
  $resultnilai_9 = ['cukup', $cukup_9];
}

//cek nilai 10
if ($nilai_10 <= 40) {
  $cukup_10 = 1;
} else if ($nilai_10 > 40 and $nilai_10 < 60) {
  $cukup_10 = (60 - $nilai_10) / 20;
} else {
  $cukup_10 = 0;
}

if ($nilai_10 >= 60) {
  $baik_10 = 1;
} else if ($nilai_10 > 40 and $nilai_10 < 60) {
  $baik_10 = ($nilai_10 - 40) / 20;
} else {
  $baik_10 = 0;
}

if ($cukup_10 < $baik_10) {
  $resultnilai_10 = ['Baik', $baik_10];
} else {
  $resultnilai_10 = ['cukup', $cukup_10];
}

//cek nilai 11
if ($nilai_11 <= 40) {
  $cukup_11 = 1;
} else if ($nilai_11 > 40 and $nilai_11 < 60) {
  $cukup_11 = (60 - $nilai_11) / 20;
} else {
  $cukup_11 = 0;
}

if ($nilai_11 >= 60) {
  $baik_11 = 1;
} else if ($nilai_11 > 40 and $nilai_11 < 60) {
  $baik_11 = ($nilai_11 - 40) / 20;
} else {
  $baik_11 = 0;
}

if ($cukup_11 < $baik_11) {
  $resultnilai_11 = ['Baik', $baik_11];
} else {
  $resultnilai_11 = ['cukup', $cukup_11];
}

// cek nilai 12
if ($nilai_12 <= 40) {
  $cukup_12 = 1;
} else if ($nilai_12 > 40 and $nilai_12 < 60) {
  $cukup_12 = (60 - $nilai_12) / 20;
} else {
  $cukup_12 = 0;
}

if ($nilai_12 >= 60) {
  $baik_12 = 1;
} else if ($nilai_12 > 40 and $nilai_12 < 60) {
  $baik_12 = ($nilai_12 - 40) / 20;
} else {
  $baik_12 = 0;
}

if ($cukup_12 < $baik_12) {
  $resultnilai_12 = ['Baik', $baik_12];
} else {
  $resultnilai_12 = ['cukup', $cukup_12];
}

// cek nilai 13
if ($nilai_13 <= 40) {
  $cukup_13 = 1;
} else if ($nilai_13 > 40 and $nilai_13 < 60) {
  $cukup_13 = (60 - $nilai_13) / 20;
} else {
  $cukup_13 = 0;
}

if ($nilai_13 >= 60) {
  $baik_13 = 1;
} else if ($nilai_13 > 40 and $nilai_13 < 60) {
  $baik_13 = ($nilai_13 - 40) / 20;
} else {
  $baik_13 = 0;
}

if ($cukup_13 < $baik_13) {
  $resultnilai_13 = ['Baik', $baik_13];
} else {
  $resultnilai_13 = ['cukup', $cukup_13];
}

// cek nilai 14
if ($nilai_14 <= 40) {
  $cukup_14 = 1;
} else if ($nilai_14 > 40 and $nilai_14 < 60) {
  $cukup_14 = (60 - $nilai_14) / 20;
} else {
  $cukup_14 = 0;
}

if ($nilai_14 >= 60) {
  $baik_14 = 1;
} else if ($nilai_14 > 40 and $nilai_14 < 60) {
  $baik_14 = ($nilai_14 - 40) / 20;
} else {
  $baik_14 = 0;
}

if ($cukup_14 < $baik_14) {
  $resultnilai_14 = ['Baik', $baik_14];
} else {
  $resultnilai_14 = ['cukup', $cukup_14];
}

// cek nilai 15
if ($nilai_15 <= 40) {
  $cukup_15 = 1;
} else if ($nilai_15 > 40 and $nilai_15 < 60) {
  $cukup_15 = (60 - $nilai_15) / 20;
} else {
  $cukup_15 = 0;
}

if ($nilai_15 >= 60) {
  $baik_15 = 1;
} else if ($nilai_15 > 40 and $nilai_15 < 60) {
  $baik_15 = ($nilai_15 - 40) / 20;
} else {
  $baik_15 = 0;
}

if ($cukup_15 < $baik_15) {
  $resultnilai_15 = ['Baik', $baik_15];
} else {
  $resultnilai_15 = ['cukup', $cukup_15];
}

// cek nilai 16
if ($nilai_16 <= 40) {
  $cukup_16 = 1;
} else if ($nilai_16 > 40 and $nilai_16 < 60) {
  $cukup_16 = (60 - $nilai_16) / 20;
} else {
  $cukup_16 = 0;
}

if ($nilai_16 >= 60) {
  $baik_16 = 1;
} else if ($nilai_16 > 40 and $nilai_16 < 60) {
  $baik_16 = ($nilai_16 - 40) / 20;
} else {
  $baik_16 = 0;
}

if ($cukup_16 < $baik_16) {
  $resultnilai_16 = ['Baik', $baik_16];
} else {
  $resultnilai_16 = ['cukup', $cukup_16];
}

// cek nilai 17
if ($nilai_17 <= 40) {
  $cukup_17 = 1;
} else if ($nilai_17 > 40 and $nilai_17 < 60) {
  $cukup_17 = (60 - $nilai_17) / 20;
} else {
  $cukup_17 = 0;
}

if ($nilai_17 >= 60) {
  $baik_17 = 1;
} else if ($nilai_17 > 40 and $nilai_17 < 60) {
  $baik_17 = ($nilai_17 - 40) / 20;
} else {
  $baik_17 = 0;
}

if ($cukup_17 < $baik_17) {
  $resultnilai_17 = ['Baik', $baik_17];
} else {
  $resultnilai_17 = ['cukup', $cukup_17];
}

// cek nilai 18
if ($nilai_18 <= 40) {
  $cukup_18 = 1;
} else if ($nilai_18 > 40 and $nilai_18 < 60) {
  $cukup_18 = (60 - $nilai_18) / 20;
} else {
  $cukup_18 = 0;
}

if ($nilai_18 >= 60) {
  $baik_18 = 1;
} else if ($nilai_18 > 40 and $nilai_18 < 60) {
  $baik_18 = ($nilai_18 - 40) / 20;
} else {
  $baik_18 = 0;
}

if ($cukup_18 < $baik_18) {
  $resultnilai_18 = ['Baik', $baik_18];
} else {
  $resultnilai_18 = ['cukup', $cukup_18];
}


// Array yang berisi semua nilai yang ingin diperiksa
$nilai_array = array(
  $resultnilai_1[0], $resultnilai_2[0], $resultnilai_3[0], $resultnilai_4[0],
  $resultnilai_5[0], $resultnilai_6[0], $resultnilai_7[0], $resultnilai_8[0],
  $resultnilai_9[0], $resultnilai_10[0], $resultnilai_11[0], $resultnilai_12[0],
  $resultnilai_13[0], $resultnilai_14[0], $resultnilai_15[0], $resultnilai_16[0],
  $resultnilai_17[0], $resultnilai_18[0]
);

// Mengelompokkan kriteria
$grouped_criteria = array(
  'KK-A' => array($resultnilai_1[0], $resultnilai_2[0]),
  'KK-B' => array($resultnilai_3[0], $resultnilai_4[0]),
  'KK-C' => array($resultnilai_5[0], $resultnilai_6[0]),
  'KK-D' => array($resultnilai_7[0], $resultnilai_8[0]),
  'KK-E' => array($resultnilai_9[0], $resultnilai_10[0]),
);

// cek persayaratan kriteria
$grouped_criteria_a = array(
  $resultnilai_11[0], $resultnilai_12[0], $resultnilai_14[0], $resultnilai_16[0], $resultnilai_18[0], $resultnilai_17[0]
);

$grouped_criteria_b = array(
  $resultnilai_11[0], $resultnilai_12[0], $resultnilai_14[0], $resultnilai_15[0], $resultnilai_17[0]
);

$grouped_criteria_c = array(
  $resultnilai_11[0], $resultnilai_13[0], $resultnilai_14[0], $resultnilai_15[0],  $resultnilai_17[0], $resultnilai_18[0]
);

$grouped_criteria_d = array(
  $resultnilai_11[0], $resultnilai_12[0], $resultnilai_14[0], $resultnilai_16[0], $resultnilai_18[0]
);

$grouped_criteria_e = array(
  $resultnilai_11[0], $resultnilai_13[0], $resultnilai_14[0], $resultnilai_15[0], $resultnilai_16[0], $resultnilai_17[0], $resultnilai_18[0]
);

// Inisialisasi hasil
$result = '';
$result_2 = '';

$hasil_nilai_baik = 0;
$hitung_nilai_cukup = 0;

// insialisasi persyaratan kriteria
$syarat_a = 0;
$syarat_b = 0;
$syarat_c = 0;
$syarat_d = 0;
$syarat_e = 0;

// menghitung persyaratan kriteria
foreach ($grouped_criteria_a as $group => $criteria) {
  if ($criteria == 'Baik') {
    $syarat_a += 1;
  }
}

foreach ($grouped_criteria_b as $group => $criteria) {
  if ($criteria == 'Baik') {
    $syarat_b += 1;
  }
}

foreach ($grouped_criteria_c as $group => $criteria) {
  if ($criteria == 'Baik') {
    $syarat_c += 1;
  }
}

foreach ($grouped_criteria_d as $group => $criteria) {
  if ($criteria == 'Baik') {
    $syarat_d += 1;
  }
}

foreach ($grouped_criteria_e as $group => $criteria) {
  if ($criteria == 'Baik') {
    $syarat_e += 1;
  }
}

// Memeriksa kelompok kriteria
foreach ($grouped_criteria as $group => $criteria) {

  // Menghitung jumlah nilai 'Baik' pada kelompok kriteria
  if (in_array('Baik', $criteria)) {
    $hasil_nilai_baik = array_count_values($criteria)['Baik'];
  } else {
    $hitung_nilai_cukup = array_count_values($criteria)['cukup'];
  }

  if ($hasil_nilai_baik >= 1) {
    if ($group == 'KK-A') {
      if ($syarat_a >= 2) {
        $result .= "$group, ";
      } else {
        $result_2 .= "$group, ";
      }
    } else if ($group == 'KK-B') {
      if ($syarat_b >= 1) {
        $result .= "$group, ";
      } else {
        $result_2 .= "$group, ";
      }
    } else if ($group == 'KK-C') {
      if ($syarat_c >= 1) {
        $result .= "$group, ";
      } else {
        $result_2 .= "$group, ";
      }
    } else if ($group == 'KK-D') {
      if ($syarat_d >= 1) {
        $result .= "$group, ";
      } else {
        $result_2 .= "$group, ";
      }
    } else if ($group == 'KK-E') {
      if ($syarat_e >= 1) {
        $result .= "$group, ";
      } else {
        $result_2 .= "$group, ";
      }
    }
  } else {
    // Jika hasil_nilai_baik kurang dari 3, masukkan ke result_2
    $result_2 .= "$group, ";
  }
}

// Menghapus koma terakhir dari result dan result_2
$result = rtrim($result, ', ');
$result_2 = rtrim($result_2, ', ');



echo ' <div class="testimonials">
<!-- Testimonial 2 -->
<div class="testimonial-item">
  <!-- Testimonial Content -->
  <div class="testimonial-content">
    <div class="testimonial-text">
      <p>Berdasarkan Data Berikut : </p>
      <p>Nilai Mata Kuliah Sistem Informasi </p>
      <p>Nilai Baik : ' . $baik_1 . '  </p>
      <p>Nilai Cukup : ' . $cukup_1 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah MPPL </p>
      <p>Nilai Baik : ' . $baik_2 . '  </p>
      <p>Nilai Cukup : ' . $cukup_2 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah RPL 1 </p>
      <p>Nilai Baik : ' . $baik_3 . '  </p>
      <p>Nilai Cukup : ' . $cukup_3 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah RPL 2 </p>
      <p>Nilai Baik : ' . $baik_4 . '  </p>
      <p>Nilai Cukup : ' . $cukup_4 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah Jaringan Komputer 1</p>
      <p>Nilai Baik : ' . $baik_5 . '  </p>
      <p>Nilai Cukup : ' . $cukup_5 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah Jaringan Komputer 2 </p>
      <p>Nilai Baik : ' . $baik_6 . '  </p>
      <p>Nilai Cukup : ' . $cukup_6 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah Aplikasi Teknologi Online </p>
      <p>Nilai Baik : ' . $baik_7 . '  </p>
      <p>Nilai Cukup : ' . $cukup_7 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah Aplikasi Komputasi Bergerak </p>
      <p>Nilai Baik : ' . $baik_8 . '  </p>
      <p>Nilai Cukup : ' . $cukup_8 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah Hardware Komputer </p>
      <p>Nilai Baik : ' . $baik_9 . '  </p>
      <p>Nilai Cukup : ' . $cukup_9 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah Organisasi dan Arsitektur Komputer </p>
      <p>Nilai Baik : ' . $baik_10 . '  </p>
      <p>Nilai Cukup : ' . $cukup_10 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah Bahasa Inggris </p>
      <p>Nilai Baik : ' . $baik_11 . '  </p>
      <p>Nilai Cukup : ' . $cukup_11 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah Algoritma dan Pemograman </p>
      <p>Nilai Baik : ' . $baik_12 . '  </p>
      <p>Nilai Cukup : ' . $cukup_12 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah Sistem Digital </p>
      <p>Nilai Baik : ' . $baik_13 . '  </p>
      <p>Nilai Cukup : ' . $cukup_13 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah Kalkulus 1 </p>
      <p>Nilai Baik : ' . $baik_14 . '  </p>
      <p>Nilai Cukup : ' . $cukup_14 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah Kalkulus 2 </p>
      <p>Nilai Baik : ' . $baik_15 . '  </p>
      <p>Nilai Cukup : ' . $cukup_15 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah Struktur Data </p>
      <p>Nilai Baik : ' . $baik_16 . '  </p>
      <p>Nilai Cukup : ' . $cukup_16 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah Statistika dan Probabilitas </p>
      <p>Nilai Baik : ' . $baik_17 . '  </p>
      <p>Nilai Cukup : ' . $cukup_17 . ' </p>
      <hr>
      <p>Nilai Mata Kuliah Logika Matematika </p>
      <p>Nilai Baik : ' . $baik_18 . '  </p>
      <p>Nilai Cukup : ' . $cukup_18 . ' </p>
      </div>
      </div>            
      <!-- /Testimonial Content -->  
      <!-- Testimonial Author -->
      <div class="testimonial-credits">
      <!-- Picture -->
      <div class="testimonial-picture">
      <img src="images/testimonials/testimonila_photo_2.png" alt="">
      </div>              
      <!-- /Picture -->
      <!-- Testimonial author information -->
      <div class="testimonial-author-info">
      <p class="testimonial-author">' . $nama_lengkap . ' <br></p>
      <p>Berdasarkan data diatas maka dapat disimpulkan adalah sebagai berikut </p>
      <p class="testimonial-firm"><span class="badge badge-info mb-2">Direkomendasikan : ' . $result . ' <br>Tidak Direkomendasikan : ' . $result_2 . '</span>
    </div>
  </div>
  <!-- /Testimonial author information -->               
</div>';
