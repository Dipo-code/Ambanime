<?php
include '../templates/header.php';
?>
<section class="container mx-auto ">

    <div class="text-2xl font-bold mt-10 font-montserrat">Genre</div>
    <ul class="mt-10 mb-5 flex space-x-8 text-lg">
      <li><a href="index.php" class="hover:underline">Home</a></li>
      <li><a href="daftar-anime.php" class="hover:underline">Daftar Anime</a></li>
      <li><a href="jadwal-rilis.php" class="hover:underline">Jadwal Rilis</a></li>
    </ul>

    <div class="text-2xl font-bold mt-10 font-montserrat">Status</div>
    <ul class="mt-10 mb-5 flex space-x-8 text-lg">
      <li><a href="index.php" class="hover:underline">All</a></li>
      <li><a href="daftar-anime.php" class="hover:underline">On-Going</a></li>
      <li><a href="jadwal-rilis.php" class="hover:underline">Finished</a></li>
    </ul>
    <div class ="grid grid-cols-5 mt-20 gap-20 ">
    <a href="#">
    <div class=" w-64 h-80 relative rounded">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url(assets/images/1283351.jpg);"></div>
    <!-- Layer gradasi hitam supaya teks lebih terlihat -->
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t bg-[linear-gradient(to_top,_#1F2937_20%,_transparent_150%)] to-transparent"></div>
    <!-- Judul card -->
    </div>
    <div class="w-64 bg-gray-800 p-3 ">
      
    <h2 class = "text-white text-lg font-semibold pb-3">Jojo  Batu Laut</h2>
    <div class="flex justify-between items-center">
      <h3 class = "text-white text-sm" >Episode 24</h3>
      <h3 class = "text-white text-sm " >24 Menit/Eps </h3>
    </div>
    </div>
  </a> 


</section>
<?php
include '../templates/footer.php';
?>
