@extends('layouts.dashboard')
@section('title', 'Welcome to the admin section')
@section('dashboard')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">

                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="statistics-details d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="statistics-title">Total Products</p>
                                            <h3 class="rate-percentage">0</h3>
                                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                                        </div>
                                        <div>
                                            <p class="statistics-title">Total Sales</p>
                                            <h3 class="rate-percentage">0</h3>
                                            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                                        </div>
                                        <div>
                                            <p class="statistics-title">All Categories</p>
                                            <h3 class="rate-percentage">0</h3>
                                            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                                        </div>
                                        <div class="d-none d-md-block">
                                            <p class="statistics-title">Site Sessions</p>
                                            <h3 class="rate-percentage">0</h3>
                                            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 d-flex flex-column">

                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h4 class="card-title card-title-dash">Total Products</h4>
                                                        </div>
                                                        <div>
                                                            <a href="{{ route('products.create') }}"><button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button">New product</button></a>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive  mt-1">
                                                        <table class="table select-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>S/N</th>
                                                                    <th>Product</th>
                                                                    <th>Price</th>
                                                                    <th>Quantity</th>
                                                                    <th>View</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        1
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex ">
                                                                            <img src="images/faces/face1.jpg" alt="">
                                                                            <div>
                                                                                <h6>Brandon Washington</h6>
                                                                                <p>Head admin</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h6>Company name 1</h6>
                                                                        <p>company type</p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                <p class="text-success">79%</p>
                                                                                <p>85/162</p>
                                                                            </div>
                                                                            <div class="progress progress-md">
                                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="badge badge-opacity-warning">In progress</div>
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
                                <div class="col-lg-12 d-flex flex-column">

                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h4 class="card-title card-title-dash">Total Products Categories</h4>
                                                        </div>
                                                        <div>
                                                            <a href="{{ route('product_categories.create') }}"><button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button">New Category</button></a>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive  mt-1">
                                                        <table class="table select-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>S/N</th>
                                                                    <th>Product</th>
                                                                    <th>Price</th>
                                                                    <th>Quantity</th>
                                                                    <th>View</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        1
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex ">
                                                                            <img src="images/faces/face1.jpg" alt="">
                                                                            <div>
                                                                                <h6>Brandon Washington</h6>
                                                                                <p>Head admin</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h6>Company name 1</h6>
                                                                        <p>company type</p>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                                <p class="text-success">79%</p>
                                                                                <p>85/162</p>
                                                                            </div>
                                                                            <div class="progress progress-md">
                                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="badge badge-opacity-warning">In progress</div>
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
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> <a href="https://www.webshoptechnology.com/" target="_blank">Made with Love</a> from Afolabi Marcus.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
        </div>
    </footer>
</div>
@endsection