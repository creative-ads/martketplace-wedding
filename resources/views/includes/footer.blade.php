<footer class="section-footer mt-5 border-top" style="background-color: #B500FF  !important;">
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-12">
                {{-- <div class="row">
          <div class="col-12 col-lg-3">
            <h5>FEATURES</h5>
            <ul class="list-unstyled">
              <li><a href="#">Reviews</a></li>
              <li><a href="#">Community</a></li>
              <li><a href="#">Social Media Kit</a></li>
              <li><a href="#">Affiliate</a></li>
            </ul>
          </div>
          <div class="col-12 col-lg-3">
            <h5>ACCOUNT</h5>
            <ul class="list-unstyled">
              <li><a href="#">Refund</a></li>
              <li><a href="#">Security</a></li>
              <li><a href="#">Reward</a></li>
            </ul>
          </div>
          <div class="col-12 col-lg-3">
            <h5>COMPANY</h5>
            <ul class="list-unstyled">
              <li><a href="#">Career</a></li>
              <li><a href="#">Help Center</a></li>
              <li><a href="#">Media</a></li>
            </ul>
          </div>
          <div class="col-12 col-lg-3">
            <h5>GET CONNECTED</h5>
            <ul class="list-unstyled">
              <li><a href="#">Jakarta Selatan</a></li>
              <li><a href="#">Indonesia</a></li>
              <li><a href="#">0821 - 2222 - 8888</a></li>
              <li><a href="#">support@nomads.id</a></li>
            </ul>
          </div>
        </div> --}}
                <div class="row content justify-content-between">
                    <div class="col-lg-4 col-sm-12 logo-wrapper flex-column align-items-center text-lg-start text-center align-items-lg-start">
                        <img height="70px" class="ms-lg-4 ps-lg-3" src="{{ asset('uploads/'.$global_setting_data->logo) }}" alt="">

                        <div class="d-flex social mt-4">
                            @if ($global_setting_data->facebook != '')
                            <a target="_blank" href="{{ $global_setting_data->facebook }}" title="Facebook" class="social-link">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            @endif

                            @if ($global_setting_data->twitter != '')
                            <a target="_blank" href="{{ $global_setting_data->twitter }}" title="Twitter" class="social-link">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            @endif

                            @if ($global_setting_data->instagram != '')
                            <a target="_blank" href="{{ $global_setting_data->instagram }}" title="Instagram" class="social-link">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            @endif

                            @if ($global_setting_data->youtube != '')
                            <a target="_blank" href="{{ $global_setting_data->youtube }}" title="Youtube" class="social-link">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                            @endif

                            @if ($global_setting_data->pinterest != '')
                            <a target="_blank" href="{{ $global_setting_data->pinterest }}" title="Pinterest" class="social-link">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                            @endif

                            @if ($global_setting_data->linkedin != '')
                            <a target="_blank" href="{{ $global_setting_data->linkedin }}" title="Linkedin" class="social-link">
                                <i class="fa fa-link" aria-hidden="true"></i>
                            </a>
                            @endif

                            @if ($global_setting_data->footer_phone != '')
                            <a target="_blank" href="{{ $global_setting_data->footer_phone }}" title="Phone" class="social-link">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </a>
                            @endif

                            @if ($global_setting_data->footer_email != '')
                            <a target="_blank" href="{{ $global_setting_data->footer_email }}" title="Email" class="social-link">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                            @endif

                            {{-- <a target="_blank" href="//twitter.com/wonderfulid" title="Twitter" class="social-link">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a target="_blank" href="//instagram.com/wonderfulindonesia/" title="Instagram"
                                class="social-link">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a target="_blank" href="//www.youtube.com/c/wonderfulindonesiaofficial" title="Youtube"
                                class="social-link">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                            <a target="_blank" href="//www.linkedin.com/company/wonderful-indonesia" title="Linkedin"
                                class="social-link">
                                <i class="fa fa-link" aria-hidden="true"></i>
                            </a>
                            <a target="_blank" href="//www.pinterest.com/wonderfulid/" title="Pinterest"
                                class="social-link">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                            <a href="mailto:nasrulkurniawan@gmail.com" title="Email" class="social-link">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                            <a href="tel:+62812122228888" title="Phone" class="social-link">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12 flex-wrap text-center d-flex links justify-content-center justify-content-lg-end align-items-center footer-revamp-link">

                        <!-- <div class="microsite-links row align-items-center w-100">
                            <div class="col-lg-6 col-12">
                                <h4 class="text-warning text-center text-lg-end mb-lg-0">Visit other website</h4>
                            </div>
                            <div class="col-lg-6 col-12 select-container my-4">
                                <select class="form-control w-100" onChange="window.open(this.value)">
                                    <option value="">Pilih Situs</option>
                                    <option value="https://www.indonesia.travel/yachts/en/yachts">Yacht Indonesia
                                    </option>
                                    <option value="https://www.indonesia.travel/cruise/en/home">Cruise</option>
                                    <option value="https://www.indonesia.travel/event/id/home">Event</option>
                                    <option value="https://www.indonesia.travel/desawisata/id/home">Desa Wisata</option>
                                    <option value="https://www.indonesia.travel/creative/id/home">Creative</option>

                                </select>
                                <input id="target-url" type="hidden">
                            </div>
                        </div> -->
                        <div class="other-links text-center text-lg-end">
                            <a href="{{ route('about') }}">Tentang</a>
                            <a href="{{ route('home') }}#paket" class="old-cookie-privacy-term">Paket Wedding</a>
                            <!-- <a href="{{ route('home') }}#testimonialContent" class="old-cookie-privacy-term">Testimoni</a> -->
                            @if(!session()->has('auth'))
                            <a href="{{ route('home') }}/login" class="old-cookie-privacy-term">Masuk</a>
                            <a href="{{ route('home') }}/register" class="old-cookie-privacy-term">Daftar</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row border-top justify-content-center align-items-center pt-2 pb-2">
            <div class="col-auto text-white font-weight-light">
                @if ($global_setting_data->copyright != '')
                {{-- <p class="text-white"> --}}
                {{ $global_setting_data->copyright }}
                {{-- </p> --}}
                @endif
            </div>
        </div>
    </div>
</footer>