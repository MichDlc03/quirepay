<x-slider title="Viajes">
    <div class="flex justify-end sm:mb-10 m-4">
        <x-button-layout>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12.75 7a.75.75 0 0 0-1.5 0v4.25H7a.75.75 0 0 0 0 1.5h4.25V17a.75.75 0 0 0 1.5 0v-4.25H17a.75.75 0 0 0 0-1.5h-4.25z"/>
            </svg>
            Nuevo viaje
        </x-button-layout>
    </div>

    <div class="bg-white rounded-lg shadow-md p-3 m-5">
        <div class="divide-y divide-gray-300">
            <x-card-viajes></x-card-viajes>
            <x-card-viajes></x-card-viajes>
            <x-card-viajes></x-card-viajes>
        </div>
        <div class="flex justify-center mt-5 space-x-1 mb-5">
            <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-full hover:bg-yellow-100">Anterior</button>
            <button class="px-3 py-1 text-white bg-quire rounded-full hover:bg-yellow-300">1</button>
            <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-full hover:bg-yellow-100">2</button>
            <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-full hover:bg-yellow-100">3</button>
            <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-full hover:bg-yellow-100">Siguiente</button>
        </div>
    </div>

   
</x-slider>