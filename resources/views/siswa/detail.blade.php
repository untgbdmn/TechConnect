<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Siswa') }}
        </h2>
    </x-slot>

    <div class="px-5">
        <div class="bg-white py-3">
            <div class="flex flex-row items-center px-3 gap-3">
                <img src={{ $data->jenis_kelamin == 'L' ? asset('assets/detail/man.png') : asset('assets/detail/woman.png') }}
                    alt="" class="h-full w-14">
                <div class="flex flex-col">
                    <h1 class="font-bold">{{ $data->nama_siswa }}</h1>
                    <h1 class="text-sm">{{ $data->email }} || {{ $data->phone_number }}</h1>
                </div>
            </div>
            <div class="grid grid-cols-3 w-full gap-5 px-3 mt-5">
                <div class="bg-white shadow-md px-3 py-1">
                    <span class="font-semibold text-blue-500 text-sm">Nomor Induk Siswa</span>
                    <h1 class="text-lg font-bold text-black">{{ $data->no_induk }}</h1>
                </div>
                <div class="bg-white shadow-md px-3 py-1">
                    <span class="font-semibold text-blue-500 text-sm">Nomor Induk Siswa Nasional</span>
                    <h1 class="text-lg font-bold text-black">{{ $data->no_induk_nasional }}</h1>
                </div>
                <div class="bg-white shadow-md px-3 py-1">
                    <span class="font-semibold text-blue-500 text-sm">Jenis Kelamin</span>
                    <h1 class="text-base text-black">{{ $data->jenis_kelamin == "L" ? "Laki Laki" : "Perempuan" }}</h1>
                </div>
                <div class="bg-white shadow-md px-3 py-1 col-span-2">
                    <span class="font-semibold text-blue-500 text-sm">Alamat</span>
                    <h1 class="text-base text-black">{{ $data->alamat }}</h1>
                </div>
                <div class="bg-white shadow-md px-3 py-1">
                    <span class="font-semibold text-blue-500 text-sm">Tempat, Tanggal Lahir</span>
                    <h1 class="text-base text-black">{{ $data->tempat_lahir }}, {{ date('d F Y', strtotime($data->tanggal_lahir)) }}</h1>
                </div>
            </div>
        </div>
        <a href={{ route('siswa.list') }} class="inline-flex items-center gap-2 text-blue-700 px-4 ml-4 py-1 rounded-md hover:text-primary duration-300 hover:-translate-x-5 transition-all mt-6">
            <x-bi-arrow-bar-left class="h-full w-5"/> Kembali
        </a>
    </div>

</x-app-layout>
