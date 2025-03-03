<div class="lg:hidden fixed bottom-0 left-0 right-0 bg-white shadow-md flex justify-around p-4 z-50">
    <a href="/" class="{{ request()->is('/') ? 'text-black font-bold' : 'text-gray-700' }} flex flex-col items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
            <g fill="none" stroke="{{ request()->is('/') ? '#000' : '#888' }}" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.3">
                <path d="M18.6 22H5.4A2.4 2.4 0 0 1 3 19.588V8.332c0-.382.18-.734.48-.965l7.78-5.126a1.195 1.195 0 0 1 1.44 0l7.82 5.126c.3.231.48.583.48.965v11.256A2.4 2.4 0 0 1 18.6 22Z"/>
                <path d="M9.8 12h4.4c.44 0 .8.36.8.8V22H9v-9.2c0-.44.36-.8.8-.8Z"/>
            </g>
        </svg>
        <span class="text-xs">Home</span>
    </a>
    
    <a href="/cuenta" class="{{ request()->is('cuenta') ? 'text-black font-bold' : 'text-gray-700' }} flex flex-col items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="{{ request()->is('cuenta') ? '#000' : '#888' }}" d="M5 5h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V8a3 3 0 0 1 3-3m0 1a2 2 0 0 0-2 2v1h17V8a2 2 0 0 0-2-2zM3 17a2 2 0 0 0 2 2h13a2 2 0 0 0 2-2v-5H3zm2-1h4v1H5zm6 0h3v1h-3zm-8-6v1h17v-1z"/>
        </svg>
        <span class="text-xs">Cuenta</span>
    </a>
    
    <a href="/viajes" class="{{ request()->is('viajes') ? 'text-black font-bold' : 'text-gray-700' }} flex flex-col items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="{{ request()->is('viajes') ? '#000' : '#888' }}" d="M5 9.942q0-3.06 2.105-5Q9.21 3 11.98 3q3.579 0 5.376 2.523t1.605 5.927l2.034-2.111q.14-.141.345-.141q.203 0 .343.14t.141.335t-.14.335l-2.639 2.734q-.242.242-.584.242t-.585-.242l-2.638-2.734q-.141-.14-.141-.335t.14-.334q.14-.141.345-.141t.344.14l2.035 2.112q.25-3.417-1.478-5.434Q14.756 4 11.98 4Q9.456 4 7.728 5.752T6 10.006q0 2.036 1.33 4.261t4.19 4.968q.172.173.432.182t.433-.163q.5-.489.963-.952t.754-.773q-.183-.256-.296-.55t-.114-.633q0-.838.581-1.419t1.42-.58t1.409.58t.571 1.42q0 .837-.571 1.409q-.571.571-1.41.571q-.219 0-.42-.035q-.2-.034-.395-.123q-.412.437-.86.89q-.45.452-.936.914q-.237.217-.532.323t-.588.106t-.587-.106t-.513-.323q-3.02-2.875-4.44-5.313T5 9.942"/>
        </svg>
        <span class="text-xs">Viajes</span>
    </a>
    
    <a href="/transferencias" class="{{ request()->is('transferencias') ? 'text-black font-bold' : 'text-gray-700' }} flex flex-col items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"><path fill="{{ request()->is('transferencias') ? '#000' : '#888' }}" d="M12.146 3.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L14.293 7H4.5a.5.5 0 0 1 0-1h9.793l-2.147-2.146a.5.5 0 0 1 0-.708m-4.292 7a.5.5 0 0 1 0 .708L5.707 13H15.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0"/></svg>
        <span class="text-xs">Transferencias</span>
    </a>
    
  </div>
      <div class="lg:hidden fixed top-4 right-4 z-50">
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="flex items-center justify-center size-10 bg-white border border-gray-200 rounded-full shadow-md hover:bg-gray-100 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
            </button>
            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Perfil</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Soporte</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Cerrar sesión</a>
            </div>
        </div>
    </div>