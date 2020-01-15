@foreach($products as $product)
    <a href="{{route('product.show',['product'=>$product])}}">
        {{$product->name}}
    </a>
    - {{$product->price}} ----
    <a href="{{route('product.destroy',['product'=>$product])}}">[x]</a>
    <br>
@endforeach

<a href="{{route('product.create')}}">Neues Produkt</a>
