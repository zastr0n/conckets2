<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('users.update') }}">
                        @csrf

                        <input type="hidden" name="id" value="{{$data->id}}">
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$data->name}}" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" readonly class="block mt-1 w-full" type="email" name="email" value="{{$data->email}}" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Alamat -->
                        <div class="mt-4">
                            <x-input-label for="alamat" :value="__('Alamat')" />

                            <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" value="{{$data->alamat}}" required />

                            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                        </div>

                        <!-- Alamat -->
                        <div class="mt-4">
                            <x-input-label for="no_telp" :value="__('No Telepon')" />

                            <x-text-input id="no_telp" class="block mt-1 w-full" type="text" name="no_telp" required value="{{$data->no_telp}}" />

                            <x-input-error :messages="$errors->get('no_telp')" class="mt-2" />
                        </div>
                        <!-- tgl_lahir -->
                        <div class="mt-4">
                            <x-input-label for="tgl_lahir" :value="__('Tanggal Lahir')" />

                            <x-text-input id="tgl_lahir" class="block mt-1 w-full" type="date" name="tgl_lahir" required value="{{$data->tgl_lahir}}" />

                            <x-input-error :messages="$errors->get('tgl_lahir')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <a href="{{route('users')}}" class="bg-transparent hover:bg-blue-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-black-500 hover:border-transparent rounded"> Back</a>
                            <x-primary-button class="ms-4">
                                {{ __('Edit') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>