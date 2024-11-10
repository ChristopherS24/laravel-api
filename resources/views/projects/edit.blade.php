@extends('layouts.app')

@section('page-title', 'Modifica')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                      Modifica:
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
      <div class="col">

        <form method="post" action="{{ route('projects.update', $project->id) }}">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input value="{{ $project->title }}" type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
          </div>

          <div class="mb-3">
              <label for="creation_date" class="form-label">Data di Creazione</label>
              <input value="{{ $project->creation_date }}" type="date" class="form-control" id="creation_date" name="creation_date" value="{{ $project->date_create }}">
          </div>

          <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            <input value="{{ $project->author }}" type="text" class="form-control" id="author" name="author" value="{{ $project->author }}">
          </div>

          <button type="submit" class="btn btn-primary">Modifica</button>
          
        </form>
        
      </div>
    </div>
    
@endsection
