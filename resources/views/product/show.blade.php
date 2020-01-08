<h1>{{$product->name}}</h1>
<br>
<price>{{$product->price}}</price>
<p>
    {{$product->description}}
</p>
<br>

<button><a href="{{route('cart.add',['product'=>$product])}}">cart</a></button>
<br>
<a href="{{route('product.index')}}">Zur Übersicht</a>
<a href="{{route('product.edit',['product'=>$product])}}">Produkt bearbeiten</a>

