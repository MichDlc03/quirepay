<x-slider>
  <div class="grid grid-cols-1 sm:grid-cols-2  p-5 lg:mt-4 sm:p-2 lg:grid-cols-3 gap-4 space-x-0 overflow-auto ">
    <div class="sm:col-span-2">
        <div class="bg-white p-6 rounded-xl mb-8 shadow-lg border-l-4 border-accent">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Resumen de tu cuenta</h2>
            <div class="flex flex-wrap justify-center sm:justify-end items-center gap-x-4 mb-3 sm:mb-6">
                <div class="inline-flex items-center">
                    <span class="size-2.5 inline-block bg-blue-600 rounded-sm me-2"></span>
                    <span class="text-[13px] text-gray-800 dark:text-neutral-400">Ingresos</span>
                </div>
                <div class="inline-flex items-center">
                    <span class="size-2.5 inline-block bg-cyan-500 rounded-sm me-2"></span>
                    <span class="text-[13px] text-gray-800 dark:text-neutral-400">Gastos</span>
                </div>
                <div class="inline-flex items-center">
                    <span class="size-2.5 inline-block bg-gray-300 rounded-sm me-2 dark:bg-neutral-600"></span>
                    <span class="text-[13px] text-gray-800 dark:text-neutral-400">Otros</span>
                </div>
            </div>
            <div id="hs-multiple-line-charts"></div>
        </div>
       <x-content-movimientos />
    </div>
    <div class="bg-white rounded-lg shadow-md p-5">
        <div class="w-full h-56 bg-red-100 rounded-lg relative text-white shadow-lg">
            <img class="relative object-cover w-full h-full rounded-xl" src="https://i.imgur.com/Zi6v09P.png">
            <div class="w-full px-8 absolute top-8">
                <div class="flex justify-between">
                    <div>
                        <p class="font-light md:text-sm">Nombre del titular</p>
                        <p class="font-medium tracking-widest md:text-sm">Jonas Abarca Ponce</p>
                    </div>
                    <img class="w-14 h-14" src="https://i.imgur.com/bbPHJVe.png"/>
                </div>
                <div class="pt-1">
                    <p class="font-light md:text-sm">Número de tarjeta</p>
                    <p class="font-medium tracking-more-wider md:text-sm">4642  3489  9867  7632</p>
                </div>
                <div class="pt-6 pr-6">
                    <div class="flex justify-between md:space-x-2">
                        <div>
                            <p class="font-light text-xs md:text-sm">Saldo disponible</p>
                            <p class="font-bold  text-lg md:text-lg sm:text-sm ">$5 603.55</p>
                        </div>
                        <div>
                            <p class="font-light text-xs md:text-sm">CVV</p>
                            <p class="font-bold tracking-more-wider text-sm">···</p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="mt-5">
            <div class="flex space-x-4 ">
              <div class="bg-white p-4 mb-5 rounded-xl shadow-md border  border-gray-200 sm:w-[48%]">
                <p class="text-lg sm:text-sm  text-gray-700 font-semibold">Gastado</p>
                <p class="text-lg sm:text-sm font-bold text-red-500">$50,457.00</p>
            </div>
            <div class="bg-white p-4 pb-4 mb-5  rounded-xl shadow-md transition border border-gray-200 sm:w-[48%]">
                <p class="text-lg sm:text-sm  text-gray-700 font-semibold">Agregado</p>
                <p class="text-lg sm:text-sm font-bold text-blue-500">$15,000.00</p>
            </div>
            </div>
            <header class=" mb-4">
                <h2 class="text-gray-700 font-semibold text-l">Operaciones</h2>
            </header>
              <a href="/transferencias" class="flex-1 ">
                <div class="bg-white mb-3 p-4 rounded-xl shadow-md hover:shadow-lg transition border border-quire flex flex-row items-center">
                  <img src="{{ Vite::asset('resources/assets/transferencia-de-dinero.png') }}" alt="payments-icon" class="w-10 h-10" />
                  <p class="text-xs font-semibold text-accent ml-3">Transferencias</p>
                </div>
              </a>
              <a href="/pagosyservicios" class="flex-1">
                <div class="bg-white p-4  mb-3 rounded-xl shadow-md hover:shadow-lg transition border border-quire flex flex-row items-center">
                  <img src="{{ Vite::asset('resources/assets/pagoss.png') }}" alt="payments-icon" class="w-10 h-10" />
                  <p class="text-xs font-semibold text-accent ml-3">Pagos y servicios</p>
                </div>
              </a>
              <a href="/viajes" class="flex-1">
                <div class="bg-white p-3  rounded-xl shadow-md hover:shadow-lg transition border border-quire flex flex-row items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="0.5"><path d="M18.5 5.51c-.2-.59-.59-1.01-1.25-1.01H6.75c-.66 0-1.04.42-1.25 1.01l-2 5.74v7.5c0 .55.2.75.75.75h.5c.55 0 .75-.2.75-.75V17.5h13v1.25c0 .55.2.75.75.75h.5c.55 0 .75-.2.75-.75v-7.5z"/><path d="M6.5 14.5a1 1 0 1 1 0-2a1 1 0 1 1 0 2Zm11 0a1 1 0 1 1 0-2a1 1 0 1 1 0 2Z"/><path stroke-linejoin="round" d="M5.75 9.5L7 6h10l1.25 3.5z"/></g></svg>
                  <p class="text-xs font-semibold text-accent ml-3">Viaje</p>

                </div>
              </a>
        </div>
    </div>
</div>


</x-slider>
