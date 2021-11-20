@extends('admin//layout/main')
@section('tittle')
Designer Books
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
{{-- <link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/plugins/file-uploaders/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app_asset/css/pages/dropzone.css')}}"> --}}
<style>
    .form {
        padding: 10px;
    }
    .dropzone{
min-height: 200px !important;
    }
    .dropzone .dz-message {
    text-align: center;
    margin: -2em 0 !important;
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

                                <h4 class="card-title">Designer Books</h4>

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
                                                    <th class="border-top-0">Designer Name</th>
                                                    <th class="border-top-0">Book Type</th>
                                                    <th class="border-top-0">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $i=1;
                                            @endphp
                                                @foreach($mybook as $list)


                                                <tr>
                                                    <td class="text-truncate">{{$i++}}</td>
                                                    <td class="text-truncate">
                                                        {{$list->b_title}}
                                                    </td>
                                                    <td class="text-truncate">
                                                        @php
                                                            $auth=App\Models\User::find($list->user_id);
                                                            $design=App\Models\User::find($list->designer);
                                                        
                                                        @endphp
                                                        {{$auth->name}}
                                                    </td>
                                                    <td>{{$design->name}}</td>
                                                    <td class="text-truncate">
                                                        {{$list->b_type}}
                                                    </td>
                                                  
                                                    <td class="text-truncate" style="text-align: center">
                                                        {{-- <button class="btn btn-success">Download</button>

                                                          <button class="btn btn-danger">Delete</button> --}}
                                                          <div class="dropdown position-static actions d-inline-block">
                                                            <button class="btn btn-primary dropdown-toggle actions-btn" type="button"
                                                                id="table-action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="table-action" >
                                                                <a href="{{$list->b_file}}" download="{{$list->b_file}}" class="dropdown-item"  >Book Download</a>
                                                                <a class="dropdown-item" href="{{url('admin/delete_mybooks')}}/{{$list->id}}">Delete</a>

                                                            </div>
                                                        </div>

                                                    </td>

                                                </tr>
                                                @endforeach

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
            <input name="file1" type="file" class="dropify" data-height="100" />

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
    {{-- <script src="{{asset('app_asset/vendors/js/extensions/dropzone.min.js')}}"></script>
    <script src="{{asset('app_asset/js/scripts/extensions/dropzone.js')}}"></script> --}}
    <script>
        $('.dropify').dropify();
    </script>
@endsection
