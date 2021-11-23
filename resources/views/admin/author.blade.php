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
                            Add Author
                        </button>


                    </div>
                    <!-- Button trigger modal -->

                    <div class="col-xl-12 col-lg-12">

                        <div class="card">
                            @if (session()->has('message_error'))
                                <div class="alert alert-danger">
                                    {{ session('message_error') }}

                                </div>
                            @endif
                            @if (session()->has('message_success'))
                                <div class="alert alert-success">
                                    {{ session('message_success') }}

                                </div>
                            @endif
                            <div class="card-header">

                                <h4 class="card-title">Authors</h4>

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
                @php
                    $i=1;
                @endphp
                @foreach ($authors as $list)
                    <tr>
                        <td class="text-truncate">{{$i++}}</td>
                        <td class="text-truncate">
                            {{ $list->name }}
                        </td>
                        <td class="text-truncate">
                            {{ $list->email }}

                        </td>
                        <td class="text-truncate">{{ $list->number }}</td>
                        <td class="text-truncate" style="text-align: center;">
                            <button class="btn btn-primary" data-toggle="modal"
                                data-target="#updateModal{{$list->id}}">Edit</button>

                            <a href="{{url('admin/delete_authors')}}/{{$list->id}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                                                    

    <!-- Modal -->
    <div class="modal fade" id="updateModal{{$list->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Author</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ url('admin/update_authors') }}/{{$list->id}}" method="POST">
                        @csrf
                        <div class="form">
                            <input type="text" name="name" placeholder="Name" value="{{$list->name}}"  class="form-control" required>

                        </div>
                        <div class="form">
                            <input type="email" name="email" placeholder="Email" value="{{$list->email}}" class="form-control" required>

                        </div>
                       
                        <div class="form">
                            <input type="text" name="number" placeholder="Number" value="{{$list->number}}"  class="form-control" required>

                        </div>
                        <div class="form">
                            <input type="password" name="password" placeholder="Update Password" class="form-control" required>

                        </div>
                        {{-- <div class="form">
                            <input type="password" placeholder="Confirm Password" class="form-control">

                        </div> --}}


                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <button type="submit" name="update" class="btn btn-primary">Update Author</button>
                </div>
                
            </form>
            </div>
        </div>
    </div>


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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Author</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ url('admin/add_authors') }}" method="POST">
                        @csrf
                        <div class="form">
                            <input type="text" name="name" placeholder="Name" class="form-control" required>

                        </div>
                        <div class="form">
                            <input type="email" name="email" placeholder="Email" class="form-control" required>

                        </div>

                        <div class="form">
                            <input type="text" name="number" placeholder="Number" class="form-control" required>

                        </div>
                        <div class="form">
                            <input type="password" name="password" placeholder="Password" class="form-control" required>

                        </div>
                        <div class="form">
                            <input type="password" name="c_password" placeholder="Confirm Password" class="form-control" required>

                        </div>



                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    <button type="submit" name="submit" class="btn btn-primary">Add Author</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection
