<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Daskom UAS</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">gallery</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#hobby">hobby</a>
      <a href="#gallery">gallery</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.facebook.com/kevin.fwx" class="fab fa-facebook-f"></a>
      <a href="https://instagram.com/kevinfwx" class="fab fa-instagram"></a>
      <a href="https://t.snapchat.com/kblPumtz" class="fab fa-snapchat-ghost"></a>
      <a href="https://t.me/kevinfwx" class="fab fa-telegram"></a>
      <a href="https://www.wasap.my/6282137783251" class="fab fa-whatsapp"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/toilet_udinus.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Halo, perkenalkan saya Kevin Farell Wilianto!</h3>
      <span data-aos="fade-up">web designer & programmer</span>
      <p data-aos="fade-up">Ini adalah website yang berisi sedikit portofolio dan keahlian saya. Untuk shortcut apa saja yang terdapat di website ini, kalian bisa klik tombol "garis tiga" di pojok kiri atas yaa. So, enjoy guys thank u!.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biografi</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Halo semua! Berikut di bawah ini adalah sedikit informasi tentang saya, terdapat nama, email, alamat, nomor telepon, umur, dan hobi.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>nama : </span> Kevin Farell Wilianto </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> 111202214754@mhs.dinus.ac.id </h3>
         <h3 data-aos="zoom-in"> <span>alamat : </span> Jalan Wologito Barat VI, RT 03/05 </h3>
         <h3 data-aos="zoom-in"> <span>nomor telepon : </span> 082137783251 </h3>
         <h3 data-aos="zoom-in"> <span>umur : </span> 19 tahun </h3>
         <h3 data-aos="zoom-in"> <span>hobi : </span> Bermain Game </h3>
      </div>

      <a href="profile.html" class="btn" data-aos="fade-up">Download My Biography</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>Pencapaian Skill Saya</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>90%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>75%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>70%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>75%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>Pengalaman & Curriculum Vitae</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">Pengalaman</h3>

            <div class="box" data-aos="fade-right">
            <center>
               <span>( 2021 - 2022 )</span>
               <h3>Kegiatan Seminar Nasional Patra</h3>
               <img src="images/seminar_patra.jpg" width="700" height="800">
               <p>Saya pernah mengikuti kegiatan seminar yang pernah didakan oleh Rektor dari Universitas Dian Nuswantoro. Kegiatan seminar tersebut sangat mengedukasi dan menginspirasi. Disana saya memperoleh banyak sekali ilmu terutama di bidang kewirausahaan dan cara agar menjadi orang yang terampil serta pantang menyerah.</p>
            </center>

            <div class="box" data-aos="fade-right">
            <center>
                <span>( 2021 - 2022 )</span>
                <h3>Kegiatan Seminar & Talkshow</h3>
                <img src="images/seminar_bayar.jpg" width="700" height="800">
                <p>Dan yang kedua, saya juga pernah mengikuti seminar yang tidak kalah seru juga. Karena terdapat pula talkshow yang semakin menambah keseruan acara tersebut. Disana saya memperoleh ilmu pengetahuan tentang bagaimana cara melakukan public speaking yang benar dan cara menjadi public figure yang dapat menjadi panutan yang baik bagi semua orang.</p>
            </center>
            </div>


         <div class="box-container">

            <center>
            <h3 class="title" data-aos="fade-left">Curriculum Vitae</h3>
            </center>

            <div class="box" data-aos="fade-left">
            <center>
                <span>( Taman Kanak - Kanak )</span>
                <h3>2008 - 2009</h3>
                <img src="https://img.freepik.com/free-vector/students-with-kindergarten-room-elements-white_1308-55756.jpg?w=740&t=st=1671788573~exp=1671789173~hmac=dac8b73d1fe658e3f6a1dfa49d88f4aa622225972394ddca9ee2746c831c8782" width="700" height="800">
                <p>Pada tahun 2008-2009 saya memasuki pendidikan sekolah pertama saya yaitu di sekolah yang bernama TK Hj.Isriati Baiturahman 1 Semarang.</p>
            </center>
            </div>

            <div class="box" data-aos="fade-left">
            <center>
                <span>( Sekolah Dasar )</span>
                <h3>2009 - 2015</h3>
                <img src="https://img.freepik.com/premium-vector/circle-flat-education-icons-set-with-long-shadow-effect_436959-268.jpg?w=740" width="700" height="800">
                <p>Dan pada tahun 2009-2015 saya memasuki pendidikan sekolah yang kedua yaitu pada tingkat sekolah dasar. Saya bersekolah di SDN Kalibanteng Kidul 01 Semarang.</p>
            </center>
            </div>

            <div class="box" data-aos="fade-left">
            <center>
               <span>( Sekolah Menengah Pertama )</span>
               <h3>2015 - 2018</h3>
               <img src="https://img.freepik.com/premium-vector/cute-school-boy-student-cartoon_24640-9951.jpg?w=740" width="700" height="800">
               <p>Lalu, pada tahun 2015-2018 saya memasuki pendidikan sekolah yang ketiga yaitu pada tingkat sekolah menengah pertama. Saya bersekolah di SMPN 30 Semarang.</p>
            </center>
            </div>

            <div class="box" data-aos="fade-left">
            <center>
                <span>( Sekolah Menengah Akhir )</span>
                <h3>2018 - 2021</h3>
                <img src="https://img.freepik.com/free-vector/students-wearing-face-masks_23-2148577193.jpg?w=740&t=st=1671788241~exp=1671788841~hmac=76e9e2baa3907796b720efa61816013f8017de72616e6616cb509a84a7e593c5" width="700" height="800">
                <p>Selanjutnya, pada tahun 2018-2021 saya memasuki pendidikan sekolah yang ketiga yaitu pada tingkat sekolah menengah akhir. Saya bersekolah di SMAN 13 Semarang hingga lulus!.</p>
            </center>
            </div>

            <div class="box" data-aos="fade-left">
            <center>
                <span>( Kuliah )</span>
                <h3>2022 - selesai</h3>
                <img src="https://img.freepik.com/free-vector/education-easy-learning-set-icons_24877-51590.jpg?w=740&t=st=1671788417~exp=1671789017~hmac=4db5550afaca4a559dacde782b1a3ac65e898bce56525985b2c34b627cb40795" width="700" height="800">
                <p>Dan yang terakhir, pada tahun 2022 saya sedang menjalani pendidikan di suatu sebuah universitas. Universitas yang saya maksud adalah Universitas Dian Nuswantoro Semarang. Saya mempunyai target untuk lulus cumlaude agar segera bisa mencari pekerjaan yang saya minati nanti aamiin.</p>
            </center>
      </div>
   </div>
