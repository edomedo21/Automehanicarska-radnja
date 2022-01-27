<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">             
                <div class="row">
                    <div class="col-5">
                        <img src="Slike/carshop.jpg">
                    </div>
                    <div class="col-7" style="margin-top:20px">
                    Car Shops Limited is authorised and regulated by the Financial Conduct Authority (FCA) for consumer credit activities. Our Firm Registration Number (FRN) is 447727. Car Shops Limited is also an Appointed Representative of Sytner Group Limited, which is authorised and regulated by the FCA for Insurance Mediation Activities, under FRN 310540.
Registered Office: 2 Penman Way, Grove Park, Leicester, LE19 1ST Registered No: 05331512 VAT Registration No: 610 6250 86
<br>
<br>
<br>
<br>
<a href="{{route('auta')}}" type="button" class="btn btn-outline-danger" style="margin: 0;position: absolute;top: 63%;left: 65%;">Auta</a>                  
                    </div>
                    <div class="col-7" style="margin-top:20px;">
                    Car Shops Limited is authorised and regulated by the Financial Conduct Authority (FCA) for consumer credit activities. Our Firm Registration Number (FRN) is 447727. Car Shops Limited is also an Appointed Representative of Sytner Group Limited, which is authorised and regulated by the FCA for Insurance Mediation Activities, under FRN 310540.
Registered Office: 2 Penman Way, Grove Park, Leicester, LE19 1ST Registered No: 05331512 VAT Registration No: 610 6250 86
<br>
<br>
<br>
<br>
<a href="{{route('dijelovi')}}" type="button" class="btn btn-outline-danger" style="margin: 0;position: absolute;top: 118%;left: 25%;">Dijelovi</a>                  
                    </div>
                    <div class="col-5" style="margin-top:20px">
                        <img src="Slike/dijelovi.jpg">
                    </div>
                </div>
            </div>           
            </div>
        </div>
    </div>
</x-app-layout>