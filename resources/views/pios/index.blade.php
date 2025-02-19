<x-app-layout>
    <div class="container mx-2 bg-gray-500">
    @foreach ($pios as $pio)
        <div class="px-4 py-2 m-2 mx-4">
            <div>{{$pio->title}}</div>
            <div>{{$pio->contents}}</div>
        </div>
    @endforeach
    </div>
</x-app-layout>