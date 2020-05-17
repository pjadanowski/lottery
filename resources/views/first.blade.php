@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/first.css') }}">
@endsection


@section('content')
    <div class="wrapper">

        <div class="d-flex flex-column">

            <div class="counter d-flex justify-content-between">
                <div class="column">
                    <div class="bg">
                        <div class="number"></div>
                    </div>
                    <div class="text"></div>
                </div>
                <div class="column">
                    <div class="bg">
                        <div class="number"></div>
                    </div>
                    <div class="text"></div>
                </div>
                <div class="column">
                    <div class="bg">
                        <div class="number"></div>
                    </div>
                    <div class="text"></div>
                </div>
            </div>
        </div>




    </div>

@endsection

@section('js')
    <script src="{{ asset('js/first.js') }}">
@endsection

