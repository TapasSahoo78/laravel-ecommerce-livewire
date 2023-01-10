@extends('layouts.admin')

@section('content')
    {{-- <div>
        <livewire:admin.category.index />
    </div> --}}

    <div class="row">
        <div class="col-md-12">

            @if (Session::has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button> --}}
                {{ Session::get('message') }}
            </div>
        @endif

            <div class="card">
                <div class="card-header">
                    <h4>Products
                        <a href="{{ url('admin/products/create') }}" class="btn btn-primary btn-sm float-end">Add
                            Products</a>
                    </h4>
                </div>
                <div class="card-body">

                </div>
            </div>

        </div>
    </div>
@endsection
