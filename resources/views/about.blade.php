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
<body class="h-full dark:bg-gray-800">
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
            {{-- <label for="toggle-switch" class="toggle-switch inline-flex items-center cursor-pointer mt-1 mr-3">
              <input type="checkbox" name="toggle" id="toggle-switch" class="hidden">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="orange" class="size-6 mr-2 block dark:hidden">
                <path d="M12 2.25a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM7.5 12a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM18.894 6.166a.75.75 0 0 0-1.06-1.06l-1.591 1.59a.75.75 0 1 0 1.06 1.061l1.591-1.59ZM21.75 12a.75.75 0 0 1-.75.75h-2.25a.75.75 0 0 1 0-1.5H21a.75.75 0 0 1 .75.75ZM17.834 18.894a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 1 0-1.061 1.06l1.59 1.591ZM12 18a.75.75 0 0 1 .75.75V21a.75.75 0 0 1-1.5 0v-2.25A.75.75 0 0 1 12 18ZM7.758 17.303a.75.75 0 0 0-1.061-1.06l-1.591 1.59a.75.75 0 0 0 1.06 1.061l1.591-1.59ZM6 12a.75.75 0 0 1-.75.75H3a.75.75 0 0 1 0-1.5h2.25A.75.75 0 0 1 6 12ZM6.697 7.757a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 0 0-1.061 1.06l1.59 1.591Z" />
              </svg>            
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" class="size-6 mr-2 hidden dark:block">
                <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 0 1 .162.819A8.97 8.97 0 0 0 9 6a9 9 0 0 0 9 9 8.97 8.97 0 0 0 3.463-.69.75.75 0 0 1 .981.98 10.503 10.503 0 0 1-9.694 6.46c-5.799 0-10.5-4.7-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 0 1 .818.162Z" clip-rule="evenodd" />
              </svg>
            </label> --}}
            <div class="space-x-4">
              <a href="/" class="rounded-md px-3 py-2 text-sm lalezar-regular text-black hover:bg-cyan-700 hover:text-white dark:text-white" aria-current="page">HOME</a>
              <a href="/about" class="rounded-md bg-cyan-700 px-3 py-2 text-sm lalezar-regular text-white">ABOUT</a>
              <a href="/tools" class="rounded-md px-3 py-2 text-sm lalezar-regular text-black hover:bg-cyan-700 hover:text-white dark:text-white">TOOLS</a>
            </div>
            <div class="relative ml-3">
              <div class="mt-1 focus:bg-cyan-700">
                <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center text-sm rounded-md focus:bg-cyan-700 focus:text-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  {{-- <img class="h-8 w-8 rounded-full" src="img/profile.png" alt=""> --}}
                  <p class="rounded-md px-3 py-2 text-sm lalezar-regular text-black focus:bg-cyan-700 dark:text-white">OTHER</p>
                </button>
              </div>

              <div   x-show="isOpen"
              x-transition:enter="transition ease-out duration-100 transform"
              x-transition:enter-start="opacity-0 scale-95"
              x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75 transform"
              x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none dark:bg-gray-800 dark:text-gray-200" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a target="_blank" href="https://smkwikrama1garut.sch.id/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cyan-700 hover:text-white dark:bg-gray-800 dark:text-gray-200" role="menuitem" tabindex="-1" id="user-menu-item-0">Informasi Sekolah</a>
                <a target="_blank" href="https://www.google.com/maps/place/SMK+Wikrama+1+Garut/@-7.1717526,107.8899623,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68b0c3cbcb1f29:0xc96607822a7646b0!8m2!3d-7.1717526!4d107.8925372!16s%2Fg%2F1pzt06b5r?entry=ttu&g_ep=EgoyMDI0MDkyNS4wIKXMDSoASAFQAw%3D%3D" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cyan-700 hover:text-white dark:bg-gray-800 dark:text-gray-200" role="menuitem" tabindex="-1" id="user-menu-item-1">Alamat Sekolah</a>
                <a target="_blank" href="https://smkwikrama1garut.sch.id/psb-online/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cyan-700 hover:text-white dark:bg-gray-800 dark:text-gray-200" role="menuitem" tabindex="-1" id="user-menu-item-2">PPDB Sekolah</a>
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
        <a target="_blank" href="https://smkwikrama1garut.sch.id/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cyan-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-0">Informasi Sekolah</a>
                  <a target="_blank" href="https://www.google.com/maps/place/SMK+Wikrama+1+Garut/@-7.1717526,107.8899623,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68b0c3cbcb1f29:0xc96607822a7646b0!8m2!3d-7.1717526!4d107.8925372!16s%2Fg%2F1pzt06b5r?entry=ttu&g_ep=EgoyMDI0MDkyNS4wIKXMDSoASAFQAw%3D%3D" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cyan-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-1">Alamat Sekolah</a>
                  <a target="_blank" href="https://smkwikrama1garut.sch.id/psb-online/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cyan-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-2">PPDB Sekolah</a>
      </div>
    </div>
  </nav>
        <main class="cursor-default select-none">
            <section class="home">
                <img src="assets/mount2.png" class="mount2" id="mount2">
                <img src="assets/mount1.png" class="mount1" id="mount1">
                <img src="assets/bush2.png" class="bush2" id="bush2">

                <h1 id="title-parallax" class="title text-shadow-drop-center lalezar-regular">ABOUT</h1>

                <img src="assets/bush1.png" class="bush1" id="bush1">
                <img src="assets/leaf2.png" class="leaf2" id="leaf2">
                <img src="assets/leaf1.png" class="leaf1" id="leaf1">
            </section>

            <section class="about text-center container p-5">
              <div class="text-focus-in">
                <h1>AI TECHNOLOGY WEB</h1>
                <br>
                <p>Web ini dibuat untuk partisipasi pada lomba Web Development yang sedang berlangsung di sekitar bulan September - Oktober yang di desain dengan waktu hanya sehari yang di kerjakan oleh siswa <strong> PPLG/RPL</strong> Kelas XI/11 SMK Wikrama 1 Garut, Santri Pondok Pesantren Al-Ikrom.</p>
                <p class="text-gray-300">© 2024 SMK Wikrama 1 Garut, Inc.</p>
                <hr class="text-focus-in w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
              </div>
            </section>
            <div class="container about">
                <h1 class="font-size-2xl text-focus-in">Requirements :</h1>
                <br><br><br>
                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-4xl font-momo mb-6 text-center font-bold text-focus-in">Software</h1>
                    <div class="flex flex-wrap justify-center space-x-10">
                        <a class="scroll" href="https://en.wikipedia.org/wiki/XAMPP" target="_blank">
                            <div class="flex flex-col items-center">
                                <img src="img/xampp-logo.png" alt="XAMPP" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
                                <p class="text-xl sm:text-2xl lg:text-3xl mt-2">XAMPP</p>
                            </div>
                        </a>
                        <a class="scroll"  href="https://en.wikipedia.org/wiki/Node.js" target="_blank">
                            <div class="flex flex-col items-center">
                                <img src="img/nodejs-logo.png" alt="NODEJS" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
                                <p class="text-xl sm:text-2xl lg:text-3xl mt-2">NodeJS</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="mt-10"></div>

                <h1 class="text-4xl font-momo mb-6 text-center font-bold text-focus-in">Framework</h1> 
