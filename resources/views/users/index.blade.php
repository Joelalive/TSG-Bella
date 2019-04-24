@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <th>Name</th>
                        <th>email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td> <a href="{{route('user.edit', ['user' => $user->id])}}" class="btn btn-info btn-sm">Edit</a> </td>
                            @if(Auth::id() == $user->id)
                            <td>It's Me</td>
                            @else
                            <td> <a href="{{route('user.destroy', ['user' => $user->id])}}" class="btn btn-danger btn-sm">Delete</a> </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$users->links()}}
                </div>
            </div>
@endsection
