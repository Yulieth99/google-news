@extends('layouts.app')
@section('main')
    <!--Titulares-->
    <div class="h-auto">
        <div class="flex justify-between  h-8  ">
            <span>Titulares</span>
            <span>Más titulares</span>
        </div>
        <div class=" flex items-center justify-between border border-slate-300  px-4  h-14 w-full  rounded-lg">
            <div>
                <span>Noticias sobre el COVID‑19:</span>
                <span>Mira la cobertura más reciente sobre el coronavirus</span>
            </div>
            <div>
                <span>incono</span>
            </div>

        </div>

    </div>
    <div>
        <div class=" mt-4 h-auto  border border-slate-300  p-4  w-full  rounded-lg">
            <div class="flex  justify-between">
                <div class="">
                    <a href=""><p class=" hover:underline">Carreteras heladas, árboles caídos y accidentes de autos: las imágenes que deja la fuerte
                        nevada</p></a>
                    <div>
                        <span>Univision notiica</span>
                        <span>Hace 10 horas</span>
                    </div>
                </div>
                <img class="w-24 h-24 rounded"
                    src="https://ichef.bbci.co.uk/news/640/cpsprodpb/12A2C/production/_115523367_80bb2ebf-8c1a-4b72-97ec-2c61e51fa854.jpg"
                    alt="">
            </div>
            <div>
                <ul>
                    <li>FC. Barcelona</li>
                    <li>Real Madrid</li>
                    <li>Real Betis</li>
                    <li>Atlético de Madrid</li>
                </ul>
            </div>
        </div>
    </div>
@endsection