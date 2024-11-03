<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Siswa') }}
        </h2>
    </x-slot>

    @if (Session::has('success'))
                <x-alert type="success" message="{{ Session::get('success') }}" />
            @endif

            @if (Session::has('failed'))
                <x-alert type="failed" message="{{ Session::get('failed') }}" />
            @endif

    <div class="px-5">
        <form action={{ route('siswa.update',['siswa' => $data->siswa_id]) }} method="get" class="">
            @csrf
            @method('get')
            <div class="grid grid-cols-8 gap-y-2 gap-x-5">
                {{-- Input Nama --}}
                <div class="mb-2 flex flex-col gap-1 col-span-4">
                    <label for="nama_siswa" class="block text-sm font-medium text-gray-700">
                        Nama Siswa
                    </label>
                    <input type="text" id="nama_siswa" name="nama_siswa" required
                        class="block w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="e.g. Asirwanda Samosir" value="{{ $data->nama_siswa }}">
                </div>
                {{-- Input Kelas --}}
                <div class="mb-2 flex flex-col gap-1 col-span-4">
                    @if ($data_kelas->isEmpty())
                    <label for="select_kelas" class="block text-sm font-medium text-gray-700">
                        Kelas
                    </label>
                        <div class="h-full items-center justify-center inline-flex gap-2">
                            Belum ada kelas,<a href={{ route('kelas.create') }} class="text-blue-500 font-bold">Klik untuk buat</a>
                        </div>
                    @else
                        <label for="select_kelas" class="block text-sm font-medium text-gray-700">
                            Kelas
                        </label>
                        <select
                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded pl-3 pr-8 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer"
                            name="select_kelas" id="select_kelas" value>
                            <option value="">Pilih Kelas</option>
                            @foreach ($data_kelas as $key => $i)
                                <option value={{ $i->kelas_id }} @if($data->kelas_id == $i->kelas_id)
                                    selected
                                @endif>{{ $i->nama_kelas }}</option>
                            @endforeach
                        </select>
                    @endif
                </div>
                {{-- Nomor Induk --}}
                <div class="mb-2 flex flex-col gap-1 col-span-2">
                    <label for="nomor_induk" class="block text-sm font-medium text-gray-700">
                        Nomor Induk
                    </label>
                    <input type="text" id="nomor_induk" name="nomor_induk"
                        class="block w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="e.g. 20547" value="{{ $data->no_induk }}">
                </div>
                {{-- Nomor Induk Nasional --}}
                <div class="mb-2 flex flex-col gap-1 col-span-2">
                    <label for="nomor_nasional" class="block text-sm font-medium text-gray-700">
                        Nomor Induk Siswa Nasional
                    </label>
                    <input type="text" id="nomor_nasional" name="nomor_nasional"
                        class="block w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="e.g. 0053618" value="{{ $data->no_induk_nasional }}">
                </div>
                {{-- Tempat Lahir --}}
                <div class="mb-2 flex flex-col gap-1 col-span-2">
                    <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">
                        Tempat Lahir
                    </label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir"
                        class="block w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="e.g. Kulon Progo" value="{{ $data->tempat_lahir }}">
                </div>
                {{-- Tanggal Lahir --}}
                <div class="mb-2 flex flex-col gap-1 col-span-2">
                    <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">
                        Nama Siswa
                    </label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                        class="block w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" value="{{ $data->tanggal_lahir }}">
                </div>
                {{-- Jenis Kelamin --}}
                <div class="mb-2 flex flex-col gap-1 col-span-2">
                    <label for="gender" class="block text-sm font-medium text-gray-700">
                        Jenis Kelamin
                    </label>
                    <select
                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded pl-3 pr-8 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer"
                        name="gender" id="gender">
                        <option value="L"  @if($data->jenis_kelamin == 'L') selected @endif>Laki Laki</option>
                        <option value="P"  @if($data->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                    </select>
                </div>
                {{-- Alamat --}}
                <div class="mb-2 flex flex-col gap-1 col-span-6">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">
                        Alamat
                    </label>
                    <input type="text" id="alamat" name="alamat"
                        class="block w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="e.g. Jl. Raya Kaliurang" value="{{ $data->alamat }}">
                </div>
                {{-- Agama --}}
                <div class="mb-2 flex flex-col gap-1 col-span-2">
                    <label for="agama" class="block text-sm font-medium text-gray-700">
                        Agama
                    </label>
                    <input type="text" id="agama" name="agama"
                        class="block w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="e.g. Islam" value="{{ $data->agama }}">
                </div>
                {{-- Email --}}
                <div class="mb-2 flex flex-col gap-1 col-span-3">
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email
                    </label>
                    <input type="text" id="email" name="email"
                        class="block w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="e.g. asirwanda@gmail.com" value="{{ $data->email }}">
                </div>
                {{-- Phone --}}
                <div class="mb-2 flex flex-col gap-1 col-span-3">
                    <label for="phone" class="block text-sm font-medium text-gray-700">
                        Nomor HP
                    </label>
                    <input type="text" id="phone" name="phone"
                        class="block w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="e.g. 083718391827" value="{{ $data->phone_number }}">
                </div>
            </div>
            <div class="flex flex-row gap-5 mt-5">
                <a href={{ route('siswa.list') }}
                    class="bg-white border border-primary px-5 py-1 rounded-md shadow-md">Batal</a>
                <button type="submit"
                    class="bg-blue-500 px-7 py-1 shadow-md text-white rounded-md hover:bg-blue-200 hover:text-primary transition-colors duration-300 hover:border">Simpan</button>
            </div>
        </form>
    </div>
</x-app-layout>
