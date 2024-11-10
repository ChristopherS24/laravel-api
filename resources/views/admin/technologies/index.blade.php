@extends('layouts.app')

@section('page-title', 'Technology')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Tecnologie
                    </h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Nome 2</th>

                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($technologies as $technology)
                            <tr>
                              <th scope="row"> {{ $technology->id }} </th>
                              <td> {{ $technology->name }} </td>

                          @endforeach
                  
                      </tbody>
                    </table>
                  

                </div>
            </div>
        </div>
    </div>
@endsection
