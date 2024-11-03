<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Kelas') }}
        </h2>
    </x-slot>

    @if (Session::has('success'))
        <x-alert type="success" message="{{ Session::get('success') }}" />
    @endif

    @if (Session::has('failed'))
        <x-alert type="failed" message="{{ Session::get('failed') }}" />
    @endif

    <div class="px-5">

        <form action={{ route('kelas.update', ['id' => $kelas->kelas_id]) }} method="POST" class="">
            @csrf
            @method('HEAD')
            <div class="grid grid-cols-2 gap-5">
                <div class="">
                    <label for="nama_kelas" class="">Nama Kelas</label>
                    <input type="text" id="nama_kelas" name="nama_kelas" required
                        class="block w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:border-primary" value="{{ $kelas->nama_kelas }}">
                </div>
                <div class="flex flex-col">
                    <label for="" class="mb-2">Tingkat Kelas</label>
                    <div class="grid grid-cols-6">
                        <div class="inline-flex items-center">
                            <label class="relative flex items-center cursor-pointer" for="sepuluh">
                                <input name="tingkat_kelas" type="radio" value="X"
                                    class="peer h-4 w-4 cursor-pointer appearance-none rounded-full border border-slate-300 checked:border-slate-400 transition-all"
                                    id="sepuluh" {{ $kelas->tingkat_kelas == 'X' ? 'checked' : '' }}>
                                <span
                                    class="absolute bg-slate-800 w-2 h-2 rounded-full opacity-0 peer-checked:opacity-100 transition-opacity duration-200 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                </span>
                            </label>
                            <label class="ml-2 text-slate-600 cursor-pointer text-sm" for="sepuluh">X</label>
                        </div>
                        <div class="inline-flex items-center">
                            <label class="relative flex items-center cursor-pointer" for="sebelas">
                                <input name="tingkat_kelas" type="radio" value="XI"
                                    class="peer h-4 w-4 cursor-pointer appearance-none rounded-full border border-slate-300 checked:border-slate-400 transition-all"
                                    id="sebelas" {{ $kelas->tingkat_kelas == 'XI' ? 'checked' : '' }}>
                                <span
                                    class="absolute bg-slate-800 w-2 h-2 rounded-full opacity-0 peer-checked:opacity-100 transition-opacity duration-200 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                </span>
                            </label>
                            <label class="ml-2 text-slate-600 cursor-pointer text-sm" for="sebelas">XI</label>
                        </div>
                        <div class="inline-flex items-center">
                            <label class="relative flex items-center cursor-pointer" for="duabelas">
                                <input name="tingkat_kelas" type="radio" value="XII"
                                    class="peer h-4 w-4 cursor-pointer appearance-none rounded-full border border-slate-300 checked:border-slate-400 transition-all"
                                    id="duabelas" {{ $kelas->tingkat_kelas == 'XII' ? 'checked' : '' }}>
                                <span
                                    class="absolute bg-slate-800 w-2 h-2 rounded-full opacity-0 peer-checked:opacity-100 transition-opacity duration-200 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                </span>
                            </label>
                            <label class="ml-2 text-slate-600 cursor-pointer text-sm" for="duabelas">XII</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row gap-5 mt-5">
                <a href={{ route('kelas.list') }}
                    class="bg-white border border-primary px-5 py-1 rounded-md shadow-md">Batal</a>
                <button type="submit"
                    class="bg-blue-500 px-7 py-1 shadow-md text-white rounded-md hover:bg-blue-200 hover:text-primary transition-colors duration-300 hover:border">Simpan</button>
            </div>
        </form>
    </div>
</x-app-layout>
