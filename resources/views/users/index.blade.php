@include('common.head')
@include('common.nav')
@include('common.main')

@if(isset($name))
    <p>Hello, {{ $name }}!</p>
@else
    <p>Hello, Guest!</p>
@endif

@include('common.footer')







 

