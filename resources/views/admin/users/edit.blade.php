@extends('layouts.admin')


@section('content')

    <h1>Edit User</h1>

    <div class="row">

        <div class="col-sm-3">

            <img src="{{$user->photo ? $user->photo->file : '/images/trump.jpg'}}" class="img-responsive img-rounded">

        </div>

        <div class="col-sm-9">


                {!! Form::model($user, ['method'=>'PATCH','action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}


                <div class="form-group">

                    {!! Form::label('name','Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}<br>
                </div>

                <div class="form-group">
                    {!! Form::label('email','Email:') !!}
                    {!! Form::email('email', null, ['class'=>'form-control']) !!}<br>
                </div>

                <div class="form-group">
                    {!! Form::label('role_id','Role:') !!}
                    {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}<br>
                </div>

                <div class="form-group">
                    {!! Form::label('is_active','Status:') !!}
                    {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'form-control']) !!}<br>
                </div>

                <div class="form-group">
                    {!! Form::label('photo_id', 'Featured Image:') !!}
                    {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}<br>
                </div>

                <div class="form-group">
                    {!! Form::label('password','Password:') !!}
                    {!! Form::password('password', ['class'=>'form-control']) !!}<br>
                </div>

                <div class="form-group">
                    {{--   CAN JUST LEAVE IT AS SUBMIT()   THIS SHOWS HOW TO CUSTOMIZE BUTTON AND ADD CLASS TO IT      --}}
                    {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}


        </div>
    </div>
    <div class="row">
        @include('includes.form-error')
    </div>




@stop


