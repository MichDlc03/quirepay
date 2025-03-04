<!-- Button to open modal -->
<button 
  class="block w-full p-5 mb-5 bg-gray-50 rounded-lg hover:bg-gray-100 focus:outline-none"
  onclick="toggleModal(true)"
>
  <div class="flex justify-between items-center">
    <div class="flex gap-x-4">
      <div class="flex-auto">
        <x-text-historial>Cargo a tu cuenta "Pago de luz"</x-text-historial>
        <p class="mt-1 text-sm text-start text-gray-500">*9822</p>
        <div class="flex items-center gap-x-2 mt-2">
          <svg 
            xmlns="http://www.w3.org/2000/svg" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke-width="1.5" 
            stroke="currentColor" 
            class="w-5 h-5 text-gray-400"
          >
            <path 
              stroke-linecap="round" 
              stroke-linejoin="round" 
              d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" 
            />
          </svg>
          <p class="text-xs text-gray-500">Movimiento realizado</p>
        </div>
        <p class="mt-2 text-sm text-gray-400">
          <span class="font-semibold text-blue-600">Cuenta de origen:</span> Tarjeta BBVA
        </p>
      </div>
    </div>
    <div class="hidden sm:flex flex-col items-center sm:items-end mr-4">
      <h3 class="text-sm font-bold text-red-500">- MX$500.00</h3>
    </div>
  </div>
</button>

<div id="myModal" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-500 bg-opacity-50 hidden">
  <div class="w-full max-w-lg flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
      <h3 id="hs-scale-animation-modal-label" class="font-bold text-lg text-gray-800 dark:text-white">
        Ticket de transferencia
      </h3>
      <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" onclick="toggleModal(false)">
        <span class="sr-only">Close</span>
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M18 6 6 18"></path>
          <path d="m6 6 12 12"></path>
        </svg>
      </button>
    </div>
    <div class="p-6 overflow-y-auto">
      <div class="flex justify-center items-center my-6">
        <div class="text-center">
          <img src="{{ Vite::asset('resources/assets/comprobado.png') }}" alt="exito" class="w-16 mx-auto">
          <p class="text-gray-700 text-xl font-medium mt-4">¡Pago exitoso!</p>
          <p class="text-blue-600 text-lg font-medium mt-2">Transferencia</p>
        </div>
      </div>
      <div class="flex justify-center items-center space-x-6 my-8">
          <div class="p-4 text-center"> 
            <p class="text-gray-600">Desde</p>
            <img src="{{ Vite::asset('resources/assets/tarjeta-de-credito.png') }}" alt="exito" class="w-12 mx-auto">
            <p class="text-gray-700 font-semibold">Cuenta Bancaria</p>
            <p class="text-gray-400 text-sm font-semibold">5245 4322 ****</p>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16">
            <path fill="text-gray-400" d="M3.854 5.146a.5.5 0 0 1 0 .708L2.707 7H6.5a.5.5 0 0 1 0 1H2.707l1.147 1.146a.5.5 0 1 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2a.5.5 0 0 1 .708 0m8.292 0a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L13.293 8H9.5a.5.5 0 0 1 0-1h3.793l-1.147-1.146a.5.5 0 0 1 0-.708"/>
          </svg>
          <div class="p-4 text-center">
            <p class="text-gray-600">Para</p>
            <img src="{{ Vite::asset('resources/assets/tarjeta-credito.png') }}" alt="exito" class="w-12 mx-auto">
            <p class="text-gray-700 font-semibold">Cuenta tercero</p>
            <p class="text-gray-400 text-sm font-semibold">4455 3312 ****</p>
          </div>
      </div>
      <div class="p-4 mb-8">
        <div class="flex justify-between mb-2">
          <span class="text-gray-500 font-medium text-sm">Número de folio:</span>
          <p class="text-gray-500 text-sm font-normal">19348932</p>
        </div>
        <div class="flex justify-between">
          <span class="text-gray-500 font-medium text-sm">Fecha:</span>
          <p class="text-gray-500 text-sm font-normal">12 enero 2025, 13:32:00</p>
        </div>
      </div>
      
      <div class="text-center my-6">
        <button type="button" class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
          Descargar copia
        </button>
      </div>
    </div>
  </div>
</div>


<script>
  function toggleModal(show) {
    const modal = document.getElementById("myModal");
    if (show) {
      modal.classList.remove("hidden");
    } else {
      modal.classList.add("hidden");
    }
  }
</script>
