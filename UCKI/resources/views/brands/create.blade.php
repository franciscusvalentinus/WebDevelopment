<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Brand
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('brand.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('brand.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="merek" class="block font-medium text-sm text-gray-700">Merek<label class="text-red-600">*</label></label>
                            <input type="text" name="merek" id="merek" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('merek', '') }}" autofocus/>
                            @error('merek')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tanggal_permohonan" class="block font-medium text-sm text-gray-700">Tanggal Permohonan</label>
                            <input type="date" name="tanggal_permohonan" id="tanggal_permohonan" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('tanggal_permohonan', '') }}" />
                            @error('tanggal_permohonan')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nomor_permohonan" class="block font-medium text-sm text-gray-700">Nomor Permohonan</label>
                            <input type="text" name="nomor_permohonan" id="nomor_permohonan" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('nomor_permohonan', '') }}" />
                            @error('nomor_permohonan')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="kelas" class="block font-medium text-sm text-gray-700">Kelas</label>
                            <input type="text" name="kelas" id="kelas" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('kelas', '') }}" />
                            @error('kelas')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="jenis_merek" class="block font-medium text-sm text-gray-700">Jenis Merek</label>
                            <input type="text" name="jenis_merek" id="jenis_merek" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('jenis_merek', '') }}" />
                            @error('jenis_merek')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="status" class="block font-medium text-sm text-gray-700">Status</label>
                            <input type="text" name="status" id="status" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('status', '') }}" />
                            @error('status')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pencipta_1" class="block font-medium text-sm text-gray-700">Pencipta 1<label class="text-red-600">*</label></label>
                            <select type="text" name="pencipta_1" id="pencipta_1" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    value="{{ old('pencipta_1', '') }}">
                                <option value="" disabled selected>Pilih</option>
                                @foreach ($lecturers as $lecturer)
                                    @foreach ($departments as $department)
                                        @if ($lecturer->department_id == $department->id)
                                            <option value="{{ $lecturer->id }}">{{$lecturer->name}} ({{ $department->department }}) ({{ $lecturer->nidn }})</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            </select>
                            @error('pencipta_1')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pencipta_2" class="block font-medium text-sm text-gray-700">Pencipta 2</label>
                            <select type="text" name="pencipta_2" id="pencipta_2" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    value="{{ old('pencipta_2', '') }}">
                                <option value="" disabled selected>Pilih</option>
                                @foreach ($lecturers as $lecturer)
                                    @foreach ($departments as $department)
                                        @if ($lecturer->department_id == $department->id)
                                            <option value="{{ $lecturer->id }}">{{$lecturer->name}} ({{ $department->department }}) ({{ $lecturer->nidn }})</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            </select>
                            @error('pencipta_2')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pencipta_3" class="block font-medium text-sm text-gray-700">Pencipta 3</label>
                            <select type="text" name="pencipta_3" id="pencipta_3" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    value="{{ old('pencipta_3', '') }}">
                                <option value="" disabled selected>Pilih</option>
                                @foreach ($lecturers as $lecturer)
                                    @foreach ($departments as $department)
                                        @if ($lecturer->department_id == $department->id)
                                            <option value="{{ $lecturer->id }}">{{$lecturer->name}} ({{ $department->department }}) ({{ $lecturer->nidn }})</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            </select>
                            @error('pencipta_3')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pencipta_4" class="block font-medium text-sm text-gray-700">Pencipta 4</label>
                            <select type="text" name="pencipta_4" id="pencipta_4" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    value="{{ old('pencipta_4', '') }}">
                                <option value="" disabled selected>Pilih</option>
                                @foreach ($lecturers as $lecturer)
                                    @foreach ($departments as $department)
                                        @if ($lecturer->department_id == $department->id)
                                            <option value="{{ $lecturer->id }}">{{$lecturer->name}} ({{ $department->department }}) ({{ $lecturer->nidn }})</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            </select>
                            @error('pencipta_4')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pencipta_5" class="block font-medium text-sm text-gray-700">Pencipta 5</label>
                            <select type="text" name="pencipta_5" id="pencipta_5" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    value="{{ old('pencipta_5', '') }}">
                                <option value="" disabled selected>Pilih</option>
                                @foreach ($lecturers as $lecturer)
                                    @foreach ($departments as $department)
                                        @if ($lecturer->department_id == $department->id)
                                            <option value="{{ $lecturer->id }}">{{$lecturer->name}} ({{ $department->department }}) ({{ $lecturer->nidn }})</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            </select>
                            @error('pencipta_5')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pencipta_6" class="block font-medium text-sm text-gray-700">Pencipta 6</label>
                            <select type="text" name="pencipta_6" id="pencipta_6" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    value="{{ old('pencipta_6', '') }}">
                                <option value="" disabled selected>Pilih</option>
                                @foreach ($lecturers as $lecturer)
                                    @foreach ($departments as $department)
                                        @if ($lecturer->department_id == $department->id)
                                            <option value="{{ $lecturer->id }}">{{$lecturer->name}} ({{ $department->department }}) ({{ $lecturer->nidn }})</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            </select>
                            @error('pencipta_6')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pencipta_7" class="block font-medium text-sm text-gray-700">Pencipta 7</label>
                            <select type="text" name="pencipta_7" id="pencipta_7" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    value="{{ old('pencipta_7', '') }}">
                                <option value="" disabled selected>Pilih</option>
                                @foreach ($lecturers as $lecturer)
                                    @foreach ($departments as $department)
                                        @if ($lecturer->department_id == $department->id)
                                            <option value="{{ $lecturer->id }}">{{$lecturer->name}} ({{ $department->department }}) ({{ $lecturer->nidn }})</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            </select>
                            @error('pencipta_7')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pencipta_8" class="block font-medium text-sm text-gray-700">Pencipta 8</label>
                            <select type="text" name="pencipta_8" id="pencipta_8" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    value="{{ old('pencipta_8', '') }}">
                                <option value="" disabled selected>Pilih</option>
                                @foreach ($lecturers as $lecturer)
                                    @foreach ($departments as $department)
                                        @if ($lecturer->department_id == $department->id)
                                            <option value="{{ $lecturer->id }}">{{$lecturer->name}} ({{ $department->department }}) ({{ $lecturer->nidn }})</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            </select>
                            @error('pencipta_8')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pencipta_9" class="block font-medium text-sm text-gray-700">Pencipta 9</label>
                            <select type="text" name="pencipta_9" id="pencipta_9" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    value="{{ old('pencipta_9', '') }}">
                                <option value="" disabled selected>Pilih</option>
                                @foreach ($lecturers as $lecturer)
                                    @foreach ($departments as $department)
                                        @if ($lecturer->department_id == $department->id)
                                            <option value="{{ $lecturer->id }}">{{$lecturer->name}} ({{ $department->department }}) ({{ $lecturer->nidn }})</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            </select>
                            @error('pencipta_9')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pencipta_10" class="block font-medium text-sm text-gray-700">Pencipta 10</label>
                            <select type="text" name="pencipta_10" id="pencipta_10" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    value="{{ old('pencipta_10', '') }}">
                                <option value="" disabled selected>Pilih</option>
                                @foreach ($lecturers as $lecturer)
                                    @foreach ($departments as $department)
                                        @if ($lecturer->department_id == $department->id)
                                            <option value="{{ $lecturer->id }}">{{$lecturer->name}} ({{ $department->department }}) ({{ $lecturer->nidn }})</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            </select>
                            @error('pencipta_10')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
