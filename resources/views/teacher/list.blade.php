<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Guru') }}
        </h2>
    </x-slot>

    @if (Session::has('success'))
                <x-alert type="success" message="{{ Session::get('success') }}" />
            @endif

            @if (Session::has('failed'))
                <x-alert type="failed" message="{{ Session::get('failed') }}" />
            @endif

    <div class="px-4 mt-3 w-full">
        <div class="flex flex-col w-full overflow-x-auto">
            <div class="text-white rounded-sm p-1 mb-3">
                <div class="grid grid-cols-2 items-center">
                    <x-search action="{{ route('guru.list') }}" />
                    <div class="flex items-center justify-end">
                        <a href={{ route('guru.create') }}
                            class="bg-primary text-white px-4 rounded-md py-1 inline-flex items-center justify-center font-bold">
                            <x-bi-plus class="h-full w-6" />
                            Tambah</a>
                    </div>
                </div>
            </div>
            @if ($data->isNotEmpty())
                <table class="w-full table__list mb-3 bg-white rounded-md px-2 pb-2 h-full">
                    <thead>
                        <tr>
                        <th>#</th>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>NISN</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    {{ $item->guru_code }}
                                </td>
                                <td>{{ $item->guru_name }}</td>
                                <td>{{ $item->nip }}</td>
                                <td>{{ is_null($item->kelas) ?  '-' : $item->kelas->nama_kelas }}</td>
                                <td class="flex items-center justify-center">
                                    {{-- <x-dropdown align="action" width="10">
                                        <x-slot name="trigger">
                                            <button class="">
                                                <x-polaris-menu-horizontal-icon class="w-5 h-full"/>
                                            </button>
                                        </x-slot>

                                        <x-slot name="content">
                                            <div class="flex flex-col gap-1 text-start pl-3">
                                                <a href={{ route('siswa.detail',  ['siswa_id' => $item->siswa_id]) }} class="">{{ __('Detail') }}</a>
                                                <a href={{ route('siswa.edit',  ['siswa' => $item->siswa_id]) }} class="">{{ __('Edit') }}</a>
                                            <a href={{ route('siswa.delete',  ['siswa' => $item->siswa_id]) }} class="text-red-500">{{ __('Hapus') }}</a>
                                            </div>
                                        </x-slot>
                                    </x-dropdown> --}}
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
                {{ $data->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
