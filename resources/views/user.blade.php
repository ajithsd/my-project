<x-headertest/>
<h2>User Page {{count($values);}}</h2>
@php $i = 1; @endphp
<ul>
@foreach ($values as $item)
  <li><h3>{{$i++}} - {{$item}}</h3>  </li>
  
@endforeach
</ul>