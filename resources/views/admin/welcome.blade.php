@extends('admin/layout/main')
@section('body_content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- eCommerce statistic -->
            <div class="row">
                {{-- <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="info">1</h3>
                                        <h6>User</h6>
                                    </div>
                                    <div>
                                         <i class="icon-user-follow info font-large-2 float-right"></i>

                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-xl-4 col-lg-4 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="warning">{{count($designer)}}</h3>
                                        <h6>Designers</h6>
                                    </div>
                                    <div>
                                        {{-- <i class="icon-social-dropbox warning font-large-2 float-right"></i> --}}
                                        <i class="icon-user-follow warning info font-large-2 float-right"></i>

                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="success">{{count($authors)}}</h3>
                                        <h6>Authors</h6>
                                    </div>
                                    <div>
                                        {{-- <i class="la la-globe success font-large-2 float-right"></i> --}}
                                        <i class="icon-user-follow success font-large-2 float-right"></i>


                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="danger">3</h3>
                                        <h6>Book Published</h6>
                                    </div>
                                    <div>
                                        <i class="la la-list-alt danger font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ eCommerce statistic -->

            <!-- Products sell and New Orders -->
            {{-- <div class="row match-height">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Users</h4>
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
                                    <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">ID</th>
                                                <th class="border-top-0">Name</th>

                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td class="text-truncate">1</td>
                                                <td class="text-truncate">
                                                    David
                                                </td>
                                                <td class="text-truncate">
                                                    David@gmail.com
                                                </td>
                                                <td class="text-truncate">************</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--/ Products sell and New Orders -->

            <!-- Recent Transactions -->
            <div class="row">
                <div id="recent-transactions" class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Authors</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">

                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                    <thead>

                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Name</th>

                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i=1;
                                        @endphp
                                        @foreach($authors as $list)
                                        <tr>
                                            <td class="text-truncate">{{$i++}}</td>
                                            <td class="text-truncate">
                                                {{$list->name}}
                                            </td>
                                            <td class="text-truncate">
                                                {{$list->email}}
                                            </td>
                                            <td class="text-truncate">  {{$list->number}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div id="recent-transactions" class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Designers</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">

                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Id</th>
                                            <th class="border-top-0">Name</th>

                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                        $i=1;
                                    @endphp
                                    @foreach($designer as $list)
                                    <tr>
                                        <td class="text-truncate">{{$i++}}</td>
                                        <td class="text-truncate">
                                            {{$list->name}}
                                        </td>
                                        <td class="text-truncate">
                                            {{$list->email}}
                                        </td>
                                        <td class="text-truncate">  {{$list->number}}</td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Recent Transactions -->
            <div class="row">
                <div id="recent-transactions" class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Published Books</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">

                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Book Name</th>
                                            <th class="border-top-0">Author Name</th>
                                            <th class="border-top-0">Designer Name</th>
                                            <th class="border-top-0">Price</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="text-truncate">1</td>
                                            <td class="text-truncate">
                                                Ocean in the sea
                                            </td>
                                            <td class="text-truncate">David</td>
                                            <td class="text-truncate">Thomas</td>
                                            <td class="text-truncate">$ 200</td>


                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Recent Orders & Monthly Sales -->

        </div>
    </div>
</div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection
