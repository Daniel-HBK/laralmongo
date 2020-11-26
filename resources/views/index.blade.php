@extends('layouts.app')
@section('content')

<div>
    <a href="{{ route('name.add') }}">New Name</a>

</div>

<div>
    <ul>
        @foreach($names as $name)
        <li style="display:flex;"> {{ $name->name }}

            | <i><a href="{{ route('name.edit', $name->id) }}" style="margin-left:5px;margin-right:10px;">Edit</a></i>

            | <form action="{{route('name.delete', $name->id)}}" method="post" style="margin-left:5px;">

                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type=submit>Delete</button>
            </form>
        </li>


        @endforeach
    </ul>
</div>
@endsection
