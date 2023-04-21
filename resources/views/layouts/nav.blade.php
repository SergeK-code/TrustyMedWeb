<nav class="nav p-2">
    <div class="w-100 d-flex justify-content-around">
        <div class="nav-image-container my-auto">
            <a href="/doctors">
                <img src="{{asset('assets/images/Home.png')}}" alt="">
            </a>
        </div>
        <div class="nav-image-container my-auto">
            <a href="/my_appointments">
                <img src="{{asset('assets/images/Calendar.png')}}" alt="">
            </a>
        </div>
        <div class="nav-image-container my-auto">
            <a href="/profile/{{auth()->user()->id}}">
                <img src="{{asset('assets/images/Profile.png')}}" alt="">
            </a>
        </div>
    </div>
</nav>