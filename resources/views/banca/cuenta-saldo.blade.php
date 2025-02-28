<x-slider title="Cuenta y Saldo total">
    
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4  mb-8">
        <div class="bg-white rounded-lg shadow-md p-4">
            <header class="flex justify-between items-center p-5 border-b border-gray-200">
                <h3 class="font-bold text-gray-700">Nu México</h3>
                <div class="flex items-center space-x-2">
                    <p class="text-gray-500">Master Card</p>
                    <img src="{{ Vite::asset('resources/assets/masteecard.png') }}" alt="logo-card" class="w-16 h-auto">
                </div>
            </header>
            <div class="p-5">
                <p class="font-semibold text-gray-800 text-lg">4642  3489  9867  7632</p>
                <span class="text-gray-400 text-sm">Número de cuenta</span>
                <p class="font-semibold text-gray-800 text-lg mt-4">$40,000.00</p>
                <span class="text-gray-400 text-sm">Saldo total</span>
            </div>
            <div class="border-t border-gray-200 p-4 flex justify-between">
                <button class="px-4 py-2 rounded-lg text-red-600">Eliminar</button>
                <button class="px-4 py-2 rounded-lg hover:text-gray-800 text-gray-700 bg-quire hover:bg-yellow-300 text-sm flex items-center">
                    Detalles
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1024 1024"><path fill="currentColor" d="M340.864 149.312a30.59 30.59 0 0 0 0 42.752L652.736 512L340.864 831.872a30.59 30.59 0 0 0 0 42.752a29.12 29.12 0 0 0 41.728 0L714.24 534.336a32 32 0 0 0 0-44.672L382.592 149.376a29.12 29.12 0 0 0-41.728 0z" stroke-width="25.5" stroke="currentColor"/></svg> 
                </button>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4">
            <header class="flex justify-between items-center p-5 border-b border-gray-200">
                <h3 class="font-bold text-gray-700">BBVA México</h3>
                <div class="flex items-center space-x-2">
                    <p class="text-gray-500">Visa</p>
                    <img src="{{ Vite::asset('resources/assets/visa.jpg') }}" alt="logo-card" class="w-16 h-auto">
                </div>
            </header>
            <div class="p-5">
                <p class="font-semibold text-gray-800 text-lg">4252  2449  5567  4622</p>
                <span class="text-gray-400 text-sm">Número de cuenta</span>
                <p class="font-semibold text-gray-800 text-lg mt-4">$20,000.00</p>
                <span class="text-gray-400 text-sm">Saldo total</span>
            </div>
            <div class="border-t border-gray-200 p-4 flex justify-between">
                <button class="px-4 py-2 rounded-lg text-red-600">Eliminar</button>
                <button class="px-4 py-2 rounded-lg hover:text-gray-800 text-gray-700 bg-quire hover:bg-yellow-300 text-sm flex items-center">
                    Detalles
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1024 1024"><path fill="currentColor" d="M340.864 149.312a30.59 30.59 0 0 0 0 42.752L652.736 512L340.864 831.872a30.59 30.59 0 0 0 0 42.752a29.12 29.12 0 0 0 41.728 0L714.24 534.336a32 32 0 0 0 0-44.672L382.592 149.376a29.12 29.12 0 0 0-41.728 0z" stroke-width="25.5" stroke="currentColor"/></svg> 
                </button>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4">
            <header class="flex justify-between items-center p-5 border-b border-gray-200">
                <h3 class="font-bold text-gray-700">America Express</h3>
                <div class="flex items-center space-x-2">
                    <p class="text-gray-500">Amex</p>
                    <img src="{{ Vite::asset('resources/assets/amex.png') }}" alt="logo-card" class="w-16 h-auto">
                </div>
            </header>
            <div class="p-5">
                <p class="font-semibold text-gray-800 text-lg">4442  4383  3867  4632</p>
                <span class="text-gray-400 text-sm">Número de cuenta</span>
                <p class="font-semibold text-gray-800 text-lg mt-4">$10,000.00</p>
                <span class="text-gray-400 text-sm">Saldo total</span>
            </div>
            <div class="border-t border-gray-200 p-4 flex justify-between">
                <button class="px-4 py-2 rounded-lg text-red-600 hover:text-red-500">Eliminar</button>
                <button class="px-4 py-2 rounded-lg text-gray-700 bg-quire hover:bg-yellow-300 text-sm hover:text-gray-800 flex items-center">
                    Detalles
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1024 1024"><path fill="currentColor" d="M340.864 149.312a30.59 30.59 0 0 0 0 42.752L652.736 512L340.864 831.872a30.59 30.59 0 0 0 0 42.752a29.12 29.12 0 0 0 41.728 0L714.24 534.336a32 32 0 0 0 0-44.672L382.592 149.376a29.12 29.12 0 0 0-41.728 0z" stroke-width="25.5" stroke="currentColor"/></svg> 
                </button>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 flex items-center justify-center min-h-[230px]">
            <button class="flex items-center px-6 py-3 rounded-lg bg-quire text-gray-700 hover:bg-yellow-300 text-l ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12.75 7a.75.75 0 0 0-1.5 0v4.25H7a.75.75 0 0 0 0 1.5h4.25V17a.75.75 0 0 0 1.5 0v-4.25H17a.75.75 0 0 0 0-1.5h-4.25z"/></svg>
                Agregar tarjeta
            </button>
        </div>
    </div>
    

</x-slider>