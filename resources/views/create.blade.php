@extends('layouts.app')
@section('content')
<form action="{{route('name.create')}}" method="post" name="name_create_form">
    {{ csrf_field() }}

    <label>Name:</label>
    <input name="name" type="text" value="" />

    <br />

    <button type="submit">Add</button>

</form>
@endsection
