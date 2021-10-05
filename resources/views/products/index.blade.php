@extends('layouts.app')

@section('content')

    <section class="container card">
        <div class="row">
            <div class="col-sm card">
              <img src="{{asset('image/img1.png')}}" alt="">
              <div class="container p-2">
                <div class="h5">
                    Product Name: Mascot Hoodie
                </div>
                <div class="h5">
                Product Color:  Cream
                </div>
                <div class="h5">
                    Product Price:  499
                </div>
              </div>
            </div>
            <div class="col-sm card">
                <img src="{{asset('image/img2.png')}}" alt="">
                <div class="container p-2">
                    <div class="h5">
                        Product Name: Mascot Fleece
                    </div>
                    <div class="h5">
                    Product Color:  Lavender
                    </div>
                    <div class="h5">
                        Product Price:  500
                    </div>
                </div>
            </div>
            <div class="col-sm card">
                <img src="{{asset('image/img3.png')}}" alt="">
                <div class="container p-2">
                    <div class="h5">
                        Product Name: Cloud Hoodie
                    </div>
                    <div class="h5">
                    Product Color:  Baby blue
                    </div>
                    <div class="h5">
                        Product Price:  390
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm card">
              <img src="{{asset('image/img4.png')}}" alt="">
              <div class="container p-2">

                <div class="h5">
                    Product Name: Crudory Hoodie
                    </div>
                    <div class="h5">
                    Product Color:  White
                    </div>
                    <div class="h5">
                        Product Price:  399
                    </div>
                </div>
            </div>
            <div class="col-sm card">
                <img src="{{asset('image/img5.png')}}" alt="">
                <div class="container p-2">
                    <div class="h5">
                        Product Name: Mascot Hoodie
                    </div>
                    <div class="h5">
                    Product Color:  Cream
                    </div>
                    <div class="h5">
                        Product Price:  499
                    </div>
                </div>
            </div>
            <div class="col-sm card">
                <img src="{{asset('image/img6.png')}}" alt="">
                <div class="container p-2">
                    <div class="h5">
                        Product Name: Secrete Deconstructed Hoodie
                    </div>
                    <div class="h5">
                    Product Color:  Cream
                    </div>
                    <div class="h5">
                        Product Price:  499
                    </div>
                </div>
            </div>
        </div>
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

