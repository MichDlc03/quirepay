@props(['name_service' => 'Servicio name', 'img_service' => ''])

<button type="button" class="block cursor-pointer" onclick="openModal()">
    <div class="bg-white rounded-lg shadow-md p-5 flex flex-col items-center justify-center w-full aspect-square gap-y-4 transition duration-700 ease-in-out hover:shadow-lg">
        <img src="{{ $img_service }}" alt="logo-card" class="w-40 h-auto object-contain">
    </div>
</button>

<div id="hs-scale-animation-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-gray-900/50 ">
  <div class="bg-white rounded-xl shadow-lg max-w-lg w-full p-4 relative">
    <div class="flex flex-col">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
            <h3 id="hs-basic-modal-label" class="font-bold text-gray-800 dark:text-white">
              {{ $name_service }}
            </h3>
            <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600 " onclick="closeModal()" aria-label="Close" data-hs-overlay="#hs-basic-modal">
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
        <input type="text" class="py-3 px-4 w-full bg-gray-100  border-gray-300 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:placeholder-gray-500 dark:focus:ring-gray-600" placeholder="Número de refencia">
      </div>
      <div class="m-5">
        <input type="text" class="py-3 px-4 w-full bg-gray-100  border-gray-300 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:placeholder-gray-500 dark:focus:ring-gray-600" placeholder="Monto a pagar">
      </div>
      </div>
    </div>
    <div class="flex justify-end gap-2 border-t pt-3">
      <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" onclick="closeModal()">
        Cancelar
      </button>
      <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-quire text-gray-700 hover:bg-yellow-300 focus:outline-none focus:bg-yellow-300 disabled:opacity-50 disabled:pointer-events-none">
        Pagar servicio
      </button>
    </div>
  </div>
</div>

<script>
  function openModal() {
    document.getElementById('hs-scale-animation-modal').classList.remove('hidden');
  }

  function closeModal() {
    document.getElementById('hs-scale-animation-modal').classList.add('hidden');
  }
</script>
