<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Lecturer
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('lecturer.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('lecturer.update', $lecturer->id) }}">
                    @csrf
                    @method('put')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Lecturer Name<label class="text-red-600">*</label></label>
                            <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', $lecturer->name) }}" autofocus/>
                            @error('name')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="nidn" class="block font-medium text-sm text-gray-700">Lecturer NIDN<label class="text-red-600">*</label></label>
                            <input type="number" name="nidn" id="nidn" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('nidn', $lecturer->nidn) }}" />
                            @error('nidn')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="department_id" class="block font-medium text-sm text-gray-700">Department<label class="text-red-600">*</label></label>
                            <select type="text" name="department_id" id="department_id" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                    value="{{ old('department_id', '') }}">
                                @foreach ($departments as $department)
                                    @if ($lecturer->department_id == $department->id) {
                                    <option value="{{ $department->id }}" selected>{{$department->department}}</option>
                                    }
                                    @else{
                                    <option value="{{ $department->id }}">{{$department->department}}</option>
                                    }
                                    @endif
                                @endforeach
                            </select>
                            @error('department_id')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
