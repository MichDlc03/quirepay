<x-slider title="Pagos y Servicios">
    <div class="p-4">
        <header class="flex flex-col md:flex-row justify-between items-center py-2">
            <h1 class="text-xl font-semibold text-gray-800">Pagar mis servicios</h1>
            <div class="w-full md:w-96 mt-3 md:mt-0">
                <label for="search-service" class="sr-only">Buscar servicio</label>
                <div class="relative flex rounded-full shadow-sm">
                    <input type="text" id="search-service" name="search-service" placeholder="Buscar servicio"
                        class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-l-full text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                        <svg class="shrink-0 w-4 h-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                    </div>
                    <button type="button" class="py-3 px-4 bg-gray-500 text-white font-semibold rounded-r-full hover:bg-gray-600 focus:outline-none">
                        Buscar
                    </button>
                </div>
            </div>
        </header>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 mt-5">
            <button type="button" class="block cursor-pointer" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scale-animation-modal" data-hs-overlay="#hs-scale-animation-modal">
                <div class="bg-white  rounded-lg shadow-md p-5 flex flex-col items-center justify-center w-full aspect-square gap-y-4 transition duration-700 ease-in-out hover:shadow-lg">
                    <img src="{{ Vite::asset('resources/assets/pago-movil.png') }}" alt="logo-card" class="w-20 h-auto object-contain">
                    <p class="text-gray-600 font-medium">Racarga Saldo</p>
                </div>
            </button>
            <x-card-service :name_service="'CFE'" :img_service="Vite::asset('resources/assets/cfe-logo.png')" />
            <x-card-service :name_service="'Izzi'" :img_service="Vite::asset('resources/assets/logo-izzi.png')" />
            <x-card-service :name_service="'Sky'" :img_service="Vite::asset('resources/assets/logo-sky.png')" />
            <x-card-service :name_service="'Movistar'" :img_service="Vite::asset('resources/assets/Movistar-logo.jpg')" />
            <x-card-service :name_service="'AT&T'" :img_service="Vite::asset('resources/assets/AT.png')" />
            <x-card-service :name_service="'TotalPlay'" :img_service="Vite::asset('resources/assets/Logo_TotalPlay.png')" />
            <x-card-service :name_service="'Telcel'" :img_service="Vite::asset('resources/assets/Telcel_logo.png')" />
            <x-card-service :name_service="'Telmex'" :img_service="Vite::asset('resources/assets/telmex-1.svg')" />
        </div>
    </div>
</x-slider>
<div id="hs-scale-animation-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label">
    <div class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
      <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
          <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800 dark:text-white">
            Rarga móvil
          </h3>
          <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-scale-animation-modal">
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
                <select class="py-3 px-4 pe-9 block w-full bg-gray-100 border-transparent text-gray-400
                rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600" required>
                 <option selected="">Compañia</option>
                 <option value="telcel">Telcel</option>
                 <option value="movistar">Movistar</option>
                 <option value="AT§T">AT&T</option>
                 <option value="Bite">Bite</option>
                 <option></option>
               </select>
            </div>
            <div class="m-5 ">
                <select class="py-3 px-4 pe-9 block w-full bg-gray-100 border-transparent text-gray-400
                rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600" required>
                 <option selected="">Saldo</option>
                 <option value="5">5</option>
                 <option value="10">10</option>
                 <option value="20">20</option>
                 <option value="30">30</option>
                 <option value="50">50</option>
                 <option value="60">60</option>
                 <option value="80">80</option>
                 <option value="100">100</option>
                 <option value="150">150</option>
                 <option value="200">200</option>
                 <option value="250">250</option>
                 <option value="500">500</option>
                 <option></option>
               </select>
            </div>
        </div>
        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
            <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-scale-animation-modal">
              Cancelar
            </button>
            <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-quire text-gray-700 hover:bg-yellow-300 focus:outline-none focus:bg-yellow-300 disabled:opacity-50 disabled:pointer-events-none">
              Pagar recarga
            </button>
          </div>
      </div>
    </div>
  </div>

  
