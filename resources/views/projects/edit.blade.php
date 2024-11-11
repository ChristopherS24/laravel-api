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

        <form method="post" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data">
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

          <div class="mb-3">
            <label for="cover" class="form-label">Immagine:</label>
            <input type="file" class="form-control" id="cover" name="cover">

            @if ($project->cover)
                <div class="mt-2">
                  <h3>
                    Copertina attuale:
                  </h3>
                  <img src="{{ asset('storage/'.$project->cover) }}" alt="{{ $project->title }}" style="height: 125px;">

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="i" id="remove_cover" name="remove_cover">
                    <label for="remove-cover" class="form-check-label">
                      Rimuovi copertina:
                    </label>
                  </div>
                </div>
            @endif

          </div>

          <button type="submit" class="btn btn-primary">Modifica</button>
          
        </form>
        
      </div>
    </div>
    
@endsection
