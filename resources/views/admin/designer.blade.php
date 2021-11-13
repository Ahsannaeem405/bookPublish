@extends('admin//layout/main')
@section('tittle')
    Author
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
                    <div class="col-xl-12 col-lg-12" style="padding: 10px;">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                            style="float: right;">
                            Add Designer
                        </button>


                    </div>
                    <!-- Button trigger modal -->

                    <div class="col-xl-12 col-lg-12">

                        <div class="card">

                            <div class="card-header">

                                <h4 class="card-title">Designers</h4>

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
                                                    <th class="border-top-0">Name</th>

                                                    <th class="border-top-0">Email</th>
                                                    <th class="border-top-0">Number</th>
                                                    <th class="border-top-0">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>



                                                <tr>
                                                    <td class="text-truncate">1</td>
                                                    <td class="text-truncate">
                                                        David
                                                    </td>
                                                    <td class="text-truncate">
                                                        davidthomus@gmail.com
                                                    </td>
                                                    <td class="text-truncate">************</td>
                                                    <td class="text-truncate" style="text-align: center;">
                                                       <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Edit</button>

                                                       <button class="btn btn-danger">Delete</button>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Designer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="" method="post">
                        <div class="form">
                            <input type="email" placeholder="Email" class="form-control">

                        </div>
                        <div class="form">
                            <input type="text" placeholder="Name" class="form-control">

                        </div>
                        <div class="form">
                            <input type="text" placeholder="Number" class="form-control">

                        </div>
                        <div class="form">
                            <input type="password" placeholder="Password" class="form-control">

                        </div>
                        <div class="form">
                            <input type="password" placeholder="Confirm Password" class="form-control">

                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <button type="button" class="btn btn-primary">Add Designer</button>
                </div>
            </div>
        </div>
    </div>


     <!-- Modal -->
     <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Update Designer</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">

                 <form action="" method="post">
                     <div class="form">
                         <input type="email" placeholder="Email" class="form-control">

                     </div>
                     <div class="form">
                         <input type="text" placeholder="Name" class="form-control">

                     </div>
                     <div class="form">
                         <input type="text" placeholder="Number" class="form-control">

                     </div>
                     <div class="form">
                         <input type="password" placeholder="Password" class="form-control">

                     </div>
                     <div class="form">
                         <input type="password" placeholder="Confirm Password" class="form-control">

                     </div>

                 </form>

             </div>
             <div class="modal-footer">
                 {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                 <button type="button" class="btn btn-primary">Update Designer</button>
             </div>
         </div>
     </div>
 </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection
