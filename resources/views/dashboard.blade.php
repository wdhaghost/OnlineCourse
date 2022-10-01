@extends('page')
@section('title','Liste des cours')
@section('content')
<div class="filter-btn-section">
    <div class="filter-div">
        <button class="btn">Trier</button>
    </div>
    <div class="filter-div">
        <button class="btn">Filtrer</button>
    </div>
</div>

<div class="filter-section">
    <p>Catégorie :</p>
<ul>
@if(!empty($theme))
            @foreach ($themes as $theme)
            <li class="theme {{ $theme->name }}">{{ $theme->name }}</li>
            @endforeach
@endif
</ul>
    <p>Filtres : </p>
<ul>
@if(!empty($theme))
            @foreach ($themes as $theme)
            <li class="theme {{ $theme->name }}">{{ $theme->name }}</li>
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
            @if(!empty($theme))
            @foreach ($themes as $theme)
            <li class="theme {{ $theme->name }}">{{ $theme->name }}</li>
            @endforeach
            @endif
        </ul>
    </li>

    @endforeach
</ul>

@endsection