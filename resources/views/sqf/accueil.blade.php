<x-guest-layout>
    <div class="bg-white">

        {{-- hero section --}}
        <div class="relative">
            <div class="bg-black1">
                <img src="/assets/mode.png" alt="image_mode_accessoire" class="w-full lg:h-[500px] opacity-80   ">
            </div>
            <div class="absolute inset-0 flex items-center justify-center">
                <img src="/assets/logo_page.svg" alt="logo" class="w-1/2 h-1/2">
            </div>
        </div>

        {{-- schedules section --}}
        <div class="flex justify-center  relative lg:-mt-24 items-center w-full ">

            {{-- holidays BDD --}}
            <div class="bg-black1 rounded-2xl text-white  shadow-2xl ">
                @if($holiday != null)
                <div class="flex w-full justify-center font-semibold rounded-t-xl lg:text-2xl lg:px-4 py-3 bg-red1 text-white">
                    <div class="">{{ $holiday->description}}</div>
                    <div class="mx-1">du {{ Carbon\Carbon::parse($holiday->date_début)->format('d/m/Y') }}</div>
                    <div class="">au {{ Carbon\Carbon::parse($holiday->date_fin)->format('d/m/Y') }} inclus</div>
                </div>
                @endif

                {{-- schedules BDD --}}
                <div class="flex-col">
                    <h2 class="text-center py-6 mx-8 font-poppins font-bold text-2xl border-b-2 border-white">HORAIRES</h2>
                    <div class="px-4 py-4 lg:px-8 lg:py-8 flex flex-col gap-y-2">
                        @foreach ($schedules as $schedule)
                        <div class="flex justify-between lg:text-2xl">
                            <div class="font-semibold mr-auto "> {{ $schedule->jour }}</div>
                            <div class="flex gap-8">
                                <div class="flex gap-2">
                                    <div class="">{{ Carbon\Carbon::parse($schedule->opening_am)->format('H\hi') }}</div>
                                    @if($schedule->closing_am != null)
                                    <div class="">-</div>
                                    <div class="">{{ Carbon\Carbon::parse($schedule->closing_am)->format('H\hi') }}</div>
                                    @endif
                                </div>
                                <div class="flex gap-2">
                                    @if($schedule->opening_pm != null)
                                    <div class="">{{ Carbon\Carbon::parse($schedule->opening_pm)->format('H\hi') }}</div>
                                    <div class="">-</div>
                                    @endif
                                    <div class="">{{ Carbon\Carbon::parse($schedule->closing_pm)->format('H\hi') }}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- concept section --}}
        <div class="max-w-3xl mx-auto">
            <div class="font-parisienne m-6 text-center font-bold  text-4xl my-12 lg:my-20">
                “ Chez Sun QueenFashion, vous êtes la star, et chaque jour est une occasion de briller ! ”
            </div>

            <p class="text-xl text-center m-6 lg:my-20 my-12">
                Notre concept inédit combine l'art du bronzage en cabine UV avec une sélection soigneusement choisie d'accessoires de mode et de chaussures qui vous permettront de rayonner à chaque étape de votre journée.
                Chez Sun Queen Fashion, chaque article que vous choisissez est une opportunité de mettre en avant votre personnalité éclatante et de vous sentir bien dans votre peau.
            </p>
        </div>

        {{-- choices section --}}
        <div class="flex flex-col lg:flex-row h-auto lg:mx-20">
            <div class="relative w-full lg:w-1/2 group overflow-hidden">
                <img src="{{ asset('assets/bronzage2.svg') }}" alt="photo_uv" class="w-full object-cover h-60 lg:h-full flex justify-center items-center transition-all duration-500 transform scale-100 group-hover:scale-110">
                <div class="lg:py-12 gap-8 absolute flex flex-col inset-x-0 bottom-0 justify-center lg:backdrop-blur-md bg-white/30">
                    <p class="mx-auto text-center text-black1 transition-all duration-500 font-poppins font-bold text-lg lg:text-2xl flex">
                        Obtenez un éclat d'été toute l'année ! Découvrez nos séances UV.
                    </p>
                    <a href="#" class="flex mx-auto items-center py-1 mb-4 justify-center font-semibold border bg-dune text-black1 rounded-3xl shadow-lg pl-4 pr-6 mt-4 lg:mt-8">
                        <svg class="w-6 h-6 mr-2 p-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="#f9f5f5" d="M8.59 16.59L13.17 12L8.59 7.41L10 6l6 6l-6 6l-1.41-1.41z" />
                        </svg>
                        Explorez
                    </a>
                </div>
            </div>
            <div class="relative w-full lg:w-1/2 group overflow-hidden">
                <img src="{{ asset('assets/IMG_2176.jpg') }}" alt="photo_boutique" class="w-full object-cover h-60 lg:h-full flex justify-center items-center transition-all duration-500 transform scale-100 group-hover:scale-110">
                <div class="lg:py-12 gap-8 absolute flex flex-col inset-x-0 bottom-0 justify-center backdrop-blur-md bg-white/30">
                    <p class="mx-auto text-center text-black1 transition-all duration-500 font-poppins font-bold text-lg lg:text-2xl flex">
                        Découvrez notre sélection exclusive de mode et d'accessoires.
                    </p>
                    <a href="#" class="flex mx-auto items-center py-1 mb-4 justify-center font-semibold border bg-dune text-black1 rounded-3xl shadow-lg pl-4 pr-6 mt-4 lg:mt-8">
                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="#f9f5f5" d="M8.59 16.59L13.17 12L8.59 7.41L10 6l6 6l-6 6l-1.41-1.41z" />
                        </svg>
                        Explorez
                    </a>
                </div>
            </div>
        </div>


        {{-- tan section --}}
        <div class="bg-dune bg-opacity-30 w-full shadow-xl">

            {{-- tan home section pour les grands écrans --}}
            <div id="uv" class="text-xl hidden lg:flex justify-between items-center max-w-7xl mx-auto py-36">
                <div class="w-1/3 ">
                    <p class="font-poppins leading-10 mx-4 text-2xl">
                        Rejoignez-nous pour une expérience de bronzage exceptionnelle, une peau radieuse et une détente totale. Vous méritez le meilleur, et nous sommes là pour vous l'offrir.
                    </p>
                </div>
                <div class="w-2/4">
                    <div class="">
                        <img class="w-full " src="{{ asset('assets/img_planche.svg') }}" alt="photo_uv ">
                    </div>
                    <div class="absolute flex justify-between gap-8">
                        <div class="-translate-x-28 -translate-y-56">
                            <img class="w-64 " src="{{ asset('assets/img_uv1.svg') }}" alt="photo_bronzage ">
                        </div>
                        <div class="-translate-x-36 -translate-y-28">
                            <img class="w-64" src="{{ asset('assets/img_uv2.svg') }}" alt="photo_uv">
                        </div>
                        <div class="-translate-x-40 -translate-y-6">
                            <img class="w-64 " src="{{ asset('assets/img_uv3.svg') }}" alt="image_uv">
                        </div>
                    </div>
                </div>
            </div>

            {{-- tan home section pour les écrans mobiles et tablettes --}}
            <div class="lg:hidden max-w-7xl mx-auto py-8">
                <div class="w-full mb-8">
                    <img src="{{ asset('assets/img_planche.svg') }}" alt="photo_uv" class="w-full">
                </div>
                <div class="text-xl text-center">
                    <p class="font-poppins leading-10 mx-4 mb-8">
                        Rejoignez-nous pour une expérience de bronzage exceptionnelle, une peau radieuse et une détente totale. Vous méritez le meilleur, et nous sommes là pour vous l'offrir.
                    </p>
                    <div class="mb-8">
                        <img src="{{ asset('assets/img_uv1.svg') }}" alt="photo_bronzage" class="w-64 mx-auto mb-4">
                        <img src="{{ asset('assets/img_uv2.svg') }}" alt="photo_uv" class="w-64 mx-auto mb-4">
                        <img src="{{ asset('assets/img_uv3.svg') }}" alt="image_uv" class="w-64 mx-auto">
                    </div>
                </div>
            </div>


            {{-- Tanning booths section --}}
            <div class="flex flex-col items-center lg:flex-row lg:justify-center lg:items-start p-8">
                <div class="lg:w-4/5 lg:pl-16">
                    <h3 class="lg:text-6xl text-4xl font-bold mb-16 lg:mt-16 lg:-ml-44 lg:text-left">NOS MACHINES</h3>
                    <div class="lg:flex flex-col lg:flex-row gap-24 w-full">
                        <img src="{{ asset('assets/img_uv4.svg') }}" alt="bronzage_soleil" class=" my-16 lg:w-full lg:mx-0  lg:mb-0">
                        <div class="lg:w-full lg:pl-8">
                            <div class="lg:text-6xl text-4xl  font-parisienne font-black lg:mt-36 mt-20 mb-4">Notre cabine mégaSun</div>
                            <p class="lg:text-2xl text-lg leading-8">La forte booster de collagène offre une expérience de bronzage incomparable, avec des options de confort telles que la climatisation, l'aromathérapie pour une détente totale, et la diffusion d'odeurs pour une expérience sensorielle unique. De plus, notre système Acqua jet vaporise des jets de brume rafraîchissante pour vous rafraîchir pendant la séance.</p>
                        </div>
                    </div>
                    <div class="lg:flex flex-col lg:flex-row lg:mb-12 lg:mt-28 gap-20 lg:space-x-12 w-full">
                        <div class="lg:w-full lg:mt-36 my-8  ">
                            <div class="lg:text-6xl text-4xl font-black font-parisienne mt-20 mb-4">Notre cabine Optima</div>
                            <p class="text-lg lg:text-2xl leading-8">Si vous recherchez un bronzage revitalisant et des soins pour la peau, optez pour notre cabine Optima, qui booste la vitamine C et le collagène grâce à la technologie innovante Rubin Collagen Booster.</p>
                            <p class=" lg:pt-36 pt-20 lg:ml-36 text-lg lg:text-2xl">
                                Avant votre séance UV, bénéficiez de l'expertise d'un professionnel diplômé! afin de vous guidez pour définir précisément votre phototype de peau, assurant ainsi une séance UV sécurisée et efficace.
                            </p>
                        </div>

                        <img src="{{ asset('assets/img_uv5.svg') }}" alt="image_bronzage" class="lg:w-full my-12 mx-auto lg:mx-0 mb-6 lg:mb-0">
                    </div>
                </div>
            </div>

            {{-- warning panel --}}
            <div class="border-red1 bg-red1/90 shadow-2xl w-3/5 flex mx-auto rounded-md  p-4 lg:my-20 my-16 text-bold">
                Art. 9 - Attention ! L'exposition aux rayonnements d'un appareil de bronzage peut provoquer des cancers de la peau et des yeux, et est responsable d'un vieillissement cutané prématuré. L'existence d'une réglementation du bronzage artificiel ne permet pas d'éliminer les risques sanitaires encourus en cas d'exposition, en particulier le risque de cancer. L'utilisation de ces appareils est interdite aux personnes de moins de 18 ans. Porter des lunettes de protection est vendu. </div>

            {{-- Prices BDD --}}
            <div class="flex justify-center items-center ">
                <div class=" bg-black1 rounded-2xl text-white lg:w-2/6 my-16 p-8 shadow-2xl ">
                    <h2 class="text-center text-2xl p-6">TARIFS</h2>
                    @foreach ($prices as $price)
                    <div class="flex justify-center items-center">
                        <div class="flex  gap-36">
                            <div class="">{{ $price->minutes }} minutes</div>
                            <div class="mb-8">{{ $price->prix }} euros</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


        {{-- fashion section --}}
        <div id="mode" class="text-center py-8 md:py-16 lg:py-24 flex-col my-8">
            <div class="text-4xl md:text-5xl lg:text-6xl font-bold p-4 ">Bienvenue dans notre collection</div>
            <div class="text-4xl md:text-5xl lg:text-6xl lg:font-bold p-8 font-parisienne ">Mode et Accessoires!</div>
            <div class="text-xl md:text-2xl lg:text-3xl lg:w-2/4 w-3/4 m-auto font-bold ">Découvrez dés maintenant notre sélection tendance de nouveaux arrivages</div>
        </div>

        <div class="flex flex-col md:flex-row justify-center items-center gap-12 ">
            <div class="flex justify-center">
                <img src="{{ asset('assets/section_mode1.jpg') }}" alt="article_produit" class="w-48 rounded-lg shadow-md  brightness-125 saturate-150 contrast-75 md:w-48 lg:w-64 transform hover:scale-110 duration-300 transition-transform">
            </div>

            <div class="flex justify-center">
                <img src="{{ asset('assets/section_mode2.jpg') }}" alt="article_produit" class="w-48 md:w-48 lg:w-64 transform hover:scale-110 rounded-lg shadow-md  brightness-125 saturate-150 contrast-75 duration-300 transition-transform">
            </div>

            <div class="flex justify-center">
                <img src="{{ asset('assets/section_mode3.jpg') }}" alt="image_mode" class="w-48 md:w-48 lg:w-64 rounded-lg shadow-md  brightness-125 saturate-150 contrast-75 transform hover:scale-110 duration-300 transition-transform">
            </div>
        </div>

        <div class="flex flex-col items-center justify-center  px-4">
            <p class="text-lg md:text-xl lg:text-2xl lg:w-2/4 lg:leading-8 mx-6 my-16">
                Que vous cherchiez à ajouter une touche de glamour à votre look quotidien, à préparer votre peau pour l'été, ou simplement à explorer un style qui vous ressemble, Sun Queen Fashion est là pour vous guider. Parcourez notre boutique en ligne et laissez-vous emporter par la magie des paillettes, de la mode et de la confiance en vous.
            </p>

            <button type="button" class="transform hover:scale-125 transition-transform border bg-dune py-2 px-4 mb-8 rounded-3xl shadow-lg">Visiter la boutique</button>
        </div>

        {{-- style advice --}}
        <div class="flex flex-col items-center  p-8 md:p-16">
            <div class="w-full md:w-3/4 lg:p-16 bg-dune opacity-80 rounded-2xl p-8 font-poppins">
                <h2 class="text-5xl text-center font-parisienne font-bold">Cinq conseils de style</h2>

                <p class="py-4">
                    <span class="font-bold">1. Connaître Votre Morphologie </span> Comprenez votre morphologie (silhouette en A, en H, en O, en V) pour choisir des vêtements qui mettent en valeur vos atouts naturels et équilibrent votre silhouette.
                </p>

                <p class="py-4">

                    <span class="font-bold">2. L'Importance des Accessoires </span> Les accessoires peuvent transformer une tenue simple en quelque chose de spectaculaire. N'ayez pas peur d'expérimenter avec des bijoux, des sacs à main et des écharpes pour ajouter une touche unique à votre look.
                </p>

                <p class="py-4">

                    <span class="font-bold">3. La Couleur Parle </span> Les couleurs peuvent influencer votre humeur et la perception des autres. Apprenez quelles couleurs mettent en valeur votre teint et votre personnalité. Osez les couleurs vives pour apporter de l'énergie à votre tenue.
                </p>

                <p class="py-4">

                    <span class="font-bold">4. La Coupe Fait Tout </span> Une coupe bien ajustée est la clé d'un look élégant. Qu'il s'agisse de robes, de pantalons ou de chemises, assurez-vous que vos vêtements épousent bien votre silhouette sans être trop serrés ni trop lâches.
                </p>

                <p class="py-4">

                    <span class="font-bold">5. Expérimenter et S'Amuser </span> La mode est une forme d'expression personnelle. N'ayez pas peur d'expérimenter avec de nouveaux styles, des textures et des combinaisons de couleurs. Laissez libre cours à votre créativité et amusez-vous avec la mode.
                </p>
            </div>
        </div>

        {{-- scrollToTop --}}
        <div id="scrollToTop" class="fixed bottom-4 right-4 bg-gray-500 hover:bg-gray-700 shadow-xl text-white p-4 rounded-full   cursor-pointer hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
            </svg>
        </div>

        {{-- contact --}}
        <div id="contact" class="w-full flex flex-col lg:items-center  text-base py-16 lg:text-xl m-8 md:m-0">
            <div class="flex p-4 gap-4">
                <img src="{{ asset('assets/icone_add.svg') }}" alt="icone_adresse">
                <div>17 rue Georges Genoux 70000 Vesoul</div>
            </div>

            <div class="flex p-4 gap-4 ">
                <img src="{{ asset('assets/tel.svg') }}" alt="icone_tel">
                <div>03 84 92 26 06</div>
            </div>

            <div class="flex p-4 gap-4">
                <img src="{{ asset('assets/mail.svg') }}" alt="icone_mail">
                <div>sunqueen.fashion@yahoo.com</div>
            </div>
        </div>

        <!-- Map -->
        <div id="map" class="w-3/4 mx-auto   h-80 md:h-96 lg:h-128"></div>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-vF5wZ4u0zH1uu5RdUb7BSizIhm4kOGz1COlD1l+MBAo=" crossorigin=""></script>

        <script>
            var map = L.map('map').setView([47.62249091867886, 6.156544022729926], 15); //coordonnées
            L.marker([47.62249091867886, 6.156544022729926]).addTo(map);
            L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png').addTo(map);
            //cursor
        </script>

    </div>
</x-guest-layout>
