@extends('layouts.main')


@section('title') Action Comics
@endsection



@section('comic')
    

<section id="comic">

    <div class="blu-bar">
        <div class="container">
            <img src="{{ $comics['thumb'] }}" alt="{{ $comics['title'] }}">
        </div>
    </div>
    <div class="container">
        <div class="main-section">
            <div class="text">
                    <h4>{{ $comics['title'] }}</h4>
                    <div class="info-purchase">
                        <div class="price-box">
                            <h6>U.S. Price: {{ $comics['price'] }}</h6>
                            <h6>AVAILABLE</h6>
                        </div>
                        <div class="availability">
                            <h6>Check Availability</h6>
                           
                            
                        </div>
                    </div>
                    <div class="description">
                        <p>
                            {{ $comics['description']  }}
                        </p>
                    </div>

                </div>
            <div class="advertisement">
                <h5 id="title-advertisement">Advertisement</h5>
                <img src="{{ asset('images/adv.jpg') }}" alt="Advertisment">
            </div>
        </div>
    </div>
    <section id="credits">
        <div class="container">
            <div class="credits-container">
                <div class="talent col-6">
                    <h4>Talent</h4>
                    <div class="row">
                        <div class="made-by">
                            Art by:
                        </div>
                        <div class="by-items">
                            @foreach ($comics['artists'] as $artist)
                                {{$artist}},
                                @if ($loop->last) {{ $artist }}. 
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="made-by">
                            Written by:
                        </div>
                        <div class="by-items">
                            @foreach ($comics['writers'] as $writer)
                                {{$writer}},
                                @if ($loop->last) {{ $writer }}. 
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="specs col-6">
                    <h4>Specs</h4>
                    <div class="row">
                        <div class="made-by">
                            Series:
                        </div>
                        <div class="by-items">
                           {{ $comics['series'] }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="made-by">
                            U.S. Price:
                        </div>
                        <div class="by-items">
                           {{ $comics['price'] }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="made-by">
                            On Sale Date:
                        </div>
                        <div class="by-items">
                           {{ $comics['sale_date'] }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</section>
@endsection
