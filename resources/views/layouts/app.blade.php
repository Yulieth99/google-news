<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Google News</title>
</head>

<body>
    <div class="fixed inset-x-0 top-0 shadow-md  z-20">
        <div class="flex  pl-3 pr-6 h-16 justify-between items-center bg-white">
            <div class="flex  justify-between items-center w-9/12">
            <div class="flex items-center md:w-62 ">
                <button id="btn" type="button" class=" pl-2 w-10 h-10 rounded-full hover:bg-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 " fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
                <img class="w-[70px] ml-3 " src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                    alt="">
                <h1 class="text-2xl ml-1 text-gray-500	pb-2 font-medium">Noticias</h1>
            </div>
            <div class="w-8/12 ml-2 mr-6 ">
                <!--search bar-->
                <svg class="text-gray-600 md:hidden ml-20 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                xml:space="preserve" width="512px" height="512px">
                <path
                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                 </svg>
                 <div class=" ml-6 hidden md:block" >
                <div class="flex items-center bg-[#F1F3F4]  h-12   rounded-lg text-gray-500">
                    <button type="submit" class="ml-2 flex items-center rounded-full hover:bg-gray-300 w-10 h-10">
                        <div  class="ml-3">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </div>

                    </button>
                    <input class=" ml-4 w-10/12 text-sm focus:outline-none bg-[#F1F3F4]" type="search" name="search"
                        placeholder="Buscar temas, ubicaciones y fuentes">

                </div>
            </div>
            </div>

            </div>
            <div class="flex items-center ml-4 space-x-4">
                <div>
                    <svg class="text-black h-7 w-7   fill-current" focusable="false" viewBox="0 0 24 24">
                        <path
                            d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z">
                        </path>
                    </svg>
                </div>
                <div>
                    <a href="{{route('news.create')}}">
                    <svg class="text-black h-6 w-6 fill-current" data-icon="plus-circle"
                        class="svg-inline--fa fa-plus-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z">
                        </path>
                    </svg> 
                </a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex">
        <aside id="sideBar" class="h-screen absolute bg-white  lg:sticky top-0 inset-y-0 w-[280px] transform -translate-x-full transition duration-200 ease-in-out
                      lg:relative lg:translate-x-0">
            <div class="  top-[1rem]   pb-10  ">
                <nav class=" lg:text-sm lg:leading-6   ">
                    <div class="">
                        <ul class="pt-20 h-full overflow-auto	  >" style="list-style-type: none">
                            <li>
                                <!--nav bar item 1-->
                                <div class=" ">
                                    <div class="  flex items-center rounded-r-[50px] h-10  mr-2"
                                        style="background-color: #E3EDFD">
                                        <div class=" text-blue-600 ml-7 ">
                                            <a class="flex items-center" href="">
                                                <div class="mr-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <span>Noticias destacadas</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!--nav bar item 2-->
                                <div class="  ">
                                    <div class=" ">
                                        <a href="https://news.google.com/foryou?hl=es-419&gl=US&ceid=US%3Aes-419">
                                        <div      class="flex items-center rounded-r-[50px] text-gray-600 mr-2 hover:text-blue-600  h-10 text-gray-600 mr-2 hover:text-blue-600">
                                            <div class="pl-7 mr-3">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M22.64,11.14l-9.79-9.79c-0.5-0.5-1.27-0.45-1.72,0l-9.78,9.79c-0.66,0.66-0.26,1.45,0,1.72l9.78,9.79 c0.44,0.44,1.21,0.51,1.72,0l9.79-9.79C22.91,12.59,23.29,11.79,22.64,11.14z M13.84,13.84L12,18l-1.84-4.17L6,12l4.16-1.84L12,6 l1.84,4.16L18,12L13.84,13.84z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <span >Para ti</span>
                                            </div>
                                        </div>
                                       </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!--nav bar item 3-->
                                <div class=" ">
                                    <a href="https://news.google.com/my/library?hl=es-419&gl=US&ceid=US%3Aes-419">
                                    <div      class="flex items-center rounded-r-[50px] text-gray-600 mr-2 hover:text-blue-600  h-10 text-gray-600 mr-2 hover:text-blue-600">
                                        <div class="pl-7 mr-3">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                        </div>
                                        <div>
                                            <span >Seguidores</span>
                                        </div>
                                    </div>
                                   </a>
                                </div>
                            </li>
                            <li>
                                <!--nav bar item 4  -->
                                <div class=" ">
                                    <a href="https://news.google.com/my/searches?hl=es-419&gl=US&ceid=US%3Aes-419">
                                    <div      class="flex items-center rounded-r-[50px] text-gray-600 mr-2 hover:text-blue-600  h-10 text-gray-600 mr-2 hover:text-blue-600">
                                        <div class="pl-7 mr-3">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                              </svg>
                                        </div>
                                        <div>
                                            <span >Búsquedas guardadas</span>
                                        </div>
                                    </div>
                                   </a>
                                </div>
                           
                            </li>
                        </ul>
                        <div class=" rounded-r-[50px] mt-4  mr-2   mr-2">
                            <div class=" ml-7 text-gray-600 mr-2 hover:text-blue-600 h-full mr-2 border-t">
                                <a class="flex items-center mt-4" href="https://play.google.com/store/apps/details?id=com.google.android.apps.magazines&referrer=news.google.com?utm_source=web&utm_medium=menu&utm_campaign=side_menu_promotion">
                                    <div class="mr-3">
                                        <span href="https://play.google.com/store/apps/details?id=com.google.android.apps.magazines&referrer=news.google.com?utm_source=web&utm_medium=menu&utm_campaign=side_menu_promotion">Descarga la app para Android</span>

                                    </div>
                                    <div class=" ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>

                                    </div>
                                </a>
                            </div>
                            <div class=" ml-7 text-gray-600 mt-4 mr-2 hover:text-blue-600  mr-2 ">
                                <a class="flex items-center" href="https://itunes.apple.com/US/app/apple-store/id459182288?pt=9008&ct=Web%20Side%20Promotion&mt=8&l=es-419">
                                    <div class="mr-3">
                                        <span href="">Descarga la app para iOS</span>

                                    </div>
                                    <div class=" ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>

                                    </div>
                                </a>
                            </div>
                            <div class=" ml-7 text-gray-600 mt-4 mr-2 hover:text-blue-600  mr-2 ">
                                <a class="flex items-center" href="https://support.google.com/googlenews?p=web&hl=es-419&authuser=0">
                                    <div class="mr-3">
                                        <span href="">Ayuda</span>

                                    </div>
                                    <div class=" ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>

                                    </div>
                                </a>
                            </div>

                        </div>


                </nav>
            </div>
        </aside>

        <main class=" container md:w-8/12   xl:w-7/12  md:mt-20 md:ml-10 px-2 ">
           @yield('main')
            
        </main>
    </div>
    <div class="">
        <div class="w-full  ">

        </div>

    </div>
</body>
<script src="{{asset('js/custom.js')}}" ></script>
</html>