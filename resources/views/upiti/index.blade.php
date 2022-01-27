<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Opravak') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding:20px">
            
            
            <p class="fs-4">Auta na opravku korisnika Alema:</p>
            &nbsp;

            <table class="table table-striped">
  <thead class="table-warning">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Naziv</th>
      <th scope="col">Datum proizvodnje</th>
      <th scope="col">Šifra</th>     
    </tr>
  </thead>
  <tbody>
 @foreach ($autalema as $lema)
    <tr>
      <td>{{$lema->id}}</td>
      <td>{{$lema->ime}}</td>
      <td>{{$lema->dat_proiz}}</td>
      <td>{{$lema->sifra}}</td>
    </tr>
    @endforeach
 
  </tbody>
</table>

</hr>

<p class="fs-4">Auta na opravku korisnika Edin:</p>
&nbsp;
<table class="table table-striped">
  <thead class="table-info">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Naziv</th>
      <th scope="col">Datum proizvodnje</th>
      <th scope="col">Šifra</th>     
    </tr>
  </thead>
  <tbody>
 @foreach ($edoauta as $lema)
    <tr>
      <td>{{$lema->id}}</td>
      <td>{{$lema->ime}}</td>
      <td>{{$lema->dat_proiz}}</td>
      <td>{{$lema->sifra}}</td>
    </tr>
    @endforeach
 
  </tbody>
</table>

<p class="fs-4">Auta na opravku korisnika Amel:</p>
&nbsp;
<table class="table table-striped">
  <thead class="table-info">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Naziv</th>
      <th scope="col">Datum proizvodnje</th>
      <th scope="col">Šifra</th>     
    </tr>
  </thead>
  <tbody>
 @foreach ($amelauta as $lema)
    <tr>
      <td>{{$lema->id}}</td>
      <td>{{$lema->ime}}</td>
      <td>{{$lema->dat_proiz}}</td>
      <td>{{$lema->sifra}}</td>
    </tr>
    @endforeach
 
  </tbody>
</table>
<p class="fs-4">Auta kojima su potrebni dijelovi motor:</p>
&nbsp;
                @foreach ($motor as $mot)            
          
            <div class="bg-secondary overflow-hidden shadow-xl sm:rounded-lg bg-opacity-25" style="width:80%;margin:auto;padding:20px">           
            <div class="row">
                <div class="col-8">
                    <p class = "fs-4"><b>Naziv: </b>{{$mot->ime}}</p>
                </div>
                    <div class="col-2">
                    <p class = "fs-4"><b>Šifra: </b>{{$mot->sifra}}</p>
                    </div>
                
               
</div>
</div>
@endforeach
&nbsp;
<p class="fs-4">Auta kojima su potrebni dijelovi motor,a mlađi su od 5 godina:</p>
&nbsp;
                @foreach ($mladost as $mot)            
          
            <div class="bg-secondary overflow-hidden shadow-xl sm:rounded-lg bg-opacity-25" style="width:80%;margin:auto;padding:20px">           
            <div class="row">
                <div class="col-8">
                    <p class = "fs-4"><b>Naziv: </b>{{$mot->ime}}</p>
                </div>
                    <div class="col-2">
                    <p class = "fs-4"><b>Šifra: </b>{{$mot->sifra}}</p>
                    </div>
                
               
</div>
</div>
@endforeach
&nbsp;
<p class="fs-4">Dijelovi koje treba hitno zamijeniti:</p>
&nbsp;
                @foreach ($hitno as $mot)            
          
            <div class="bg-secondary overflow-hidden shadow-xl sm:rounded-lg bg-opacity-25" style="width:80%;margin:auto;padding:20px">           
            <div class="row">
                <div class="col-8">
                    <p class = "fs-4"><b>Naziv: </b>{{$mot->naziv}}</p>
                </div>
                    <div class="col-2">
                    <p class = "fs-4"><b>Cijena: </b>{{$mot->cijena}} KM</p>
                    </div>
                
               
</div>
</div>
@endforeach
            </div>
            
        </div>
    </div>
</x-app-layout>