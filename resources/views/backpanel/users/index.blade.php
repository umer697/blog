@extends('backpanel.layouts.master')
@section('content')
<div>
    <a href="{{route('user.create')}}" class="btn btn-primary rounded">Create User</a>
</div>
<h2>All Users</h2>
    <table class="table table-hover table-bordered">
       <tr>
           <th>Name</th>
           <th>Email</th>
           <th>Role</th>
           <th>Action</th>
       </tr>
       @forelse ($users as $user)
       <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{Admin}}</td>
            <td>
                <a href="#" class="btn btn-primary rounded">
                    <i class="material-icons">edit</i>
                </a>
                <a href="#" class="btn btn-danger rounded">
                    <i class="material-icons">delete</i>
                </a>
            </td>
                @empty
                <tr class="text-success">
                    <td colspan="4">No User Found</td>
                </tr>
                @endforelse
        </tr>
    </table>
@endsection
