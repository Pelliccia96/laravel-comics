<footer class="bg-footer">
    <div class="container py-5 overflow-hidden">
        <div class="text-white d-flex gap-4">
            <div>
                <ul>
                    <li class="list-item">
                        <h4>DC Comics</h4>
                        @foreach ($footerArray[0] as $footerElement)
                        <div>
                            <a href="#">{{ $footerElement }}</a>
                        </div>
                        @endforeach
                    </li>
                </ul>
                <ul>
                    <li class="list-item">
                        <h4>Shop</h4>
                        @foreach ($footerArray[1] as $footerElement)
                        <div>
                            <a href="#">{{ $footerElement }}</a>
                        </div>
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="d-flex gap-3">
                <ul>
                    <li class="list-item">
                        <h4>DC</h4>
                        @foreach ($footerArray[2] as $footerElement)
                        <div>
                            <a href="#">{{ $footerElement }}</a>
                        </div>
                        @endforeach
                    </li>
                </ul>
                <ul>
                    <li class="list-item">
                        <h4>Sites</h4>
                        @foreach ($footerArray[3] as $footerElement)
                        <div>
                            <a href="#">{{ $footerElement }}</a>
                        </div>
                        @endforeach
                    </li>
                </ul>
            </div>
            <!-- Footer DC Logo bg -->
            <div class="footer-logo-bg">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
            </div>
        </div>
        <div class="text-secondary ps-4 mt-2">
            <small> Sites Content TM and &#xA9; 2020 DC Entertainment, unless otherwise <a href="#" class="text-primary">noted here</a>. All rights reserved. <br><a href="#" class="text-primary">Cookies Settings</a></small>
        </div>
    </div>
    <section class="bg-dark">
        <div class="container d-flex justify-content-between align-items-center py-4">
            <div>
                <button class="btn btn-dark border border-2 border-primary p-2 pb-1">
                    <h5 class="text-white">SIGN-UP NOW!</h5>
                </button>
            </div>
            <div class="d-flex justify-content-center align-items-center gap-3">
                <div><a href=""><h5 class="text-primary fw-bold">FOLLOW US</h5></a></div>
                @foreach ($footerImgs as $img)
                <div><a href="#"><img src="{{ Vite::asset($img) }}"></a></div>
                @endforeach
            </div>
        </div>
    </section>
</footer>
