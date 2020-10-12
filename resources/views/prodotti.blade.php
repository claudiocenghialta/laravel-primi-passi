
@extends('layout.app')
@section('title','Prodotti')
@section('main')
    <div class="cards">
        <h2>Le lunghe</h2>
        <section>
            @foreach ($lunghe as $card)
                <div class="card">
                    <img src="{{$card['src']}} " alt="src="{{$card['src']}}>
                </div>
            @endforeach
        </section>
        <h2>Le corte</h2>
        <section>
            @foreach ($corte as $card)
                <div class="card">
                    <img src="{{$card['src']}} " alt="src="{{$card['src']}}>
                </div>
            @endforeach

        </section>
        <h2>Le cortissime</h2>
        <section>
            @foreach ($cortissime as $card)
                <div class="card">
                    <img src="{{$card['src']}} " alt="src="{{$card['src']}}>
                </div>
            @endforeach
        </section>
    </div>
@endsection
