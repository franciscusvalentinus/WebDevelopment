<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <?php
        $users = DB::table('role_user')->where('user_id', '=', Auth::id())->get();
        foreach ($users as $u)
        {
            $role = $u->role_id ;
        }
        ?>

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        @if($role == 1)
        <!-- NIDN -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="nidn" value="{{ __('NIDN') }}" />
                <x-jet-input id="nidn" type="text" class="mt-1 block w-full" wire:model.defer="state.nidn" autocomplete="nidn" />
                <x-jet-input-error for="nidn" class="mt-2" />
            </div>
        @endif

        @if($role == 1)
        <!-- NIP -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="nip" value="{{ __('NIP') }}" />
                <x-jet-input id="nip" type="text" class="mt-1 block w-full" wire:model.defer="state.nip" autocomplete="nip" />
                <x-jet-input-error for="nip" class="mt-2" />
            </div>
        @endif

        @if($role == 2)
        <!-- NIM -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="nim" value="{{ __('NIM') }}" />
            <x-jet-input id="nim" type="text" class="mt-1 block w-full" wire:model.defer="state.nim" autocomplete="nim" />
            <x-jet-input-error for="nim" class="mt-2" />
        </div>
        @endif

        <!-- Gender -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="gender" value="{{ __('Gender') }}" />
            <x-jet-input id="gender" type="text" class="mt-1 block w-full" wire:model.defer="state.gender" autocomplete="gender" />
            <x-jet-input-error for="gender" class="mt-2" />
        </div>

        <!-- Line Account -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="line_account" value="{{ __('Line ID') }}" />
            <x-jet-input id="line_account" type="text" class="mt-1 block w-full" wire:model.defer="state.line_account" autocomplete="line_account" />
            <x-jet-input-error for="line_account" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="phone" value="{{ __('Phone Number') }}" />
            <x-jet-input id="phone" type="text" class="mt-1 block w-full" wire:model.defer="state.phone" autocomplete="phone" />
            <x-jet-input-error for="phone" class="mt-2" />
        </div>

        @if($role == 2)
        <!-- Batch -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="batch" value="{{ __('Batch') }}" />
            <x-jet-input id="batch" type="text" class="mt-1 block w-full" wire:model.defer="state.batch" autocomplete="batch" />
            <x-jet-input-error for="batch" class="mt-2" />
        </div>
        @endif

        <!-- Description -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="description" value="{{ __('Description') }}" />
            <x-jet-input id="description" type="text" class="mt-1 block w-full" wire:model.defer="state.description" autocomplete="description" />
            <x-jet-input-error for="description" class="mt-2" />
        </div>

        @if($role == 1)
        <!-- Position -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="position" value="{{ __('Position') }}" />
            <x-jet-input id="position" type="text" class="mt-1 block w-full" wire:model.defer="state.position" autocomplete="position" />
            <x-jet-input-error for="position" class="mt-2" />
        </div>
        @endif

        @if($role == 1)
        <!-- Jaka -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="jaka" value="{{ __('Jaka') }}" />
            <x-jet-input id="jaka" type="text" class="mt-1 block w-full" wire:model.defer="state.jaka" autocomplete="jaka" />
            <x-jet-input-error for="jaka" class="mt-2" />
        </div>
        @endif
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
