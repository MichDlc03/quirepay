
@props([
    'name_bank' => 'BBVA México',
    'tipo_bank' => 'Master Card',
    'logo_bank' => '',
    'number_accout' => '**** **** **** 0000',
    'saldo' => '$00.00',
    'detalles_url' => '#'
])

<div class="bg-white rounded-lg shadow-md p-4">
    <header class="flex justify-between items-center p-5 border-b border-gray-200">
        <h3 class="font-bold text-gray-700">{{ $name_bank }}</h3>
        <div class="flex items-center space-x-2">
            <p class="text-gray-500">{{ $tipo_bank }}</p>
            <img src="{{ $logo_bank }}" alt="logo-card" class="w-16 h-auto">
        </div>
    </header>
    <div class="p-5">
        <p class="font-semibold text-gray-800 text-lg">{{ $number_accout }}</p>
        <span class="text-gray-400 text-sm">Número de cuenta</span>
        <p class="font-semibold text-gray-800 text-lg mt-4">{{ $saldo }}</p>
        <span class="text-gray-400 text-sm">Saldo total</span>
    </div>
    <div class="border-t border-gray-200 p-4 flex justify-between">
        <button onclick="openModal()" class="px-4 py-2 rounded-lg text-red-600 font-medium">Eliminar</button>
        
        <a href="{{ $detalles_url }}" class="px-4 py-2 font-medium rounded-full hover:text-gray-800 text-gray-700 bg-quire hover:bg-yellow-300 text-sm flex items-center">
            Detalles
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1024 1024"><path fill="currentColor" d="M340.864 149.312a30.59 30.59 0 0 0 0 42.752L652.736 512L340.864 831.872a30.59 30.59 0 0 0 0 42.752a29.12 29.12 0 0 0 41.728 0L714.24 534.336a32 32 0 0 0 0-44.672L382.592 149.376a29.12 29.12 0 0 0-41.728 0z" stroke-width="25.5" stroke="currentColor"/></svg> 
        </a>
    </div>
</div>

<div id="deleteModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
        <h2 class="text-lg font-bold text-gray-700">¿Estás seguro?</h2>
        <p class="text-gray-600 text-sm mt-2">Esta acción no se puede deshacer.</p>
        <div class="mt-4 flex justify-end gap-2">
            <button onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded-lg">Cancelar</button>
            <button onclick="confirmDelete()" class="px-4 py-2 bg-red-600 text-white rounded-lg">Eliminar</button>
        </div>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('deleteModal').classList.remove('hidden');
    }
    
    function closeModal() {
        document.getElementById('deleteModal').classList.add('hidden');
    }

    function confirmDelete() {
        alert('Cuenta eliminada');
        closeModal();
    }
</script>
