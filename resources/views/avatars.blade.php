@extends('layouts.app') 
@section('content')

<div class="container">

    @if (!$avatars->isEmpty())
    <h1 class="text-center">YOUR AVATARS</h1><br>
    <div class="card-deck">
        @foreach($avatars as $key => $avatar)
        <div class="card">
            <img class="card-img-top" src="{{ URL::asset($avatar->img) }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $avatar->title }}
                </h5>
                
                <p class="card-text">
                  {{ $avatar->email }}
                </p>
            </div>
            
            <!-- Button trigger modal -->
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#edit">
                        Edit
                    </button> 
                </div>
                <div class="col">
                    <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#delete">
                        <img src="{{ asset("/img/garbage.png") }}"></img>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
    
     <div class="pull-right add">
        <button type="button" class="btn btn-primary btn-success btn-circle btn-xl" data-toggle="modal" data-target="#add">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"> <img src="{{ asset("/img/add.png") }}"></img></span>
        </button>
    </div>
    
    
</div>  

<!-- Modal edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            {!! Form::open(['route'=>'editAvatar', 'files' => true]) !!}
            <div class="modal-header">
                <h2 class="modal-title " id="editTitle">Edit your avatar</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img class="card-img-top" src="{{ asset("/img/default.png") }}" alt="Card image cap">
                        <div class="custom-file">
                            {!! Form::label('limg', 'Choose your avatar', ['class' => 'custom-file-label']) !!}
                            {!! Form::file('img', null, ['class' => 'custom-file-input']) !!}
                        </div>
                    </div>
                    <div class="col-8">
                        
                        <div class="form-group">
                            {!! Form::label('ltitle','Title') !!}
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('lemail','Email') !!}
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::label('thestatus', 'Status :') !!}
                        <div id="thestatus">
                            <div class="form-check form-check-inline">
                                {!! Form::radio('status', 'private', true, ['class' => 'form-check-input']) !!}
                                {!! Form::label('lstatus', 'Private', ['class' => 'form-check-label']) !!}
                            </div>

                            <div class="form-check form-check-inline">
                                {!! Form::radio('status', 'pro', false, ['class' => 'form-check-input']) !!} 
                                {!! Form::label('lstatus', 'Pro', ['class' => 'form-check-label']) !!}                                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                {!! Form::submit('Save changes', ['class' => 'btn btn-primary btn-success']) !!}                
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<!-- Modal add -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="addAvatar" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            {!! Form::open(['route' => 'storeAvatar', 'files' => true]) !!}
            <div class="modal-header">
                <h2 class="modal-title " id="addAvatar">Add new avatar</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img class="card-img-top" src="{{ asset("/img/default.png") }}" alt="Card image cap"><br><br>
                        <div class="custom-file">
                            {!! Form::label('img', 'Choose your avatar', ['class' => 'custom-file-label', 'for' => 'img']) !!}
                            {!! Form::file('img', null, ['class' => 'custom-file-input']) !!}
                        </div>
                    </div>
                    <div class="col-8">
                        
                        <div class="form-group">
                            {!! Form::label('title','Title') !!}
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email','Email') !!}
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
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
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                {!! Form::submit('Create', ['class' => 'btn btn-primary btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>


@isset ($avatar)
<!-- Modal delete -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="deleteTitle">Are you sure?</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary btn-danger" href="{{ route('deleteAvatar', ['avatar' => $avatar]) }}">Delete</a>
            </div>
        </div>
    </div>
</div>
@endisset

@endsection

