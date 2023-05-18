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
                                <div class="col-lg-12 d-flex flex-column">

                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h4 class="card-title card-title-dash"> Product Category</h4>
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
                                                                    <th>Name</th>
                                                                    <th>description</th> 
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
   
@endsection