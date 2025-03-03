<x-slider title="Detalles de cuenta">
    <div class="p-4">
        <h1 class="font-semibold text-gray-800 text-xl mb-5">Detalles de cuenta</h1>
        <div class="bg-white rounded-lg grid grid-cols-1 p-5">
            <div class="flex justify-start items-center space-x-28 p-5">
                <div>
                    <p class="text-gray-400">Nombre del banco</p>
                    <span class="text-gray-700 font-semibold" id="bank-name">BBVA México</span>
                    <input type="text" class="hidden" id="bank-name-input" value="BBVA México">
                </div>
                <div>
                    <p class="text-gray-400">Tipo de cuenta</p>
                    <span class="text-gray-700 font-semibold" id="account-type">Débito</span>
                    <input type="text" class="hidden" id="account-type-input" value="Débito">
                </div>
                <div>
                    <p class="text-gray-400">Saldo total</p>
                    <span class="text-gray-700 font-semibold" id="account-balance">$50 000.00</span>
                    <input type="text" class="hidden" id="account-balance-input" value="$50 000.00">
                </div> 
            </div>
            <div class="flex justify-start items-center space-x-28 p-5">
                <div>
                    <p class="text-gray-400">Nombre de la cuenta</p>
                    <span class="text-gray-700 font-semibold" id="account-holder">BBVA Jonas Abarca</span>
                    <input type="text" class="hidden" id="account-holder-input" value="BBVA Jonas Abarca">
                </div>
                <div>
                    <p class="text-gray-400">Número de cuenta</p>
                    <span class="text-gray-700 font-semibold" id="account-number">4252 3243 1342 5678</span>
                    <input type="text" class="hidden" id="account-number-input" value="4252 3243 1342 5678">
                </div>
                <div>
                    <p class="text-gray-400">Dirección</p>
                    <span class="text-gray-700 font-semibold" id="account-number">Calle 34 x Av. Juarez, Cancun, Quintana Roo</span>
                    <input type="text" class="hidden" id="account-number-input" value="Calle 34 x Av. Juarez, Cancun, Quintana Roo">
                </div>
                <div>
                    <p class="text-gray-400">RFC</p>
                    <span class="text-gray-700 font-semibold" id="account-number">JZPA98292MTC3</span>
                    <input type="text" class="hidden" id="account-number-input" value="Calle 34 x Av. Juarez, Cancun, Quintana Roo">
                </div>
            </div>

            <div class="flex justify-start items-center space-x-10 m-5">
                <a href="#" id="edit-btn" class="px-6 py-2 rounded-full font-medium hover:text-gray-800 text-gray-700 bg-quire hover:bg-yellow-300 text-sm flex items-center">
                    Editar cuenta
                </a>
                <button class="px-4 py-2 rounded-full  bg-red-600 hover:bg-red-500 text-white text-sm font-medium " id="delete-btn">Eliminar</button>

                <a href="#" id="save-btn" class="hidden px-6 py-2 rounded-full font-medium hover:text-gray-800 text-gray-700 bg-quire hover:bg-yellow-300 text-sm flex items-center">
                    Guardar cuenta
                </a>
            </div>
        </div>
        <h1 class="font-semibold text-gray-800 text-xl mb-5 mt-5">Historial de movimientos</h1>

        <div class="bg-white rounded-lg shadow-md mb-5">
            <x-card-movimientos />
            <x-card-movimientos />
            <x-card-movimientos />
            <x-card-movimientos />

        </div>
    </div>
</x-slider>

<script>
    const editBtn = document.getElementById("edit-btn");
    const saveBtn = document.getElementById("save-btn");
    const fieldsToEdit = [
        {spanId: 'bank-name', inputId: 'bank-name-input'},
        {spanId: 'account-type', inputId: 'account-type-input'},
        {spanId: 'account-balance', inputId: 'account-balance-input'},
        {spanId: 'account-holder', inputId: 'account-holder-input'},
        {spanId: 'account-number', inputId: 'account-number-input'}
    ];

    editBtn.addEventListener("click", function(event) {
        event.preventDefault();
        
        fieldsToEdit.forEach(field => {
            const span = document.getElementById(field.spanId);
            const input = document.getElementById(field.inputId);
            if (input.classList.contains("hidden")) {
                input.classList.remove("hidden");
                span.classList.add("hidden");
                input.classList.add("py-3", "px-4", "block", "mt-2", "w-full", "border-2", "border-gray-200", 
                                    "rounded-full", "text-md", "text-gray-700", "focus:border-blue-500", 
                                    "focus:ring-blue-500", "disabled:opacity-50", "disabled:pointer-events-none", 
                                    "dark:bg-neutral-900", "dark:border-neutral-700", "dark:text-neutral-400", 
                                    "dark:placeholder-neutral-500", "dark:focus:ring-neutral-600");
            } else {
                input.classList.add("hidden");
                span.classList.remove("hidden");
               
            }
        });

        editBtn.classList.add("hidden");
        saveBtn.classList.remove("hidden");
    });

    saveBtn.addEventListener("click", function(event) {
        event.preventDefault();

        fieldsToEdit.forEach(field => {
            const span = document.getElementById(field.spanId);
            const input = document.getElementById(field.inputId);

            span.textContent = input.value;

            input.classList.add("hidden");
            span.classList.remove("hidden");
        });

        saveBtn.classList.add("hidden");
        editBtn.classList.remove("hidden");
    });
</script>

