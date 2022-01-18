@extends('layouts.app')
@section('main')
<form method="POST" action="/profile">
    @csrf
  <!--formario noticia -->

    <div class="bg-indigo-50 max-h-fit md:px-20 py-6">
      <div class=" bg-white rounded-md px-6 py-3 max-w-2xl mx-auto">
        <h1 class="text-center text-2xl font-bold text-gray-500 mb-5">Nuevo Titular</h1>
        <div class="space-y-2">
            <div>
                <label for="website" class="text-lx ">Web site:</label>
                <input type="text"  id="website" name="website" class=" outline-none py-2 text-md border rounded-md " />
              </div>
         
          <div>
            <label for="headline" class="block mb-2 text-lg ">Titular:</label>
            <textarea id="headline" name="headline" cols="30" rows="3" placeholder="escriba aquí.." class="w-full   p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"></textarea>
          </div>
          <div>
            <label for="image" class="text-lx ">Imagen:</label>
            <input type="text"  id="image" name="image" class=" outline-none py-2 text-md border rounded-md w-full" />
          </div>
          <div class="flex items-center">
            <label for="category" class="text-lx ">Categoría:</label>
            <div class="flex justify-center">
                <div class="mb-3 xl:w-96">
                  <select class="form-select appearance-none block w-4/5 px-3 py-1.5 text-gray-700 bg-white bg-clip-padding bg-no-repeat border  border-gray-300  rounded-md transition
                    ease-in-out ml-3 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-none" >
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                  </select>
                </div>
              </div>          </div>
          <button class=" h-8 px-6  mx-auto block rounded-md text-md font-semibold text-gray-500 bg-blue-100  ">Agregar</button>
        </div>
      </div>
    </div>
 
    ...
</form>
@endsection