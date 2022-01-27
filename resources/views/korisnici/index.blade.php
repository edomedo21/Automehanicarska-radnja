<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Korisnici') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1>Korisnici cija su auta trenutno na opravku:</h1>
            @foreach ($korisnici as $korisnik)
            <p class="p-2"> {{ $korisnik->ime}} - {{ $korisnik->email}} - {{$korisnik->username}} </p>
            @endforeach
            
     
    </h1>
            </div>
        </div>
    </div>

    
</x-app-layout>

