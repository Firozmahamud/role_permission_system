@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('welcome ') }}

                    {{ Auth::user()->name }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




                    {{-- {{ __('You are logged in!') }} --}}

                       <div class="col-md-6"style="display:flex">
                    <div class="col-md-8">
                        @can('role-list')
                        <a href="#"><button type="button" class="btn btn-primary">View Roles</button></a><br>
                        @endcan
                        @can('role-edit')
                    <a href="#"><button type="button" class="btn btn-success">Edit Roles</button></a><br>
                        @endcan
                        @can('role-create')
                    <a href="#"><button type="button" class="btn btn-secondary">Create Roles</button></a><br>
                       @endcan
                       @can('role-delete')
                    <a href="#"><button type="button" class="btn btn-danger">Delete Roles</button></a><br>
                       @endcan
                </div>
                <div class="col-md-8">
                    @can('product-list')
                 <a href="#"><button type="button" class="btn btn-outline-success">View Products</button></a><br>
                    @endcan
                    @can('product-edit')
                <a href="#"><button type="button" class="btn btn-warning">Edit Products </button></a><br>
                    @endcan
                    @can('product-create')
                <a href="#"><button type="button" class="btn btn-info">Create Products</button></a><br>
                    @endcan
                    @can('product-delete')
                <a href="#"><button type="button" class="btn btn-dark">Delete Products</button></a><br>
                    @endcan
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
