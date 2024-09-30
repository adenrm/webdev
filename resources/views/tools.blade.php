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
<body class="h-full">
    <div class="min-h-full">
        <nav x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="img/logoWikrama.png" alt="Your Company">
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6 space-x-4">
                            <a href="/" class="rounded-md px-3 py-2 text-sm lalezar-regular text-black hover:bg-cyan-700 hover:text-white" aria-current="page">HOME</a>
                            <a href="/about" class="rounded-md px-3 py-2 text-sm lalezar-regular text-black hover:bg-cyan-700 hover:text-white">ABOUT</a>
                            <a href="/tools" class="rounded-md bg-cyan-700 px-3 py-2 text-sm lalezar-regular text-white">TOOLS</a>
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
                              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </nav>
        
        <div class="flex flex-col items-center justify-center mt-8">
            <h1 class="text-4xl font-momo mb-6 font-bold">Asisten</h1>
            <div class="flex flex-col md:flex-row flex-container">
                <div class="image-container">
                    <a href="https://assistant.google.com/" target="_blank">
                        <img src="img/Assistant.png" alt="logo Assistant">
                        <p class="image-description">Google Assistant</p>
                    </a>
                </div>
                <div class="image-container">
                    <a href="https://www.apple.com/siri/" target="_blank">
                        <img src="img/siri.png" alt="logo Siri">
                        <p class="image-description">Siri</p>
                    </a>
                </div>
                <div class="image-container">
                    <a href="https://www.amazon.com/alexa" target="_blank">
                        <img src="img/alexa.png" alt="logo Alexa">
                        <p class="image-description">Alexa</p>
                    </a>
                </div>
            </div>

            <h1 class="text-4xl font-momo mb-6 font-bold mt-8">Kendaraan</h1>
            <div class="flex flex-col md:flex-row flex-container">
                <div class="image-container">
                    <a href="https://www.tesla.com" target="_blank">
                        <img src="img/tesla.png" alt="Tesla">
                        <p class="image-description">Tesla</p>
                    </a>
                </div>
                <div class="image-container">
                    <a href="https://waymo.com" target="_blank">
                        <img src="img/Waymo.png" alt="Waymo">
                        <p class="image-description">Waymo</p>
                    </a>
                </div>
            </div>

            <h1 class="text-4xl font-momo mb-6 font-bold mt-8">ChatBot</h1>
            <div class="flex flex-col md:flex-row flex-container">
                <div class="image-container">
                    <a href="https://ada.support" target="_blank">
                        <img src="img/Ada.png" alt="Chatbot 1">
                        <p class="image-description">Ada</p>
                    </a>
                </div>
                <div class="image-container">
                    <a href="https://www.openai.com/chatgpt" target="_blank">
                        <img src="img/gpt.png" alt="Chatbot 2">
                        <p class="image-description">ChatGPT</p>
                    </a>
                </div>
                <div class="image-container">
                    <a href="https://www.ibm.com/watsonx" target="_blank">
                        <img src="img/pn.png" alt="Chatbot 3">
                        <p class="image-description">IBM Watsonx</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
