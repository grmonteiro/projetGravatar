@extends('layouts.app') 
@section('content')

<div class="container">
    
    <h1 class="text-center uppercase spaced">Add new avatar</h1>
    
    {!! Form::open(['route' => 'storeAvatar', 'files' => true, 'id' => 'storeAvatarForm', 'class' => 'needs-validation', 'novalidate']) !!}
    <div class="modal-body">
        <div class="row">
            <div class="col-4">
                <img id="thumb" class="card-img-top" src="{{ asset("/img/default.png") }}" alt="Uploaded image">
                <div class="custom-file">
                    {!! Form::label('img', 'Choose your avatar', ['class' => 'custom-file-label', 'for' => 'img', 'id' => 'limg']) !!}
                    {!! Form::file('img', null, array('class' => 'custom-file-input')) !!}
                    <div class="invalid-feedback">
                        You haven't selected an image
                    </div>
                </div>
                
            </div>
            <div class="col-8">
                        
                <div class="form-group">
                    {!! Form::label('title','Title') !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
                    <div class="invalid-feedback">
                        No title given
                    </div>
                </div>
                

                <div class="form-group">
                    {!! Form::label('email','Email') !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                    <div class="invalid-feedback">
                        No email address given
                    </div>
                </div>
                

                {!! Form::label('thestatus', 'Status :') !!}
                <div id="thestatus">
                    <div class="form-check form-check-inline">
                        {!! Form::radio('status', 'private', true, ['class' => 'form-check-input']) !!}
                        {!! Form::label('status', 'Private', ['class' => 'form-check-label']) !!}
                    </div>

                    <div class="form-check form-check-inline">
                        {!! Form::radio('status', 'pro', false, ['class' => 'form-check-input']) !!} 
                        {!! Form::label('status', 'Pro', ['class' => 'form-check-label']) !!}                                                         
                    </div>
                </div>

            </div>                    
        </div>
    </div>
    <div class="modal-footer">
        <a class="btn btn-secondary" href="{{ route('avatars') }}">Cancel</a>
        {!! Form::submit('Create', ['class' => 'btn btn-primary btn-success']) !!}
    </div>
{!! Form::close() !!}

@endsection

