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
            @if (Session::has('message_success'))
                <div class="alert alert-success">
                    {{ Session::get('message_success') }}
                   
                </div>
            @endif
            @if (Session::has('message_error'))
            <div class="alert alert-danger">
                {{ Session::get('message_error') }}
               
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
                            <form method="POST" action="{{ url('admin/update_profile') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id"  class="form-control" value="{{$user_data->id}}">
                            <div id="new-orders" class="media-list position-relative">
                                <div class="container con1">
                                    <div class="row">
                                        <div class="col-lg-12 col-12" style="text-align: center;">
                                            <img src="{{asset('profile')}}/{{$user_data->image}}" class=" img">
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
                                            <label >Name:</label>
                                            <input type="text" name="name"  class="form-control" value="{{$user_data->name}}" placeholder="Name">
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
                                            <label>Email:</label>

                                            <input type="email" name="email" class="form-control"  value="{{$user_data->email}}" placeholder="Mobile Number">
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
                                            <label>Phone Number:</label>

                                            <input type="text" name="number"  value="{{$user_data->number}}" class="form-control" placeholder="Phone Number">
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
                                            <label>Old Password:</label>

                                            <input type="password" name="old_password" class="form-control" placeholder="Password">
                                            @if ($errors->has('old_password'))
                                            <span class="text-danger">{{ $errors->first('old_password') }}</span>
                                        @endif
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
                                            <label>Password:</label>

                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                        </div>
                                     
                                        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
                                            <label>Confirm Password:</label>

                                            <input type="password" name="c_password" class="form-control" placeholder="Confirm Password">
                                            @if ($errors->has('c_password'))
                                            <span class="text-danger">{{ $errors->first('c_password') }}</span>
                                        @endif
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-12" style="padding:20px">
                                            <label>Image:</label>

                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="col-lg-12  col-12" style="padding:20px">


                                            <button type="submit" name="submit" class="btn btn-primary" style="float: right;">Update</button>
                                         </div>

                                    </div>
                                </div>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>










@endsection
