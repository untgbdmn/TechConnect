<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Kelas') }}
        </h2>
    </x-slot>

    <div class="px-4 mt-3 w-full">
        @if (Session::has('alert.sweetalert'))
            <script>
                Swal.fire({!! Session::pull('alert.sweetalert') !!});
            </script>
        @endif
        <div class="flex flex-col w-full overflow-x-auto">
            <div class="text-white rounded-sm p-1 mb-3">
                <div class="grid grid-cols-2 items-center">
                    <form action={{ route('siswa.list') }} method="HEAD">
                        <div class="w-full flex flex-row gap-2">
                            <input
                                class="w-full bg-primary placeholder:text-white text-white text-sm border border-slate-200 rounded-md py-1 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Search..." name="search" id="search" type="search">
                            <button type="submit" class="bg-primary text-white rounded-md px-5">
                                Search
                            </button>
                        </div>
                    </form>
                    <div class="flex items-center justify-end">
                        <a href={{ route('kelas.create') }}
                            class="bg-primary text-white px-4 rounded-md py-1 inline-flex items-center justify-center font-bold">
                            <x-bi-plus class="h-full w-6" />
                            Tambah</a>
                    </div>
                </div>
            </div>
            @if ($kelas->isNotEmpty())
                <table class="w-full table__list mb-3 bg-white rounded-md px-2 pb-2">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Kode Kelas</th>
                            <th>Jumlah Siswa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->nama_kelas }}</td>
                                <td>{{ $item->kelas_code }}</td>
                                <td>{{ $item->jumlah_siswa }}</td>
                                <td>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="w-full flex flex-col mt-10 items-center justify-center text-primary">
                    <img src={{ asset('assets/file.png') }} alt="" class="h-full w-16">
                    Data Kosong
                </div>
            @endif
            <div class="text-black">
                {{-- {{ $kelas->links() }} --}}
            </div>
        </div>
    </div>
</x-app-layout>
