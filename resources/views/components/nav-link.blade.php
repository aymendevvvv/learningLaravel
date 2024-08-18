@props(['active'=>false , 'type'=>'a'])

@if ($type == 'a')
    <a  class="nav-link {{ $active ?  'bg-white rounded' : 'bg-gray-900' }}" {{$attributes}}>{{$slot}}</a> 
@else
    <button type="button" class="btn btn-primary" {{$attributes}}>{{$slot}}</button>
@endif



