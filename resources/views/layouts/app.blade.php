<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="fixed inset-x-0 top-0 shadow-md  z-20">
        <div class="flex px-6 h-16 justify-between items-center bg-white">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <img class="w-[70px] " src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="">
                <h1 class="text-2xl ml-1 text-gray-500	pb-2 font-medium">Noticias</h1>
            </div>
            <div class="w-6/12">
                <!--search bar-->
                <div class="flex items-center bg-gray-200  h-12 w-full  rounded-lg text-gray-500">
                    <div class="ml-2 flex items-center rounded-full hover:bg-gray-300 w-10 h-10">
                        <button type="submit" class="ml-3">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>

                    </div>
                    <input class=" ml-4 w-10/12 text-sm focus:outline-none bg-gray-200" type="search" name="search"
                        placeholder="Buscar temas, ubicaciones y fuentes">

                </div>
            </div>
            <div class="flex items-center space-x-4">
                <div>
                    <svg class="text-black h-7 w-7   fill-current" focusable="false" viewBox="0 0 24 24">
                        <path
                            d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z">
                        </path>
                    </svg>
                </div>
                <div>
                    <svg class="text-black h-6 w-6 fill-current" data-icon="plus-circle"
                        class="svg-inline--fa fa-plus-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z">
                        </path>
                    </svg> </div>
            </div>
        </div>
    </div>
    <div class="flex">
        <aside class="h-screen fixed sticky top-0  w-[280px]">
            <div class="  top-[1rem]   pb-10  ">
                <nav class=" lg:text-sm lg:leading-6   ">
                    <div class="">
                        <div class=" pt-20 h-full overflow-auto	  ml-0.5 ">
                            <div class=" ">
                                <div class="flex items-center rounded-r-[50px] h-10 text-blue-600 mr-2" style="background-color: #E3EDFD">
                                    <div class="pl-7">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                        </svg>
                                    </div>
                                    <div>
                                        <span>Algo importante</span>
                                    </div>

                                </div>

                           
                         
                           
                          
                          
                        </div>
                </nav>
            </div>
        </aside>

        <main class="w-3/5  mt-28 ml-10" >
            <!--Titulares-->
            <div>
                <div class="flex justify-between  h-8  ">
                    <span>Titulares</span>
                    <span>Más titulares</span>
                </div>
                <div class=" flex items-center justify-between border border-slate-300  px-4  h-14 w-full  rounded-lg">
                    <div >
                        <span>Noticias sobre el COVID‑19:</span>
                        <span>Mira la cobertura más reciente sobre el coronavirus</span>
                    </div>
                    <div>
                        <span>incono</span>
                    </div>                  
                     
                </div>

            </div>
            <div>
                <div class=" mt-4 h-auto  border border-slate-300  px-4  h-14 w-full  rounded-lg">
                  <div class="flex items-center justify-between">
                    <div>
                        <p>Carreteras heladas, árboles caídos y accidentes de autos: las imágenes que deja la fuerte nevada</p>
                        <div>
                            <span>Univision notiica</span>
                            <span>Hace 10 horas</span>
                        </div>
                    </div>
                    <img class="w-8 h-8" src="https://ichef.bbci.co.uk/news/640/cpsprodpb/12A2C/production/_115523367_80bb2ebf-8c1a-4b72-97ec-2c61e51fa854.jpg" alt="">
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
        </main>
    </div>
    <div class="">
        <div class="w-full  ">

        </div>

    </div>
</body>

</html>