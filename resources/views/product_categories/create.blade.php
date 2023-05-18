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

                            <div class="main-panel">
                                <div class="content-wrapper">
                                    <div class="row">
                                        <div class="col-md-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Product Category</h4>
                                                    <p class="card-description">
                                                        You can add the product categories from here
                                                    </p>
                                                    <form action="{{ route('product_categories.store') }}" method="POST" class="forms-sample">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="name">Title</label>
                                                            <input type="text" class="form-control" id="name" name="name" placeholder="Category name">
                                                        </div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea class="form-control" rows="4" id="description" name="description" placeholder="Description"></textarea>
                                                </div>
                                                <br>
                                                <br>
                                                <button type="submit" class="btn btn-primary me-2">Save</button>
                                                <button class="btn btn-light">Cancel</button>
                                                </form>
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