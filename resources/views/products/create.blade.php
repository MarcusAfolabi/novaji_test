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
                                                    <h4 class="card-title">Product </h4>
                                                    <p class="card-description">
                                                        You can add the product from here
                                                    </p>
                                                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="name">Title</label>
                                                            <input type="text" class="form-control" id="name" name="name" placeholder="Category name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Price</label>
                                                            <input type="number" class="form-control" id="name" name="price" placeholder="Category name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Category</label>
                                                            <select class="form-control" id="product_category_id" name="product_category_id">
                                                                @forelse($categories as $category)
                                                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                                                                @empty
                                                                Nothing
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="image">Image</label>
                                                            <input type="file" class="form-control" id="image" name="image">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <textarea class="form-control" rows="4" id="description" name="description" placeholder="Description"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <br>
                                                <br>
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