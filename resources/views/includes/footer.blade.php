<footer>
    <div class="container">
        <div class="top-footer">
            <div class="footer-links">
                <ul>
                    <h5>Dc Comics</h5>
                    @foreach ($links as $link)
                    <li><a href="{{ route($link['route']) }}">{{$link['title']}}</a></li> 
                    @endforeach
                </ul>
                <ul>
                    <h5>DC</h5>
                    <li><a href="">Terms Of Use</a></li>
                    <li><a href="">Privacy policy (New)</a></li>
                    <li><a href="">Ad Choices</a></li>
                    <li><a href="">Advertising</a></li>
                    <li><a href="">Jobs</a></li>
                    <li><a href="">Subscriptions</a></li>
                    <li><a href="">Talent Workshops</a></li>
                    <li><a href="">CPSC Certificates</a></li>
                    <li><a href="">Ratings</a></li>
                    <li><a href="">Shop Help</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
                <ul>
                    <h5>Sites</h5>
                    <li><a href="">DC</a></li>
                    <li><a href="">MAD Magazine</a></li>
                    <li><a href="">DC Kids</a></li>
                    <li><a href="">DC Universe</a></li>
                    <li><a href="">DC Power Visa</a></li>
                </ul>
                <ul>
                    <h5>Shop</h5>
                    <li><a href="">Shop DC</a></li>
                    <li><a href="">Shop DC Collectibles</a></li>
                </ul>
                <p>All site content TM and 2020 DC Entertainment, unless otherwise <span>noted here</span>. All Rights reserved.
                <br>
                 <span>Cookies Settings</span>
                </p>
            </div>
            <div class="bkg-logo">
                <img src="{{ asset('images/dc-logo-bg.png') }}" alt="Logo DC Background">
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="cols">
                <div class="button-col">
                    <div class="button">
                        <a href="">SIGN UP NOW!</a>
                    </div>
                </div>
                <div class="social-col">
                    <h3 class="mx-3">FOLLOW US</h3>
                    <img  class="mx-3"src="{{ asset('images/footer-facebook.png') }}" alt="Logo Facebook">
                    <img  class="mx-3"src="{{ asset('images/footer-twitter.png') }}" alt="Logo Twitter">
                    <img  class="mx-3"src="{{ asset('images/footer-youtube.png') }}" alt="Logo Youtube">
                    <img  class="mx-3"src="{{ asset('images/footer-pinterest.png') }}" alt="Logo Pinteres">
                    <img  class="mx-3"src="{{ asset('images/footer-periscope.png') }}" alt="Logo Periscope">


                </div>
            </div>
        </div>
    </div>
</footer>