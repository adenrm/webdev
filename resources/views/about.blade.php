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
    <link rel="stylesheet" href="style/about.css">
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

        .bg-theme:hover {
            background-color: #38B6FF;
        }

        .text-theme {
            color: #38B6FF;
        }
    </style>
</head>
<body class="h-full">
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
              <a href="/" class="rounded-md px-3 py-2 text-sm lalezar-regular text-black hover:bg-cyan-700 hover:text-white" aria-current="page">HOME</a>
              <a href="/about" class="rounded-md bg-cyan-700 px-3 py-2 text-sm lalezar-regular text-white">ABOUT</a>
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
        <a href="/" class="block rounded-md px-3 py-2 text-base font-medium text-gray-600 hover:bg-cyan-700 hover:text-white" aria-current="page">Home</a>
        <a href="/about" class="block rounded-md bg-cyan-700 px-3 py-2 text-base font-medium text-white">About</a>
        <a href="/tools" class="block rounded-md px-3 py-2 text-base font-medium text-gray-600 hover:bg-cyan-700 hover:text-white">Tools</a>
      </div>
    </div>
  </nav>
        <main class="cursor-default select-none">
            <section class="home">
                <img src="assets/mount2.png" class="mount2">
                <img src="assets/mount1.png" class="mount1">
                <img src="assets/bush2.png" class="bush2">

                <h1 class="title">About</h1>

                <img src="assets/bush1.png" class="bush1">
                <img src="assets/leaf2.png" class="leaf2">
                <img src="assets/leaf1.png" class="leaf1">
            </section>

            <section class="about text-center container p-5">
                <h1>AI TECHNOLOGY WEB</h1>
                <br>
                <p>Web ini dibuat untuk partisipasi pada lomba Web Development yang sedang berlangsung di sekitar bulan September - Oktober yang di desain dengan waktu hanya sehari yang di kerjakan oleh siswa PPLG/RPL Kelas 11 SMK Wikrama 1 Garut, Santri Pondok Pesantren Al-ikrom.</p>
                <p class="text-gray-300">© 2024 SMK Wikrama 1 Garut, Inc.</p>
            </section>
            <div class="container about">
                <br><br>
                <hr>
                <br><br>
                <h1 class="font-size-2xl">Requirements :</h1>
                <br><br><br>
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-4xl font-momo mb-6 text-center font-bold">Software</h1>
                    <div class="flex flex-wrap justify-center space-x-10">
                        <a href="https://en.wikipedia.org/wiki/XAMPP" target="_blank">
                            <div class="flex flex-col items-center">
                                <img src="img/xampp-logo.png" alt="XAMPP" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
                                <p class="text-xl sm:text-2xl lg:text-3xl mt-2">XAMPP</p>
                            </div>
                        </a>
                        <a href="https://en.wikipedia.org/wiki/Node.js" target="_blank">
                            <div class="flex flex-col items-center">
                                <img src="img/nodejs-logo.png" alt="NODEJS" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
                                <p class="text-xl sm:text-2xl lg:text-3xl mt-2">NodeJS</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="mt-10"></div>

                <h1 class="text-4xl font-momo mb-6 text-center font-bold">Framework</h1> 
<div class="flex justify-center space-x-10">
    <a href="https://en.wikipedia.org/wiki/Tailwind_CSS" target="_blank">
        <div class="flex flex-col items-center">
            <img src="img/tailwinds.png" alt="Tailwinds" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
            <p class="text-xl sm:text-2xl lg:text-3xl mt-2">Tailwinds</p>
        </div>
    </a>
    <a href="https://en.wikipedia.org/wiki/Laravel" target="_blank">
        <div class="flex flex-col items-center">
            <img src="img/laravel.png" alt="Laravel" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
            <p class="text-xl sm:text-2xl lg:text-3xl mt-2">Laravel</p>
        </div>
    </a>
</div>

  <h1 class="text-4xl font-momo mb-6 text-center font-bold mt-10">Languages</h1>
  <div class="flex justify-center space-x-10">
      <a href="https://en.wikipedia.org/wiki/HTML" target="_blank">
          <div class="flex flex-col items-center">
              <img src="img/HTML.png" alt="HTML" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
              <p class="text-xl sm:text-2xl lg:text-3xl mt-2">HTML</p>
          </div>
      </a>
      <a href="https://en.wikipedia.org/wiki/CSS" target="_blank">
          <div class="flex flex-col items-center">
              <img src="img/CSS3.png" alt="CSS" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
              <p class="text-xl sm:text-2xl lg:text-3xl mt-2">CSS</p>
          </div>
      </a>
      <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank">
          <div class="flex flex-col items-center">
              <img src="img/js.png" alt="JavaScript" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
              <p class="text-xl sm:text-2xl lg:text-3xl mt-2">JavaScript</p>
          </div>
      </a>
      <a href="https://en.wikipedia.org/wiki/PHP" target="_blank">
          <div class="flex flex-col items-center">
              <img src="img/php.png" alt="PHP" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
              <p class="text-xl sm:text-2xl lg:text-3xl mt-2">PHP</p>
          </div>
      </a>
  </div>
            </div>
        </main>
    </div>
      <footer style="background: #3B3291;">
    <img class="-mb-5" src="img/wave_footer.svg" alt="Wave">
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
  <script>
    const title = document.querySelector('.title')
    const leaf1 = document.querySelector('.leaf1')
    const leaf2 = document.querySelector('.leaf2')
    const bush2 = document.querySelector('.bush2')
    const mount1 = document.querySelector('.mount1')
    const mount2 = document.querySelector('.mount2')
    
    document.addEventListener('scroll', function() {
        let value = window.scrollY
        // console.log(value)
        title.style.marginTop = value * 1.1 + 'px'
    
        leaf1.style.marginLeft = -value + 'px'
        leaf2.style.marginLeft = value + 'px'
    
        bush2.style.marginBottom = -value + 'px'
    
        mount1.style.marginBottom = -value * 1.1 + 'px'
        mount2.style.marginBottom = -value * 1.2 + 'px'
    })</script>
</body>
</html>
