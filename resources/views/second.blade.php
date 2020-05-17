@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <h1>Tickets Last Month ({{ count($ticketsLastMonth) }})</h1>
                @foreach($ticketsLastMonth as $t)
                    {{ $t }}
                @endforeach
            </div>

            <div class="col">

                <h1>Tickets Last Ten Months ({{ count($ticketsLastTenMonths) }}) </h1>
                @foreach($ticketsLastTenMonths as $t)
                    {{ $t }}
                @endforeach
            </div>
        </div>
    </div>
@endsection
