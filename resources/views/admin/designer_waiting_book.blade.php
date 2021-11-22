@extends('admin//layout/main')
@section('tittle')
Designer Waiting Book
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
              
             <div class="row match-height">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            @if (session()->has('message_success'))
                            <div class="alert alert-success">
                                {{ session('message_success') }}
            
                            </div>
                        @endif
                            <div class="card-header">

                                <h4 class="card-title">Designer Waiting Book</h4>

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
                                                        
                                                        @endphp
                                                        {{$auth->name}}
                                                    </td>
                                                    <td class="text-truncate">
                                                        {{$list->b_type}}
                                                    </td>
                                                    <td class="text-truncate">
                                                     @if($list->design_image == null)
                                                     Pending
                                                     @else
                                                     Success
                                                     @endif
                                                    </td>
                                                    <td class="text-truncate" style="text-align: center">
                                                        <a href="{{$list->b_file}}" download="{{$list->b_file}}"  class="btn btn-success">Book Download</a>
                                                          <button class="btn btn-primary design" id="" design="{{$list->id}}"
                                                             data-toggle="modal" data-target="#exampleModal">Add Design</button>

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
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Design</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form method="POST" action="{{ url('admin/add_design') }}" enctype="multipart/form-data">
                            
                        <div class="modal-body">
                            @csrf
                            <input type="file" name="img" class="dropify" data-height="100" multiple/>
                            <input type="text" name="data" value="" style="display: none">

                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-danger" style="color: white" onClick="window.location.reload()">Cancel</a>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                    </div>
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
        $('.design').click(function(){
            var book_id=$(this).attr('design');
            $("input:text").val(book_id);
        });
    </script>
@endsection
