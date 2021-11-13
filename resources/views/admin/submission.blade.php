@extends('admin//layout/main')
@section('tittle')
Submission
@endsection
<link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/plugins/file-uploaders/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/pages/dropzone.css')}}">
<style>
    .form {
        padding: 10px;
    }
    .dropzone{
min-height: 200px !important;
    }
    .dropzone .dz-message {
    text-align: center;
    margin: -1em 0 !important;
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

                                <h4 class="card-title">Pending Books</h4>

                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div id="new-orders" class="media-list position-relative">
                                    <div class="table-responsive">
                                        <table id="new-orders-table"
                                            class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">ID</th>
                                                    <th class="border-top-0">Book Name</th>
                                                    <th class="border-top-0">Aurthor Name</th>
                                                    <th class="border-top-0">Book Type</th>



                                                    <th class="border-top-0">Status</th>
                                                    <th class="border-top-0">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>



                                                <tr>
                                                    <td class="text-truncate">1</td>
                                                    <td class="text-truncate">
                                                        Ocean in th sea
                                                    </td>
                                                    <td class="text-truncate">
                                                        David
                                                    </td>
                                                    <td class="text-truncate">
                                                       Thrills
                                                    </td>
                                                    <td class="text-truncate">
                                                        Pending
                                                    </td>
                                                    <td class="text-truncate" style="text-align: center">
                                                        <button class="btn btn-success">Download</button>
                                                          <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Submit</button>

                                                        </td>

                                                </tr>

                                                <tr>
                                                    <td class="text-truncate">1</td>
                                                    <td class="text-truncate">
                                                        Ocean in th sea
                                                    </td>
                                                    <td class="text-truncate">
                                                        David
                                                    </td>
                                                    <td class="text-truncate">
                                                       Thrills
                                                    </td>
                                                    <td class="text-truncate">
                                                        Pending
                                                    </td>
                                                    <td class="text-truncate" style="text-align: center">
                                                        <button class="btn btn-success">Download</button>
                                                          <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Submit</button>

                                                        </td>

                                                </tr>





                                            </tbody>
                                        </table>
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
