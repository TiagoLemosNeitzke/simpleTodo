<button {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-md flex space-x-2 w-24 h-10 font-semibold text-sm leading-3 text-white bg-[#de8609] hover:bg-[#cf7d08] focus:outline-none duration-150 justify-center items-center']) }}>
    {{ $slot }}
</button>
