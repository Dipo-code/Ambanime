<?php
include '../templates/header.php';
?>

<div class="relative w-screen overflow-hidden">
  <button id="prev" class="absolute left-4 top-1/2 -translate-y-1/2 text-2xl  text-gray-800 p-2 rounded z-10">‹</button>
  <div id="slider" class="flex transition-transform duration-500" style="width: 300vw;">

    <!-- Hero / Section 1 -->
   <section class="bg-gray-100 w-screen h-screen">

    <div class="max-w-7xl mx-auto py-20 grid  grid-cols-[55%_45%] ">
        <div>
<h5 class="font-semibold text-cyan-900">Total Episode 10</h5>
<h1 class="text-6xl font-bold pb-5  text-cyan-900">Kimetsu No Ngawi</h1>
<p class=" leading-8 tracking-wider text-cyan-900">RusdiDor dan adiknya Imutzuko berasal dari gunung di selatan ngawi, semua berubah ketika muzantukam datang dan menghancurkan desa mereka. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, consequuntur nemo. Fuga nobis, omnis eos deleniti architecto earum veniam officia.</p>

<div class="grid grid-cols-6 gap-4 mt-8">
  <a href="#" class="bg-gray-200 text-cyan-900 text-center py-1 px- rounded-sm ">Action</a>
  <a href="#" class="bg-gray-200 text-cyan-900 text-center py-1 px- rounded-sm ">Romance</a>
  <a href="#" class="bg-gray-200 text-cyan-900 text-center py-1 px- rounded-sm ">Comedy</a>
  <a href="#" class="bg-gray-200 text-cyan-900 text-center py-1 px- rounded-sm ">Fantasy</a>
</div>

<button class="bg-cyan-900 text-white text-center py-2 px-20 rounded-sm mt-8"><a href="">Play</a></button>

    </div>

   <div class=" ">
        <img src="assets/images/1283351.jpg" class="w-full h-full object-cover rounded" alt="gambar anime">
    </div>


</div>
  </section>
  <!-- end-section1 -->
<!-- Hero / Section 1 -->
   <section class="bg-gray-100 w-screen h-screen">

    <div class="max-w-7xl mx-auto py-20 grid  grid-cols-[55%_45%] ">
        <div>
<h5 class="font-semibold text-cyan-900">Total Episode 10</h5>
<h1 class="text-6xl font-bold pb-5  text-cyan-900">Kimetsu No Ngawi</h1>
<p class=" leading-8 tracking-wider text-cyan-900">RusdiDor dan adiknya Imutzuko berasal dari gunung di selatan ngawi, semua berubah ketika muzantukam datang dan menghancurkan desa mereka. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, consequuntur nemo. Fuga nobis, omnis eos deleniti architecto earum veniam officia.</p>

<div class="grid grid-cols-6 gap-4 mt-8">
  <a href="#" class="bg-gray-200 text-cyan-900 text-center py-1 px- rounded-sm ">Action</a>
  <a href="#" class="bg-gray-200 text-cyan-900 text-center py-1 px- rounded-sm ">Romance</a>
  <a href="#" class="bg-gray-200 text-cyan-900 text-center py-1 px- rounded-sm ">Comedy</a>
  <a href="#" class="bg-gray-200 text-cyan-900 text-center py-1 px- rounded-sm ">Fantasy</a>
</div>

<button class="bg-cyan-900 text-white text-center py-2 px-20 rounded-sm mt-8"><a href="">Play</a></button>

    </div>

   <div class=" ">
        <img src="assets/images/1283351.jpg" class="w-full h-full object-cover rounded" alt="gambar anime">
    </div>


</div>
  </section>
  <!-- end-section1 -->
<!-- Hero / Section 1 -->
   <section class="bg-gray-100 w-screen h-screen">

    <div class="max-w-7xl mx-auto py-20 grid  grid-cols-[55%_45%] ">
        <div>
<h5 class="font-semibold text-cyan-900">Total Episode 10</h5>
<h1 class="text-6xl font-bold pb-5  text-cyan-900">Kimetsu No Ngawi</h1>
<p class=" leading-8 tracking-wider text-cyan-900">RusdiDor dan adiknya Imutzuko berasal dari gunung di selatan ngawi, semua berubah ketika muzantukam datang dan menghancurkan desa mereka. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, consequuntur nemo. Fuga nobis, omnis eos deleniti architecto earum veniam officia.</p>

<div class="grid grid-cols-6 gap-4 mt-8">
  <a href="#" class="bg-gray-200 text-cyan-900 text-center py-1 px- rounded-sm ">Action</a>
  <a href="#" class="bg-gray-200 text-cyan-900 text-center py-1 px- rounded-sm ">Romance</a>
  <a href="#" class="bg-gray-200 text-cyan-900 text-center py-1 px- rounded-sm ">Comedy</a>
  <a href="#" class="bg-gray-200 text-cyan-900 text-center py-1 px- rounded-sm ">Fantasy</a>
</div>

<button class="bg-cyan-900 text-white text-center py-2 px-20 rounded-sm mt-8"><a href="">Play</a></button>

    </div>

   <div class=" ">
        <img src="assets/images/1283351.jpg" class="w-full h-full object-cover rounded" alt="gambar anime">
    </div>
</div>
  </section>
  <!-- end-section1 -->

    
  </div>
  <button id="next" class="absolute right-4 top-1/2 -translate-y-1/2 text-2xl  text-gray-800 p-2 rounded z-10">›</button>
</div>

