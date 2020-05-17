@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center my-5">Lottery</h1>


        <div class="row justify-content-center">
            <div class="col-6">
                <div class="row justify-content-between">
                    <a href="{{ route('tasks.first') }}">Zadanie 1</a>
                    <a href="{{ route('tasks.second') }}">Zadanie 2</a>
                    <a href="{{ route('tasks.third') }}">Zadanie 3</a>
                </div>
            </div>
        </div>
    </div>
@endsection
