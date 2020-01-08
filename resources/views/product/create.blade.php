<form action="{{route('product.store')}}" method="POST">
    @csrf
    <input type="text" name="name" value=""><br>
    <input type="text" name="price" value=""><br>
    <textarea name="description">

    </textarea>
    <br>
    <input type="submit">
</form>
