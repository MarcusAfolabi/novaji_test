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
                                                            <h4 class="card-title card-title-dash">All Categories</h4>
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
                                                                    <th>Description</th>
                                                                    <th>Edit</th>
                                                                    <th>Delete</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @forelse($categories as $productCategory)
                                                                <tr>
                                                                    <td>
                                                                        {{ $productCategory->id }}
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex ">
                                                                            <div>
                                                                                <h6>{{ $productCategory->name }} </h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <h6>{{ $productCategory->description }} </h6>
                                                                    </td>
                                                                    <td>
                                                                        <div>
                                                                            <a href="{{ route('product_categories.edit',  $productCategory) }}">
                                                                                <div class="badge badge-opacity-warning">Edit</div>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <form action="{{ route('product_categories.destroy', $productCategory) }}" method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button class="badge badge-opacity-danger" type="submit">Delete</button>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                                @empty
                                                                Nothing to show
                                                                @endforelse
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