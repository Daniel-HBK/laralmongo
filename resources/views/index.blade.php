@extends('layouts.app')
@section('content')

<div>
    <a href="{{ route('name.add') }}">New Name</a>

</div>

<div>
    <ul>
        @foreach($names as $name)
        <li> {{ $name->name }}
            | <i><a href="{{ route('name.edit', $name->id) }}">Edit</a></i>
            | <form action="{{route('name.delete', $name->id)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type=submit>Delete</button>
            </form>
        </li>


        @endforeach
    </ul>
</div>
@endsection
