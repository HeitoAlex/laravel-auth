@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @method('POST')
                @csrf

                <div class="mb-3">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="url">Project link:</label>
                    <input type="url" name="url" id="url" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" value="Create new project" class="btn btn-primary btn-sm">
                <input type="reset" value="Reset fields" class="btn btn-warning btn-sm">
            </form>
        </div>
    </div>
</div>
@endsection
