@extends('layout')

@section('content')
    <h1>Create a new project</h1>

    <form method="POST" action="/projects">
    @csrf
        <div class="field">
            <label for="title" class="label">Title</label>
            <div class="control">
                <input type="text" name="title" placeholder="Project title"
                    class="input {{ $errors->has('title') ? 'is-danger' : '' }}"
                    value="{{ old('title') }}">
            </div>
        </div>
        <div class="field">
            <label for="description" class="label">Description</label>
            <div class="control">
                <textarea name="description" placeholder="Project descrption"
                        class="input {{ $errors->has('title') ? 'is-danger' : '' }}"
                        >{{ old('description') }}</textarea>
            </div>
        </div>
        <div clss="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>
        @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection