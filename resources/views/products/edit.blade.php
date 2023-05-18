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
                                                    <x-validation-errors class="mb-4" />
                                                    <h4 class="card-title">Product </h4>
                                                    <p class="card-description">
                                                        You can add more product from here
                                                    </p>
                                                    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data" class="forms-sample">

                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="name">Title</label>
                                                            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" placeholder="Product name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Price</label>
                                                            <input type="number" class="form-control" id="name" name="price" value="{{ $product->price }}" placeholder="Price">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Category</label>
                                                            <select class="form-control" id="product_category_id" name="product_category_id">
                                                                @forelse($categories as $category)
                                                                <option value="{{ $category->id }}" @if($category->id == $category->product_category_id) selected @endif>{{ $category->name }}</option>
                                                                @empty
                                                                Nothing
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="current_image">Current Image:</label>
                                                            <img src="{{ asset($product->image) }}" width="20%" height="20%" class="rounded" alt="Current Image">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="image">New Image:</label>
                                                            <input type="file" class="form-control" id="image" name="image">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <textarea class="form-control" rows="4" id="description" name="description" placeholder="Description"> {{ $product->description }}</textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-danger me-2">Update</button>
                                                        <a href="{{ route('products.index') }}"><button class="btn btn-light me-2">Back</button></a>
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