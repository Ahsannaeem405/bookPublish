@extends('admin//layout/main')
@section('tittle')
Add Book
@endsection
{{-- <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/plugins/file-uploaders/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/pages/dropzone.css')}}"> --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
<style>
.div_input{
    margin-top: 20px;
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
                          @if (session()->has('message_success'))
                          <div class="alert alert-success">
                              {{ session('message_success') }}

                          </div>
                      @endif
                            <div class="card-header">

                                <h4 class="card-title">Add Book</h4>

                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                            </div>
                            <div class="card-content">
                                <div id="new-orders" class="media-list position-relative">
                                  <div class="container">
                                    <form method="POST" action="{{ url('admin/add_book') }}" enctype="multipart/form-data">
                                      @csrf

                                      <div class="row" style="padding: 10px">
                                          <div class="col-lg-12 col-12 div_input">
                                            <input type="file"  name="b_file"  class="dropify" data-height="100" accept=".pdf,.txt,.docx" required/>
                                          </div>
                                          <div class="col-lg-6 col-12 div_input">
                                            <input type="text"  name="b_title"  class="form-control" placeholder="Book Title" required>
                                          </div>
                                          <div class="col-lg-6 col-12 div_input">
                                            <input type="text"  name="b_paper"  class="form-control" placeholder="Paper Size" required>
                                          </div>
                                          <div class="col-lg-6 col-12 div_input">
                                            <input type="text"  name="b_type"  class="form-control" placeholder="Book Type" required>
                                          </div>
                                          <div class="col-lg-6 col-12 div_input">
                                            <input type="text"  name="b_p_type"  class="form-control" placeholder="Paper Type" required>
                                          </div>
                                          <div class="col-lg-6 col-12 div_input">
                                            <input type="text"  name="b_color"  class="form-control" placeholder="Color" required>
                                          </div>
                                          <div class="col-lg-6 col-12 div_input">
                                            <input type="text"  name="b_num_copy"  class="form-control" placeholder="Number of copies" required>
                                          </div>
                                          <div class="col-lg-6 col-12 div_input">
                                            @php
                                               $designer=App\Models\User::where('role','designer')->get();
                                            @endphp 
                                            <label for="cars">Select Designer:</label>
                                            <select name="designer" class="form-control" required>
                                              <option value="">Select Designer</option>

                                              @foreach($designer as $list)
                                                <option value="{{$list->id}}">{{$list->name}}</option>
                                              @endforeach
                                          </select>
                                          </div>
                                          <div class="col-lg-12 col-12 div_input">
                                            <button type="submit" name="submit" class="btn btn-primary" style="float: right;">
                                              <i class="ft-check-circle"></i> Submit</button>
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
        </div>
    </div>
   

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    {{-- <script src="{{asset('app_asset/vendors/js/extensions/dropzone.min.js')}}"></script>
    <script src="{{asset('app_asset/js/scripts/extensions/dropzone.js')}}"></script> --}}
    <script>
        $('.dropify').dropify();
    </script>
@endsection
