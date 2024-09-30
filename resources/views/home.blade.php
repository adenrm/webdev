<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Siswa</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="shortcut icon" href="img/logoWikrama.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <style>
      .lalezar-regular {
  font-family: "Lalezar", system-ui;
  font-weight: 400;
  font-style: normal;
  }

  .blog-bg-theme {
    background-color: #38B6FF;
    border-radius: 10px;
    padding: 5px;
  }

  .bg-theme {
    background-color: #38B6FF;
  }

.hvr-theme {
  background-color: #38B6FF;
}
  .text-theme {
    color: #38B6FF;
  }
    </style>
</head>
<body class="h-full">
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
    <nav x-data="{ isOpen: false }">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <img class="h-8 w-8" src="img/logoWikrama.png" alt="Your Company">
            </div>
            {{-- <div class="hidden md:block">
              <div class="relative ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-cyan-600 hover:text-white" -->
                <a href="/" class="rounded-md bg-gray-900 px-3 py-2 text-sm lalezar-regular text-white" aria-current="page">Home</a>
                <a href="/about" class="rounded-md px-3 py-2 text-sm lalezar-regular text-black hover:bg-cyan-300 hover:text-white">About</a>
                <a href="/contact" class="rounded-md px-3 py-2 text-sm lalezar-regular text-black hover:bg-cyan-300 hover:text-white">Contact</a>
              </div>
            </div> --}}
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              {{-- <button type="button" class="relative rounded-full bg-cyan-700 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
              </button> --}}
  
              <!-- Profile dropdown -->
              <div class="space-x-4">
                <a href="/" class="rounded-md bg-cyan-700 px-3 py-2 text-sm lalezar-regular text-white" aria-current="page">HOME</a>
                <a href="/about" class="rounded-md px-3 py-2 text-sm lalezar-regular text-black hover:bg-cyan-700 hover:text-white">ABOUT</a>
                <a href="/tools" class="rounded-md px-3 py-2 text-sm lalezar-regular text-black hover:bg-cyan-700 hover:text-white">TOOLS</a>
              </div>
              <div class="relative ml-3">
                <div class="mt-1 focus:bg-cyan-700">
                  <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center text-sm rounded-md focus:bg-cyan-700 focus:text-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    {{-- <img class="h-8 w-8 rounded-full" src="img/profile.png" alt=""> --}}
                    <p class="rounded-md px-3 py-2 text-sm lalezar-regular text-black focus:bg-cyan-700">OTHER</p>
                  </button>
                </div>
  
                <div   x-show="isOpen"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                  <!-- Active: "bg-gray-100", Not Active: "" -->
                  <a target="_blank" href="https://smkwikrama1garut.sch.id/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cyan-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-0">Informasi Sekolah</a>
                  <a target="_blank" href="https://www.google.com/maps/place/SMK+Wikrama+1+Garut/@-7.1717526,107.8899623,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68b0c3cbcb1f29:0xc96607822a7646b0!8m2!3d-7.1717526!4d107.8925372!16s%2Fg%2F1pzt06b5r?entry=ttu&g_ep=EgoyMDI0MDkyNS4wIKXMDSoASAFQAw%3D%3D" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cyan-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-1">Alamat Sekolah</a>
                  <a target="_blank" href="https://smkwikrama1garut.sch.id/psb-online/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cyan-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-2">PPDB Sekolah</a>
                </div>
              </div>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            <button  @click="isOpen = !isOpen" type="button" class="relative inline-flex items-center justify-center rounded-md bg-cyan-700 p-2 text-gray-400 hover:bg-cyan-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!-- Menu open: "hidden", Menu closed: "block" -->
              <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!-- Menu open: "block", Menu closed: "hidden" -->
              <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
  
      <!-- Mobile menu, show/hide based on menu state. -->
      <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-cyan-600 hover:text-white" -->
          <a href="/" class="block rounded-md bg-cyan-700 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
          <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-600 hover:bg-cyan-700 hover:text-white">About</a>
          <a href="/tools" class="block rounded-md px-3 py-2 text-base font-medium text-gray-600 hover:bg-cyan-700 hover:text-white">Tools</a>
        </div>
      </div>
    </nav>
  
    {{-- <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Home</h1>
      </div>
    </header> --}}
    <main class="cursor-default">
      <div class="mx-auto ml-5 max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
         <div class="my-2 container-xl mx-auto flex flex-col-reverse lg:flex-row md:flex-row 2xl:flex-row 2xl:pl-96 gap-2 items-center">
          <div class="w-full md:w-3/4 lg:w-1/2 2xl:w-6/12 bb">
            <h1 class="text-5xl font-bold mb-4">AI Technology</h1>
            <p>AI Technology adalah cabang dari ilmu komputer yang berfokus pada penciptaan mesin atau sistem yang mampu meniru kecerdasan manusia. Dengan AI, komputer dapat melakukan tugas-tugas yang biasanya memerlukan kecerdasan manusia, seperti pengenalan suara, pengambilan keputusan, penyelesaian masalah, dan pembelajaran dari data. AI terdiri dari beberapa sub-bidang, termasuk machine learning, natural language processing, computer vision, dan robotics.</p>
            <br>
            {{-- <a href="#" class="mt-5 text-white bg-blue-500 px-6 py-2 rounded-md hover:bg-white hover:text-blue-500 transition duration-300">
                Learn More
            </a> --}}
            <a href="#" class="neon-button lalezar-regular">
              Learn More
          </a>
          </div>         
          <div class="w-full md:w-3/4 lg:w-1/2 2xl:w-6/12 2xl:-mr-20">
            <img src="img/homeRobot.png" alt="robot">
          </div>
        </div>
      </div>
      <img class="-mb-3" src="img/wave.svg" alt="wave">
        <div class=" -mb-3 pl-8 pr-8 my-2 text-white container-xl mx-auto flex flex-col-reverse lg:flex-row md:flex-row gap-2 items-center bg-cyan-700">
          <div class="w-full md:w-3/4 lg:w-1/2">
            <img class="hidden sm:block w-3/4 sm:pt-5 md:pt-5" src="img/brain.png" alt="brain">
          </div>
          <div class="w-full md:w-3/4 lg:w-1/2 bb">
            <h1 class="text-3xl font-bold">Apa itu AI (Artificial Intelegence)?</h1>
            <br><br>
            <p>&shy; AI (Artificial Intelligence) atau Kecerdasan Buatan adalah teknologi yang memungkinkan mesin, seperti komputer, untuk meniru kemampuan kognitif manusia. Ini termasuk kemampuan untuk belajar, bernalar, memecahkan masalah, memahami bahasa, dan bahkan mengenali pola.</p>
            <br><br><br>
            <p>&shy; &shy; &shy; Singkatnya, AI adalah upaya untuk membuat mesin yang bisa "berpikir" seperti manusia.</p>
          </div>
        </div>
        <div class="-mb-3 xl:-mb-3 pl-8 pr-8 my-2 text-white container-xl mx-auto gap-2 items-center bg-cyan-700">
          <br><br><br>
          <h4 class="text-xl">Apa saja yang bisa dilakukan AI?</h4>
          <ul class="list-disc">
            <li>Pembelajaran Mesin (Machine Learning): AI dapat belajar dari data yang besar dan kompleks, lalu membuat prediksi atau keputusan berdasarkan pola yang ditemukan. Contohnya, rekomendasi film di Netflix atau deteksi penipuan kartu kredit</li>
            <br>
            <li>Pemrosesan Bahasa Alami (Natural Language Processing): AI dapat memahami dan menghasilkan bahasa manusia, seperti menerjemahkan teks, menjawab pertanyaan, atau bahkan menulis puisi.</li>
            <br>
            <li>Pengenalan Suara: AI dapat mengenali dan menginterpretasikan ucapan manusia, seperti asisten virtual seperti Siri atau Google Assistant.</li>
              <br>
              <li>Penglihatan Komputer: AI dapat menganalisis gambar dan video, seperti mengenali wajah, mendeteksi objek, atau bahkan mengemudi mobil secara otonom.</li>
              <br>
            </ul>
          </div>
        </div>
        </main>
        <img class="-mb-3" src="img/wave_rotate.svg" alt="wave">
        <div class="cursor-default container p-6 mt-5 m-5">
          <h1 class="font-bold text-2xl">Keuntungan Penggunaan AI</h1>
          <ol class="list-disc">
            <li class="text-xl">Efisiensi: Otomatisasi tugas-tugas yang berulang</li><br>
            <li class="text-xl">Akurasi: Pengambilan keputusan yang lebih baik berdasarkan data</li><br>
            <li class="text-xl">Inovasi: Pengembangan produk dan layanan baru</li><br>
          </ol><hr><br>
          <h1 class="font-bold text-2xl">Kekurangan Penggunaan AI</h1>
          <ol class="list-disc">
            <li class="text-xl">Etika: Penggunaan AI yang tidak bertanggung jawab dapat menimbulkan masalah seperti bias, privasi, dan keamanan.</li><br>
            <li class="text-xl">Ketergantungan: Terlalu bergantung pada AI dapat mengurangi kemampuan manusia untuk berpikir kritis.</li><br>
            <li class="text-xl">Pekerjaan: Otomatisasi dapat menggantikan beberapa pekerjaan manusia.</li><br>
          </ol>
        </div>

        <img class="-mb-5" src="img/wave_footer.svg" alt="Wave">
        <footer class="bg-gray-500">
          <div class="container bg-gray-500 flex flex-lg-column-reverse md:flex-row lg:flex-row text-white cursor-default sm:-mr-36">
            <div class="w-full">
              <div class="pl-6">
                <h1 class="text-2xl font-bold">Other</h1>
                <br>
                <ol class="list-none pl-5">
                  <li class="text-xl"><a href="/">Home</a></li><br>
                  <li class="text-xl"><a href="/tools">Tools</a></li><br>
                  <li class="text-xl"><a href="/about">About</a></li><br>
                </ol>
              </div>
            </div>
            <div class="w-full">
              <p>Make with Love by</p>
              <img class="w-36 sm:w-50 md:w-64 lg:w-72" src="img/logoWikrama.png" alt="Logo">
            </div>
          </div>
          <div class="-mt-2 container text-center bg-gray-500 pt-5 cursor-default">
            <p class="text-center text-gray-300">© 2024 SMK Wikrama 1 Garut, Inc.</p>
          </div>
        </footer>
      <script src="js/script.js"></script>
</body>
</html>