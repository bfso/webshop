@include('partials.errors')

<form action="{{route('category.store')}}" method="POST">
    @csrf
    <label for="name">@lang('category.name')</label> <input type="text" name="name" value=""><br>
    <br>
    <input type="submit">
</form>
