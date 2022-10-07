@extends('page')
@section('title','Liste des cours')
@section('content')
<div class="filter-btn-section">
    <div class="filter-div">
        <button class="filter-btn">Trier</button>
    </div>
    <div class="filter-div">
        <button class="filter-btn">Filtrer</button>
    </div>
</div>

<div class="filter-section">
    <p>Catégorie :</p>
    <ul>
    <li><label for="categories"><input type="checkbox" name="exercice" value="Exercice">Exercice</label></li>
    <li><label for="categories"><input type="checkbox" name="exercice" value="Cours">Cours</label></li>
    </ul>
    <p>Thèmes : </p>
    <ul>
        @if(!empty($themes))
        @foreach ($themes as $theme)
        <li><label for="themes"><input type="checkbox" name="themes[]" value="{{ $theme->id }}">{{ $theme->name }}</label></li>
        @endforeach
        @endif
    </ul>
</div>
<ul class="course-list">
    @foreach ($courses as $course)

    <li class="course">
        <div>
            <p class="course-name">{{ $course->name }}</p>
            <p class="course-description">{{ $course->description }}</p>
            <p class="course-date">{{ $course->created_at }}</p>
        </div>
        <ul class="theme-list">
            @if(!empty($course->themes))
            @foreach ($course->themes as $theme)
            <li class="theme {{ $theme->name }}">{{ $theme->name }}</li>
            @endforeach
            @endif
        </ul>
        <a class="edit-link"href="{{@route('editcourse',$course->id)}}"><i class="fa-light fa-pen"></i></a>
        
    </li>

    @endforeach
</ul>
<a class="add-button" href="{{@route('storecourse')}}">Ajoutez un cours</a>
@endsection