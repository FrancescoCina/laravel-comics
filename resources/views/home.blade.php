@extends('layouts.main')

@section('title') Home
@endsection


@section('comics')
<section id="comics">
    <div class="container">
        <div class="comics-container">
            @foreach ($comics as $comic)
            <div class="card">
               
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <h5>{{ $comic['title'] }}</h5>
            </div>
                    
            @endforeach       
        </div>
        <div class="btn-container">
            <button class="btn btn-main" type="button">Load More</button>
        </div>
    </div>

</section>
@endsection

@section('services')
    <section id="services">
        <div class="container">
            <div class="services-container">
                <div class="service">
                    <img width="50px" src="{{ 'images/buy-comics-digital-comics.png' }}" alt="Digital Comics">
                    <h6>Digital Comics</h6>
                </div>
                <div class="service">
                    <img width="50px" src="{{ 'images/buy-comics-merchandise.png' }}" alt="Digital Comics">
                    <h6>DC Merchandise</h6>
                </div>
                <div class="service">
                    <img width="50px" src="{{ 'images/buy-comics-subscriptions.png' }}" alt="Digital Comics">
                    <h6>Subscription</h6>
                </div>
                <div class="service">
                    <img width="50px" src="{{ 'images/buy-comics-shop-locator.png' }}" alt="Digital Comics">
                    <h6>Comic Shop Locator</h6>
                </div>
                <div class="service">
                    <img width="50px" src="{{ 'images/buy-dc-power-visa.svg' }}" alt="Digital Comics">
                    <h6>DC Power Visa</h6>
                </div>
            </div>
        </div>
    </section>
@endsection