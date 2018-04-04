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
                        <!--
                        <form>
                          <div class="form-group">
                            <label for="Title">Title :</label>
                            <input type="text" class="form-control" id="Title" placeholder="Enter title"><br>
                            <label for="Email">Email address :</label>
                            <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email"><br>
                            <label for="Status">Status :</label>
                            <div id="Status">
                                <div class="form-check form-check-inline" >
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Private" value="option1">
                                  <label class="form-check-label" for="Private">Private</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Pro" value="option2">
                                  <label class="form-check-label" for="Pro">Pro</label>
                                </div>
                            </div>
                          </div>
                        </form>
                        -->
                        {!! Form::open(['method'=>'POST']) !!}

                            {!! Form::label('ltitle','Title') !!}
                            {!! Form::text('title') !!}
                            <br>
                            {!! Form::label('lemail','Email') !!}
                            {!! Form::email('email') !!}
                
                        {!! Form::close() !!}
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary btn-success">Save changes</button>
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
                              <input type="file" class="custom-file-input" id="customFile" required>
                              <label class="custom-file-label" for="customFile">Choose your avatar</label>
                         </div>
                    </div>
                    <div class="col-8">
                        <form>
                          <div class="form-group">
                             <label for="Title">Title :</label>
                            <input type="text" class="form-control" id="Title" placeholder="Enter title" required><br>
                            <label for="Email">Email address :</label>
                            <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email" required><br>
                            <label for="Status">Status :</label>
                            <div id="Status">
                                <div class="form-check form-check-inline" >
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Private" value="option1">
                                  <label class="form-check-label" for="Private">Private</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Pro" value="option2">
                                  <label class="form-check-label" for="Pro">Pro</label>
                                </div>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary btn-success">Create</button>
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
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection

