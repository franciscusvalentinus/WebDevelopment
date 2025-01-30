<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Beranda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg divide-y divide-gray-400 md:divide-y-8">
                <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                    <form action="{{ url()->current() }}" method="get">
                        <div class="relative mx-auto">
                            <input type="search" name="keyword" value="{{ request('keyword') }}" placeholder="Search ....." class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" autofocus>
                            <button type="submit" class="absolute top-0 right-0 inline-flex items-center px-2 py-2 ml-1 mr-2 text-sm focus:outline-none">
                                <svg class="w-5 h-5 text-gray-500 transition dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 disabled:opacity-25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>

                @if($year != null)
                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Semua Jurusan di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($copyrightyear) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Hak Cipta</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($patentyear) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Paten</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($designyear) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Desain Industri</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($brandyear) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Merek</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Manajemen (IBM-RC) di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cibmyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta IBM-RC</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pibmyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten IBM-RC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dibmyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri IBM-RC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bibmyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek IBM-RC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Manajemen (IBM-IC) di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cbmiyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta IBM-IC</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pbmiyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten IBM-IC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dbmiyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri IBM-IC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bbmiyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek IBM-IC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Akuntansi (ACC) di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $caccyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta ACC</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $paccyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten ACC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $daccyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri ACC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $baccyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek ACC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Ilmu Komunikasi (FIKOM) di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ccomyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta FIKOM</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pcomyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten FIKOM</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dcomyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri FIKOM</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bcomyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek FIKOM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Pariwisata (HTB) di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $chtbyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta HTB</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $phtbyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten HTB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dhtbyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri HTB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bhtbyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek HTB</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Kuliner (CBZ) di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ccbzyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta CBZ</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pcbzyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten CBZ</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dcbzyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri CBZ</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bcbzyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek CBZ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Psikologi (PSY) di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cpsyyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta PSY</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ppsyyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten PSY</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dpsyyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri PSY</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bpsyyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek PSY</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Informatika (IMT) di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cimtyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta IMT</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pimtyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten IMT</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dimtyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri IMT</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bimtyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek IMT</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Sistem Informasi (ISB) di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cisbyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta ISB</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pisbyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten ISB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $disbyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri ISB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bisbyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek ISB</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Desain Komunikasi (VCD) di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cvcdyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta VCD</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pvcdyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten VCD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dvcdyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri VCD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bvcdyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek VCD</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Arsitektur (INA) di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cinayear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta INA</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pinayear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten INA</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dinayear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri INA</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $binayear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek INA</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Desain Produk (FPD) di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cfpdyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta FPD</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pfpdyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten FPD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dfpdyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri FPD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bfpdyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek FPD</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Kedokteran (MED) di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cmedyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta MED</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pmedyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten MED</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dmedyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri MED</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bmedyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek MED</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Teknologi Pangan (FTP) di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cftpyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta FTP</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pftpyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten FTP</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dftpyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri FTP</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bftpyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek FTP</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan S2 Manajemen (MEM) di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cmemyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta S2 Manajemen</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pmemyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten S2 Manajemen</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dmemyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri S2 Manajemen</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bmemyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek S2 Manajemen</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Dosen yang tidak ber-NIDN / Mahasiswa di Tahun Kabisat {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cdllyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta Lain-lain</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pdllyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten Lain-lain</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ddllyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri Lain-lain</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bdllyear }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek Lain-lain</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Semua Jurusan di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($copyrightnext) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Hak Cipta</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($patentnext) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Paten</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($designnext) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Desain Industri</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($brandnext) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Merek</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Manajemen (IBM-RC) di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cibmnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta IBM-RC</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pibmnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten IBM-RC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dibmnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri IBM-RC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bibmnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek IBM-RC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Manajemen (IBM-IC) di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cbminext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta IBM-IC</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pbminext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten IBM-IC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dbminext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri IBM-IC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bbminext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek IBM-IC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Akuntansi (ACC) di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $caccnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta ACC</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $paccnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten ACC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $daccnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri ACC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $baccnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek ACC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Ilmu Komunikasi (FIKOM) di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ccomnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta FIKOM</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pcomnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten FIKOM</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dcomnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri FIKOM</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bcomnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek FIKOM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Pariwisata (HTB) di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $chtbnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta HTB</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $phtbnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten HTB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dhtbnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri HTB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bhtbnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek HTB</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Kuliner (CBZ) di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ccbznext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta CBZ</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pcbznext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten CBZ</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dcbznext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri CBZ</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bcbznext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek CBZ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Psikologi (PSY) di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cpsynext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta PSY</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ppsynext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten PSY</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dpsynext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri PSY</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bpsynext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek PSY</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Informatika (IMT) di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cimtnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta IMT</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pimtnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten IMT</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dimtnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri IMT</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bimtnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek IMT</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Sistem Informasi (ISB) di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cisbnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta ISB</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pisbnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten ISB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $disbnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri ISB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bisbnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek ISB</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Desain Komunikasi (VCD) di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cvcdnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta VCD</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pvcdnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten VCD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dvcdnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri VCD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bvcdnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek VCD</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Arsitektur (INA) di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cinanext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta INA</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pinanext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten INA</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dinanext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri INA</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $binanext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek INA</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Desain Produk (FPD) di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cfpdnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta FPD</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pfpdnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten FPD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dfpdnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri FPD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bfpdnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek FPD</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Kedokteran (MED) di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cmednext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta MED</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pmednext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten MED</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dmednext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri MED</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bmednext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek MED</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Teknologi Pangan (FTP) di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cftpnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta FTP</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pftpnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten FTP</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dftpnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri FTP</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bftpnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek FTP</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan S2 Manajemen (MEM) di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cmemnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta S2 Manajemen</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pmemnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten S2 Manajemen</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dmemnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri S2 Manajemen</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bmemnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek S2 Manajemen</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Dosen yang tidak ber-NIDN / Mahasiswa di Tahun Akademik {{ $year }} - {{ $yearnext }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cdllnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta Lain-lain</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pdllnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten Lain-lain</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ddllnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri Lain-lain</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bdllnext }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek Lain-lain</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Semua Jurusan di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($copyrightprev) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Hak Cipta</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($patentprev) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Paten</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($designprev) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Desain Industri</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($brandprev) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Merek</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Manajemen (IBM-RC) di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cibmprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta IBM-RC</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pibmprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten IBM-RC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dibmprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri IBM-RC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bibmprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek IBM-RC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Manajemen (IBM-IC) di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cbmiprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta IBM-IC</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pbmiprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten IBM-IC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dbmiprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri IBM-IC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bbmiprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek IBM-IC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Akuntansi (ACC) di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $caccprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta ACC</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $paccprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten ACC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $daccprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri ACC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $baccprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek ACC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Ilmu Komunikasi (FIKOM) di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ccomprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta FIKOM</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pcomprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten FIKOM</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dcomprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri FIKOM</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bcomprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek FIKOM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Pariwisata (HTB) di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $chtbprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta HTB</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $phtbprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten HTB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dhtbprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri HTB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bhtbprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek HTB</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Kuliner (CBZ) di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ccbzprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta CBZ</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pcbzprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten CBZ</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dcbzprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri CBZ</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bcbzprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek CBZ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Psikologi (PSY) di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cpsyprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta PSY</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ppsyprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten PSY</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dpsyprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri PSY</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bpsyprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek PSY</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Informatika (IMT) di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cimtprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta IMT</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pimtprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten IMT</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dimtprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri IMT</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bimtprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek IMT</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Sistem Informasi (ISB) di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cisbprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta ISB</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pisbprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten ISB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $disbprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri ISB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bisbprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek ISB</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Desain Komunikasi (VCD) di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cvcdprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta VCD</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pvcdprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten VCD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dvcdprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri VCD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bvcdprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek VCD</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Arsitektur (INA) di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cinaprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta INA</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pinaprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten INA</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dinaprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri INA</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $binaprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek INA</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Desain Produk (FPD) di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cfpdprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta FPD</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pfpdprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten FPD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dfpdprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri FPD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bfpdprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek FPD</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Kedokteran (MED) di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cmedprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta MED</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pmedprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten MED</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dmedprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri MED</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bmedprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek MED</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Teknologi Pangan (FTP) di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cftpprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta FTP</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pftpprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten FTP</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dftpprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri FTP</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bftpprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek FTP</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan S2 Manajemen (MEM) di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cmemprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta S2 Manajemen</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pmemprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten S2 Manajemen</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dmemprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri S2 Manajemen</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bmemprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek S2 Manajemen</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Dosen yang tidak ber-NIDN / Mahasiswa di Tahun Akademik {{ $yearprev }} - {{ $year }}</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cdllprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta Lain-lain</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pdllprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten Lain-lain</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ddllprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri Lain-lain</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bdllprev }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek Lain-lain</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Semua Jurusan</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($copyright) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Hak Cipta</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($patent) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Paten</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($design) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Desain Industri</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ count($brand) }}</p>
                                    <p class="text-lg text-center text-gray-500">Total Merek</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Manajemen (IBM-RC)</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cibm }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta IBM-RC</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pibm }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten IBM-RC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dibm }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri IBM-RC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bibm }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek IBM-RC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Manajemen (IBM-IC)</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cbmi }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta IBM-IC</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pbmi }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten IBM-IC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dbmi }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri IBM-IC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bbmi }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek IBM-IC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Akuntansi (ACC)</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cacc }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta ACC</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pacc }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten ACC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dacc }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri ACC</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bacc }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek ACC</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Ilmu Komunikasi (FIKOM)</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ccom }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta FIKOM</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pcom }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten FIKOM</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dcom }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri FIKOM</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bcom }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek FIKOM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Pariwisata (HTB)</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $chtb }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta HTB</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $phtb }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten HTB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dhtb }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri HTB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bhtb }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek HTB</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Kuliner (CBZ)</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ccbz }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta CBZ</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pcbz }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten CBZ</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dcbz }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri CBZ</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bcbz }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek CBZ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Psikologi (PSY)</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cpsy }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta PSY</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ppsy }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten PSY</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dpsy }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri PSY</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bpsy }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek PSY</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Informatika (IMT)</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cimt }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta IMT</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pimt }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten IMT</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dimt }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri IMT</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bimt }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek IMT</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Sistem Informasi (ISB)</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cisb }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta ISB</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pisb }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten ISB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $disb }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri ISB</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bisb }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek ISB</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Desain Komunikasi (VCD)</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cvcd }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta VCD</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pvcd }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten VCD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dvcd }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri VCD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bvcd }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek VCD</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Arsitektur (INA)</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cina }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta INA</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pina }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten INA</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dina }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri INA</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bina }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek INA</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Desain Produk (FPD)</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cfpd }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta FPD</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pfpd }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten FPD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dfpd }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri FPD</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bfpd }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek FPD</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Kedokteran (MED)</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cmed }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta MED</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pmed }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten MED</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dmed }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri MED</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bmed }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek MED</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan Teknologi Pangan (FTP)</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cftp }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta FTP</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pftp }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten FTP</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dftp }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri FTP</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bftp }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek FTP</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Jurusan S2 Manajemen (MEM)</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cmem }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta S2 Manajemen</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pmem }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten S2 Manajemen</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $dmem }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri S2 Manajemen</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bmem }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek S2 Manajemen</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="wrapper" class="max-w-xl px-4 py-4 mx-auto">
                        <p>Dosen yang tidak ber-NIDN / Mahasiswa</p>
                        <div class="sm:grid sm:h-44 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
                            <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $cdll }}</p>
                                    <p class="text-lg text-center text-gray-500">Hak Cipta Lain-lain</p>
                                </div>
                            </div>

                            <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $pdll }}</p>
                                    <p class="text-lg text-center text-gray-500">Paten Lain-lain</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $ddll }}</p>
                                    <p class="text-lg text-center text-gray-500">Desain Industri Lain-lain</p>
                                </div>
                            </div>

                            <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{ $bdll }}</p>
                                    <p class="text-lg text-center text-gray-500">Merek Lain-lain</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
