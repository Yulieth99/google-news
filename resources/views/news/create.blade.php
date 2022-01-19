@extends('layouts.app')
@section('main')
<form method="POST" action="{{route('news.store')}}">
    @csrf
  <!--formario noticia -->

    <div class="bg-indigo-50 max-h-fit md:px-20 py-6">
      <div class=" bg-white rounded-md px-6 py-3 max-w-2xl mx-auto">
        <h1 class="text-center text-2xl font-bold text-gray-500 mb-5">Nuevo Titular</h1>
        <div class="space-y-2">
           

            <div>
            <div>
              <label for="key_word" class="text-lx mr-2 ">Palabra clave:</label>
              <input type="text"  id="key_word" name="key_word" class=" outline-none py-2 text-md border rounded-md " />
            </div>
              <div>
            <label for="headline" class="block mb-2 text-lx ">Titular:</label>
            <textarea id="headline" name="headline" cols="30" rows="3" placeholder="escriba aquí.." class="w-full   p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"></textarea>
          </div>
          <div>
            <label for="image" class="text-lx ">Imagen:</label>
            <input type="text"  id="image" name="image" class=" outline-none py-2 text-md border rounded-md w-full" />
          </div>
          <div class="my-2 flex items-center">
            <label for="owner" class="text-lx mr-[3px] ">Sitio web:</label>
            <div class="flex justify-center">
              <div class="mb-3 xl:w-96">
                <select name="owner" class="form-select appearance-none block w-4/5 px-3 py-1.5 text-gray-700 bg-white bg-clip-padding bg-no-repeat border  border-gray-300  rounded-md transition
                  ease-in-out ml-3 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none" >
                
                    <option selected>Seleccione un sitio web</option>
                    @foreach ($webSite as $item)
                    <option value="{{$item->id}}">{{$item->web_site_name}}</option>
                    @endforeach
                    
                </select>
              </div>
            </div>   
        </div>
          <div class="flex items-center">
            <label for="category" class="text-lx ">Categoría:</label>
            <div class="flex justify-center">
                <div class="mb-3 xl:w-96">
                  <select name="category" class="form-select appearance-none block w-4/5 px-3 py-1.5 text-gray-700 bg-white bg-clip-padding bg-no-repeat border  border-gray-300  rounded-md transition
                    ease-in-out ml-3 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none" >
                  
                      <option selected>Seleccione una categoría</option>
                      @foreach ($category as $item)
                      <option value="{{$item->id}}">{{$item->category_name}}</option>
                      @endforeach
                  </select>
                </div>
              </div>          </div>
          <button type="submit" class=" h-8 px-6  mx-auto block rounded-md text-md font-semibold text-gray-500 bg-blue-100  ">Agregar</button>
        </div>
      </div>
    </div>
 
    </form>
@endsection