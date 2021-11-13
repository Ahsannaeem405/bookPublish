@extends('admin//layout/main')
@section('tittle')
Add Book
@endsection
<link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/plugins/file-uploaders/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/pages/dropzone.css')}}">
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

                            <div class="card-header">

                                <h4 class="card-title">Add Book</h4>

                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                            </div>
                            <div class="card-content">
                                <div id="new-orders" class="media-list position-relative">
                                  <div class="container">
                                    <form action="#" method="post">

                                      <div class="row" style="padding: 10px">
                                          <div class="col-lg-12 col-12 div_input">

                                            <input type="file" id="myfile" name="myfile">
                                          </div>
                                          <div class="col-lg-6 col-12 div_input">

                                            <input type="text" class="form-control" placeholder="Book Title" required>
                                          </div>
                                          <div class="col-lg-6 col-12 div_input">

                                            <input type="text" class="form-control" placeholder="Paper Size" required>
                                          </div>
                                          <div class="col-lg-6 col-12 div_input">

                                            <input type="text" class="form-control" placeholder="Book Type" required>
                                          </div>
                                          <div class="col-lg-6 col-12 div_input">

                                            <input type="text" class="form-control" placeholder="Paper Type" required>
                                          </div>
                                          <div class="col-lg-6 col-12 div_input">

                                            <input type="text" class="form-control" placeholder="Color" required>
                                          </div>
                                          <div class="col-lg-6 col-12 div_input">

                                            <input type="text" class="form-control" placeholder="Number of copies" required>
                                          </div>
                                          <div class="col-lg-6 col-12 div_input">
                                            <label for="cars">Select Designer:</label>
                                            <select name="designer" class="form-control" required>
                                                <option value="volvo">David</option>
                                                <option value="saab">Thomas</option>

                                          </select>
                                          </div>
                                          <div class="col-lg-12 col-12 div_input">
                                            <button class="btn btn-primary" style="float: right;"><i class="ft-check-circle"></i> Submit</button>
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
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Submission</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card-body">

                <button id="select-files" class="btn btn-primary mb-1 dz-clickable"><i class="ft-file"></i> Click me to select files</button>
                <form action="#" class="dropzone dropzone-area dz-clickable" id="dpz-btn-select-files">
                    <div class="dz-message">Drop Files Here To Upload</div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a class="btn btn-danger" style="color: white" onClick="window.location.reload()">Cancel</a>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>





    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <script src="{{asset('app_asset/vendors/js/extensions/dropzone.min.js')}}"></script>
    <script src="{{asset('app_asset/js/scripts/extensions/dropzone.js')}}"></script>
@endsection
