@extends('layouts.app')

@section('content')

    <section>
        <img src="{{asset('image\dj400.jpg')}}" height="180px" alt="pioneer2">
        <img src="{{asset('image\djsx.jpg')}}" height="182px" alt="djsx">
        <img src="{{asset('image\sb3.jpg')}}" height="200px" alt="sb3">
        <img src="{{asset('image\sb.jpg')}}" height="200px" alt="sb">
        <img src="{{asset('image\s.jpg')}}" height="200px" alt="s">
        <img src="{{asset('image\dj1000.jpg')}}" height="200px" alt="dj1000">
    </section>





    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('products.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('products.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

