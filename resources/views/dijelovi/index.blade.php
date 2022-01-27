<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dijelovi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding:20px">
            <p class="fs-4">Dijelovi koji su trenutno na stanju: <a style="float:right; padding-right:5px" href="\dodaj_dio" class="btn btn-primary">Dodaj Dio</a></p>
            &nbsp;
            
            
     
            <table class="table table-dark table-striped">
  <thead class="table-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Naziv</th>
      <th scope="col">Cijena</th>
      <th scope="col">Sifra</th>
     
      
    </tr>
  </thead>
  <tbody>
  @foreach ($dijelovi as $dio)
    <tr>
      <th scope="row">{{$dio->id_dijelovi}}</th>
      <td><b>{{$dio->naziv}}</b></td>
      <td>{{$dio->cijena}} <b style="color:#F91106">KM</b></td>
      <td style="color:#9906F9">{{$dio->sifra}}</td>
    </tr>
    
    @endforeach
  </tbody>
</table>
&nbsp;

<p class="fs-4">Povoljni dijelovi</p>
&nbsp;
                @foreach ($jefDio as $jef)            
          
            <div class="bg-secondary overflow-hidden shadow-xl sm:rounded-lg bg-opacity-25" style="width:80%;margin:auto;padding:20px">           
            <div class="row">
                <div class="col-8">
                    <p class = "fs-4">{{$jef->naziv}}</p>
                </div>
                    <div class="col-2">
                    <p class = "fs-4">{{$jef->cijena}}<b> KM</b></p>
                    </div>
                
               
</div>
</div>
@endforeach
            </div>
            
        </div>
    </div>
</x-app-layout>