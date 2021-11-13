@extends('admin/layout/main')
@section('tittle')
Submission
@endsection
<style>

    .img{
        /* width: 100%; */
        max-height: 160px !important;
        border-radius: 62% !important;
    background: white;
    }
</style>
@section('body_content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif
            <!-- eCommerce statistic -->

            <!--/ eCommerce statistic -->

            <!-- Products sell and New Orders -->

            <div class="row match-height">

                <!-- Button trigger modal -->

                <div class="col-xl-12 col-lg-12">

                    <div class="card">

                        <div class="card-header">

                            <h4 class="card-title">Profile</h4>

                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div id="new-orders" class="media-list position-relative">
                                <div class="container con1">
                                    <div class="row">
                                        <div class="col-lg-12 col-12" style="text-align: center;">
                                            <img src="{{asset('upload/images/img_avatar.png')}}" class=" img">
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
                                            <label >Name:</label>
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
                                            <label>Email:</label>

                                            <input type="text" class="form-control" placeholder="Mobile Number">
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
                                            <label>Phone Number:</label>

                                            <input type="text" class="form-control" placeholder="Phone Number">
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
                                            <label>Password:</label>

                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
                                            <label>Confirm Password:</label>

                                            <input type="password" class="form-control" placeholder="Confirm Password">
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>










@endsection
