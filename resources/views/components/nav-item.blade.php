@props(['route' => null,'label' => null, 'icon' => null, 'bgColor' => null, 'bgColorHover' => null])
<li class="">
    <a href="" class="flex flex-row justify-center items-center rounded-md text-xs text-white py-1 px-4 font-semibold {{$bgColor}} hover:{{$bgColorHover}}">
        {{ $icon }}
        {{ $label }}
    </a>
</li>
