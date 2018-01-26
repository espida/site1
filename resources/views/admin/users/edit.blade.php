@extends('layouts.admin')



@section('content')


    <h1>Edit User</h1>


    <div class="col-sm-5">
        <img src="{{$user->photo ? $user->photo->file : '/images/defaulte.png'}}" alt="{{$user->name}}" class="img-responsive img-rounded">
        <br/>
        @include('includes.form_error')
    </div>

    <div class="col-sm-7">
        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}

        {{ csrf_field() }}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter User Name']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter User Email']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Enter User Password']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Edit User', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>








@stop