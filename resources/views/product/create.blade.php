@include('partials.errors')

<form action="{{route('product.store')}}" method="POST">
    @csrf
    <label for="name">@lang('product.name')</label> <input type="text" name="name" value=""><br>
    <label for="price">@lang('product.price')</label> <input type="text" name="price" value=""><br>
    <label for="description">@lang('product.description')</label> <textarea name="description">

    </textarea>
    <br>
    <input type="submit">
</form>
