{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')



@section('content')
    <div class="content-section">
        <div class="hero-section">
            <div class="current-series">CURRENT SERIES</div>
        </div>
        <div class="container home">
            <div class="cards">
                @foreach ($comics as $comic)
                    <div class="card">
                        <div class="poster-img">
                            <img src="{{ $comic[0] }}" alt="Comic Thumb" />
                        </div>
                        <div class="series-title">{{ $comic[2] }}</div>
                    </div>
                @endforeach
            </div>
            <div class="load-more-btn">
                <a href="#">LOAD MORE</a>
            </div>
        </div>
    </div>
@endsection


@section('titlePage')
    home
@endsection
