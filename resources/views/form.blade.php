@extends('page')
@section('title','Ajouter un cours')
@section('content')
    <div class="form">
        <form action="{{@route('storecourse')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-itm">
                <label for="name">Nom du cours:</label>
                <input type="text" name="name" id="name">
    
            </div>
            <div class="form-itm">
    
                <label for="decription">Description du cours</label>
                <input type="text" name="description" id="description">
            </div>
            <div class="form-itm">
    
                <label for="date">date du cours</label>
                <input class="input"type="date" name="date" id="date">
            </div>
           
            <div class="form-itm">
                <label for="coursefile">fichier du cours</label>
                <input type="file" name="coursefile" id="coursefile">
    
            </div>
            
                <input class='submit-btn' type="submit" value="Ajouter le cours">
            
        </form>
    </div>
@endsection