@props([
    'title' => 'Compra en NY',
    'fecha' => '12-01-2025',
    'precio' => '$0.00',
])

<div class="flex items-center justify-between  p-4 md:p-5 border-b-2 border-gray-200 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
    <div class="flex items-center space-x-3 flex-1 min-w-0">
        {{ $slot }}
        <p class="text-sm font-semibold text-gray-600 truncate">{{ $title }}</p>
    </div>
    <p class="text-sm text-gray-400 text-center flex-1 min-w-0 truncate">{{ $fecha }}</p>
    <p class="text-sm font-semibold text-gray-700 text-right flex-1 min-w-0 truncate">{{ $precio }}</p>
</div>

