<h1>{{$category->name}}</h1>
<br>
<price>{{$category->price}}</price>
<p>
    {{$category->description}}
</p>
<br>
<br>
<a href="{{route('category.index')}}">Zur Übersicht</a>
<a href="{{route('category.edit',['category'=>$category])}}">Kategorie bearbeiten</a>

