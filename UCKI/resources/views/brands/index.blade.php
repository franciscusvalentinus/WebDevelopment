<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Merek
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="px-6 py-4 mb-4 overflow-hidden border rounded-lg shadow-sm border-secondary-300 bg-secondary-200">
                <div class="flex flex-col justify-between sm:flex-row">
                    <div class="text-center sm:text-left flex-start">
                        <h3 class="text-lg font-semibold leading-6 text-gray-800">Merek</h3>
                        <p class="mt-px text-sm leading-5 text-gray-600 sm:mt-1">List Data Merek</p>
                    </div>
                    <div class="flex items-center justify-center mt-2 space-x-2 sm:mt-0">
                        <a href="{{ route('brand.create') }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wide text-white transition bg-blue-500 border border-transparent rounded-full shadow select-none focus:border-blue-600 hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-30 disabled:opacity-50">
                            <svg class="w-5 h-5 -mx-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="{{ route('brand.export') }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wide text-white transition bg-green-500 border border-transparent rounded-full shadow select-none focus:border-green-600 hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-500 focus:ring-opacity-30 disabled:opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <main
                            class="mx-auto max-w-4xl"
                            x-data="{ 'isDialogOpen': false }"
                            @keydown.escape="isDialogOpen = false">
                            <button type="button" class="inline-flex items-center justify-center px-4 py-2 text-sm font-bold tracking-wide text-white transition bg-yellow-500 border border-transparent rounded-full shadow select-none focus:border-yellow-600 hover:bg-yellow-600 focus:outline-none focus:ring focus:ring-yellow-500 focus:ring-opacity-30 disabled:opacity-50" @click="isDialogOpen = true">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div
                                class="overflow-auto"
                                style="background-color: rgba(0,0,0,0.5)"
                                x-show="isDialogOpen"
                                :class="{ 'absolute inset-0 z-10 flex items-start justify-center': isDialogOpen }">
                                <div
                                    class="bg-white shadow-2xl m-4 sm:m-8"
                                    x-show="isDialogOpen"
                                    @click.away="isDialogOpen = false">
                                    <div class="flex justify-between items-center border-b p-2 text-xl">
                                        <h6 class="text-xl font-bold">Filter Pencarian</h6>
                                        <button type="button" @click="isDialogOpen = false">✖</button>
                                    </div>
                                    <div class="p-2">
                                        <form action="{{ url()->current() }}" method="get">
                                            <div class="relative mx-auto space-y-2">
                                                <h6 class="font-bold pl-2">Merek</h6>
                                                <input type="search" name="merek" value="{{ request('merek') }}" class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                                <h6 class="font-bold pl-2">Tanggal Permohonan (mulai)</h6>
                                                <input type="date" name="tanggal_permohonan_prev" value="{{ request('tanggal_permohonan_prev') }}" class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                                <h6 class="font-bold pl-2">Tanggal Permohonan (selesai)</h6>
                                                <input type="date" name="tanggal_permohonan_next" value="{{ request('tanggal_permohonan_next') }}" class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                                <h6 class="font-bold pl-2">Nomor Permohonan</h6>
                                                <input type="search" name="nomor_permohonan" value="{{ request('nomor_permohonan') }}" class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                                <h6 class="font-bold pl-2">Kelas</h6>
                                                <input type="search" name="kelas" value="{{ request('kelas') }}" class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                                <h6 class="font-bold pl-2">Jenis Merek</h6>
                                                <input type="search" name="jenis_merek" value="{{ request('jenis_merek') }}" class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                                <h6 class="font-bold pl-2">Status</h6>
                                                <input type="search" name="status" value="{{ request('status') }}" class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                                <h6 class="font-bold pl-2">Nama Pencipta</h6>
                                                <input type="search" name="pencipta_nama" value="{{ request('pencipta_nama') }}" class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                                <h6 class="font-bold pl-2">NIDN Pencipta</h6>
                                                <input type="search" name="pencipta_nidn" value="{{ request('pencipta_nidn') }}" class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                                <h6 class="font-bold pl-2">Program Studi</h6>
                                                <input type="search" name="department_id" value="{{ request('department_id') }}" class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                                <center>
                                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                        Cari
                                                    </button>
                                                </center>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>

            @if (session('success'))
                <div class="px-4 py-2 mb-4 text-sm text-center text-green-800 bg-green-300 rounded-full shadow-sm">
                    {!! session('success') !!}
                </div>
            @endif

            <div class="overflow-hidden border rounded-lg border-secondary-300">
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="text-sm border-b select-none border-secondary-300 bg-secondary-200">
                        <tr>
                            <th class="px-6 py-3 font-bold text-center uppercase">No</th>
                            <th class="px-6 py-3 font-bold text-left uppercase">Title</th>
                            <th class="px-6 py-3 font-bold text-right uppercase"></th>
                        </tr>
                        </thead>
                        <tbody class="text-sm text-gray-700 bg-white divide-y divide-secondary-300">
                        @if ($brands->count() > 0)
                            @foreach ($brands as $brand)
                                <tr>
                                    <td class="px-6 py-3 leading-6 text-center whitespace-nowrap">{{ $brands->perPage() * ($brands->currentPage() - 1) + $loop->iteration }}</td>
                                    <td class="w-10 px-6 py-3 leading-6 sm:w-auto">{{ $brand->merek }}</td>
                                    <td class="px-6 text-right select-none whitespace-nowrap">
                                        <a href="{{ route('brand.show', $brand) }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition border border-transparent rounded-full shadow select-none bg-blue-500 focus:border-blue-600 hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-30 disabled:opacity-50">
                                            <svg class="w-4 h-4 -mx-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('brand.edit', $brand) }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition bg-yellow-500 border border-transparent rounded-full shadow select-none focus:border-yellow-600 hover:bg-yellow-600 focus:outline-none focus:ring focus:ring-yellow-500 focus:ring-opacity-30 disabled:opacity-50">
                                            <svg class="w-4 h-4 -mx-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                            </svg>
                                        </a>
                                        <div endpoint="{{ route('brand.destroy', $brand) }}" class="inline delete"></div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="select-none">
                                <td class="px-6 py-3 leading-4 text-center whitespace-nowrap">-</td>
                                <td class="px-6 py-3 leading-4 whitespace-nowrap">-</td>
                                <td class="px-6 text-right whitespace-nowrap">-</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
                <div class="text-gray-600 bg-secondary-50">
                    {{ $brands->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
