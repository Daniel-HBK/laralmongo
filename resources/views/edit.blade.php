@extends('layouts.app')
@section('content')
<form action="{{route('name.update', $name->id)}}" method="post" name="name_edit_form">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <label>Name:</label>
    <input name="name" type="text" value="{{$name->name}}" />

    <br />

    <button type="submit">Update</button>

</form>
@endsection
