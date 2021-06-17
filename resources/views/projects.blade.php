@extends('layout')

@section('content')
    <h1>{{ __('projects.projects')  }}</h1>

    <p>{{ __('projects.summary') }}</p>

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
