@foreach($products as $product)
    <a href="{{route('product.show',['product'=>$product])}}">
        {{$product->name}}
    </a>
    - {{$product->price}}<br>
@endforeach

<a href="{{route('product.create')}}">Neues Produkt</a>
