<x-app-layout>
    <div class=" inset-0 w-full h-screen  bg-contain " style="background-image: url('/assets/bg-register.jpg')">
        <x-slot name="header">
            <div class="flex w-full justify-center  border-2 ">
                <div class="font-semibold flex-col items-center  absolute px-28 pb-28 pt-8 font-parisienne bg-white my-44 opacity-80 rounded-md text-black text-6xl text-bold">
                    <div class="py-8 flex flex-col items-center">
                        <x-authentication-card-logo />
                    </div>
                    <h2>
                         Sun Queen Fashion
                    </h2>
                </div>
            </div>
        </x-slot>

    </div>
</x-app-layout>
