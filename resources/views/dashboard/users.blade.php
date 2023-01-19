<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - User</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- endinject -->
</head>

<body>
    <div class="container-scroller d-flex">
    @include('../layouts/sidebar')
    <div class="container-fluid page-body-wrapper">
    @include('../layouts/navbar')
            <div class="main-panel">
                <div class="row">
                    <div class="content-wrapper">
                        <div class="col-lg-12 grid-margin stretch-card mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Table User</h4>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        No
                                                    </th>
                                                    <th>
                                                        Id
                                                    </th>
                                                    <th>
                                                        Name
                                                    </th>
                                                    <th>
                                                        Address
                                                    </th>
                                                    <th>
                                                        Phone Number
                                                    </th>
                                                    <th>
                                                        Email
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>
                                                            {{ $loop->iteration }}
                                                        </td>
                                                        <td>
                                                            {{ $user->id }}
                                                        </td>
                                                        <td>
                                                            {{ $user->name }}
                                                        </td>
                                                        <td>
                                                            {{ $user->address }}
                                                        </td>
                                                        <td>
                                                            {{ $user->phone }}
                                                        </td>
                                                        <td>
                                                            {{ $user->email }}
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('editStore', $user->id) }}" method="get">
                                                                <button class="btn btn-success btn-rounded btn-fw">Edit</button>
                                                            </form>
                                                        <form class="d-inline" action="{{ route('deleteStore', $user->id) }}" method="post">
                                                            @csrf
                                                            <button class="btn btn-danger btn-rounded btn-fw">Delete</button>
                                                        </form>
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
    </div>
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
