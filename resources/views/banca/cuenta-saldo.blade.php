<x-slider title="Cuenta ">
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 p-5 mb-8">
       <x-card-tarjetas 
       :name_bank="'Nu México'"
       :tipo_bank="'Master Card'"
       :logo_bank="Vite::asset('resources/assets/masteecard.png')"
       :number_accout="'4252 9343 2345 4322'"
       :saldo="'$500.00'"
        :detalles_url="'/detalle/card'"
       />
       <x-card-tarjetas 
       :name_bank="'BBVA México'"
       :tipo_bank="'Visa'"
       :logo_bank="Vite::asset('resources/assets/visa.jpg')"
       :number_accout="'4252 3243 1342 5678'"
       :saldo="'$500.00'"
        :detalles_url="'/detalle/card'"
       />
       <x-card-tarjetas 
       :name_bank="'America Express'"
       :tipo_bank="'AMEX'"
       :logo_bank="Vite::asset('resources/assets/amex.png')"
       :number_accout="'5242 5536 4542 6687'"
       :saldo="'$500.00'"
        :detalles_url="'/detalle/card'"
       />
       <div class="bg-white font-medium rounded-lg shadow-md p-4 flex items-center justify-center min-h-[230px]">
            <button class="flex items-center px-6 py-3 rounded-full bg-quire text-gray-700 hover:bg-yellow-300 text-l" data-hs-overlay="#hs-scale-animation-modal">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12.75 7a.75.75 0 0 0-1.5 0v4.25H7a.75.75 0 0 0 0 1.5h4.25V17a.75.75 0 0 0 1.5 0v-4.25H17a.75.75 0 0 0 0-1.5h-4.25z"/>
                </svg>
                Agregar tarjeta
            </button>
        </div>
    
    </div>
    
   
</x-slider>
<div id="hs-scale-animation-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label">
    <div class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
      <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
          <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800 dark:text-white">
            Agregar nueva tarjeta
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
          <p class="mt-1 text-gray-800 dark:text-neutral-400">
            <div class="m-5">
                    <input type="text" id="input-label" class="py-3 px-4 block w-full border-gray-200 bg-gray-100 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Nombre de la tarjeta">
            </div>
            <div class="m-5">
                    <div class="relative">
                      <input type="text" id="hs-trailing-icon" name="hs-trailing-icon" class="py-3 px-4 pe-11 block w-full bg-gray-100  border-gray-200 shadow-sm rounded-full text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="xxxx-xxxx-xxxx-xxxx">
                      <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none z-20 pe-4">
                        <svg class="shrink-0 size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                          <line x1="2" x2="22" y1="10" y2="10"></line>
                        </svg>
                      </div>
                    </div>
            </div>
            <div class="m-5 flex ">
                <div class="relative mr-2">
                    <input type="text" id="expiration_date" name="expiration_date" class="peer py-3 px-4 ps-11 block w-full bg-gray-100 border-transparent rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="MM/AA" maxlength="5">
                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 30 30" stroke-width="1.5" stroke="#9ba3af" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                          </svg>
                    </div>
                </div>
                <div class="relative">
                    <input type="text" id="cvv" name="cvv" class="py-3 px-4 block w-full border-gray-200 bg-gray-100 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="CVV" required maxlength="3">
                    
                </div>
            </div>
            <div class="m-5">
                <input type="text" name="rfc" class="py-3 px-4 block w-full border-gray-200 bg-gray-100 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="RFC" >
            </div>
            <div class="m-5">
                <input type="text" name="direccion" class="py-3 px-4 block w-full border-gray-200 bg-gray-100 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Dirección" required>
            </div>
            </p>
        </div>
        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
          <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-scale-animation-modal">
            Cancelar
          </button>
          <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-quire text-gray-700 hover:bg-yellow-300 focus:outline-none focus:bg-yellow-300 disabled:opacity-50 disabled:pointer-events-none">
            Guardar cambios
          </button>
        </div>
      </div>
    </div>
  </div>


