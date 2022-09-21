<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hitung Berat badan Ideal.</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
<?php

if(isset($_POST['submit'])){

      $bbadan = $_POST['bbadan'] ? $_POST['bbadan'] : 1;
      $tbadan = $_POST['tbadan']  ? $_POST['tbadan'] : 1;
      $tbadanm = $tbadan * 0.01;
      $hasil = $bbadan / ($tbadanm * $tbadanm);
      if($hasil < 5 ) {
        $ideal = "Lengkapi data dengan benar!";
        $penjelasan="";
      }elseif ($hasil >= 5 && $hasil <= 18.5) {
        $ideal = "Kurang / Kurus";
        $penjelasan = "Hasil perhitungan menunjukkan bahwa Anda memiliki berat badan kurang atau tergolong kurus. Sebagai solusinya, Anda membutuhkan asupan kalori tambahan sebanyak 300-500 kkal per hari. Perbaiki juga pola makan dan pola hidup untuk mendapatkan berat badan ideal.";
      }elseif($hasil >= 18.5 && $hasil <= 22.9) {
        $ideal = "Normal / Ideal";
        $penjelasan = "Hasil perhitungan menunjukkan bahwa Anda memliki berat badan normal. Memiliki berat badan ideal bisa menjadi salah satu cara untuk menjaga kesehatan tubuh secara keseluruhan. Anda juga bisa terhindar dari berbagai risiko penyakit berbahaya.";
      }elseif($hasil >= 23 && $hasil <= 24.9) {
        $ideal = "Berlebihan / Gemuk";
        $penjelasan = "Hasil perhitungan menunjukkan bahwa Anda memiliki berat badan berlebih atau gemuk. Sebagai solusinya, Anda harus mengurangi asupan asupan kalori harian sekitar 300-500 kkal. Mulai sekarang coba lebih perhatikan kalori dari makanan dan minuman yang Anda konsumsi";
      }elseif ($hasil >= 25 && $hasil <= 70 ) {
        $ideal = "Obesitas";
        $penjelasan = "Hasil perhitungan menunjukkan bahwa Anda tergolong obesitas. Perlu diketahui bahwa obesitas lebih parah daripada gemuk. Seseorang yang gemuk belum tentu obesitas, sedangkan seseorang yang obesitas sudah dipastikan gemuk. Jika dibiarkan, bisa berisiko menderita berbagai penyakit serius.";
      } elseif($hasil > 71 ){
        $ideal = "Lengkapi data dengan benar!";
        $penjelasan = "";
      }

  }

?>
      <div class="table-content">
      <h2 class="judul"> Hitung Berat Badan Ideal</h2>  
        <form action="" method="POST">
          <input type="text" name="bbadan" class="isi" placeholder="Isi berat badan anda (kg)" autocomplete="off" require>
          <input type="text" name="tbadan" class="isi" placeholder="Isi tinggi badan anda (cm)" autocomplete="off" require>
          <?php if(isset($_POST['submit'])) { ?>
            <input type="button" value="<?php echo $ideal; ?>" class="isi" >
          <?php }else { ?>
            <input type="button" value="Data belum di isi" class="isi" > 
          <?php } ?>
            <!-- <input type="submit" name="submit" class="hitung" value="HITUNG"> --><div class="center">
              <button type="submit" name="submit" class="btn hitung">Hitung</button>
              <button href="index.php" class="btn ulang">Ulang</button>
              
          </div>
          <div class="penjelasan">
            <p>
              <?php if (isset($_POST['submit'])){
                echo $penjelasan;
              } 
              ?></p>
        </div>
      </form>
    </div>

  </body>
</html>
