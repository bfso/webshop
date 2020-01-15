<h1>{{$category->name}}</h1>
<br>
<price>{{$category->price}}</price>
<p>
    {{$category->description}}
</p>
@foreach($products as $product)
    - {{$product->name}}
@endforeach
<br>
<br>
<a href="{{route('category.index')}}">Zur Übersicht</a>
<a href="{{route('category.edit',['category'=>$category])}}">Kategorie bearbeiten</a>

