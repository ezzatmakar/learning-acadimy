<!-- footer part start-->
<footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <a href="{{ route('front.homepage') }}"> <img
                            src="{{ asset('uploads/settings/' . $sett->logo) }}" alt=""> </a>
                    <p>But when shot real her. Chamber her one visite removal six
                        sending himself boys scot exquisite existend an </p>
                    <p>But when shot real her hamber her </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="single-footer-widget footer_2">
                    <h4>Newsletter</h4>
                    <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                    </p>
                    <form action="{{ route('front.message.newsletter') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder='Enter email address'
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                <div class="input-group-append">
                                    <button class="btn btn_1" type="submit"><i class="ti-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @include('front.inc.error')

                    <div class="social_icon">
                        <a href="{{ $sett->fb }}" target="_blank"> <i class="ti-facebook"></i> </a>
                        <a href="{{ $sett->twit }}" target="_blank"> <i class="ti-twitter-alt"></i> </a>
                        <a href="{{ $sett->insta }}" target="_blank"> <i class="ti-instagram"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-4">
                <div class="single-footer-widget footer_2">
                    <h4>Contact us</h4>
                    <div class="contact_info">
                        <p><span> Address :</span> {{ $sett->address . ', ' . $sett->city }} </p>
                        <p><span> Working Hours : </span>{{ $sett->working_hours }} </p>
                        <p><span> Phone :</span> {{ $sett->phone }}</p>
                        <p><span> Email : </span>{{ $sett->email }} </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="footer-text m-0">
	                            <?php echo date("Y"); ?>
                                All rights reserved | This template is made with <i class="ti-heart"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">{{ "Ezzat Makar" }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end-->
@include('front.inc.jsScripts')