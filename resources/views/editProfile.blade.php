@extends('header')
@section('content')

<form>

<section class="profile_header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="profile_img">
                    <img src="img/PicsArt_11-14-12.30.45.jpg" class="img-responsive">
                    <input type="file" name="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="profile_title_box">
                    <!-- <h1 class="profile_name">Sanket Patel</h1> -->
                    <input type="text" name="profile_name" placeholder="Sanket Patel">
                    <input type="text" name="designation" class="form-control" placeholder="Web Developer">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="profile_details">
    <div class="container">
        <div class="row">
            <div class="col-md-3 profile_left_box">
                <h3 class="profile_title"><span> Personal Details </span></h3>
                <h4 class="profile_sub_title">D.O.B.</h4>
                <input type="date" name="birth_date" class="form-control" placeholder="21.08.1994">
                <h4 class="profile_sub_title">Website</h4>
                <input type="text" name="website" class="form-control" placeholder="www.knowamp.com">
                <h4 class="profile_sub_title">Phone</h4>
                <input type="tel" name="phone" class="form-control" placeholder="1234567890">
                <h4 class="profile_sub_title">Email</h4>
                <input type="email" name="email" class="form-control" placeholder="sanket@multitudetech.com">
                <h4 class="profile_sub_title">Address</h4>
                <ul class="list-unstyled">
                    <li><input type="text" name="address_line_1" class="form-control" placeholder="Address Line 1"></li>
                    <li><input type="text" name="address_line_2" class="form-control" placeholder="Address Line 2"></li>
                    <li><input type="text" name="address_line_3" class="form-control" placeholder="Address Line 3"></li>
                </ul>
                <h4 class="profile_sub_title"><span> Social Connections </span></h4>
                <ul class="list-inline profile_social space10">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-9 profile_right_box">
                <h3 class="profile_title"><span> proffesional statement </span></h3>
                <textarea class="form-control" name="proffesional_statement" placeholder="" rows="3"></textarea>
                <h3 class="profile_title"><span> awards </span></h3>
                <textarea class="form-control" name="awards" placeholder="" rows="3"></textarea>
                <h3 class="profile_title"><span> Expertise </span></h3>
                <textarea class="form-control" name="expertise" placeholder="" rows="3"></textarea>
                <h3 class="profile_title"><span> Skills </span></h3>
                <div class="skills_box">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="profile_sub_title">Donec vehicula quam</h4>
                            <ul class="list-inline">
                                <li class="full"></li>
                                <li class="full"></li>
                                <li class="full"></li>
                                <li class="full"></li>
                                <li></li>
                            </ul>
                            <h4 class="profile_sub_title">Donec vehicula quam</h4>
                            <ul class="list-inline">
                                <li class="full"></li>
                                <li class="full"></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <h4 class="profile_sub_title">Donec vehicula quam</h4>
                            <ul class="list-inline">
                                <li class="full"></li>
                                <li class="full"></li>
                                <li class="full"></li>
                                <li class="full"></li>
                                <li class="full"></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4 class="profile_sub_title">Donec vehicula quam</h4>
                            <ul class="list-inline">
                                <li class="full"></li>
                                <li class="full"></li>
                                <li class="full"></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <h4 class="profile_sub_title">Donec vehicula quam</h4>
                            <ul class="list-inline skills_bar">
                                <li class="full"></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <h4 class="profile_sub_title">Donec vehicula quam</h4>
                            <ul class="list-inline">
                                <li class="full"></li>
                                <li class="full"></li>
                                <li class="full"></li>
                                <li class="half"></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h3 class="profile_title"><span> top from portfolio </span></h3>
                <div class="portfolio_box">
                    <ul class="list-inline">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

</form>
@endsection