<x-guest-layout>
     <img src="/assets/mode.png" class="w-full ">

    <div class="flex justify-center items-center ">
        <div class=" bg-black text-white w-2/5 m-4  shadow-2xl ">
            <h2 class="text-center ">HORAIRE {{ $season->nom }}</h2>
            @foreach ($schedules as $schedule)
            <div class="flex justify-between p-8 mx-8">
                <div class="">
                    {{ $schedule->jour }}
                </div>

                <div class="flex gap-4">
                    <div class="">{{ $schedule->heure_ouverture_am }}</div>
                    <div class="">{{ $schedule->heure_fermeture_am }}</div>
                    <div class="">{{ $schedule->heure_ouverture_pm }}</div>
                    <div class="">{{ $schedule->heure_fermeture_pm }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="font-parisienne font-bold text-3xl px-36 text-center mx-36 my-16">
        “ Chez Sun <span class="text-red">Queen </span>Fashion, vous êtes la star, et chaque jour est une occasion de briller ! ”
    </div>

    <div class="text-xl px-36 text-center mx-36 my-16">
        Notre concept inédit combine l'art du bronzage en cabine UV avec une sélection soigneusement choisie d'accessoires de mode et de chaussures qui vous permettront de rayonner à chaque étape de votre journée.
        Chez Sun Queen Fashion, chaque article que vous choisissez est une opportunité de mettre en avant votre personnalité éclatante et de vous sentir bien dans votre peau.
    </div>

    <div class="flex justify-center items-center m-16">
        <a href=""><img src="{{ asset('assets/bronzage1.svg') }}" class=""></a>
        <a href=""><img src="{{ asset('assets/boutique1.svg') }}" class=""></a>
    </div>
    <div class="bg-dune">
        <div class=" m-16 text-lg flex p-16 ">
            <div class="flex items-center w-1/2 mx-36"> Rejoignez-nous pour une expérience de bronzage exceptionnelle, une peau radieuse et une détente totale. Vous méritez le meilleur, et nous sommes là pour vous l'offrir."
            </div>
            <div class="flex">
                <img src="{{ asset('assets/img_planche.svg') }}" class="flex justify-end items-end">
            </div>
        </div>

        <div class="flex justify-end mx-36 items-end">
            <div class="flex">
                <img src="{{ asset('assets/img_uv1.svg') }}" class="flex justify-end items-end">
            </div>

            <div class="flex">
                <img src="{{ asset('assets/img_uv2.svg') }}" class="flex justify-end items-end">
            </div>

            <div class="flex">
                <img src="{{ asset('assets/img_uv3.svg') }}" class="flex justify-end">
            </div>
        </div>

        <h3>NOS MACHINES</h3>

        <div class=" m-16 text-lg flex p-16 ">
            <div class="flex">
                <img src="{{ asset('assets/img_uv4.svg') }}" class="flex justify-end items-end">
            </div>
            <div class="flex items-center w-1/2 mx-36"> Notre cabine mégaSun n la forte booster de collagène, offre une expérience de bronzage incomparable, avec des options de confort telles que la climatisation, l'aromathérapie pour une détente totale, et la diffusion d'odeurs pour une expérience sensorielle unique. De plus, notre système Acqua jet vaporise des jets de brume rafraîchissante pour vous rafraîchir pendant la séance."
            </div>

        </div>
        <div class="flex m-8">
            <div class="flex-col">
                <div class="flex w-1/2 m-8">
                    Notre cabine Optima
                    Si vous recherchez un bronzage revitalisant et des soins pour la peau, optez pour notre cabine Optima, qui booste la vitamine C et le collagène pour une peau éclatante.
                </div>
                <div class="border-red-500 bg-red-500 flex w-3/5 justify-center items-center m-8 p-4 text-bold">
                    Art.9. attention ! l exposition aux rayonnements d un appareil de bronzage peut provoquer des cancers de la peau et des yeux, et, est responsable d un vieillissement cutané prématuré. L'existence d une reglementation du bronzage artificile ne permet pas d eliminer les risques sanitaires encourus en cas d exposition, en particulier le risque de cancer, l'utilisation de ces appareils est interdite aux personnes de moins de 18 ans, porter des lunettes de protections vendus.
                </div>
            </div>

            <div class="m-8 w-full">
                <img src="{{ asset('assets/img_uv5.svg') }}" class="flex justify-end items-end ">
            </div>
        </div>
        <div class="flex justify-center items-center ">
            <div class=" bg-black text-white w-2/5 m-4 shadow-2xl ">
                <h2 class="text-center ">TARIFS</h2>
                @foreach ($prices as $price)
                <div class="flex justify-between  p-8 mx-8">
                    <div class="flex justify-center items-center gap-16">
                        <div class="">{{ $price->minutes }} minutes</div>
                        <div class="">{{ $price->prix }} euros</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

    <div class="flex-col items-center justify-center font-poppins text-xl p-16"> 
        <div class=""> Bienvenue dans notre collection <span class="text-red"> Mode </span> et <span class="text-red">Accessoires </span> ! </div>
       <div class=""> Découvrez dès maintenant notre sélection tendance de nouveaux arrivages </div>
    </div>

    <div class="flex justify-center items-center gap-16 p-8">
        <div class="flex">
            <img src="{{ asset('assets/section_mode1.svg') }}" class="flex justify-center">
        </div>

        <div class="flex">
            <img src="{{ asset('assets/section_mode2.svg') }}" class="flex justify-center">
        </div>

        <div class="flex">
            <img src="{{ asset('assets/section_mode3.svg') }}" class="flex justify-center">
        </div>
    </div>
    <div class="flex-col">
        <div class="flex w-1/2 m-16 justify-center items-center ">
            Que vous cherchiez à ajouter une touche de glamour à votre look quotidien, à préparer votre peau pour l'été, ou simplement à explorer un style qui vous ressemble, Sun Queen Fashion est là pour vous guider. Parcourez notre boutique en ligne et laissez-vous emporter par la magie des paillettes, de la mode et de la confiance en vous.
        </div>

        <a href="">
            <button type="button" class="flex items-center justify-center border bg-orange-200 rounded-3xl shadow-lg m-8 px-4 ">Visiter la boutique
            </button> </a>
    </div>

    <div class="flex-col">
        <div class="flex w-1/2 m-8">
            Si vous avez des questions sur nos produits Mode et Accessoires ou si vous avez besoin d'assistance pour choisir les meilleurs articles, n'hésitez pas à nous contacter
        </div>
        <a href="">
            <button type="button" class="flex items-center justify-center border bg-orange-200 rounded-3xl shadow-lg m-8 px-4 ">Contactez-nous
            </button> </a>
    </div>

</x-guest-layout>
