<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Siswa') }}
        </h2>
    </x-slot>

    <div class="px-5">
        <div class="py-3">
            <div class="flex flex-row items-center px-3 gap-3 py-3 shadow-md bg-white rounded-lg">
                <img src={{ $data->jenis_kelamin == 'L' ? asset('assets/detail/man.png') : asset('assets/detail/woman.png') }}
                    alt="" class="h-full w-14">
                <div class="flex flex-col">
                    <h1 class="font-bold">{{ $data->nama_siswa }}</h1>
                    <h1 class="text-sm">{{ $data->email }} || {{ $data->phone_number }}</h1>
                </div>
            </div>

            <div class="mt-5 grid grid-cols-10 gap-3">
                {{-- Kelas --}}
                <div
                    class="bg-white col-span-2 shadow-md px-3 py-2 rounded-md inline-flex flex-col text-gray-500 text-sm">
                    <span class="inline-flex items-center justify-between font-bold text-blue-600 text-base">Kelas
                        <x-bi-house-gear-fill class="h-full w-5 text-primary" />
                    </span>
                    {{ is_null($data->kelas) ? 'Kelas belum di set' : $data->kelas->nama_kelas }}
                </div>

                {{-- NIS --}}
                <div
                    class="bg-white col-span-2 shadow-md px-3 py-2 rounded-md inline-flex flex-col text-gray-500 text-sm">
                    <span class="inline-flex items-center justify-between font-bold text-blue-600 text-base">NIS
                        <span class="h-full w-[23px] text-primary">@svg('hugeicons-id')</span>
                    </span>
                    {{ is_null($data->no_induk) ? '-' : $data->no_induk }}
                </div>

                {{-- NISN --}}
                <div
                    class="bg-white col-span-2 shadow-md px-3 py-2 rounded-md inline-flex flex-col text-gray-500 text-sm">
                    <span class="inline-flex items-center justify-between font-bold text-blue-600 text-base">NISN
                        <span class="h-full w-[23px] text-primary">{{ svg('bx-id-card') }}</span>
                    </span>
                    {{ is_null($data->no_induk_nasional) ? '-' : $data->no_induk_nasional }}
                </div>

                {{-- Jenis Kelamin --}}
                <div
                    class="bg-white col-span-2 shadow-md px-3 py-2 rounded-md inline-flex flex-col text-gray-500 text-sm">
                    <span class="inline-flex items-center justify-between font-bold text-blue-600 text-base">Jenis
                        Kelamin
                        <span class="h-full w-[23px] text-primary">
                            @if ($data->jenis_kelamin == 'L')
                                <x-bi-gender-male class="h-full w-5 text-primary"/>
                            @else
                                <x-bi-gender-female class="h-full w-5 text-primary"/>
                            @endif
                        </span>
                    </span>
                    {{ is_null($data->jenis_kelamin) ? '-' : ($data->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan') }}
                </div>

                {{-- Agama --}}
                <div
                    class="bg-white col-span-2 shadow-md px-3 py-2 rounded-md inline-flex flex-col text-gray-500 text-sm">
                    <span class="inline-flex items-center justify-between font-bold text-blue-600 text-base">Agama
                        <x-hugeicons-prayer-rug-01 class="h-full w-5 text-primary"/>
                    </span>
                    {{ is_null($data->agama) ? '-' : $data->agama }}
                </div>

                {{-- Tempat Lahir --}}
                <div
                    class="bg-white col-span-2 shadow-md px-3 py-2 rounded-md inline-flex flex-col text-gray-500 text-sm">
                    <span class="inline-flex items-center justify-between font-bold text-blue-600 text-base">Tempat Lahir
                        <span class="h-full w-5 text-primary">@svg('grommet-location-pin')</span>
                    </span>
                    {{ is_null($data->tempat_lahir) ? '-' : $data->tempat_lahir }}
                </div>

                {{-- Tanggal Lahir --}}
                <div
                    class="bg-white col-span-2 shadow-md px-3 py-2 rounded-md inline-flex flex-col text-gray-500 text-sm">
                    <span class="inline-flex items-center justify-between font-bold text-blue-600 text-base">Tanggal Lahir
                        <x-heroicon-s-calendar-date-range class="h-full w-5 text-primary"/>
                    </span>
                    {{ is_null($data->tanggal_lahir) ? '-' : date('d F Y', strtotime($data->tanggal_lahir)) }}
                </div>

                {{-- Alamat --}}
                <div
                    class="bg-white col-span-6 shadow-md px-3 py-2 rounded-md inline-flex flex-col text-gray-500 text-sm">
                    <span class="inline-flex items-center justify-between font-bold text-blue-600 text-base">Alamat
                        <span class="h-full w-5 text-primary">@svg('zondicon-location')</span>
                    </span>
                    {{ is_null($data->alamat) ? '-' : $data->alamat }}
                </div>

            </div>

        </div>
        <a href={{ route('siswa.list') }}
            class="inline-flex items-center gap-2 text-blue-700 px-4 py-1 rounded-md hover:text-primary duration-300 transition-color mt-6">
            <x-bi-arrow-bar-left class="h-full w-5" /> Kembali
        </a>

        <div class="">
            <script>
                var data = @json($data);
                console.log(data);
            </script>

        </div>
    </div>

</x-app-layout>
