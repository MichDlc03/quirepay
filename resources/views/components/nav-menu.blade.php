@props(['active' => false ])

<a class="{{ $active ? 'bg-quire' : 'hover:bg-yellow-100' }} flex items-center gap-x-3 py-2 px-2.5  text-sm text-gray-800 rounded-full " 
aria-current="{{ request()-> is('/') ? 'page':'false' }} " {{ $attributes }}
>
  {{ $slot }}
</a>



