@extends('page')
@section('title','Liste des cours')
@section('content')


<div class="filter-section">

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