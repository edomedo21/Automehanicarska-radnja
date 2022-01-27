<!DOCtype html>
<head>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Auta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
           
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding:20px">

            <p class="fs-4">Auta koja su trenutno na stanju: <a style="float:right; padding-right:5px" href="\dodaj_auto" class="btn btn-primary">Dodaj Auto</a></p>
            &nbsp;
<hr>
&nbsp;


<table class="table">
  <thead class="table-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Naziv</th>
      <th scope="col">Datum Proizvodnje</th>
      <th scope="col">Šifra</th>
      <th colspan="2" style="text-align:center">Uređivanje</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($auta as $aut)
    <tr>
      <th scope="row">{{$aut->id}}</th>
      <td><b>{{$aut->ime}}</b></td>
      <td>{{$aut->dat_proiz}}</td>
      <td>{{$aut->sifra}}</td>
      <td><form method="POST" action="{{ route('obrisi_auto') }}">
                @csrf
                <input type="hidden" name="id" value="{{$aut->id}}">
                    <button class="btn btn-danger">
                      
                    {{__('Obrisi')}}
                    
                </button></td>
                </form>
               <td>
          <form method="POST" action="{{ route('uredi_auto') }}">
                @csrf
                <input type="hidden" name="id" value="{{$aut->id}}">
                    <button class="btn btn-primary">
                    {{__('Uredi')}}
</button>
</td></form>
    </tr>
    
    @endforeach
  </tbody>
</table>
&nbsp;
<p class="fs-4">Izgled Auta</p>
<hr>
&nbsp;
@foreach($auta as $aut)
<div class="bg-secondary overflow-hidden shadow-xl sm:rounded-lg bg-opacity-25" style="width:80%;margin:auto;">           
            <div class="row">
              
              @if($aut->id == 1)
                <div class="col-5">
                    <img src="Slike/bmwm5.jfif" width="305px" height="305px">
                </div>
               @endif
               @if($aut->id == 2)
                <div class="col-5">
                    <img src="Slike/opelastra.png" width="305px" height="305px">
                </div>
               @endif
               @if($aut->id == 3)
                <div class="col-5">
                    <img src="Slike/golf1.png" width="305px" height="305px">
                </div>
               @endif
               @if($aut->id == 4)
                <div class="col-5">
                    <img src="Slike/gol2.jfif" width="305px" height="305px">
                </div>
               @endif
               @if($aut->id == 5)
                <div class="col-5">
                    <img src="Slike/mercedes.jpg" width="305px" height="305px">
                </div>
               @endif
               @if($aut->id == 6)
                <div class="col-5">
                    <img src="Slike/audi.jfif" width="305px" height="305px">
                </div>
               @endif
                <div class="col-7" style="padding:20px">
                <p class="fs-5" style="font-family: 'Tondo';"><b>{{$aut->ime}}</b></b></p> 
                <p class="fs-8" style="font-family: 'Tondo';"><b>{{$aut->dat_proiz}}</b></b></p>
                &nbsp;
                <p class="fs-3" style="font-family: 'Times New Roman'; color:red;"><b>NA OPRAVKU</b></b></p>  
                </div>
            </div>
            
</div>
&nbsp;
@endforeach
</div>

        </div>
        
    </div>
  
</x-app-layout>

