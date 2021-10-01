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
    </div>

</section>