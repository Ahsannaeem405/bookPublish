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

    .dropzone {
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
                                                    <th class="border-top-0">Book Type</th>
                                                    <th class="border-top-0">Design Status</th>
                                                    <th class="border-top-0">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($mybook as $list)


                                                    <tr>
                                                        <td class="text-truncate">{{ $i++ }}</td>
                                                        <td class="text-truncate">
                                                            {{ $list->b_title }}
                                                        </td>
                                                        <td class="text-truncate">
                                                            @php
                                                                $auth = App\Models\User::find($list->user_id);
                                                                
                                                            @endphp
                                                            {{ $auth->name }}
                                                        </td>
                                                        <td class="text-truncate">
                                                            {{ $list->b_type }}
                                                        </td>
                                                        <td class="text-truncate">
                                                            @if($list->status == 0)
                                                            Pending Approval
                                                            @else
                                                            Approved
                                                            @endif
                                                        </td>
                                                        <td class="text-truncate" style="text-align: center">
                                                            <a href="{{asset('design/'.$list->design_image)}}"
                                                                download="{{asset('design/'.$list->design_image)}}"
                                                                class="btn btn-success">Download Design</a>


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

    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    {{-- <script src="{{asset('app_asset/vendors/js/extensions/dropzone.min.js')}}"></script>
    <script src="{{asset('app_asset/js/scripts/extensions/dropzone.js')}}"></script> --}}
    <script>
        $('.dropify').dropify();
    </script>
@endsection
