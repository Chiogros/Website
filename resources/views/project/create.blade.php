@extends ('layout')

@section('content')

<form method="POST" action="{{ url('projects') }}">

    @csrf

    <label for="title">{{ __('project.project_title') }}</label>
    <input type="text" id="title" name="title"><br>

    <label for="summary">{{ __('project.project_summary') }}</label>
    <input type="text" id="summary" name="summary"><br>

    <label for="image">{{ __('project.project_image') }}</label>
    <input type="image" id="image" name="image" alt="{{ __('project.choosen_image') }}"><br>

    <label for="beginDate">{{ __('project.project_beginDate') }}</label>
    <input type="date" id="beginDate" name="beginDate"><br>

    <label for="endDate">{{ __('project.project_endDate') }}</label>
    <input type="date" id="endDate" name="endDate"><br>

    <label for="skills">{{ __('project.project_skills') }}</label>
    <input type="text" id="skills" name="skills"><br>

    <input type="submit" value="{{ __('global.submit') }}"><br>


</form>

@endsection
