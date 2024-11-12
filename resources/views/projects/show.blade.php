@extends('layouts.app')

@section('page-title', 'Progetto')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Progetto
                    </h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Data Creazione</th>
                            <th scope="col">Autore</th>

                            <th scope="col">Cover</th>

                          </tr>
                        </thead>
                        <tbody>

                            <tr>
                              <th scope="row"> {{ $project->id }} </th>
                              <td> {{ $project->title }} </td>
                              <td> {{ $project->creation_date }} </td>
                              <td> {{ $project->author }} </td>

                              <td> 
                                <img src=" {{ asset('/storage/' . $project->cover) }} " alt=" {{ $project->title }} "  class="card-img-bottom"> 
                                <img src="" {{ asset('storage/'. $project->cover) }} alt=" {{ $project->title }} " class="card-img-bottom">
                              </td>

                            </tr>

                      </tbody>
                    </table>
                  

                </div>
            </div>
        </div>
    </div>
@endsection