<script>
  const slider = document.getElementById('slider');
  const prevBtn = document.getElementById('prev');
  const nextBtn = document.getElementById('next');
  const totalSections = 3;
  let currentIndex = 0;
  let intervalId;

  function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * 100}vw)`;
  }

  function resetAutoplay() {
    clearInterval(intervalId);
    startAutoplay();
  }

  function startAutoplay() {
    intervalId = setInterval(() => {
      currentIndex = (currentIndex + 1) % totalSections;
      updateSlider();
    }, 5000);
  }

  prevBtn.addEventListener('click', () => {
    currentIndex = currentIndex > 0 ? currentIndex - 1 : 0;
    updateSlider();
    resetAutoplay();
  });

  nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % totalSections;
    updateSlider();
    resetAutoplay();
  });

  // Mulai autoplay saat halaman dimuat
  startAutoplay();
</script>


  

<!-- slider -->
 <div class="relative">

<h1 class="px-14 py-5 font-semibold text-2xl text-cyan-900">Rekomendasi</h1>

  <!-- Tombol Kiri -->
  <button id="scrollLeft" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-gray-800 text-white p-2 ">
    ‹
  </button>

  <!-- Wrapper Scroll -->
  <div id="cardContainer" class="overflow-x-auto whitespace-nowrap scroll-smooth px-12">
      <!-- card1 -->
  <div class="inline-block w-64 h-80 m-2 mx-5 rounded overflow-hidden relative">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url(assets/images/1283351.jpg);"></div>
    <!-- Layer gradasi hitam supaya teks lebih terlihat -->
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-black/80 to-transparent"></div>
    <!-- Judul card -->
    <div class="absolute bottom-0 left-0 right-0 p-4 text-white font-semibold text-lg">
      Card 1
    </div>
  </div>
  <!-- endcard -->
      <!-- card1 -->
  <div class="inline-block w-64 h-80 m-2 mx-5 rounded overflow-hidden relative">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url(assets/images/1283351.jpg);"></div>
    <!-- Layer gradasi hitam supaya teks lebih terlihat -->
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-black/80 to-transparent"></div>
    <!-- Judul card -->
    <div class="absolute bottom-0 left-0 right-0 p-4 text-white font-semibold text-lg">
      Card 1
    </div>
  </div>
  <!-- endcard -->
      <!-- card1 -->
  <div class="inline-block w-64 h-80 m-2 mx-5 rounded overflow-hidden relative">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url(assets/images/1283351.jpg);"></div>
    <!-- Layer gradasi hitam supaya teks lebih terlihat -->
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-black/80 to-transparent"></div>
    <!-- Judul card -->
    <div class="absolute bottom-0 left-0 right-0 p-4 text-white font-semibold text-lg">
      Card 1
    </div>
  </div>
  <!-- endcard -->
      <!-- card1 -->
  <div class="inline-block w-64 h-80 m-2 mx-5 rounded overflow-hidden relative">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url(assets/images/1283351.jpg);"></div>
    <!-- Layer gradasi hitam supaya teks lebih terlihat -->
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-black/80 to-transparent"></div>
    <!-- Judul card -->
    <div class="absolute bottom-0 left-0 right-0 p-4 text-white font-semibold text-lg">
      Card 1
    </div>
  </div>
  <!-- endcard -->
      <!-- card1 -->
  <div class="inline-block w-64 h-80 m-2 mx-5 rounded overflow-hidden relative">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url(assets/images/1283351.jpg);"></div>
    <!-- Layer gradasi hitam supaya teks lebih terlihat -->
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-black/80 to-transparent"></div>
    <!-- Judul card -->
    <div class="absolute bottom-0 left-0 right-0 p-4 text-white font-semibold text-lg">
      Card 1
    </div>
  </div>
  <!-- endcard -->
      <!-- card1 -->
  <div class="inline-block w-64 h-80 m-2 mx-5 rounded overflow-hidden relative">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url(assets/images/1283351.jpg);"></div>
    <!-- Layer gradasi hitam supaya teks lebih terlihat -->
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-black/80 to-transparent"></div>
    <!-- Judul card -->
    <div class="absolute bottom-0 left-0 right-0 p-4 text-white font-semibold text-lg">
      Card 1
    </div>
  </div>
  <!-- endcard -->
      <!-- card1 -->
  <div class="inline-block w-64 h-80 m-2 mx-5 rounded overflow-hidden relative">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url(assets/images/1283351.jpg);"></div>
    <!-- Layer gradasi hitam supaya teks lebih terlihat -->
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-black/80 to-transparent"></div>
    <!-- Judul card -->
    <div class="absolute bottom-0 left-0 right-0 p-4 text-white font-semibold text-lg">
      Card 1
    </div>
  </div>
  <!-- endcard -->
      <!-- card1 -->
  <div class="inline-block w-64 h-80 m-2 mx-5 rounded overflow-hidden relative">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url(assets/images/1283351.jpg);"></div>
    <!-- Layer gradasi hitam supaya teks lebih terlihat -->
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-black/80 to-transparent"></div>
    <!-- Judul card -->
    <div class="absolute bottom-0 left-0 right-0 p-4 text-white font-semibold text-lg">
      Card 1
    </div>
  </div>
  <!-- endcard -->
</div>
  <!-- Tombol Kanan -->
  <button id="scrollRight" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-gray-800 text-white p-2">
    ›
  </button>
</div>

<script>
  const container = document.getElementById("cardContainer");
  const scrollLeftBtn = document.getElementById("scrollLeft");
  const scrollRightBtn = document.getElementById("scrollRight");

  scrollLeftBtn.addEventListener("click", () => {
    container.scrollBy({ left: -300, behavior: 'smooth' });
  });

  scrollRightBtn.addEventListener("click", () => {
    container.scrollBy({ left: 300, behavior: 'smooth' });
  });
</script>
<!-- end-slider -->

 

 
  <!-- end section1  -->
<?php
include '../templates/footer.php';
?>