<div class="flex justify-center space-x-10">
    <a class="scroll"  href="https://en.wikipedia.org/wiki/Tailwind_CSS" target="_blank">
        <div class="flex flex-col items-center">
            <img src="img/tailwinds.png" alt="Tailwinds" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
            <p class="text-xl sm:text-2xl lg:text-3xl mt-2">Tailwinds</p>
        </div>
    </a>
    <a class="scroll"  href="https://en.wikipedia.org/wiki/Laravel" target="_blank">
        <div class="flex flex-col items-center">
            <img src="img/laravel.png" alt="Laravel" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
            <p class="text-xl sm:text-2xl lg:text-3xl mt-2">Laravel</p>
        </div>
    </a>
</div>
<h1 class="text-4xl font-momo mb-6 text-center font-bold mt-10 text-focus-in">Languages</h1>
<div class="flex justify-center space-x-10">
    <a class="scroll" href="https://en.wikipedia.org/wiki/HTML" target="_blank">
        <div class="flex flex-col items-center">
            <img src="img/HTML.png" alt="HTML" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
            <p class="text-xl sm:text-2xl lg:text-3xl mt-2">HTML</p>
        </div>
    </a>
    <a class="scroll" href="https://en.wikipedia.org/wiki/CSS" target="_blank">
        <div class="flex flex-col items-center">
            <img src="img/CSS3.png" alt="CSS" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
            <p class="text-xl sm:text-2xl lg:text-3xl mt-2">CSS</p>
        </div>
    </a>
    <a class="scroll" href="https://en.wikipedia.org/wiki/JavaScript" target="_blank">
        <div class="flex flex-col items-center">
            <img src="img/js.png" alt="JavaScript" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
            <p class="text-xl sm:text-2xl lg:text-3xl mt-2">JavaScript</p>
        </div>
    </a>
    <a class="scroll" href="https://en.wikipedia.org/wiki/PHP" target="_blank">
        <div class="flex flex-col items-center">
            <img src="img/php.png" alt="PHP" class="w-24 h-24 sm:w-48 sm:h-48 lg:w-64 lg:h-64 object-contain"><br>
            <p class="text-xl sm:text-2xl lg:text-3xl mt-2">PHP</p>
        </div>
    </a>
