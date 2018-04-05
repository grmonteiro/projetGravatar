@extends('layouts.app') 
@section('content')

<div class="container">

    @if (!$avatars->isEmpty())
    @php $nbAvatar = 0;
    @endphp
    <h1 class="text-center">YOUR AVATARS</h1><br>
    <div class="card-deck">
        @foreach($avatars as $key => $avatar)
        @php $nbAvatar += 1;
        @endphp

        @if ($nbAvatar > 3)
        @php $nbAvatar = 1;
        @endphp
    </div>
    <div class="card-deck">
        @endif
        
        <div class="card">
            <img class="card-img-top" src="{{ URL::asset($avatar->img) }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-center">
                    {{ $avatar->title }}
                </h5>
                <p class="card-text">
                    <strong>Email:</strong> {{ $avatar->email }}
                </p>
                <p class="card-text capitalize">
                    <strong>Status:</strong> {{ $avatar->status }}
                </p>
            </div>
            
            <!-- Button trigger delete -->
            <div class="suppression">
                <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#delete-{{$avatar->id}}">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="placeholder">
        <h1>You currently have no avatars...</h1>
        <h1>Press the green button to add a new one!</h1>
    </div>
    {{-- TODO --}}
    @endif
</div>

<div class="pull-right add">
    <button type="button" class="d-flex justify-content-center align-items-center text-center btn btn-primary btn-success btn-circle btn-xl" data-toggle="modal" data-target="#add">
        <i class="fas fa-plus"></i>
    </button>
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
                        <img id="thumb" class="card-img-top" src="{{ asset("/img/default.png") }}" alt="Uploaded image">
                        <div class="custom-file">
                            {!! Form::label('img', 'Choose your avatar', ['class' => 'custom-file-label', 'for' => 'img']) !!}
                            {!! Form::file('img', null, array('class' => 'custom-file-input', 'accept' => 'image/*')) !!}
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


@foreach($avatars as $key => $avatar)
<!-- Modal delete -->
<div class="modal fade" id="delete-{{$avatar->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteTitle" aria-hidden="true">
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
@endforeach

@endsection

