<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dijelovi') }}
        </h2>
    </x-slot>
<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
            <div class="p-2">
                <form method="POST" action="{{ route('spremi_dio')}}">
                    @csrf
                    <div>
                        <x-jet-label for="naziv" value="{{ __('Naziv') }}" />
                        <x-jet-input id="naziv" class="block mt-1 w-full" type="text" name="naziv" :value="old('naziv')" required autofocus />    
                    </div>
                    <div class="mt-4">
                    <x-jet-label for="id_auto" value="{{ __('ID auta') }}" />
                    <x-jet-input id="id_auto" class="block mt-1 w-full" type="number" name="id_auto" :value="old('id_auto')" required autofocus />
                    </div>
                    <div class="mt-4">
                    <x-jet-label for="sifra" value="{{ __('Sifra') }}" />
                    <x-jet-input id="sifra" class="block mt-1 w-full" type="number" name="sifra" :value="old('sifra')" required autofocus />
                    </div>
                    <div class="mt-4">
                    <x-jet-label for="cijena" value="{{ __('Cijena') }}" />
                    <x-jet-input id="cijena" class="block mt-1 w-full" type="number" name="cijena" :value="old('cijena')" required autofocus />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="ml-4">
                            {{ __('Spremi')}}
                        </x-jet-button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>