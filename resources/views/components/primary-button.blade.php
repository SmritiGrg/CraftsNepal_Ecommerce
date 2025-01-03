<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'font-medium rounded-lg text-sm px-5 py-2.5 w-full uppercase inline-flex items-center justify-center bg-gradient-to-r from-orange-100 via-orange-200 to-orange-100 hover:bg-gradient-to-r hover:from-orange-200 hover:via-orange-300 hover:to-orange-400 text-black']) }}>
    {{ $slot }}
</button>
