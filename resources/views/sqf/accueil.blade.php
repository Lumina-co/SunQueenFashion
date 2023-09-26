<x-guest-layout>
    <div class="">
        <div class="relative">
            <img src="/assets/mode.png" alt="image_mode_accessoire" class="w-full h-[500px] ">
            <div class="absolute inset-0 flex items-center justify-center">
                <img src="/assets/logo_page.svg" alt="logo" class="opacity-85 w-[700px] h-[700px]">
            </div>
        </div>

        <div class=" flex justify-center items-center w-full ">
            <div class=" bg-black text-white w-2/5 shadow-2xl ">
                <h2 class="text-center pt-6 ">HORAIRE {{ $season->nom }}</h2>
                @foreach ($schedules as $schedule)
                <div class="flex justify-between p-8 mx-8">
                    <div class=""> {{ $schedule->day }}</div>

                    <div class="flex  gap-8">
                        <div class="">{{ $schedule->opening_am }}</div>
                        <div class="">{{ $schedule->closing_am }}</div>
                        <div class="">{{ $schedule->opening_pm }}</div>
                        <div class="">{{ $schedule->closing_pm }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="font-parisienne font-bold text-3xl px-36 text-center mx-36 my-16">
        “ Chez Sun <span class="text-red ">Queen </span>Fashion, vous êtes la star, et chaque jour est une occasion de briller ! ”
    </div>

    <div class="text-xl px-36 text-center mx-36 my-16">
        Notre concept inédit combine l'art du bronzage en cabine UV avec une sélection soigneusement choisie d'accessoires de mode et de chaussures qui vous permettront de rayonner à chaque étape de votre journée.
        Chez Sun Queen Fashion, chaque article que vous choisissez est une opportunité de mettre en avant votre personnalité éclatante et de vous sentir bien dans votre peau.
    </div>

    <div class="flex justify-center ">
        <div class="relative group">
            <img src="{{ asset('assets/bronzage1.svg') }}" alt="photo_uv " class="w-4/5 h-auto flex justify-center items-center transition-transform transform scale-100 group-hover:scale-110 group-hover:shadow-lg   ">
            <div class="absolute flex-col justify-center items-center inset-0 top-1/4 left-1/4 transform -translate-x-1/4 -translate-y-1/4 bg-black bg-opacity-0">
                <p class=" text-white hover:font-poppins hover:text-black hover:font-bold hover:text-2xl"> "Obtenez un éclat d'été toute l'année ! Découvrez nos séances UV."</p>
                <a href="">
                    <button type="button" class="flex items-center justify-center border bg-dune rounded-3xl shadow-lg m-8 px-4 ">Continuer
                    </button>
                </a>
            </div>
        </div>
        <div class="relative group ">
            <img src="{{ asset('assets/boutique1.svg') }}" alt="photo_boutique" class="w-4/5 flex justify-center items-center h-auto transition-transform transform scale-100 group-hover:scale-110 group-hover:shadow-lg ">
            <div class="absolute flex justify-center items-center inset-0 top-1/4 left-1/4 transform -translate-x-1/4 -translate-y-1/4  text-white bg-black bg-opacity-0">
                <p class=" hover:font-poppins hover:text-black hover:font-bold hover:text-2xl"> "Découvrez notre sélection exclusive de mode et d'accessoires"</p>

                <a href="">
                    <button type="button" class="flex items-center justify-center border bg-dune rounded-3xl shadow-lg m-8 px-4 ">Continuer
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="bg-dune bg-opacity-30 shadow-xl">
        <div class=" m-16 text-lg flex p-16 ">
            <div class="flex items-center w-1/2 mx-36"> Rejoignez-nous pour une expérience de bronzage exceptionnelle, une peau radieuse et une détente totale. Vous méritez le meilleur, et nous sommes là pour vous l'offrir."
            </div>
            <div class=""></div>
            <div class="flex">
                <img src="{{ asset('assets/img_planche.svg') }}" alt="photo_uv " class="flex justify-end items-end">
            </div>
        </div>

        <div class="flex justify-end mx-36 items-end">
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

        <h3 class="ml-36 text-4xl font-bold">NOS MACHINES</h3>

        <div class=" m-16 text-lg flex p-16 ">
            <div class="flex">
                <img src="{{ asset('assets/img_uv4.svg') }}" alt="bronzage_soleil" class="flex justify-end items-end">
            </div>
            <div class="flex items-center w-1/2 mx-36">
                <div class="flex-col">
                    <div class="text-xl font-bold">Notre cabine mégaSun</div>
                    <p> la forte booster de collagène, offre une expérience de bronzage incomparable, avec des options de confort telles que la climatisation, l'aromathérapie pour une détente totale, et la diffusion d'odeurs pour une expérience sensorielle unique. De plus, notre système Acqua jet vaporise des jets de brume rafraîchissante pour vous rafraîchir pendant la séance."</p>
                </div>
            </div>

        </div>
        <div class="flex m-8">
            <div class="flex-col">
                <div class="flex w-1/2 m-8">
                    <div class="flex-col ">
                        <div class="text-xl font-bold flex ">Notre cabine Optima</div>
                        <p> Si vous recherchez un bronzage revitalisant et des soins pour la peau, optez pour notre cabine Optima, qui booste la vitamine C et le collagène pour une peau éclatante.</p>
                    </div>
                </div>
                <div class="border-red bg-red flex w-3/5  m-8 p-4 text-bold">
                    Art.9. attention ! l exposition aux rayonnements d un appareil de bronzage peut provoquer des cancers de la peau et des yeux, et, est responsable d un vieillissement cutané prématuré. L'existence d une reglementation du bronzage artificile ne permet pas d eliminer les risques sanitaires encourus en cas d exposition, en particulier le risque de cancer, l'utilisation de ces appareils est interdite aux personnes de moins de 18 ans, porter des lunettes de protections vendus.
                </div>
            </div>

            <div class="m-8 w-full">
                <img src="{{ asset('assets/img_uv5.svg') }}" alt="image_bronzage" class="flex justify-end items-end ">
            </div>
        </div>
        <div class="flex justify-center items-center ">
            <div class=" bg-black text-white w-2/5 m-6 shadow-2xl ">
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

    <div class="flex-col  font-poppins text-xl p-16">
        <div class="flex justify-center items-center text-2xl font-bold "> Bienvenue dans notre collection</div>
        <div class="flex justify-center items-center mt-8 "><span class="text-red"> Mode </span> et <span class="text-red">Accessoires </span> ! </div>
        <div class="flex justify-center items-center mt-8 "> Découvrez dès maintenant notre sélection tendance de nouveaux arrivages </div>
    </div>

    <div class="flex justify-center items-center gap-16 p-8">
        <div class="flex">
            <img src="{{ asset('assets/section_mode1.svg') }}" alt="article_produit" class="flex justify-center  hover:scale-125">
        </div>

        <div class="flex">
            <img src="{{ asset('assets/section_mode2.svg') }}" alt="article_produit" class="flex justify-center  hover:scale-125">
        </div>

        <div class="flex">
            <img src="{{ asset('assets/section_mode3.svg') }}" alt="image_mode" class="flex justify-center  hover:scale-125">
        </div>
    </div>
    <div class="flex-col">
        <div class="flex m-16 justify-center items-center ">
            Que vous cherchiez à ajouter une touche de glamour à votre look quotidien, à préparer votre peau pour l'été, ou simplement à explorer un style qui vous ressemble, Sun Queen Fashion est là pour vous guider. Parcourez notre boutique en ligne et laissez-vous emporter par la magie des paillettes, de la mode et de la confiance en vous.
        </div>

        <a href="" class="flex items-center justify-center">
            <button type="button" class="flex items-center justify-center border bg-dune rounded-3xl shadow-lg m-8 px-4 ">Visiter la boutique
            </button> </a>
    </div>

    <div class="flex-col">
        <div class="flex w-1/2 m-8 px-36">
            Si vous avez des questions sur nos produits Mode et Accessoires ou si vous avez besoin d'assistance pour choisir les meilleurs articles, n'hésitez pas à nous contacter
        </div>
        <a href="" class="flex justify-center items-center w-10/12">
            <button type="button" class=" border bg-dune rounded-3xl shadow-lg m-8 px-4 ">Contactez-nous
            </button> </a>
    </div>

    <div class="flex-col m-8 mx-36">
        <div class="flex p-4 gap-4">
            <img src="{{ asset('assets/Vector.svg') }}" alt="icone_adresse">
            <div> 17 rue Georges Genoux 70000 Vesoul</div>
        </div>

        <div class="flex p-4 gap-4">
            <img src="{{ asset('assets/tel.svg') }}" alt="icone_tel">
            <div>03 84 92 26 06</div>
        </div>

        <div class="flex p-4 gap-4">
            <img src="{{ asset('assets/mail.svg') }}" alt="icone_mail">
            <div>sunqueen.fashion@yahoo.com</div>
        </div>
    </div>

    @section('content')
    <h1>Carte de la boutique</h1>

    <!-- Emplacement où la carte sera affichée -->
    <div id="map" style="width: 100%; height: 400px;"></div>

    <!-- Inclure le script JavaScript de configuration de Leaflet -->
    <script src="{{ asset('js/leaflet.js') }}"></script>
    @endsection

</x-guest-layout>
