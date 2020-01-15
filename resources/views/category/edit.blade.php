@include('partials.errors')

<form action="{{route('category.update',['category'=>$category])}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{$category->name}}"><br>
    <br>
    <input type="submit">
</form>
