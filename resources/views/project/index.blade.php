@extends('layout')

@section('content')
    <h1>{{ __('project.projects')  }}</h1>

    <p>{{ __('project.summary') }}</p>

    @auth
        <h3><a href="project.create">{{ __('project.add_new_project') }}</a></h3>
    @endauth

    <!-- projects display -->
    @foreach($projects as $project)
        <article>

            <h2>{{ $project->title }}</h2>
            <div class="article-content">

                @if ($project->image)
                    <img src="{{ $project->image }}" alt="{{ $project->title }}" >
                @endif
                <p>
                    {{ $project->summary }}
                </p>
            </div>
        </article>
    @endforeach

@endsection
