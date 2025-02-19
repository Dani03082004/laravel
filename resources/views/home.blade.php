<x-app-layout>
<!-- Puede ir asi en el home blade <x-header content="{{__('Header')}}"></x-header> -->
 @foreach ($pios as $pio)
     <p> {{$pio->title}}</p>
 @endforeach
</x-app-layout>