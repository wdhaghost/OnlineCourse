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
            <input class="input" type="date" name="date" id="date">
        </div>

        <div class="form-itm">
            <label for="coursefile">fichier du cours</label>
            <input type="file" name="coursefile" id="coursefile">
        </div>
        <div>
            <label for="themes">thèmes:</label>
            <ul>
                @if(!empty($themes))
                    @foreach ($themes as $theme)

                        <li><label for="theme[]"><input type="checkbox" name="themes[]" value="{{ $theme->id }}">{{ $theme->name }}</label></li>
                    @endforeach
                @endif
                <li class="form-itm new-theme">
                    <input type="text" name="new-theme" id="new-theme" value="">
                    <button class="btn" id="add-theme-btn" data-route="{{@route('api.storetheme')}}">+</button>
                </li>
            </ul>
        </div>

        <input class='btn' type="submit" value="Ajouter le cours">

    </form>
</div>
@endsection