<x-slider title="Pagos y Servicios">
    <div class="p-4">
        <header class="flex flex-col md:flex-row justify-between items-center py-2">
            <h1 class="text-xl font-semibold text-gray-800">Pagar mis servicios</h1>
            <div class="w-full md:w-96 mt-3 md:mt-0">
                <label for="search-service" class="sr-only">Buscar servicio</label>
                <div class="relative flex rounded-lg shadow-sm">
                    <input type="text" id="search-service" name="search-service" placeholder="Buscar servicio"
                        class="py-3 px-4 ps-11 block w-full border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                        <svg class="shrink-0 w-4 h-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                    </div>
                    <button type="button" class="py-3 px-4 bg-gray-500 text-white font-semibold rounded-e-lg hover:bg-gray-600 focus:outline-none">
                        Buscar
                    </button>
                </div>
            </div>
        </header>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-5">
            <x-card-service :url_view="'/pagar/servicio'" :img_service="Vite::asset('resources/assets/cfe-logo.png')" />
            <x-card-service :url_view="'/pagar/servicio'" :img_service="Vite::asset('resources/assets/logo-izzi.png')" />
            <x-card-service :url_view="'/pagar/servicio'" :img_service="Vite::asset('resources/assets/logo-sky.png')" />
            <x-card-service :url_view="'/pagar/servicio'" :img_service="Vite::asset('resources/assets/Movistar-logo.jpg')" />
            <x-card-service :url_view="'/pagar/servicio'" :img_service="Vite::asset('resources/assets/AT.png')" />
            <x-card-service :url_view="'/pagar/servicio'" :img_service="Vite::asset('resources/assets/Logo_TotalPlay.png')" />
            <x-card-service :url_view="'/pagar/servicio'" :img_service="Vite::asset('resources/assets/Telcel_logo.png')" />
            <x-card-service :url_view="'/pagar/servicio'" :img_service="Vite::asset('resources/assets/telmex-1.svg')" />
        </div>
    </div>
</x-slider>
