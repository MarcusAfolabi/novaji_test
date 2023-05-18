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
                                                    <form action="{{ route('product_categories.update', $productCategory) }}" method="POST" class="forms-sample">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="name">Title</label>
                                                            <input type="text" class="form-control" id="name" name="name" value="{{ $productCategory->name }}">
                                                        </div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea class="form-control" rows="4" id="description" name="description" value="{{ $productCategory->description }}">{{ $productCategory->description }}</textarea>
                                                </div>
                                                <br>
                                                <br>
                                                <button type="submit" class="btn btn-secondary me-2">Update</button>
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