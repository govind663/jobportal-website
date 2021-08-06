<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" type="text/css">
<footer>
    <section class="footer-Content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                      <h3 class="medium-title text-capitalize text-justify" style="color: rgb(224, 228, 233);">Speed Techserve</h3>
                      <br>
                      <p>
                        Address: 1st & 2nd Floor, <br>
                        Opp. To Vrundavan Hall, <br>
                        Vetalbuva Chowk,<br>
                        Narhe-katraj Road, Pune,<br>
                        Maharashtra 411041<br><br>
                        <strong><i class="fa fa-mobile-phone text-info fa-1x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;+91 5589 5548 55</strong> <br>
                        <strong><i class="fa fa-envelope-open text-info fa-1x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;info@example.com</strong> <br>
                      </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="widget">
                        <h3 class="medium-title">Quick Links</h3>
                        &nbsp;&nbsp;&nbsp;
                        <ul class="menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">License</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="widget">
                        <h3 class="medium-title">Trending Jobs</h3>
                        &nbsp;&nbsp;&nbsp;
                        <ul class="menu">
                            <li><a href="#">Android Developer</a></li>
                            <li><a href="#">Senior Accountant</a></li>
                            <li><a href="#">Frontend Developer</a></li>
                            <li><a href="#">Junior Tester</a></li>
                            <li><a href="#">Project Manager</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="widget">
                        <h3 class="medium-title">Follow Us</h3>
                        &nbsp;&nbsp;&nbsp;
                        <div class="bottom-social-icons social-icon">
                            <a class="twitter" href="https://twitter.com/GrayGrids"><i class="ti-twitter-alt"></i></a>
                            <a class="facebook" href="https://web.facebook.com/GrayGrids"><i class="ti-facebook"></i></a>
                            <a class="youtube" href="https://youtube.com"><i class="ti-youtube"></i></a>
                            <a class="dribble" href="https://dribbble.com/GrayGrids"><i class="ti-dribbble"></i></a>
                            <a class="linkedin" href="https://www.linkedin.com/GrayGrids"><i class="ti-linkedin"></i></a>
                        </div>

                        <p>Join our mailing list to stay up to date and get notices about our new releases!</p>

                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <strong>{{ \Session::get('success') }}</strong>
                            </div><br />
                        @endif

                        @if (\Session::has('failure'))
                            <div class="alert alert-danger">
                                <p>{{ \Session::get('failure') }}</p>
                            </div><br />
                        @endif

                        <form method="post" action="{{url('newsletter')}}" class="subscribe-box">
                            @csrf
                            <input type="text"  name=email placeholder="Your email">
                            <input type="submit" class="btn-system" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info text-center">
                        <p>All Rights reserved &copy; 2021 - Designed & Developed by <a rel="nofollow" href="http://graygrids.com"><strong style="color: rgb(228, 77, 66)">Speed Techserve Pvt Ltd.</strong></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="back-to-top">
    <i class="ti-arrow-up"></i>
</a>
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
            <div class="object" id="object_five"></div>
            <div class="object" id="object_six"></div>
            <div class="object" id="object_seven"></div>
            <div class="object" id="object_eight"></div>
        </div>
    </div>
</div>
