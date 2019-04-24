@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">New User</div>

                <div class="card-body">
                <form action="{{route('user.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="type">Login Type</label>
                        <select name="type" id="" class="form-control">
                            <option value="0">Guest</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <div class="text-center form-group">
                        <button type="submit" class="btn btn-success btn-sm">Create User</button>
                    </div>
                </form>
                </div>
            </div>
@endsection
