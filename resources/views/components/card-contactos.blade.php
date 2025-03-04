@props([
    'name_user' => 'Mariana G Carrillo',
    'number_account'
])
<div class="flex items-center justify-between bg-gray-100 text-card-foreground p-4 m-5 rounded-lg shadow-md">
    <div class="flex items-center">
      <div class="h-12 w-12 flex items-center justify-center bg-blue-500 text-primary-foreground rounded-full mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="24" viewBox="0 0 448 512"><path fill="#ffff" d="M313.6 304c-28.7 0-42.5 16-89.6 16s-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4M400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4c14.6 0 38.3 16 89.6 16c51.7 0 74.9-16 89.6-16c47.6 0 86.4 38.8 86.4 86.4zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0S80 64.5 80 144s64.5 144 144 144m0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96s-96-43.1-96-96s43.1-96 96-96"/></svg>
      </div>
      <div>
        <h2 class="text-sm text-gray-700 font-semibold">{{ $name_user }}</h2>
        <p class="text-sm text-gray-500">{{ $number_account }}</p>
      </div>
    </div>
    <button class="bg-destructive text-destructive-foreground px-4 py-2  ">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="currentColor" d="M7.616 20q-.667 0-1.141-.475T6 18.386V6h-.5q-.213 0-.356-.144T5 5.499t.144-.356T5.5 5H9q0-.31.23-.54t.54-.23h4.46q.31 0 .54.23T15 5h3.5q.213 0 .356.144t.144.357t-.144.356T18.5 6H18v12.385q0 .666-.475 1.14t-1.14.475zM17 6H7v12.385q0 .269.173.442t.443.173h8.769q.269 0 .442-.173t.173-.442zm-6.692 11q.213 0 .357-.144t.143-.356v-8q0-.213-.144-.356T10.307 8t-.356.144t-.143.356v8q0 .213.144.356q.144.144.356.144m3.385 0q.213 0 .356-.144t.143-.356v-8q0-.213-.144-.356Q13.904 8 13.692 8q-.213 0-.357.144t-.143.356v8q0 .213.144.356t.357.144M7 6v13z"/>
      </svg>
    </button>
  </div>