<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
   
<form action="{{ route('busroutes.store') }}" method="POST" class="w-full max-w-lg">
    @csrf
  
            <div class="w-full md:w-1/2 px-3"">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        FROM
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none 
      focus:bg-white focus:border-gray-500"  id="grid-first-name" name= "busroute1" type="text" placeholder="Starting Point">
            </div>
        

        <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        TO
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none 
      focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" name="busroute2" placeholder="Ending Point">
    </div>
        
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Description
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none 
      focus:bg-white focus:border-gray-500"  id="grid-first-name" type="text" placeholder="Jane">
    </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <div class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    PRICE:
                    <input type="number" name="price" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none 
      focus:bg-white focus:border-gray-500"  id="grid-first-name" type="text" placeholder="0.00">
                </div>
                <input type="time" id="time" name="time"
                min="05:00" max="19:00" required>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </div>
        
    </div>
   
</form>

            </div>
        
        </div>
    </div>
</x-app-layout>
