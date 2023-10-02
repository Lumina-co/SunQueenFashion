<x-guest-layout>
    <div class="bg-white">

        {{-- hero section --}}
        <div class="relative">
            <div class="bg-black">
                <img src="/assets/mode.png" alt="image_mode_accessoire" class="w-full opacity-80  h-[500px] ">
            </div>
            <div class="absolute inset-0 flex items-center justify-center">
                <img src="/assets/logo_page.svg" alt="logo" class="w-1/2 h-1/2">
            </div>
        </div>

        {{-- schedules section --}}
        <div class="flex justify-center  relative -mt-24 items-center w-full ">
            <div class=" bg-black text-white w-1/2 shadow-2xl ">
                @if($holiday != null)
                <div class="flex w-full justify-center font-semibold text-2xl py-3 bg-red text-white">
                    <div class="">{{ $holiday->description}}</div>
                    <div class="mx-1">du {{ Carbon\Carbon::parse($holiday->date_début)->format('d/m/Y') }}</div>
                    <div class="">au {{ Carbon\Carbon::parse($holiday->date_fin)->format('d/m/Y') }} inclus</div>
                </div>
                @endif
                <div class="flex-col">
                    <h2 class="text-center py-6 mx-8 font-poppins font-bold text-2xl border-b-2 border-white">HORAIRES</h2>
                    <div class="px-24 py-8 flex flex-col gap-y-2">
                        @foreach ($schedules as $schedule)
                        <div class="flex justify-between">
                            <div class="text-2xl font-semibold"> {{ $schedule->jour }}</div>
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
        <div class="max-w-7xl mx-auto">
            <div class="font-parisienne m-6 text-center font-bold text-3xl lg:text-4xl lg:my-16">
                “ Chez Sun QueenFashion, vous êtes la star, et chaque jour est une occasion de briller ! ”
            </div>

            <div class="text-xl text-center m-6 lg:my-16">
                Notre concept inédit combine l'art du bronzage en cabine UV avec une sélection soigneusement choisie d'accessoires de mode et de chaussures qui vous permettront de rayonner à chaque étape de votre journée.
                Chez Sun Queen Fashion, chaque article que vous choisissez est une opportunité de mettre en avant votre personnalité éclatante et de vous sentir bien dans votre peau.
            </div>
        </div>

        {{-- choices section --}}
        <div class="flex h-[42rem]">
            <div class="relative w-1/2 group  overflow-hidden">
                <img src="https://images.unsplash.com/photo-1567115702188-ea12a355f14a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" alt="photo_uv " class="w-full object-cover h-full flex justify-center items-center transition-all duration-500 transform scale-100 group-hover:scale-110   ">
                <div class="py-12 gap-8 absolute flex flex-col inset-x-0 bottom-0 justify-center backdrop-blur-md bg-white/30">
                    <p class="mx-auto text-center text-black transition-all duration-500 font-poppins font-bold text-2xl flex">
                        Obtenez un éclat d'été toute l'année ! Découvrez nos séances UV.
                    </p>
                    <a href="" class="flex mx-auto items-center justify-center font-semibold border bg-dune text-black rounded-3xl shadow-lg pl-4 pr-6 ">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="#f9f5f5" d="M8.59 16.59L13.17 12L8.59 7.41L10 6l6 6l-6 6l-1.41-1.41z" /></svg>
                        Explorez
                    </a>
                </div>
            </div>
            <div class="relative w-1/2 group overflow-hidden">
                <img src="{{ asset('assets/IMG_2176.jpg') }}" alt="photo_boutique" class="w-full object-cover h-full flex justify-center items-center transition-all duration-500 transform scale-100 group-hover:scale-110   ">
                <div class="py-12 gap-8 absolute flex flex-col inset-x-0 bottom-0 justify-center backdrop-blur-md bg-white/30">
                    <p class="mx-auto text-center text-black transition-all duration-500 font-poppins font-bold text-2xl flex">
                        Découvrez notre sélection exclusive de mode et d'accessoires.
                    </p>
                    <a href="" class="flex mx-auto items-center justify-center font-semibold border bg-dune text-black rounded-3xl shadow-lg pl-4 pr-6 ">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="#f9f5f5" d="M8.59 16.59L13.17 12L8.59 7.41L10 6l6 6l-6 6l-1.41-1.41z" /></svg>
                        Explorez
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-dune bg-opacity-30 w-full shadow-xl">
            <div id="uv"></div>
            <div class="text-xl lg:flex w-full lg:p-16 p-6">
                <div class="lg:flex lg:w-1/2 m-6 lg:m-36 ">
                    <p class="font-poppins text-center text-xl lg:text-2xl">
                        Rejoignez-nous pour une expérience de bronzage exceptionnelle, une peau radieuse et une détente totale. Vous méritez le meilleur, et nous sommes là pour vous l'offrir.
                    </p>
                </div>
                <div class="lg:w-1/2 m-8 mt-16 lg:flex justify-end items-center ">
                    <img src="{{ asset('assets/img_planche.svg') }}" alt="photo_uv " class="flex w-full ">
                </div>
            </div>

            <div class="flex justify-end lg:mx-36 relative -m-40 gap-8 items-end">
                <div class="flex">
                    <img src="{{ asset('assets/img_uv1.svg') }}" alt="photo_bronzage " class="flex justify-end items-end">
                </div>

                <div class="flex">
                    <img src="{{ asset('assets/img_uv2.svg') }}" alt="photo_uv " class="flex justify-end items-end">
                </div>

                <div class="flex">
                    <img src="{{ asset('assets/img_uv3.svg') }}" alt="image_uv " class="flex justify-end">
                </div>
            </div>
        </div>
        <h3 class="lg:ml-36  lg:text-4xl text-2xl flex justify-start items-start m-8 font-bold">NOS MACHINES</h3>

        <div class=" lg:m-16 text-lg lg:flex flex-col w-full lg:p-16 ">
            <div class="flex">
                <img src="{{ asset('assets/img_uv4.svg') }}" alt="bronzage_soleil" class="flex justify-end items-end">
            </div>
            <div class="flex items-center lg:w-1/2 lg:mx-36 my-6 mx-8">
                <div class="flex-col ">
                    <div class="text-xl items-center font-bold">Notre cabine mégaSun</div>
                    <p> la forte booster de collagène, offre une expérience de bronzage incomparable, avec des options de confort telles que la climatisation, l'aromathérapie pour une détente totale, et la diffusion d'odeurs pour une expérience sensorielle unique. De plus, notre système Acqua jet vaporise des jets de brume rafraîchissante pour vous rafraîchir pendant la séance."</p>
                </div>
            </div>
        </div>

        <div class="lg:flex m-8">
            <div class="flex-col">
                <div class="flex lg:w-1/2 m-8">
                    <div class="flex-col ">
                        <div class="text-xl  font-bold ">Notre cabine Optima</div>
                        <p> Si vous recherchez un bronzage revitalisant et des soins pour la peau, optez pour notre cabine Optima, qui booste la vitamine C et le collagène pour une peau éclatante.</p>
                    </div>
                </div>
                <div class="border-red bg-red flex lg:w-3/5 text-xs lg:text-sm lg:m-36 p-4 text-bold">
                    Art.9. attention ! l exposition aux rayonnements d un appareil de bronzage peut provoquer des cancers de la peau et des yeux, et, est responsable d un vieillissement cutané prématuré. L'existence d une reglementation du bronzage artificile ne permet pas d eliminer les risques sanitaires encourus en cas d exposition, en particulier le risque de cancer, l'utilisation de ces appareils est interdite aux personnes de moins de 18 ans, porter des lunettes de protections vendus.
                </div>
            </div>

            <div class="m-8 w-full">
                <img src="{{ asset('assets/img_uv5.svg') }}" alt="image_bronzage" class="flex justify-end items-end ">
            </div>
        </div>
        <div class="flex justify-center items-center ">
            <div class=" bg-black text-white lg:w-2/5 w-full m-6 shadow-2xl ">
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


        <div id="mode"></div>
        <div class="flex-col font-poppins text-xl lg:p-16 py-8 px-4 ">
            <div class="flex justify-center items-center text-2xl font-bold "> Bienvenue dans notre collection</div>
            <div class="flex justify-center items-center mt-8 "><span class="text-red"> Mode </span> et <span class="text-red">Accessoires </span> ! </div>
            <div class="flex justify-center items-center mt-8 "> Découvrez dès maintenant notre sélection tendance de nouveaux arrivages </div>
        </div>

        <div class="flex justify-center items-center gap-16 p-8">
            <div class="flex">
                <img src="{{ asset('assets/section_mode1.svg') }}" alt="article_produit" class="flex justify-center  transform  hover:scale-110 duration-300 transition-transform">
            </div>

            <div class="flex">
                <img src="{{ asset('assets/section_mode2.svg') }}" alt="article_produit" class="flex justify-center transform hover:scale-110 transition-transform">
            </div>

            <div class="flex">
                <img src="{{ asset('assets/section_mode3.svg') }}" alt="image_mode" class="flex justify-center transform hover:scale-110 transition-transform">
            </div>
        </div>

        <div class="flex-col">
            <div class="flex m-16 justify-center items-center ">
                Que vous cherchiez à ajouter une touche de glamour à votre look quotidien, à préparer votre peau pour l'été, ou simplement à explorer un style qui vous ressemble, Sun Queen Fashion est là pour vous guider. Parcourez notre boutique en ligne et laissez-vous emporter par la magie des paillettes, de la mode et de la confiance en vous.
            </div>

            <a href="" class="flex items-center justify-center">
                <button type="button" class="flex items-center justify-center transform hover:scale-125 transition-transform border bg-dune rounded-3xl shadow-lg lg:m-8 m-4 px-4 ">Visiter la boutique
                </button> </a>
        </div>

        <div class="flex-col">
            <div class="flex lg:w-1/2 m-8  lg:px-36 p-8">
                Si vous avez des questions sur nos produits Mode et Accessoires ou si vous avez besoin d'assistance pour choisir les meilleurs articles, n'hésitez pas à nous contacter
            </div>
            <a href="" class="flex justify-center items-center lg:w-10/12">
                <button type="button" class=" border bg-dune  hover:scale-125 transition-transform  rounded-3xl shadow-lg lg:m-8 m-4 px-4 ">Contactez-nous
                </button> </a>
        </div>
        <div class="flex justify-between p-36">
            {{-- contact --}}

            <div class="flex-col text-xl m-8 lg:mx-36">
                <div class="flex lg:p-4 gap-4">
                    <img src="{{ asset('assets/Vector.svg') }}" alt="icone_adresse">
                    <div> 17 rue Georges Genoux 70000 Vesoul</div>
                </div>

                <div class="flex p-4 gap-4">
                    <img src="{{ asset('assets/tel.svg') }}" alt="icone_tel">
                    <div>03 84 92 26 06</div>
                </div>

                <div class="flex lg:p-4 gap-4">
                    <img src="{{ asset('assets/mail.svg') }}" alt="icone_mail">
                    <div>sunqueen.fashion@yahoo.com</div>
                </div>
            </div>

            {{-- map --}}
            <div id="map" class="w-full"></div>
            <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-vF5wZ4u0zH1uu5RdUb7BSizIhm4kOGz1COlD1l+MBAo=" crossorigin=""></script>

            <!-- Votre code JavaScript personnalisé pour la carte Leaflet -->
            <script>
                // Code pour créer et configurer la carte Leaflet
                var map = L.map('map').setView([47.62249091867886, 6.156544022729926], 15); //coordonnées
                L.marker([47.62249091867886, 6.156544022729926]).addTo(map);
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png').addTo(map);
            </script>
        </div>

    </div>
</x-guest-layout>
