<header>
    <div class="header-top">
        <div class="card-info">
            Dc Power Visa 
        </div>
        <div class="additional-infor">Additional DC Sites</div>

    </div>
    <div class="container">
        <div class="header-bottom">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('images/dc-logo.png') }}" alt="Logo"></a>
                
            </div>
            <div class="navbar">
                <nav>
                    <ul>
                        @foreach ($links as $link)
                            
                        <li><a class="{{ request()->routeIs($link['route']) ? "active" : "" }}" href="{{ route($link['route']) }}">{{ $link['title'] }}</a></li>
                     
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="search">
                <input type="search" class="search-field" placeholder="Search">
            </div>
        </div>  
    </div>





</header>



{{-- 
    
    class="{{ request()->routeIs($link) }}"
    
    
    --}}