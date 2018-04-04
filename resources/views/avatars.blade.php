@extends('layouts.app') 
@section('content')

<div class="container">

    <h1>New Avatar</h1>
    {!! Form::open(['route' => 'storeAvatar', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('title', 'Image title') !!}
        {!! Form::text('title') !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!} 
        {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => "example@email.com",
        "aria-describedby" => "emailHelp")) !!}
        <small id="emailHelp" class="form-text text-muted">Choose the e-mail which will be linked to your avatar.</small>
    </div>
    <div class="form-group">
        <p>
            {!! Form::label('img', 'Choose your avatar (max 16Mb)', array('class' => 'btn btn-primary')) !!}
            <br> 
            {!! Form::file('img', array('style' => 'display: none')) !!}
        </p>
    </div>
    <div>
        {!! Form::submit('Submit new avatar', array('class' => 'btn btn-success')) !!}
    </div>
    {!! Form::close() !!}

    @if ($avatars != null)
    <h1 class="text-center">YOUR AVATARS</h1><br>
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="{{ asset("/img/ChateauBayonne.jpg") }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                    email
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
    </div>
    @endif
</div>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title " id="editTitle">Edit your avatar</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4"><img class="card-img-top" src="{{ asset(" /img/ChateauBayonne.jpg ") }}" alt="Card image cap"></div>
                    <div class="col-8">
                        <form>
                            <div class="form-group">
                                <label for="Title">Title</label>
                                <input type="text" class="form-control" id="Title" placeholder="Enter title"><br>
                                <label for="Email">Email address</label>
                                <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Private" value="option1">
                                    <label class="form-check-label" for="Private">Private</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Pro" value="option2">
                                    <label class="form-check-label" for="Pro">Pro</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-success">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection