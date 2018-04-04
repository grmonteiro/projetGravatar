@extends('layouts.app') 
@section('content')



<div class="container">
    
    <h1 class="text-center">YOUR AVATARS</h1><br>
    
    
    
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="{{ asset("/img/default.png") }}" alt="Card image cap">
            
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
      
        <div class="card">
            <img class="card-img-top" src="{{ asset("/img/default.png") }}" alt="Card image cap">
            
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
        
        
        <div class="card">
            <img class="card-img-top" src="{{ asset("/img/default.png") }}" alt="Card image cap">
            
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
        
        <div class="card">
            <img class="card-img-top" src="{{ asset("/img/default.png") }}" alt="Card image cap">
            
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
      <!-- https://bootsnipp.com/snippets/featured/circle-button -->
    
   
    </div>
    
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
            <div class="modal-header">
                <h2 class="modal-title " id="editTitle">Edit your avatar</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4"><img class="card-img-top" src="{{ asset("/img/default.png") }}" alt="Card image cap"></div>
                    
                    <div class="col-8">
                        
                        {!! Form::open(['method'=>'POST']) !!}
                        
                             <div class="form-group">
                                 
                                {!! Form::label('ltitle','Title', null,  array(
                                    'for' => 'Title',
                                )) !!}
                                {!! Form::text('title', null,  array(
                                    'class' => 'form-control',
                                    'id' => 'Title',
                                    'placeholder' => 'Enter title',
                                )) !!}
                                <br>
                                {!! Form::label('lemail','Email', null,  array(
                                    'for' => 'Email',
                                )) !!}
                                {!! Form::email('email', null,  array(
                                    'class' => 'form-control',
                                    'id' => 'Email',
                                    'aria-describedby' => 'emailHelp',
                                    'placeholder' => 'Enter email',
                                )) !!}
                                <br>
                                <div id="Status">
                                    <div class="form-check form-check-inline" >
                                        {!! Form::radio('inlineRadioOptions', 'option1', null,  array(
                                            'class' => 'form-check-input',
                                            'id' => 'Private',
                                        )) !!}
                                        {!! Form::label('lprivate','Private', null,  array(
                                            'class' => 'form-check-label',
                                            'for' => 'Private',
                                        )) !!}
                                    </div>
                                    <div class="form-check form-check-inline" >
                                        {!! Form::radio('inlineRadioOptions', 'option2', null,  array(
                                            'class' => 'form-check-input',
                                            'id' => 'Pro',
                                        )) !!}
                                        {!! Form::label('lpro','Pro', null,  array(
                                            'class' => 'form-check-label',
                                            'for' => 'Pro',
                                        )) !!}
                                    </div>
                                </div>
                                
                            </div>
                            
                        {!! Form::close() !!}
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                {!! Form::submit('Cancel', array(
                    'class' => 'btn btn-secondary',
                    'data-dismiss' => 'modal',
                )) !!}
                
                {!! Form::submit('Save changes', array(
                    'class' => 'btn btn-primary btn-success',
                )) !!}
            </div>
        </div>
    </div>
</div>

<!-- Modal add -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="addAvatar" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title " id="addAvatar">Create your avatar</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img class="card-img-top" src="{{ asset("/img/default.png") }}" alt="Card image cap"><br><br>
                        <div class="custom-file">
                            {!! Form::file('image', array(
                                'class' => 'custom-file-input',
                                'id' => 'customFile',
                                'required' => 'true',
                            )) !!}
                            {!! Form::label('limage','Choose your avatar',  array(
                                'class' => 'custom-file-label',
                                'for' => 'customFile',
                            )) !!}
                        </div>
                    </div>
                    <div class="col-8">
                        
                        {!! Form::open(['method'=>'POST']) !!}
                        
                             <div class="form-group">
                                 
                                {!! Form::label('ltitle','Title', null,  array(
                                    'for' => 'Title',
                                )) !!}
                                {!! Form::text('title', null,  array(
                                    'class' => 'form-control',
                                    'id' => 'Title',
                                    'placeholder' => 'Enter title',
                                )) !!}
                                <br>
                                {!! Form::label('lemail','Email', null,  array(
                                    'for' => 'Email',
                                )) !!}
                                {!! Form::email('email', null,  array(
                                    'class' => 'form-control',
                                    'id' => 'Email',
                                    'aria-describedby' => 'emailHelp',
                                    'placeholder' => 'Enter email',
                                )) !!}
                                <br>
                                <div id="Status">
                                    <div class="form-check form-check-inline" >
                                        {!! Form::radio('inlineRadioOptions', 'option1', null,  array(
                                            'class' => 'form-check-input',
                                            'id' => 'Private',
                                        )) !!}
                                        {!! Form::label('lprivate','Private', null,  array(
                                            'class' => 'form-check-label',
                                            'for' => 'Private',
                                        )) !!}
                                    </div>
                                    <div class="form-check form-check-inline" >
                                        {!! Form::radio('inlineRadioOptions', 'option2', null,  array(
                                            'class' => 'form-check-input',
                                            'id' => 'Pro',
                                        )) !!}
                                        {!! Form::label('lpro','Pro', null,  array(
                                            'class' => 'form-check-label',
                                            'for' => 'Pro',
                                        )) !!}
                                    </div>
                                </div>
                                
                            </div>
                            
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                {!! Form::submit('Cancel', array(
                    'class' => 'btn btn-secondary',
                    'data-dismiss' => 'modal',
                )) !!}
                
                {!! Form::submit('Create', array(
                    'class' => 'btn btn-primary btn-success',
                )) !!}
            </div>
        </div>
    </div>
</div>


            
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
                {!! Form::submit('Cancel', array(
                    'class' => 'btn btn-secondary',
                    'data-dismiss' => 'modal',
                )) !!}
                
                {!! Form::submit('Delete', array(
                    'class' => 'btn btn-danger btn-success',
                )) !!}
            </div>
        </div>
    </div>
</div>
@endsection