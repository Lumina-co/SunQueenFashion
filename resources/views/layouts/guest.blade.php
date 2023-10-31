<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=parisienne:400" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- Styles -->
    @livewireStyles
</head>
<body class="w-full">

    <header>

        {{-- desktop menu --}}
        <nav class="hidden lg:flex justify-between bg-black1 shadow-lg">
            <div class="ml-8">
                <x-application-logo />
            </div>
            @if(Request::route()->getName() !== 'sqf.CGU') {{-- Vérifie si la route n'est pas CGU --}}
            <div class="flex items-center space-x-20">
                <a href="#uv" class="group text-xl flex items-center gap-1 text-white hover:text-red1 transition-colors duration-300">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M11 4V1h2v3h-2Zm0 19v-3h2v3h-2Zm9-10v-2h3v2h-3ZM1 13v-2h3v2H1Zm17.7-6.3l-1.4-1.4l1.75-1.8l1.45 1.45l-1.8 1.75ZM4.95 20.5L3.5 19.05l1.8-1.75l1.4 1.4l-1.75 1.8Zm14.1 0l-1.75-1.8l1.4-1.4l1.8 1.75l-1.45 1.45ZM5.3 6.7L3.5 4.95L4.95 3.5L6.7 5.3L5.3 6.7ZM12 18q-2.5 0-4.25-1.75T6 12q0-2.5 1.75-4.25T12 6q2.5 0 4.25 1.75T18 12q0 2.5-1.75 4.25T12 18Zm0-2q1.675 0 2.838-1.163T16 12q0-1.675-1.163-2.838T12 8q-1.675 0-2.838 1.163T8 12q0 1.675 1.163 2.838T12 16Zm0-4Z" /></svg>
                    Solarium
                </a>

                <a href="#mode" class="group text-xl flex items-center gap-1 text-white hover:text-red1 transition-colors duration-300">
            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 128 128">
                <path fill="#1565C0" d="M89.71 68.54c-5.89-13.16-11.59-21.56-11.59-21.56v-.01H46.05c-1.91 3.74-5.11 9.81-9.71 18.28c-5.59 10.3-18.23 43.45-18.23 43.45s.74 4.38 11.5 6.35c7.14 1.31 9.29.19 15.26 3.43c5.27 2.86 8.92 5.53 17.85 5.53s11.18-2.21 18.45-5.53c6.19-2.83 9.53-1.45 16.64-2.91c15.07-3.09 16.06-14.11 16.06-14.11s-11.52-4.69-24.16-32.92z"/><path fill="#1565C0" d="M82.54 6.8c.02-.81-.51-1.53-1.28-1.75l-3.46-.98c-1.02-.29-2.05.37-2.22 1.42l-1.71 10.55s-5.3.91-11.17 5.69l-.39-.01c-5.87-4.78-11.29-5.68-11.29-5.68L49.3 5.48a1.773 1.773 0 0 0-2.22-1.42l-3.46.98c-.78.22-1.31.94-1.28 1.75c.09 3.23.4 11.68 1.33 20.24c.95 8.76 3 17.7 2.72 20.85c0 0 8.04 1.1 15.81 1.18v.01h.52v-.01c7.76-.07 15.81-1.18 15.81-1.18c-.28-3.15 1.77-12.09 2.72-20.85c.89-8.56 1.2-17 1.29-20.23z"/><linearGradient id="notoDress0" x1="37.617" x2="86.158" y1="46.75" y2="46.75" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#03A9F4"/><stop offset=".061" stop-color="#20B4F7"/><stop offset=".147" stop-color="#42C1FA"/><stop offset=".235" stop-color="#5DCBFC"/><stop offset=".323" stop-color="#71D2FE"/><stop offset=".414" stop-color="#7CD7FF"/><stop offset=".509" stop-color="#80D8FF"/><stop offset=".609" stop-color="#7DD7FF"/><stop offset=".696" stop-color="#72D3FE"/><stop offset=".777" stop-color="#60CCFC"/><stop offset=".856" stop-color="#47C3FA"/><stop offset=".931" stop-color="#27B7F7"/><stop offset="1" stop-color="#03A9F4"/></linearGradient><path fill="url(#notoDress0)" d="M63.2 50.16c-9.1 0-15.33-.74-17.45-.98a.779.779 0 0 1-.68-.87l.6-4.28a.77.77 0 0 1 .85-.67c2.03.22 8.09.79 16.68.79c8.26 0 13.23-.53 15-.75c.41-.05.79.23.86.64l.46 4.25c.07.43-.22.84-.66.9c-1.89.24-6.78.97-15.66.97z"/><path fill="#0D47A1" d="M73.82 16.09c-.84-.13-3.23.81-3.85 1.05c-2.73 1.05-4.99 2.5-7.16 4.45c-.01.01-.14.09-.3.09c-.16 0-.27-.09-.28-.1c-2.17-1.95-4.45-3.38-7.18-4.43c-.63-.24-3.02-1.18-3.85-1.05c-1 .15.21 1.26 2.02 2.84c1.82 1.58 4.39 3.8 6.57 5.76c.75.67 1.75.97 2.72 1.05c.97-.08 1.97-.38 2.72-1.05c2.18-1.96 4.75-4.18 6.57-5.76s3.02-2.7 2.02-2.85z"/><linearGradient id="notoDress1" x1="44.427" x2="51.535" y1="117.96" y2="64.944" gradientUnits="userSpaceOnUse"><stop offset=".297" stop-color="#0D47A1"/><stop offset="1" stop-color="#0D47A1" stop-opacity=".2"/></linearGradient><path fill="url(#notoDress1)" d="M39.6 116.06c3.73-28.23 13.54-52.85 13.54-52.85s-3.28 29.02-4.01 57.59c0 0-2.85-1.8-5.46-2.95c-2.61-1.15-4.07-1.79-4.07-1.79z"/><linearGradient id="notoDress2" x1="82.779" x2="76.996" y1="120.125" y2="77.91" gradientUnits="userSpaceOnUse"><stop offset=".297" stop-color="#0D47A1"/><stop offset="1" stop-color="#0D47A1" stop-opacity=".2"/></linearGradient><path fill="url(#notoDress2)" d="M77.45 120.26c-2.45-15.11-3.92-30.15-3.21-42.35c0 0 5.55 22.99 13.52 38.73c0 0-2.71.39-5.3 1.29c-1.81.63-5.01 2.33-5.01 2.33z"/></svg>
                    Mode
                </a>

                <a href="#boutique" class="group text-xl flex items-center gap-1 text-white hover:text-red1 transition-colors duration-300">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256">
                        <path fill="#f9f8f5" d="M220.61 60.16A6 6 0 0 0 216 58H53l-5.17-28.5A14 14 0 0 0 34.05 18H16a6 6 0 0 0 0 12h18a2 2 0 0 1 2 1.64l25.51 140.3a21.93 21.93 0 0 0 6.24 11.77a26 26 0 1 0 38.14 6.29h52.22A26 26 0 1 0 180 178H83.17a10 10 0 0 1-9.84-8.21L69.73 150H188.1a22 22 0 0 0 21.65-18.06l12.15-66.87a6 6 0 0 0-1.29-4.91ZM98 204a14 14 0 1 1-14-14a14 14 0 0 1 14 14Zm96 0a14 14 0 1 1-14-14a14 14 0 0 1 14 14Zm3.94-74.21a10 10 0 0 1-9.84 8.21H67.55L55.19 70h153.62Z"/></svg>
                    Boutique
                </a>

                <a href="#contact" class="group text-xl flex items-center text-white hover:text-red1 transition-colors duration-300">
                    Contact
                </a>
            </div>
            @else {{-- Si c'est la page CGU, affichez uniquement le lien d'accueil --}}
            <div class="flex items-center space-x-20">
                <a href="{{ route('sqf.accueil') }}" class="group flex items-center text-xl text-white hover:text-red1 transition-colors duration-300">
                    Accueil
                </a>
            </div>
            @endif
            {{-- social réseaux --}}
            <div class="flex m-8 mr-16">
                <ul class="flex gap-4 ">
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100089303376662" target="_blank">
                            <svg class="transform hover:scale-110 transition-transform hover:rotate-45" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256">
                                <path fill="#1877F2" d="M256 128C256 57.308 198.692 0 128 0C57.308 0 0 57.307 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.347-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.958 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445" />
                                <path fill="#FFF" d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A128.959 128.959 0 0 0 128 256a128.9 128.9 0 0 0 20-1.555V165h29.825" /></svg>
                        </a>
                    </li>

                    <li>
                        <a href="https://instagram.com/sunqueenandfashion?igshid=MzRlODBiNWFlZA==" target="_blank">
                            <svg class="transform hover:scale-110 transition-transform hover:rotate-45" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256">
                                <g fill="none">
                                    <rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60" />
                                    <rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60" />
                                    <path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604h.031Zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563v.025Zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12v.004Zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355h.002Zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334Z" />
                                    <defs>
                                        <radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FD5" />
                                            <stop offset=".1" stop-color="#FD5" />
                                            <stop offset=".5" stop-color="#FF543E" />
                                            <stop offset="1" stop-color="#C837AB" />
                                        </radialGradient>
                                        <radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#3771C8" />
                                            <stop offset=".128" stop-color="#3771C8" />
                                            <stop offset="1" stop-color="#60F" stop-opacity="0" />
                                        </radialGradient>
                                    </defs>
                                </g>
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.tiktok.com/@sunqueenandfashion" target="_blank">
                            <svg class="transform hover:scale-110 transition-transform hover:rotate-45" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 290">
                                <path fill="#FF004F" d="M189.72 104.421c18.678 13.345 41.56 21.197 66.273 21.197v-47.53a67.115 67.115 0 0 1-13.918-1.456v37.413c-24.711 0-47.59-7.851-66.272-21.195v96.996c0 48.523-39.356 87.855-87.9 87.855c-18.113 0-34.949-5.473-48.934-14.86c15.962 16.313 38.222 26.432 62.848 26.432c48.548 0 87.905-39.332 87.905-87.857v-96.995h-.002Zm17.17-47.952c-9.546-10.423-15.814-23.893-17.17-38.785v-6.113h-13.189c3.32 18.927 14.644 35.097 30.358 44.898ZM69.673 225.607a40.008 40.008 0 0 1-8.203-24.33c0-22.192 18.001-40.186 40.21-40.186a40.313 40.313 0 0 1 12.197 1.883v-48.593c-4.61-.631-9.262-.9-13.912-.801v37.822a40.268 40.268 0 0 0-12.203-1.882c-22.208 0-40.208 17.992-40.208 40.187c0 15.694 8.997 29.281 22.119 35.9Z" />
                                <path d="M175.803 92.849c18.683 13.344 41.56 21.195 66.272 21.195V76.631c-13.794-2.937-26.005-10.141-35.186-20.162c-15.715-9.802-27.038-25.972-30.358-44.898h-34.643v189.843c-.079 22.132-18.049 40.052-40.21 40.052c-13.058 0-24.66-6.221-32.007-15.86c-13.12-6.618-22.118-20.206-22.118-35.898c0-22.193 18-40.187 40.208-40.187c4.255 0 8.356.662 12.203 1.882v-37.822c-47.692.985-86.047 39.933-86.047 87.834c0 23.912 9.551 45.589 25.053 61.428c13.985 9.385 30.82 14.86 48.934 14.86c48.545 0 87.9-39.335 87.9-87.857V92.85h-.001Z" />
                                <path fill="#00F2EA" d="M242.075 76.63V66.516a66.285 66.285 0 0 1-35.186-10.047a66.47 66.47 0 0 0 35.186 20.163ZM176.53 11.57a67.788 67.788 0 0 1-.728-5.457V0h-47.834v189.845c-.076 22.13-18.046 40.05-40.208 40.05a40.06 40.06 0 0 1-18.09-4.287c7.347 9.637 18.949 15.857 32.007 15.857c22.16 0 40.132-17.918 40.21-40.05V11.571h34.643ZM99.966 113.58v-10.769a88.787 88.787 0 0 0-12.061-.818C39.355 101.993 0 141.327 0 189.845c0 30.419 15.467 57.227 38.971 72.996c-15.502-15.838-25.053-37.516-25.053-61.427c0-47.9 38.354-86.848 86.048-87.833Z" /></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        {{-- mobile menu --}}
        <nav class="leading-10 w-full block lg:hidden bg-black1 py-4 ">
            <button id="button" class=" p-2 mx-6 duration-400  rounded-full bg-white flex items-center">
                <svg id="open" class=" bg-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256">
                    <path fill="currentColor" d="M222 128a6 6 0 0 1-6 6H40a6 6 0 0 1 0-12h176a6 6 0 0 1 6 6ZM40 70h176a6 6 0 0 0 0-12H40a6 6 0 0 0 0 12Zm176 116H40a6 6 0 0 0 0 12h176a6 6 0 0 0 0-12Z" />
                </svg>
                <svg id="close" class="hidden bg-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 15 15">
                    <path fill="currentColor" fill-rule="evenodd" d="M12.854 2.854a.5.5 0 0 0-.708-.708L7.5 6.793L2.854 2.146a.5.5 0 1 0-.708.708L6.793 7.5l-4.647 4.646a.5.5 0 0 0 .708.708L7.5 8.207l4.646 4.647a.5.5 0 0 0 .708-.708L8.207 7.5l4.647-4.646Z" clip-rule="evenodd" />
                </svg>
            </button>

            <div id="menu" class="flex-col flex hidden  justify-center gap-4 p-4 items-center">
                @if(Request::route()->getName() !== 'sqf.CGU') {{-- Vérifie si la route n'est pas CGU --}}
                <a href="#uv" class="group flex items-center  text-white hover:text-red1 transition-colors duration-300">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M11 4V1h2v3h-2Zm0 19v-3h2v3h-2Zm9-10v-2h3v2h-3ZM1 13v-2h3v2H1Zm17.7-6.3l-1.4-1.4l1.75-1.8l1.45 1.45l-1.8 1.75ZM4.95 20.5L3.5 19.05l1.8-1.75l1.4 1.4l-1.75 1.8Zm14.1 0l-1.75-1.8l1.4-1.4l1.8 1.75l-1.45 1.45ZM5.3 6.7L3.5 4.95L4.95 3.5L6.7 5.3L5.3 6.7ZM12 18q-2.5 0-4.25-1.75T6 12q0-2.5 1.75-4.25T12 6q2.5 0 4.25 1.75T18 12q0 2.5-1.75 4.25T12 18Zm0-2q1.675 0 2.838-1.163T16 12q0-1.675-1.163-2.838T12 8q-1.675 0-2.838 1.163T8 12q0 1.675 1.163 2.838T12 16Zm0-4Z" /></svg>
                    Solarium
                </a>

                <a href="#mode" class="group flex items-center text-white hover:text-red1 transition-colors duration-300">
                    Mode
                </a>

                <a href="#boutique" class="group flex items-center text-white hover:text-red1 transition-colors duration-300">
                    Boutique
                </a>

                <a href="#contact" class="group flex items-center text-white hover:text-red1 transition-colors duration-300">
                    Contact
                </a>
                @else {{-- Si c'est la page CGU, affichez uniquement le lien d'accueil --}}
                <div class="flex items-center space-x-20">
                    <a href="{{ route('sqf.accueil') }}" class="group flex items-center text-xl text-white hover:text-red1 transition-colors duration-300">
                        Accueil
                    </a>
                </div>
                @endif
                {{-- social reseaux --}}
                <div class="flex  py-4">
                    <ul class="flex gap-8">
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100089303376662" target="_blank">
                                <svg class="transform hover:scale-110 transition-transform hover:rotate-45" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256">
                                    <path fill="#1877F2" d="M256 128C256 57.308 198.692 0 128 0C57.308 0 0 57.307 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.347-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.958 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445" />
                                    <path fill="#FFF" d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A128.959 128.959 0 0 0 128 256a128.9 128.9 0 0 0 20-1.555V165h29.825" /></svg>
                            </a>
                        </li>


                        <li>
                            <a href="https://instagram.com/sunqueenandfashion?igshid=MzRlODBiNWFlZA==" target="_blank">
                                <svg class="transform hover:scale-110 transition-transform hover:rotate-45" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256">
                                    <g fill="none">
                                        <rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60" />
                                        <rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60" />
                                        <path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604h.031Zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563v.025Zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12v.004Zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355h.002Zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334Z" />
                                        <defs>
                                            <radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FD5" />
                                                <stop offset=".1" stop-color="#FD5" />
                                                <stop offset=".5" stop-color="#FF543E" />
                                                <stop offset="1" stop-color="#C837AB" />
                                            </radialGradient>
                                            <radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#3771C8" />
                                                <stop offset=".128" stop-color="#3771C8" />
                                                <stop offset="1" stop-color="#60F" stop-opacity="0" />
                                            </radialGradient>
                                        </defs>
                                    </g>
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.tiktok.com/@sunqueenandfashion" target="_blank">
                                <svg class="transform hover:scale-110 transition-transform hover:rotate-45" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 290">
                                    <path fill="#FF004F" d="M189.72 104.421c18.678 13.345 41.56 21.197 66.273 21.197v-47.53a67.115 67.115 0 0 1-13.918-1.456v37.413c-24.711 0-47.59-7.851-66.272-21.195v96.996c0 48.523-39.356 87.855-87.9 87.855c-18.113 0-34.949-5.473-48.934-14.86c15.962 16.313 38.222 26.432 62.848 26.432c48.548 0 87.905-39.332 87.905-87.857v-96.995h-.002Zm17.17-47.952c-9.546-10.423-15.814-23.893-17.17-38.785v-6.113h-13.189c3.32 18.927 14.644 35.097 30.358 44.898ZM69.673 225.607a40.008 40.008 0 0 1-8.203-24.33c0-22.192 18.001-40.186 40.21-40.186a40.313 40.313 0 0 1 12.197 1.883v-48.593c-4.61-.631-9.262-.9-13.912-.801v37.822a40.268 40.268 0 0 0-12.203-1.882c-22.208 0-40.208 17.992-40.208 40.187c0 15.694 8.997 29.281 22.119 35.9Z" />
                                    <path d="M175.803 92.849c18.683 13.344 41.56 21.195 66.272 21.195V76.631c-13.794-2.937-26.005-10.141-35.186-20.162c-15.715-9.802-27.038-25.972-30.358-44.898h-34.643v189.843c-.079 22.132-18.049 40.052-40.21 40.052c-13.058 0-24.66-6.221-32.007-15.86c-13.12-6.618-22.118-20.206-22.118-35.898c0-22.193 18-40.187 40.208-40.187c4.255 0 8.356.662 12.203 1.882v-37.822c-47.692.985-86.047 39.933-86.047 87.834c0 23.912 9.551 45.589 25.053 61.428c13.985 9.385 30.82 14.86 48.934 14.86c48.545 0 87.9-39.335 87.9-87.857V92.85h-.001Z" />
                                    <path fill="#00F2EA" d="M242.075 76.63V66.516a66.285 66.285 0 0 1-35.186-10.047a66.47 66.47 0 0 0 35.186 20.163ZM176.53 11.57a67.788 67.788 0 0 1-.728-5.457V0h-47.834v189.845c-.076 22.13-18.046 40.05-40.208 40.05a40.06 40.06 0 0 1-18.09-4.287c7.347 9.637 18.949 15.857 32.007 15.857c22.16 0 40.132-17.918 40.21-40.05V11.571h34.643ZM99.966 113.58v-10.769a88.787 88.787 0 0 0-12.061-.818C39.355 101.993 0 141.327 0 189.845c0 30.419 15.467 57.227 38.971 72.996c-15.502-15.838-25.053-37.516-25.053-61.427c0-47.9 38.354-86.848 86.048-87.833Z" /></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>

    </header>

    <div class="font-sans text-gray-900 antialiased bg-black1 px-12">
        {{ $slot }}
    </div>

    {{-- footer responsif --}}
    <footer class="flex flex-col lg:flex-row justify-between bg-black1 shadow-lg  ">
        <div class="flex w-25 ml-8 justify-between">
            <x-application-logo />

            {{-- social réseaux --}}
            <div class="flex mr-10 mt-8 lg:px-20 ">
                <ul class="flex gap-4 ">
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100089303376662" target="_blank">
                            <svg class="transform hover:scale-110 transition-transform hover:rotate-45" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256">
                                <path fill="#1877F2" d="M256 128C256 57.308 198.692 0 128 0C57.308 0 0 57.307 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.347-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.958 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445" />
                                <path fill="#FFF" d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A128.959 128.959 0 0 0 128 256a128.9 128.9 0 0 0 20-1.555V165h29.825" /></svg>
                        </a>
                    </li>

                    <li>
                        <a href="https://instagram.com/sunqueenandfashion?igshid=MzRlODBiNWFlZA==" target="_blank">
                            <svg class="transform hover:scale-110 transition-transform hover:rotate-45" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 256">
                                <g fill="none">
                                    <rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60" />
                                    <rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60" />
                                    <path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604h.031Zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563v.025Zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12v.004Zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355h.002Zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334Z" />
                                    <defs>
                                        <radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FD5" />
                                            <stop offset=".1" stop-color="#FD5" />
                                            <stop offset=".5" stop-color="#FF543E" />
                                            <stop offset="1" stop-color="#C837AB" />
                                        </radialGradient>
                                        <radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#3771C8" />
                                            <stop offset=".128" stop-color="#3771C8" />
                                            <stop offset="1" stop-color="#60F" stop-opacity="0" />
                                        </radialGradient>
                                    </defs>
                                </g>
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.tiktok.com/@sunqueenandfashion" target="_blank">
                            <svg class="transform hover:scale-110 transition-transform hover:rotate-45" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 256 290">
                                <path fill="#FF004F" d="M189.72 104.421c18.678 13.345 41.56 21.197 66.273 21.197v-47.53a67.115 67.115 0 0 1-13.918-1.456v37.413c-24.711 0-47.59-7.851-66.272-21.195v96.996c0 48.523-39.356 87.855-87.9 87.855c-18.113 0-34.949-5.473-48.934-14.86c15.962 16.313 38.222 26.432 62.848 26.432c48.548 0 87.905-39.332 87.905-87.857v-96.995h-.002Zm17.17-47.952c-9.546-10.423-15.814-23.893-17.17-38.785v-6.113h-13.189c3.32 18.927 14.644 35.097 30.358 44.898ZM69.673 225.607a40.008 40.008 0 0 1-8.203-24.33c0-22.192 18.001-40.186 40.21-40.186a40.313 40.313 0 0 1 12.197 1.883v-48.593c-4.61-.631-9.262-.9-13.912-.801v37.822a40.268 40.268 0 0 0-12.203-1.882c-22.208 0-40.208 17.992-40.208 40.187c0 15.694 8.997 29.281 22.119 35.9Z" />
                                <path d="M175.803 92.849c18.683 13.344 41.56 21.195 66.272 21.195V76.631c-13.794-2.937-26.005-10.141-35.186-20.162c-15.715-9.802-27.038-25.972-30.358-44.898h-34.643v189.843c-.079 22.132-18.049 40.052-40.21 40.052c-13.058 0-24.66-6.221-32.007-15.86c-13.12-6.618-22.118-20.206-22.118-35.898c0-22.193 18-40.187 40.208-40.187c4.255 0 8.356.662 12.203 1.882v-37.822c-47.692.985-86.047 39.933-86.047 87.834c0 23.912 9.551 45.589 25.053 61.428c13.985 9.385 30.82 14.86 48.934 14.86c48.545 0 87.9-39.335 87.9-87.857V92.85h-.001Z" />
                                <path fill="#00F2EA" d="M242.075 76.63V66.516a66.285 66.285 0 0 1-35.186-10.047a66.47 66.47 0 0 0 35.186 20.163ZM176.53 11.57a67.788 67.788 0 0 1-.728-5.457V0h-47.834v189.845c-.076 22.13-18.046 40.05-40.208 40.05a40.06 40.06 0 0 1-18.09-4.287c7.347 9.637 18.949 15.857 32.007 15.857c22.16 0 40.132-17.918 40.21-40.05V11.571h34.643ZM99.966 113.58v-10.769a88.787 88.787 0 0 0-12.061-.818C39.355 101.993 0 141.327 0 189.845c0 30.419 15.467 57.227 38.971 72.996c-15.502-15.838-25.053-37.516-25.053-61.427c0-47.9 38.354-86.848 86.048-87.833Z" /></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex justify-center  my-4 lg:flex-row text-xl lg:gap-36 items-center">
            <a href="{{ route('sqf.CGU') }}" class="text-white hover:text-red1 transition-colors duration-300">
                CGU
            </a>


        </div>

        <div class=" flex justify-center lg:mt-8 lg:mr-20 text-white">
            © 2023. Tous droits réservés.
        </div>
    </footer>
    @livewireScripts
</body>
</html>
