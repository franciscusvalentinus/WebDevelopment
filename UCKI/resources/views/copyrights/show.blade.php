<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Show Copyright
        </h2>
    </x-slot>

    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('copyright.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $copyright->id }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Judul Ciptaan
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $copyright->judul_ciptaan }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal Permohonan
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ date('d-m-Y', strtotime($copyright->tanggal_permohonan)) }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nomor Permohonan
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $copyright->nomor_permohonan }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pemegang Hak Cipta
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $copyright->pemegang_hak_cipta }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nomor Pencatatan
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ $copyright->nomor_pencatatan }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal Penerimaan
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        {{ date('d-m-Y', strtotime($copyright->tanggal_penerimaan)) }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jenis Ciptaan
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @foreach($creations as $creation)
                                            {{ $creation->creation }}
                                        @endforeach
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pencipta 1
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @foreach($lecturers1 as $lecturer)
                                            @foreach ($departments as $department)
                                                @if ($lecturer->department_id == $department->id)
                                                    {{ $lecturer->name }} ({{ $department->department }}) ({{ $lecturer->nidn }})
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pencipta 2
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @forelse($lecturers2 as $lecturer)
                                            @foreach ($departments as $department)
                                                @if ($lecturer->department_id == $department->id)
                                                    {{ $lecturer->name }} ({{ $department->department }}) ({{ $lecturer->nidn }})
                                                @endif
                                            @endforeach
                                        @empty
                                            -
                                        @endforelse
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pencipta 3
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @forelse($lecturers3 as $lecturer)
                                            @foreach ($departments as $department)
                                                @if ($lecturer->department_id == $department->id)
                                                    {{ $lecturer->name }} ({{ $department->department }}) ({{ $lecturer->nidn }})
                                                @endif
                                            @endforeach
                                        @empty
                                            -
                                        @endforelse
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pencipta 4
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @forelse($lecturers4 as $lecturer)
                                            @foreach ($departments as $department)
                                                @if ($lecturer->department_id == $department->id)
                                                    {{ $lecturer->name }} ({{ $department->department }}) ({{ $lecturer->nidn }})
                                                @endif
                                            @endforeach
                                        @empty
                                            -
                                        @endforelse
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pencipta 5
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @forelse($lecturers5 as $lecturer)
                                            @foreach ($departments as $department)
                                                @if ($lecturer->department_id == $department->id)
                                                    {{ $lecturer->name }} ({{ $department->department }}) ({{ $lecturer->nidn }})
                                                @endif
                                            @endforeach
                                        @empty
                                            -
                                        @endforelse
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pencipta 6
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @forelse($lecturers6 as $lecturer)
                                            @foreach ($departments as $department)
                                                @if ($lecturer->department_id == $department->id)
                                                    {{ $lecturer->name }} ({{ $department->department }}) ({{ $lecturer->nidn }})
                                                @endif
                                            @endforeach
                                        @empty
                                            -
                                        @endforelse
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pencipta 7
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @forelse($lecturers7 as $lecturer)
                                            @foreach ($departments as $department)
                                                @if ($lecturer->department_id == $department->id)
                                                    {{ $lecturer->name }} ({{ $department->department }}) ({{ $lecturer->nidn }})
                                                @endif
                                            @endforeach
                                        @empty
                                            -
                                        @endforelse
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pencipta 8
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @forelse($lecturers8 as $lecturer)
                                            @foreach ($departments as $department)
                                                @if ($lecturer->department_id == $department->id)
                                                    {{ $lecturer->name }} ({{ $department->department }}) ({{ $lecturer->nidn }})
                                                @endif
                                            @endforeach
                                        @empty
                                            -
                                        @endforelse
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pencipta 9
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @forelse($lecturers9 as $lecturer)
                                            @foreach ($departments as $department)
                                                @if ($lecturer->department_id == $department->id)
                                                    {{ $lecturer->name }} ({{ $department->department }}) ({{ $lecturer->nidn }})
                                                @endif
                                            @endforeach
                                        @empty
                                            -
                                        @endforelse
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pencipta 10
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 bg-white divide-y divide-gray-200">
                                        @forelse($lecturers10 as $lecturer)
                                            @foreach ($departments as $department)
                                                @if ($lecturer->department_id == $department->id)
                                                    {{ $lecturer->name }} ({{ $department->department }}) ({{ $lecturer->nidn }})
                                                @endif
                                            @endforeach
                                        @empty
                                            -
                                        @endforelse
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
