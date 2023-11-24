<!-- Start of Footer section
 ============================================= -->
<footer id="ori-footer" class="ori-footer-section footer-style-one">
    <div class="container">
        <div class="ori-footer-title text-center text-uppercase">
          <a href="/iletisim">  <h2> Bize <span>Ulaşın</span> <i class="fas fa-arrow-right"></i></h2></a>
        </div>
        <div class="ori-footer-widget-wrapper">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="ori-footer-widget">
                        <div class="logo-widget">
                            <a href="#"><img src="{{ asset('images/' . $settings->image ?? '') }}" alt=""
                                    style="width:180px"></a>
                            <p>
                                {!! $settings->description ?? '' !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ori-footer-widget">
                        <div class="menu-location-widget ul-li-block">
                            <h2 class="widget-title text-uppercase">Hizmetlerimiz</h2>
                            <ul>
                                @php
                                    $count1 = 0;
                                @endphp
                                @foreach ($services_categories as $item)
                                    @if ($count1 < 4)
                                        <li>
                                            <a
                                                href="/hizmetler/{{ $item->id ?? '' }}/{{ $item->slug ?? '' }}">{{ $item->title ?? '' }}</a>
                                        </li>
                                    @endif

                                    @php
                                        $count1++;
                                    @endphp
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ori-footer-widget">
                        <div class="menu-location-widget ul-li-block">
                            <h2 class="widget-title text-uppercase">Hizmetlerimiz</h2>
							<ul>
                                @php
                                    $count1 = 0;
                                @endphp
                                @foreach ($services_categories as $item)
                                    @if ($count1 >= 4 && $count1 <= 8)
                                        <li>
                                            <a
                                                href="/hizmetler/{{ $item->id ?? '' }}/{{ $item->slug ?? '' }}">{{ $item->title ?? '' }}</a>
                                        </li>
                                    @endif

                                    @php
                                        $count1++;
                                    @endphp
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ori-footer-widget">
                        <div class="contact-widget ul-li-block">
                            <h2 class="widget-title text-uppercase">İletişim</h2>
                            <div class="contact-info">
                                <span>{{ $settings->address ?? '' }} </span>
                                <span>{{ $settings->phone ?? '' }}</span>
                                <a href="#">{{ $settings->email ?? '' }}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="ori-footer-copyright d-flex justify-content-between">
            <div class="ori-copyright-text">
                © 2022 All Right Softwareplas+
            </div>
            <div class="ori-copyright-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer section
 ============================================= -->

<!-- For Js Library -->
<script src="{{ asset('theme/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/appear.js') }}"></script>
<script src="{{ asset('theme/assets/js/slick.js') }}"></script>
<script src="{{ asset('theme/assets/js/twin.js') }}"></script>
<script src="{{ asset('theme/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/knob.js') }}"></script>
<script src="{{ asset('theme/assets/js/jquery.filterizr.js') }}"></script>
<script src="{{ asset('theme/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/rbtools.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/rs6.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/jarallax.js') }}"></script>
<script src="{{ asset('theme/assets/js/jquery.inputarrow.js') }}"></script>
<script src="{{ asset('theme/assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/jquery.marquee.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/script.js') }}"></script>
</body>

</html>
