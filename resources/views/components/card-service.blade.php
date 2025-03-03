@props(['url_view' => '#', 'img_service' => ''])

<a href="{{ $url_view }}" class="block">
    <div class="bg-white rounded-lg shadow-md p-5 flex flex-col items-center justify-center w-full aspect-square gap-y-4 transition duration-700 ease-in-out hover:shadow-lg">
        <img src="{{ $img_service }}" alt="logo-card" class="w-40 h-auto object-contain">
    </div>
</a>