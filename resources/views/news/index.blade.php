@extends('layouts.app')
@section('main')
<!--Titulares-->
<div class="h-auto">
    <div class="flex justify-between  mt-6 mb-3 h-8 font-semibold  ">
        <span class="	text-xl	">Titulares</span>
        <a
            href="https://news.google.com/topics/CAAqLAgKIiZDQkFTRmdvSUwyMHZNRFZxYUdjU0JtVnpMVFF4T1JvQ1ZWTW9BQVAB?hl=es-419&gl=US&ceid=US%3Aes-419"><span
                class="text-blue-600 text-xs ">Más titulares</span></a>
    </div>
    <a href="https://news.google.com/topics/CAAqBwgKMNDolwsw7ZGvAw?hl=es-419&gl=US&ceid=US%3Aes-419"
        class=" flex items-center justify-between border border-slate-300  px-4  h-14 w-full  rounded-lg">
        <div>
            <span class="text-sm text-blue-600 font-semibold">Noticias sobre el COVID‑19:</span>
            <span class=" text-gray-600">Mira la cobertura más reciente sobre el coronavirus</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>

    </a>

</div>
@foreach ($data as $key => $item)
    
@if ($key != 0)
<div class="flex justify-between  mt-6  h-8 font-semibold  ">
    <span class="	text-lg	">{{$item['category']}}</span>
    <a
        href="https://news.google.com/topics/CAAqLAgKIiZDQkFTRmdvSUwyMHZNRFZxYUdjU0JtVnpMVFF4T1JvQ1ZWTW9BQVAB?hl=es-419&gl=US&ceid=US%3Aes-419"><span
            class="text-blue-600 text-xs ">Más <span>{{$item['category']}}</span> </span></a>
</div>
@endif

<div class=" transition-all- duration-500">
 
    @foreach ( $item['keyWord'] as $key => $news)
        <div class=" mt-2 h-auto  border border-slate-300  p-4  w-full  rounded-lg">
            
    
            @foreach ($news['news'] as $key2 => $headline)
            @if ( $key2 == 0)
            
            <div class="flex  justify-between">
                <div class="mr-4">
                    <a href="">
                        <p class=" hover:underline font-semibold text-xl  text-gray-700" value="{{$headline->id}}">{{$headline->headline}}</p>
                    </a>
                    <div class=" flex items-center text-sm text-gray-500 ">
                        <span>{{$headline->web_site_name}}</span>
                        <span class="mx-4">{{$headline->updated_at }}</span>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                        </button>
                        <button class="mx-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                <img class="w-24 h-24 rounded "
                    src="{{$headline->image }}"
                    alt="">
            </div>
            @endif
            @if ( $key2 !== 0)
                
         
            <div>
                <ul class="w-4/5 ">
                    <li class=" mb-4	">
                        <div class="flex  justify-between">
                            <div class="">
                                <a class="" href="">
                                    <p class="  hover:underline font-semibold text-sm  text-gray-700">{{$headline->headline}}</p>
                                </a>
                                <div class=" flex items-center text-sm text-gray-500 ">
                                    <span>{{$headline->web_site_name}}</span>
                                    <span class="mx-4">{{$headline->updated_at }}</span>
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg>
                                    </button>
                                    <button class="mx-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                    </li>
                   
                   
                </ul>
                
            </div>
            @endif
            @endforeach
            <div class=" flex justify-end">
                <button type="buttton" class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
            </div>
        </div>
        @endforeach

    
</div>

@endforeach


@endsection