</section>

<!-- about section ends -->

<!-- hobby section starts  -->

<section class="hobby" id="hobby">

   <h1 class="heading" data-aos="fade-up"> <span>my hobby</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-motorcycle"></i>
         <h3>Mengendarai Motor atau Riding</h3>
         <p>Hobi saya yang pertama yaitu mengendarai motor atau bahasa kerennya sekarang yaitu riding. Saya biasanya menyukai rute riding ke arah perkotaan maupun ke pedesaan hanya untuk sekedar healing.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-gamepad"></i>
         <h3>Bermain Game</h3>
         <p>Saya terkadang juga mengisi kekosongan saya untuk bermain game sebagai selingan ataupun hanya untuk refreshing. Saya biasanya bermain game mobile seperti Mobile Legends, Call of Duty Mobile, dan sebagainya.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-video-camera"></i>
         <h3>Videography</h3>
         <p>Saya juga mengisi kekosongan saya dengan melakukan videography. Disini saya belajar bagaimana cara mengambil atau mengeshoot ke objek yang akan saya ambil dengan benar. Dan device yang saya pakai harus memiliki stabilizer.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bicycle"></i>
         <h3>Bersepeda</h3>
         <p>Saya terkadang juga mengisi waktu luang saya dengan bersepeda di waktu sore hari, agar badan saya tetap terasa ringan dan sehat jasmani.Saya biasanya bersepeda melalui rute terdekat saja, seperti di area dalam komplek rumah.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-book"></i>
         <h3>Membaca</h3>
         <p>Saya juga suka membaca buku ataupun novel dikala waktu luang. Saya menyukai novel horror ataupun buku cerita yang bertema komedi. Saya biasanya membaca secara online melalui e-book ataupun offline di book store.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-camera-retro"></i>
         <h3>Mengambil Foto</h3>
         <p>Dan hobi saya yang terakhir yaitu saya sangat menyukai kegiatan mengambil foto, entah itu foto makanan, mobil, motor, pemandangan dan sebagainya. Saya berusaha semaksimal mungkin agar foto yang saya ambil kualitasnya bagus.</p>
      </div>
   </div>
</section>

<!-- hobby section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

   <h1 class="heading" data-aos="fade-up"> <span>gallery</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/foto_tato.jpg" alt="">
         <h3>Foto Pertama</h3>
         <span>( Di Kopi Prabu )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/foto_tahu.jpg" alt="">
         <h3>Foto Kedua</h3>
         <span>( Makan Tahu Bulat )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/foto_item.jpg" alt="">
         <h3>Foto Ketiga</h3>
         <span>( Selfie Gabut )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/foto_seminar.jpg" alt="">
         <h3>Foto Keempat</h3>
         <span>( Selfie Di Seminar )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/foto_tentrem.jpg" alt="">
         <h3>Foto Kelima</h3>
         <span>( Mirror Di Tentrem )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/FOTO_4_KEVIN.jpeg" alt="">
         <h3>Foto Keenam</h3>
         <span>( Naik Moge 1juta cc )</span>
      </div>

   </div>

</section>

<!-- gallery section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact person</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="masukkan nama anda" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="masukkan email anda" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="masukkan nomor telepon anda" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="masukkan pesan anda" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="kirim pesan" name="send" class="btn">
   </form>

   <div class="box-container">

    <div class="box" data-aos="zoom-in">
        <i class="fas fa-phone"></i>
        <h3>nomor telepon</h3>
        <p>0821-3778-3251</p>
     </div>
      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>111202214754@mhs.dinus.ac.id</p>
      </div>
      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker"></i>
         <h3>Alamat</h3>
         <p>Jalan Wologito Barat VI</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright 2022 @ <?php echo date('Y'); ?> by <span>Kevin Farell Wilianto. All Right Reserved</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>