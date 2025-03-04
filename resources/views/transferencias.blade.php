<x-slider title="Transferencias">
    <div class="flex justify-end m-2">
      <button type="button" class="py-3 px-4  inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-quire text-gray-700 hover:bg-yellow-300 focus:outline-none focus:bg-yellow-300 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-basic-modal" data-hs-overlay="#hs-basic-modal">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path fill="currentColor" d="M12.75 7a.75.75 0 0 0-1.5 0v4.25H7a.75.75 0 0 0 0 1.5h4.25V17a.75.75 0 0 0 1.5 0v-4.25H17a.75.75 0 0 0 0-1.5h-4.25z"/>
        </svg> 
        Nueva transferencia
      </button>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 m-3 auto-rows-fr mb-8 ">
      <div class="sm:col-span-2 lg:col-span-2">
        <div class="bg-white rounded-lg shadow-md p-4  h-full">
          <div class="">
            <x-card-trans></x-card-trans>
            <x-card-trans></x-card-trans>
            <x-card-trans></x-card-trans>
          </div>
          <div class="flex justify-center mt-5 space-x-1 mb-5">
            <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-full hover:bg-yellow-100">Anterior</button>
            <button class="px-3 py-1 text-white bg-quire rounded-full hover:bg-yellow-300">1</button>
            <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-full hover:bg-yellow-100">2</button>
            <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-full hover:bg-yellow-100">3</button>
            <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-full hover:bg-yellow-100">Siguiente</button>
          </div>
        </div>
      </div>
      <div class="sm:col-span-2 lg:col-span-1">
        
        <div class="bg-white rounded-md shadow-md h-full ">
          <h2 class="text-gray-700 font-semibold p-5 mt-3">Contactos guardados</h1>


          <div class="ml-5 mr-5">
            <label for="hs-trailing-button-add-on-with-icon" class="sr-only">Label</label>
            <div class="flex rounded-full shadow-sm">
              <input type="text" id="hs-trailing-button-add-on-with-icon" name="hs-trailing-button-add-on-with-icon" class="py-3 px-4 block w-full border-gray-300 bg-gray-100 shadow-md rounded-l-full text-sm focus:z-10 focus:border-yellow-300 focus:ring-yellow-300 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Buscar contacto">
              <button type="button" class="w-[2.875rem] h-[2.875rem] shrink-0 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-r-full border border-transparent bg-gray-500 text-white hover:bg-gray-600 focus:outline-none focus:bg-gray-600 disabled:opacity-50 disabled:pointer-events-none">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="11" cy="11" r="8"></circle>
                  <path d="m21 21-4.3-4.3"></path>
                </svg>
              </button>
            </div>
          </div>
            <x-card-contactos
            :name_user="'Carolina G Lopez'"
            :number_account="'4254 3454 2043 2244'"
            />
            <x-card-contactos
            :name_user="'Luis Fernandez C Chool'"
            :number_account="'4252 4553 1043 2154'"
            />
        </div>
      </div>
    </div>
   
  </x-slider>
  
  <div id="hs-basic-modal" class="hs-overlay hs-overlay-open:opacity-100 hs-overlay-open:duration-500 hidden size-full fixed top-0 start-0 z-[80] opacity-0 overflow-x-hidden transition-all overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-basic-modal-label">
    <div class="sm:max-w-lg sm:w-full m-3 sm:mx-auto">
      <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
          <h3 id="hs-basic-modal-label" class="font-bold text-gray-800 dark:text-white">
            Nueva tranferencia
          </h3>
          <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-basic-modal">
            <span class="sr-only">Close</span>
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <div class="p-4 overflow-y-auto">
          <div class="m-5">
            <select class="py-3 px-4 pe-9 block w-full bg-gray-100 border-transparent text-gray-400
             rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600" required>
              <option selected="">Cuenta de origen</option>
              <option>Nú México **4555</option>
              <option>BBVA **5243</option>
            </select>
          </div>
          <div class="m-5">
            <label for="input-label" class="block text-sm text-gray-600 font-medium mb-2 dark:text-white">Numero de cuenta o CLABE Interbancaria o Tarjeta</label>
            <div class="relative">
              <input type="text" id="hs-trailing-icon" name="hs-trailing-icon" class="py-3 px-4 pe-11 block w-full bg-gray-100  border-gray-200 shadow-sm rounded-full text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="xxxx-xxxx-xxxx-xxxx" required>
              <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none z-20 pe-4">
                <svg class="shrink-0 size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                  <line x1="2" x2="22" y1="10" y2="10"></line>
                </svg>
              </div>
            </div>
          </div>
          <div class="m-5">
            <input type="text" id="input-label" class="py-3 px-4 block w-full border-gray-200 bg-gray-100 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Nombre del beneficiario" required>
          </div>
          <div class="m-5">
            <select class="py-3 px-4 pe-9 block w-full bg-gray-100 text-gray-400 border-transparent rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600" required>
              <option selected="">Banco</option>
              <option>América Express</option>
              <option>Bancomer BBVA</option>
              <option>HBC</option>
              <option>Nú México</option>
            </select>
          </div>
          <div class="m-5">
            <label for="input-label" class="block text-sm text-gray-600 font-medium mb-2 dark:text-white">Monto</label>
            <input type="text" id="input-label" class="py-3 px-4 block w-full border-gray-200 bg-gray-100 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="$00.00" required>
          </div>
          <div class="m-5">
            <input type="text" id="input-label" class="py-3 px-4 block w-full border-gray-200 bg-gray-100 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Concepto" required>
          </div>
          <div class="m-5 ">
            <div class="flex justify-end items-center">
              <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-default-checkbox">
              <label for="hs-default-checkbox" class="text-sm text-gray-600 ms-3 font-medium dark:text-neutral-400">Guardar contacto</label>
            </div>
          </div>
        </div>
        
        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
          <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-basic-modal">
            Cancelar
          </button>
          <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-quire text-gray-700 hover:bg-yellow-300 focus:outline-none focus:bg-yellow-300 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scale-animation-modal" data-hs-overlay="#hs-scale-animation-modal">
            Realizar transferencia
          </button>
        </div>
      </div>
    </div>
    
  </div>
  <div id="hs-scale-animation-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label">
    <div class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
      <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
          <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800 dark:text-white">
            Ticket de transferencia
          </h3>
          <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-scale-animation-modal">
            <span class="sr-only">Close</span>
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <div class="p-4 overflow-y-auto ">
          <div class="flex justify-center items-center my-10">
            <div class="text-center">
              <img src="{{ Vite::asset('resources/assets/comprobado.png') }}" alt="exito" class="w-10 mx-auto">
              <p class="text-gray-700 text-xl font-medium">¡Pago exitoso!</p>
              <p class="text-blue-600 text-lg font-medium mt-5">Transferencia</p>
            </div>
          </div>
          <div class="flex justify-center items-center space-x-10 my-10">
              <div class="p-4 text-center"> 
                <p class="text-gray-600">Desde</p>
                <img src="{{ Vite::asset('resources/assets/tarjeta-de-credito.png') }}" alt="exito" class="w-10 mx-auto">
                <p class="text-gray-700 font-semibold">Cuenta Bancaria</p>
                <p class="text-gray-400 text-sm font-semibold">5245 4322 ****</p>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16"><path fill="text-gray-400" d="M3.854 5.146a.5.5 0 0 1 0 .708L2.707 7H6.5a.5.5 0 0 1 0 1H2.707l1.147 1.146a.5.5 0 1 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2a.5.5 0 0 1 .708 0m8.292 0a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L13.293 8H9.5a.5.5 0 0 1 0-1h3.793l-1.147-1.146a.5.5 0 0 1 0-.708"/></svg>
              <div class="p-4 text-center" >
                <p class="text-gray-600">Para</p>
                <img src="{{ Vite::asset('resources/assets/tarjeta-credito.png') }}" alt="exito" class="w-10 mx-auto">
                <p class="text-gray-700 font-semibold">Cuenta tercero</p>
                <p class="text-gray-400 text-sm font-semibold">4455 3312 ****</p>
              </div>
          </div>
          <div class="p-4 mb-10">
            <div class="flex justify-between mb-2">
              <span class="text-gray-500 font-medium text-sm">Número de folio:</span>
              <p class="text-gray-500 text-sm font-normal">19348932</p>
            </div>
            <div class="flex justify-between">
              <span class="text-gray-500 font-medium text-sm">Fecha:</span>
              <p class="text-gray-500 text-sm font-normal">12 enero 2025, 13:32:00</p>
            </div>
          </div>
          
          <div class="text-center my-5">
            <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" >
              Descargar copia
            </button>
          </div>
        </div>
        
      </div>
    </div>
  </div>