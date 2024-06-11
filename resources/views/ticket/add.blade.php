<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Ticket') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('tickets.create') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Harga -->
                        <div class="mt-4">
                            <x-input-label for="harga" :value="__('Harga')" />
                            <x-text-input id="harga" class="block mt-1 w-full" type="text" name="harga" :value="old('harga')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('harga')" class="mt-2" />
                        </div>

                        <!-- Jumlah -->
                        <div class="mt-4">
                            <x-input-label for="jumlah" :value="__('Jumlah')" />

                            <x-text-input id="jumlah" class="block mt-1 w-full" type="number" name="jumlah" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('jumlah')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <a href="{{route('tickets')}}" class="bg-transparent hover:bg-blue-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-black-500 hover:border-transparent rounded"> Back</a>
                            <x-primary-button class="ms-4">
                                {{ __('Create') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>