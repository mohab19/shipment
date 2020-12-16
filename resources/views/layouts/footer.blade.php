<!-- start footer -->
<footer class="py-3 d-flex align-items-center">
    <div class="container d-flex justify-content-center">
        <p>{{$settings->where('name', 'copyrights')->first()->value}} &copy;</p>
    </div>
</footer>

<div class="footer-bottom  text-center">
    <div class="container-fluid">
        <div class="footer-links">
            <a href="{{$settings->where('name', 'facebook_url')->first()->value}}" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="{{$settings->where('name', 'twitter_url')->first()->value}}" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="{{$settings->where('name', 'youtube_channel')->first()->value}}" target="_blank" >
                <i class="fab fa-youtube"></i>
            </a>
            <a href="{{$settings->where('name', 'linkedin')->first()->value}}" target="_blank">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </div>
</div>
<!-- end footer -->
