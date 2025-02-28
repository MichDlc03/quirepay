<x-slider title="Transferencias">
    <div class="flex justify-end ">
        <x-button-layout>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12.75 7a.75.75 0 0 0-1.5 0v4.25H7a.75.75 0 0 0 0 1.5h4.25V17a.75.75 0 0 0 1.5 0v-4.25H17a.75.75 0 0 0 0-1.5h-4.25z"/>
            </svg>
            Nueva transferencia
        </x-button-layout>
    </div>

    <div class="bg-white rounded-lg shadow-md p-3">
        <div class="divide-y divide-gray-300">
            <x-card-trans></x-card-trans>
            <x-card-trans></x-card-trans>
            <x-card-trans></x-card-trans>
            <x-card-trans></x-card-trans>
        </div>
    </div>

    <div class="flex justify-center mt-5 space-x-1">
        <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-md hover:bg-yellow-100">Anterior</button>
        <button class="px-3 py-1 text-white bg-quire rounded-md hover:bg-yellow-300">1</button>
        <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-md hover:bg-yellow-100">2</button>
        <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-md hover:bg-yellow-100">3</button>
        <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-md hover:bg-yellow-100">Siguiente</button>
    </div>
</x-slider>
