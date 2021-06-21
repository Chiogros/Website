@extends ('layout')

@section('content')

<form method="POST" action="{{ url('projects') }}">

    @csrf

    <!-- Title -->
    <label for="title">{{ __('project.project_title') }}</label>
    <input type="text" id="title" name="title" value="{{ old('title') }}"><br>
    @error('title')
        <p class="error_message">{{ __('project.title_empty_error') }}</p>
    @enderror

    <!-- Summary -->
    <label for="summary">{{ __('project.project_summary') }}</label>
    <input type="text" id="summary" name="summary" value="{{ old('summary') }}"><br>
    @error('summary')
        <p class="error_message">{{ __('project.summary_empty_error') }}</p>
    @enderror

    <!-- Image -->
    <label for="image">{{ __('project.project_image') }}</label>
    <input type="file" id="image" name="image" alt="{{ __('project.choosen_image') }}" value="{{ old('image') }}" accept="image/*"><br>

    <!-- BeginDate -->
    <label for="beginDate">{{ __('project.project_beginDate') }}</label>
    <input type="date" id="beginDate" name="beginDate" value="{{ old('beginDate') }}"><br>
    @error('beginDate')
        <p class="error_message">{{ __('project.beginDate_empty_error') }}</p>
    @enderror

    <!-- EndDate -->
    <label for="endDate">{{ __('project.project_endDate') }}</label>
    <input type="date" id="endDate" name="endDate" value="{{ old('endDate') }}"><br>
    @error('endDate')
        <p class="error_message">{{ __('project.endDate_error_before_beginDate') }}</p>
    @enderror

    <!-- Skills -->
    <label for="skills">{{ __('project.project_skills') }}</label>
    <input type="text" id="skills" name="skills" value="{{ old('skills') }}"><br>


    <input type="submit" value="{{ __('global.submit') }}"><br>

</form>

@endsection
