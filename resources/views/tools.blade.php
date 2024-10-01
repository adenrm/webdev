<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Tools</title>
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

        .image-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            margin: 10px;
            border-radius: 15px;
            background-color: #f0f8ff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
        }

        .image-container:hover {
            transform: scale(1.05);
        }

        .image-container img {
            border-radius: 10px;
            width: 100%;
            max-width: 200px;
            height: auto;
        }

        .image-description {
            text-align: center;
            margin-top: 10px;
            font-size: 1.2rem;
            font-weight: bold;
        }

        @media (min-width: 768px) {
            .flex-container {
                flex-direction: row;
                justify-content: center;
                gap: 20px;
            }
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
                    
                    {{-- <label class="toggle-switch inline-flex items-center cursor-pointer mt-1 mr-3">
                      <input id="toggle-switch" type="checkbox" value="" class="sr-only peer">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" class="size-6 mr-3 block dark:hidden">
                        <path d="M12 2.25a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM7.5 12a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM18.894 6.166a.75.75 0 0 0-1.06-1.06l-1.591 1.59a.75.75 0 1 0 1.06 1.061l1.591-1.59ZM21.75 12a.75.75 0 0 1-.75.75h-2.25a.75.75 0 0 1 0-1.5H21a.75.75 0 0 1 .75.75ZM17.834 18.894a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 1 0-1.061 1.06l1.59 1.591ZM12 18a.75.75 0 0 1 .75.75V21a.75.75 0 0 1-1.5 0v-2.25A.75.75 0 0 1 12 18ZM7.758 17.303a.75.75 0 0 0-1.061-1.06l-1.591 1.59a.75.75 0 0 0 1.06 1.061l1.591-1.59ZM6 12a.75.75 0 0 1-.75.75H3a.75.75 0 0 1 0-1.5h2.25A.75.75 0 0 1 6 12ZM6.697 7.757a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 0 0-1.061 1.06l1.59 1.591Z" />
                      </svg>            
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="gray" class="size-6 mr-3 hidden dark:block">
                        <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 0 1 .162.819A8.97 8.97 0 0 0 9 6a9 9 0 0 0 9 9 8.97 8.97 0 0 0 3.463-.69.75.75 0 0 1 .981.98 10.503 10.503 0 0 1-9.694 6.46c-5.799 0-10.5-4.7-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 0 1 .818.162Z" clip-rule="evenodd" />
                      </svg>
                                                          
                      <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                      </div>
                    </label> --}}
                    <label for="toggle-switch" class="toggle-switch inline-flex items-center cursor-pointer mt-1 mr-3">
                      <input type="checkbox" name="toggle" id="toggle-switch" class="hidden">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="orange" class="size-6 mr-2 block dark:hidden">
                        <path d="M12 2.25a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM7.5 12a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM18.894 6.166a.75.75 0 0 0-1.06-1.06l-1.591 1.59a.75.75 0 1 0 1.06 1.061l1.591-1.59ZM21.75 12a.75.75 0 0 1-.75.75h-2.25a.75.75 0 0 1 0-1.5H21a.75.75 0 0 1 .75.75ZM17.834 18.894a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 1 0-1.061 1.06l1.59 1.591ZM12 18a.75.75 0 0 1 .75.75V21a.75.75 0 0 1-1.5 0v-2.25A.75.75 0 0 1 12 18ZM7.758 17.303a.75.75 0 0 0-1.061-1.06l-1.591 1.59a.75.75 0 0 0 1.06 1.061l1.591-1.59ZM6 12a.75.75 0 0 1-.75.75H3a.75.75 0 0 1 0-1.5h2.25A.75.75 0 0 1 6 12ZM6.697 7.757a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 0 0-1.061 1.06l1.59 1.591Z" />
                      </svg>            
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="yellow" class="size-6 mr-2 hidden dark:block">
                        <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 0 1 .162.819A8.97 8.97 0 0 0 9 6a9 9 0 0 0 9 9 8.97 8.97 0 0 0 3.463-.69.75.75 0 0 1 .981.98 10.503 10.503 0 0 1-9.694 6.46c-5.799 0-10.5-4.7-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 0 1 .818.162Z" clip-rule="evenodd" />
                      </svg>
                    </label>
                    <div class="space-x-4">
                      <a href="/" class="rounded-md px-3 py-2 text-sm lalezar-regular text-black hover:bg-cyan-700 hover:text-white dark:text-white" aria-current="page">HOME</a>
                      <a href="/about" class="rounded-md px-3 py-2 text-sm lalezar-regular text-black hover:bg-cyan-700 hover:text-white dark:text-white">ABOUT</a>
                      <a href="/tools" class="rounded-md bg-cyan-700 px-3 py-2 text-sm lalezar-regular text-white dark:text-white">TOOLS</a>
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
                <a href="/" class="block rounded-md px-3 py-2 text-base font-medium text-gray-600 hover:bg-cyan-700 hover:text-white dark:text-white" aria-current="page">Home</a>
                <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-600 hover:bg-cyan-700 hover:text-white dark:text-white">About</a>
                <a href="/tools" class="block rounded-md bg-cyan-700 px-3 py-2 text-base font-medium text-white dark:text-white">Tools</a>
                <a target="_blank" href="https://smkwikrama1garut.sch.id/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cyan-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-0">Informasi Sekolah</a>
                  <a target="_blank" href="https://www.google.com/maps/place/SMK+Wikrama+1+Garut/@-7.1717526,107.8899623,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68b0c3cbcb1f29:0xc96607822a7646b0!8m2!3d-7.1717526!4d107.8925372!16s%2Fg%2F1pzt06b5r?entry=ttu&g_ep=EgoyMDI0MDkyNS4wIKXMDSoASAFQAw%3D%3D" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cyan-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-1">Alamat Sekolah</a>
                  <a target="_blank" href="https://smkwikrama1garut.sch.id/psb-online/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-cyan-700 hover:text-white" role="menuitem" tabindex="-1" id="user-menu-item-2">PPDB Sekolah</a>
              </div>
            </div>
          </nav>
          <div class="flex flex-col items-center text-center justify-center mt-8">
            <div class="assistant">
                <h1 class="text-4xl font-momo mb-6 font-bold dark:text-white">Asisten</h1>
                <div class="flex flex-col sm:flex-wrap md:flex-row flex-container">
                    <div class="image-container bg-gray-300 card-border sm:w-50 md:w-64 lg:w-72">
                        <a class="scroll" href="https://assistant.google.com/" target="_blank">
                            <img src="img/Assistant.png" alt="logo Assistant">
                            <p class="image-description">Google Assistant</p>
                        </a>
                    </div>
                    <div class="image-container card-border sm:w-50 md:w-64 lg:w-72">
                        <a class="scroll" href="https://www.apple.com/siri/" target="_blank">
                            <img src="img/siri.png" alt="logo Siri">
                            <p class="image-description">Siri</p>
                        </a>
                    </div>
                    <div class="image-container card-border sm:w-50 md:w-64 lg:w-72">
                        <a class="scroll" href="https://www.amazon.com/alexa" target="_blank">
                            <img src="img/alexa.png" alt="logo Alexa">
                            <p class="image-description">Alexa</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="vehicle">
                <h1 class="text-4xl font-momo mb-6 font-bold mt-8 dark:text-white">Kendaraan</h1>
                <div class="flex flex-col sm:flex-wrap md:flex-row flex-container">
                    <div class="image-container card-border">
                        <a class="scroll" href="https://www.tesla.com" target="_blank">
                            <img src="img/tesla.png" alt="Tesla">
                            <p class="image-description">Tesla</p>
                        </a>
                    </div>
                    <div class="image-container card-border">
                        <a class="scroll" href="https://waymo.com" target="_blank">
                            <img src="img/Waymo.png" alt="Waymo">
                            <p class="image-description">Waymo</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="chatbot">
                <h1 class="text-4xl font-momo mb-6 font-bold mt-8 dark:text-white">ChatBot</h1>
                <div class="flex flex-col sm:flex-wrap md:flex-row flex-container">
                    <div class="image-container card-border">
                        <a class="scroll" href="https://ada.support" target="_blank">
                            <img src="img/Ada.png" alt="Chatbot 1">
                            <p class="image-description">Ada</p>
                        </a>
                    </div>
                    <div class="image-container card-border">
                        <a class="scroll" href="https://www.openai.com/chatgpt" target="_blank">
                            <img src="img/gpt.png" alt="Chatbot 2">
                            <p class="image-description">ChatGPT</p>
                        </a>
                    </div>
                    <div class="image-container card-border">
                        <a class="scroll" href="https://www.ibm.com/watsonx" target="_blank">
                            <img src="img/pn.png" alt="Chatbot 3">
                            <p class="image-description">IBM Watsonx</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="-mb-5" src="img/wave_footer.svg" alt="Wave">
    <footer class="bg-black">
        <div class="container bg-gray-500 flex flex-lg-column-reverse md:gap-6 md:flex-row lg:flex-row text-white cursor-default sm:-mr-36">
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
            <img class="w-36 sm:w-50 md:w-64 lg:w-72 roll-in-blurred-right" src="img/logoWikrama.png" alt="Logo">
          </div>
        </div>
        <div class="-mt-2 container text-center bg-gray-500 pt-5 cursor-default">
          <p class="text-center text-gray-300">© 2024 SMK Wikrama 1 Garut, Inc.</p>
          <br><br><br><br>
        </div>
      </footer>
    <script src="js/script.js">
    </script>
</body>
</html>
