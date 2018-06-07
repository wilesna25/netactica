@extends('layouts.app')

@section('content')
                <div class="jumbotron text-center">
                    <h1>B A R B A D O S </h1>
                    <nav>
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="row">      
                    <h1 class="h3">Lista de ciudades</h1>
                </div>
                <div class="row">


                    <!-- forelse es usado cuando arra no tiene contenido -->
                     @forelse($cities as $city)
                        <div class="col-6">
                            <p class="card-text">
                                {{ $city->name }}
                                <a href="/hoteles/{{ $city->id }}">Ver Hoteles </a>
                            </p> 
                        </div>
                    @empty
                      <p>No hay ciudades </p>
                    @endforelse


                </div>
@endsection