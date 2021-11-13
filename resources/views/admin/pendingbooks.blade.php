@extends('admin//layout/main')
@section('tittle')
Pending Books
@endsection
<style>
    .form {
        padding: 10px;
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
                                                    <th class="border-top-0">Designer Name</th>



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
                                                        Thomas
                                                    </td>
                                                    <td class="text-truncate">
                                                        Pending
                                                    </td>
                                                    <td class="text-truncate" style="text-align: center">
                                                        {{-- <button class="btn btn-success">Approve</button>
                                                          <button class="btn btn-danger">Delete</button> --}}
                                                          <div class="dropdown position-static actions d-inline-block">
                                                            <button class="btn btn-primary dropdown-toggle actions-btn" type="button"
                                                                id="table-action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="table-action" >
                                                                <a class="dropdown-item" href="#">Download</a>
                                                                <a class="dropdown-item" href="#">Approve</a>

                                                                <a class="dropdown-item" href="#">Delete</a>

                                                            </div>
                                                        </div>
                                                        </td>

                                                </tr>
                                                <tr>
                                                    <td class="text-truncate">2</td>
                                                    <td class="text-truncate">
                                                        Ocean in th sea
                                                    </td>
                                                    <td class="text-truncate">
                                                        David
                                                    </td>
                                                    <td class="text-truncate">
                                                        Thomas
                                                    </td>
                                                    <td class="text-truncate">
                                                        Pending
                                                    </td>
                                                    <td class="text-truncate" style="text-align: center">
                                                        <div class="dropdown position-static actions d-inline-block">
                                                            <button class="btn btn-primary dropdown-toggle actions-btn" type="button"
                                                                id="table-action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="table-action" >
                                                                <a class="dropdown-item" href="#">Download</a>
                                                                <a class="dropdown-item" href="#">Approve</a>

                                                                <a class="dropdown-item" href="#">Delete</a>

                                                            </div>
                                                        </div>
                                                        </td>

                                                </tr>
                                                <tr>
                                                    <td class="text-truncate">2</td>
                                                    <td class="text-truncate">
                                                        Ocean in th sea
                                                    </td>
                                                    <td class="text-truncate">
                                                        David
                                                    </td>
                                                    <td class="text-truncate">
                                                        Thomas
                                                    </td>
                                                    <td class="text-truncate">
                                                        Pending
                                                    </td>
                                                    <td class="text-truncate" style="text-align: center">
                                                        <div class="dropdown position-static actions d-inline-block">
                                                            <button class="btn btn-primary dropdown-toggle actions-btn" type="button"
                                                                id="table-action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="table-action" >
                                                                <a class="dropdown-item" href="#">Download</a>
                                                                <a class="dropdown-item" href="#">Approve</a>

                                                                <a class="dropdown-item" href="#">Delete</a>

                                                            </div>
                                                        </div>
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





    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection
