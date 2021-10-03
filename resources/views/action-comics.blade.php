@extends('layouts.main')


@section('title') Action Comics
@endsection



@section('action-comics')
    

<section id="action-comics">
    <div class="blu-bar">
        <div class="container"></div>
    </div>
    <div class="container">
        <div class="main-section">
            <div class="text">
                    <h4>{{ $comics[0]['title'] }}</h4>
                    <div class="info-purchase">
                        <div class="price-box">
                            <h6>U.S. Price: {{ $comics[0]['price'] }}</h6>
                            <h6>AVAILABLE</h6>
                        </div>
                        <div class="availability">
                            <h6>Check Availability</h6>
                           
                            
                        </div>
                    </div>
                    <div class="description">
                        <p>
                            {{ $comics[0]['description']  }}
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
                            @foreach ($comics[0]['artists'] as $artist)
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
                            @foreach ($comics[0]['writers'] as $writer)
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
                           {{ $comics[0]['series'] }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="made-by">
                            U.S. Price:
                        </div>
                        <div class="by-items">
                           {{ $comics[0]['price'] }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="made-by">
                            On Sale Date:
                        </div>
                        <div class="by-items">
                           {{ $comics[0]['sale_date'] }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</section>
@endsection
