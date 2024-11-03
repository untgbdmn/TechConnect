<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="">
        <div class="grid grid-cols-4 gap-5">
            {{-- Jumlah Siswa --}}
            <a href={{ route('siswa.list') }}
                class="text-white bg-gradient-to-br from-blue-600 to-purple-600 shadow-md shadow-black/50 rounded-md p-3 flex flex-col">
                <h1 class="inline-flex items-center justify-between text-[17px] capitalize font-medium">Jumlah Siswa
                    <x-bi-person-fill class="h-full w-5" />
                </h1>
                @if($data_siswa->count() > 0 )
                <h2 class="text-2xl font-bold">
                    {{ $data_siswa->count() }}
                </h2>
                @else
                <h2 class="text-base font-normal">
                    {{ __('Belum Ada Siswa') }}
                </h2>
                @endif
            </a>
            <a href={{ route('kelas.list') }}
                class="text-white bg-gradient-to-br from-blue-600 to-purple-600 shadow-md shadow-black/50 rounded-md p-3 flex flex-col">
                <h1 class="inline-flex items-center justify-between text-[17px] capitalize font-medium">Jumlah Kelas
                    <x-bi-house-gear-fill class="h-full w-5" />
                </h1>
                @if($data_kelas->count() > 0 )
                <h2 class="text-2xl font-bold">
                    {{ $data_kelas->count() }}
                </h2>
                @else
                <h2 class="text-base font-normal">
                    {{ __('Belum Ada Kelas') }}
                </h2>
                @endif
            </a>
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
