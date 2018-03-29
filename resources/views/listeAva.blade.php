@extends('layouts.master') 
@section('title', 'Liste') 
@section('theForm')

    <ul class="thumbnails">
        <li class="span3">
            <div class="thumbnail">
                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
            </div>
            <div class="caption">
                <h4>Praesent commodo</h4>
                <p>Nullam Condimentum Nibh Etiam Sem</p>
                <a class="btn btn-mini" href="#">&raquo; Read More</a>
            </div>
        </li>
    </ul>
@endsection