</div>
<br><br>
<h1>Created By :</h1>
<div class="mt-5 flex justify-center space-x-6">
    <!-- Team Member 1 -->
    <div x-data="{ open: false }" class="relative">
        <button @click="open = !open" class="flex items-center px-6 py-3 bg-cyan-700 text-white rounded-lg shadow-md transition duration-200 ease-in-out hover:bg-cyan-600">
            <img src="img/aden.png" alt="Aden Ragil Masrendra" class="inline-block h-12 w-12 rounded-full mr-3">
            <div class="flex-1 min-w-0 ms-4">
              <p class="font-bold text-white truncate dark:text-gray-300">
                  Aden Ragil Masrendra
              </p>
              <p class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">
                  FullStack Dev
              </p>
          </div>
        </button>
        <div x-show="open" @click.outside="open = false" class="absolute left-0 mt-2 w-full bg-white rounded-md shadow-lg transition duration-200 ease-in-out">
            <a href="https://instagram.com/ydznq" target="_blank" class="flex items-center px-4 py-2 text-gray-700 hover:bg-cyan-700 hover:text-white dark:bg-gray-800 dark:text-gray-200">
                <i class="fab fa-instagram mr-2"></i> Instagram
            </a>
            <a href="https://github.com/adenrm" target="_blank" class="flex items-center px-4 py-2 text-gray-700 hover:bg-cyan-700 hover:text-white dark:bg-gray-800 dark:text-gray-200">
                <i class="fab fa-github mr-2"></i> GitHub
            </a>
            <a href="mailto:aden315208@gmail.com" class="flex items-center px-4 py-2 text-gray-700 hover:bg-cyan-700 hover:text-white rounded-b-md dark:bg-gray-800 dark:text-gray-200">
                <i class="fas fa-envelope mr-2"></i> Gmail
            </a>
        </div>
    </div>

    <!-- Team Member 2 -->
    <div x-data="{ open: false }" class="relative">
        <button @click="open = !open" class="flex items-center px-6 py-3 bg-cyan-700 text-white rounded-lg shadow-md transition duration-200 ease-in-out hover:bg-cyan-600">
            <img src="img/rahmat.png" alt="Rahmat Rizki Aditia" class="inline-block h-12 w-12 rounded-full mr-3">
            <div class="flex-1 min-w-0 ms-4">
              <p class="font-bold text-white truncate dark:text-gray-300">
                  Rahmat Rizki Aditia
              </p>
              <p class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                  UI/UX Designer
              </p>
          </div>
        </button>
        <div x-show="open" @click.outside="open = false" class="absolute left-0 mt-2 w-full bg-white rounded-md shadow-lg transition duration-200 ease-in-out">
            <a href="https://instagram.com/callmerahmet" target="_blank" class="flex items-center px-4 py-2 text-gray-700 hover:bg-cyan-700 hover:text-white dark:bg-gray-800 dark:text-gray-200">
                <i class="fab fa-instagram mr-2"></i> Instagram
            </a>
            <a href="https://github.com/Iki-Coder" target="_blank" class="flex items-center px-4 py-2 text-gray-700 hover:bg-cyan-700 hover:text-white dark:bg-gray-800 dark:text-gray-200">
                <i class="fab fa-github mr-2"></i> GitHub
            </a>
            <a href="mailto:12300954@smkwikrama1garut.sch.id" class="flex items-center px-4 py-2 text-gray-700 hover:bg-cyan-700 hover:text-white rounded-b-md dark:bg-gray-800 dark:text-gray-200">
                <i class="fas fa-envelope mr-2"></i> Gmail
            </a>
        </div>
    </div>

    <!-- Team Member 3 -->
    <div x-data="{ open: false }" class="relative">
        <button @click="open = !open" class="flex items-center px-6 py-3 bg-cyan-700 text-white rounded-lg shadow-md transition duration-200 ease-in-out hover:bg-cyan-600">
            <img src="img/afu.png" alt="Afu Manan" class="inline-block h-12 w-12 rounded-full mr-3">
            <div class="flex-1 min-w-0 ms-4">
              <p class="font-bold text-white truncate dark:text-gray-300">
                  Afu Manan
              </p>
              <p class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">
                  Program Manager
              </p>
          </div>
        </button>
        <div x-show="open" @click.outside="open = false" class="absolute left-0 mt-2 w-full bg-white rounded-md shadow-lg transition duration-200 ease-in-out">
            <a href="https://instagram.com/afuaqil1614" target="_blank" class="flex items-center px-4 py-2 text-gray-700 hover:bg-cyan-700 hover:text-white dark:bg-gray-800 dark:text-gray-200">
                <i class="fab fa-instagram mr-2"></i> Instagram
            </a>
            <a href="https://github.com/Afu16" target="_blank" class="flex items-center px-4 py-2 text-gray-700 hover:bg-cyan-700 hover:text-white dark:bg-gray-800 dark:text-gray-200">
                <i class="fab fa-github mr-2"></i> GitHub
            </a>
            <a href="mailto:afumanan07@gmail.com" class="flex items-center px-4 py-2 text-gray-700 hover:bg-cyan-700 hover:text-white rounded-b-md dark:bg-gray-800 dark:text-gray-200">
                <i class="fas fa-envelope mr-2"></i> Gmail
            </a>
        </div>
    </div>
</div>
<!-- Make sure to include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
            </div>
        </main>
    </div>
      <footer class="bg-about">
    <img class="-mb-5" src="img/wave_footer.svg" alt="Wave">
    <div class="container bg-gray-500 flex flex-lg-column-reverse md:flex-row lg:flex-row text-white cursor-default sm:-mr-36">
      <div class="w-full bg-gray-500">
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
        <img class="w-36 sm:w-50 md:w-64 lg:w-72 roll-in-blurred-right" src="img/logoWikrama.png" alt="Logo">
      </div>
    </div>
    <div class="-mt-2 container text-center bg-gray-500 pt-5 cursor-default">
      <p class="text-center text-gray-300">© 2024 SMK Wikrama 1 Garut, Inc.</p>
      <br><br><br><br>
    </div>
  </footer>
  <script src="js/script.js">
    const title = document.querySelector('#title-parallax')
    const leaf1 = document.querySelector('#leaf1')
    const leaf2 = document.querySelector('#leaf2')
    const bush2 = document.querySelector('#bush2')
    const mount1 = document.querySelector('#mount1')
    const mount2 = document.querySelector('#mount2')
    
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
