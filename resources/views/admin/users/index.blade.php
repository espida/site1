<?php
\Carbon\Carbon::setLocale('fa');
?>
@extends('layouts.admin')



@section('content')

    @if(Session::has('deleted_user'))

        <span class="bg-danger">{{session('deleted_user')}}</span>

    @endif

    <h1>Users</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Avatar</th>
            <th>Status</th>
            <th>Role</th>
            <th>Create</th>
            <th>Update</th>
        </tr>
        </thead>
        <tbody>

        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td><a href="{{ route('admin.users.edit', $user->id) }}">{{ $user->name }}</a> </td>
                    <td>{{ $user->email }}</td>
                    <td><img height="70px" src="{{$user->photo ? $user->photo->file : '/images/defaulte.png'}}" alt="{{$user->name}}" title="{{ $user->name . ' photo' }}" alt="{{ $user->name . ' photo' }}"></td>
                    <td>
                        <img class="status-img" src="{{ $user->is_active ==1 ? '/images/active.png' : '/images/not-active.png' }}" alt="user status">
                    </td>
                    {{--<td>{{ $user->is_active ==1 ? 'Active' : 'Not Active' }}</td>--}}
                    <td>{{ $user->role->name }}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                    <td>{{ $user->updated_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>


@stop