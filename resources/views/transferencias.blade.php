<x-slider title="Transferencias">
    <div class="flex justify-end m-4">
      <x-button-layout>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path fill="currentColor" d="M12.75 7a.75.75 0 0 0-1.5 0v4.25H7a.75.75 0 0 0 0 1.5h4.25V17a.75.75 0 0 0 1.5 0v-4.25H17a.75.75 0 0 0 0-1.5h-4.25z"/>
        </svg>
        Nueva transferencia
      </x-button-layout>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 space-x-2 auto-rows-fr mb-8">
      <div class="sm:col-span-2 lg:col-span-2">
        <div class="bg-white rounded-lg shadow-md p-3 m-5 h-full">
          <div class="divide-y divide-gray-300">
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
        <div class="bg-white rounded-md shadow-md h-full">
          <div class="m-5 pt-5">
            <label for="hs-leading-button-add-on-with-icon" class="sr-only">Buscar</label>
            <div class="flex rounded-lg shadow-sm">
              <button type="button" class="w-[2.875rem] h-[2.875rem] shrink-0 inline-flex justify-center items-center text-sm font-semibold rounded-s-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="11" cy="11" r="8"></circle>
                  <path d="m21 21-4.3-4.3"></path>
                </svg>
              </button>
              <input type="text" id="hs-leading-button-add-on-with-icon" name="hs-leading-button-add-on-with-icon" class="py-3 px-4 block w-full border-gray-200 bg-gray-100 shadow-sm rounded-e-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Buscar...">
            </div>
          </div>
          <h2 class="text-gray-700 font-semibold m-5">Contactos guardados</h1>
          <div class="flex items-center justify-between bg-gray-100 text-card-foreground p-4 m-5 rounded-lg shadow-md">
            <div class="flex items-center">
              <div class="h-12 w-12 flex items-center justify-center bg-blue-500 text-primary-foreground rounded-full mr-4">A</div>
              <div>
                <h2 class="text-sm text-gray-700 font-semibold">Mariana G Carrillo</h2>
                <p class="text-sm text-gray-400">5242 4456 2213 4566</p>
              </div>
            </div>
            <button class="bg-destructive text-destructive-foreground px-4 py-2  ">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M7.616 20q-.667 0-1.141-.475T6 18.386V6h-.5q-.213 0-.356-.144T5 5.499t.144-.356T5.5 5H9q0-.31.23-.54t.54-.23h4.46q.31 0 .54.23T15 5h3.5q.213 0 .356.144t.144.357t-.144.356T18.5 6H18v12.385q0 .666-.475 1.14t-1.14.475zM17 6H7v12.385q0 .269.173.442t.443.173h8.769q.269 0 .442-.173t.173-.442zm-6.692 11q.213 0 .357-.144t.143-.356v-8q0-.213-.144-.356T10.307 8t-.356.144t-.143.356v8q0 .213.144.356q.144.144.356.144m3.385 0q.213 0 .356-.144t.143-.356v-8q0-.213-.144-.356Q13.904 8 13.692 8q-.213 0-.357.144t-.143.356v8q0 .213.144.356t.357.144M7 6v13z"/>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </x-slider>
  
