<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Auta') }}
        </h2>
    </x-slot>
<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
        <div class="p-2">
                @foreach ($auta as $aut)
                <form method="POST" action="{{ route('update_auto')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$aut->id}}"/>
                    <div>
                        <x-jet-label for="ime" value="{{ __('Naziv') }}" />
                        <x-jet-input id="ime" class="block mt-1 w-full" type="text" name="ime" value="{{$aut->ime}}" required autofocus />    
                    </div>
                    <div class="mt-4">
                    <x-jet-label for="dat_proiz" value="{{ __('Datum proizvodnje') }}" />
                    <x-jet-input id="dat_proiz" class="block mt-1 w-full" type="date" name="dat_proiz" value="{{$aut->dat_proiz}}" required autofocus />
                    </div>
                    <div class="mt-4">
                    <x-jet-label for="sifra" value="{{ __('Sifra') }}" />
                    <x-jet-input id="sifra" class="block mt-1 w-full" type="number" name="sifra" value="{{$aut->sifra}}" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="id_dijelovi" value="{{ __('ID Dio') }}" />
                        <select id="id_dijelovi" name="id_dijelovi" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus_ring-opacity-50 rounded-md shadow-sm">
                            <option selected="true" disabled="disabled">Odaberi</option>
                            @foreach($dijelovi as $dio)
                            <option value="{{$dio->id_dijelovi}}">{{$dio->naziv}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-4">
                    <x-jet-label for="id_korisnik" value="{{ __('ID Korisnik') }}" />
                    <select id="id_korisnik" name="id_korisnik" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus_ring-opacity-50 rounded-md shadow-sm">
                        <option selected="true" disabled="disabled">Odaberi</option>
                        @foreach($korisnici as $korisnik)
                        <option value="{{$korisnik->id_korisnik}}">{{$korisnik->ime}}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="ml-4">
                            {{ __('Spremi')}}
                        </x-jet-button>
                    </div>

                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
</x-app-layout>