<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Piopio') }}
        </h2>
    </x-slot>

    <div class="py-12 flex flex-col">
    @foreach ($pios as $pio)
        <div class="bg-gray-500 m-2 py-4">
            <h2><a href="{{ route('pios.show',$pio->id) }}">{{$pio->title}}</a></h2>
        </div>
    @endforeach
    </div>
</x-app-layout>
