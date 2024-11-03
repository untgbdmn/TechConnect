<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Kelas') }}
        </h2>
    </x-slot>

    <div class="px-4 mt-3 w-full text-primary">
        <div class="flex flex-col w-full overflow-x-auto">
            <div class="text-white rounded-sm p-1 mb-3">
                <div class="grid grid-cols-2 items-center">
                    <x-search action="{{ route('kelas.list') }}" />
                    <div class="flex items-center justify-end">
                        <a href={{ route('kelas.create') }}
                            class="bg-primary text-white px-4 rounded-md py-1 inline-flex items-center justify-center font-bold">
                            <x-bi-plus class="h-full w-6" />
                            Tambah</a>
                    </div>
                </div>
            </div>

            @if (Session::has('success'))
                <x-alert type="success" message="{{ Session::get('success') }}" />
            @endif

            @if (Session::has('failed'))
                <x-alert type="failed" message="{{ Session::get('failed') }}" />
            @endif

            @if ($kelas->isNotEmpty())
                <table class="w-full table__list mb-3 bg-white rounded-md px-2 pb-2">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Kode Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas as $key => $item)
                            <tr>
                                <td>{{ $kelas->firstItem() + $key }}</td>
                                <td>{{ $item->tingkat_kelas }} {{ $item->nama_kelas }}</td>
                                <td>{{ $item->kelas_code }}</td>
                                <td class="flex items-center justify-center">
                                    <x-dropdown align="action" width="10">
                                        <x-slot name="trigger">
                                            <button class="">
                                                <x-polaris-menu-horizontal-icon class="w-5 h-full"/>
                                            </button>
                                        </x-slot>

                                        <x-slot name="content">
                                            <div class="flex flex-col gap-1 text-start pl-3">
                                                <a href={{ route('kelas.edit',  ['id' => $item->kelas_id]) }} class="">{{ __('Edit') }}</a>
                                            <a href={{ route('kelas.delete',  ['id' => $item->kelas_id]) }} class="text-red-500">{{ __('Hapus') }}</a>
                                            </div>
                                        </x-slot>
                                    </x-dropdown>

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
                {{ $kelas->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
