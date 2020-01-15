@include('partials.errors')

<form action="{{route('product.update',['product'=>$product])}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{$product->name}}"><br>
    <input type="text" name="price" value="{{$product->price}}"><br>
    <textarea name="description">
        {{$product->description}}
    </textarea>
    <br>
    <input type="submit">
</form>
