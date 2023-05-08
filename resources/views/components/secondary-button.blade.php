<a {{ $attributes->merge([
    'class' => 'bg-emerald-700 rounded-md flex space-x-2 w-24 h-10 font-semibold text-sm leading-3 text-white border border-white focus:outline-none focus:ring-2 focus:ring-offset-2 hover:bg-emerald-800 duration-150 justify-center items-center',
    'href' => $route
    ]) }}>
    {{ $slot }}
</a>
