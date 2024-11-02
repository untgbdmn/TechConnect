<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="">
        <div class="grid grid-cols-4 gap-5">
            {{-- Jumlah Siswa --}}
            <div
                class="text-white bg-gradient-to-br from-blue-600 to-purple-600 shadow-md shadow-black/50 rounded-md p-3 flex flex-col">
                <h1 class="inline-flex items-center justify-between text-[17px] capitalize font-medium">Jumlah Siswa
                    <x-bi-person-fill class="h-full w-5" />
                </h1>
                <h2 class="text-2xl font-bold">10</h2>
            </div>
            <div
                class="text-white bg-gradient-to-br from-blue-600 to-purple-600 shadow-md shadow-black/50 rounded-md p-3 flex flex-col">
                <h1 class="inline-flex items-center justify-between text-[17px] capitalize font-medium">Jumlah Siswa
                    <x-bi-person-fill class="h-full w-5" />
                </h1>
                <h2 class="text-2xl font-bold">10</h2>
            </div>
            <div
                class="text-white bg-gradient-to-br from-blue-600 to-purple-600 shadow-md shadow-black/50 rounded-md p-3 flex flex-col">
                <h1 class="inline-flex items-center justify-between text-[17px] capitalize font-medium">Jumlah Siswa
                    <x-bi-person-fill class="h-full w-5" />
                </h1>
                <h2 class="text-2xl font-bold">10</h2>
            </div>
            <div
                class="text-white bg-gradient-to-br from-blue-600 to-purple-600 shadow-md shadow-black/50 rounded-md p-3 flex flex-col">
                <h1 class="inline-flex items-center justify-between text-[17px] capitalize font-medium">Jumlah Siswa
                    <x-bi-person-fill class="h-full w-5" />
                </h1>
                <h2 class="text-2xl font-bold">10</h2>
            </div>
        </div>
    </div>

</x-app-layout>
