@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">Edit User</div>

                <div class="card-body">
                <form action="{{route('user.update', ['user' => $user->id])}}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" value="{{$user->name}}" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" value="{{$user->email}}" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="type">Login Type</label>
                        <select name="type" id="" class="form-control">
                            <option value="0">Guest</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <div class="text-center form-group">
                        <button type="submit" class="btn btn-success btn-sm">Update User</button>
                    </div>
                </form>
                </div>
            </div>
@endsection
