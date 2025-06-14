@extends('frontend.layouts.app')
@section('title', 'Order |')
@section('cdn')
    <link rel="stylesheet" href="{{ url('frontend/css/profile.css') }}">
@endsection
@section('content')
    <x-frontend.profile-nav image="https://via.placeholder.com/300" name="users name" />

    <section class="my-1">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="bread-crum breadcrumb-hover">Profile</a></li>
                    <li class="breadcrumb-item bread-crum" aria-current="page">My Order</li>
                </ol>
            </nav>
        </div>
    </section>
    <section style="padding:0px 0px 50px 0px">
        <div class="container">
            @forelse($orders as $order)
                <div class="row py-4">
                    <div class="d-flex justify-content-center my-order-main">
                        <div class="col-sm-10  my-order-main-out">
                            <div class="row  my-order-main-in">
                                <div
                                    class="col-sm-12 col-md-4 col-lg-4 col-xl-3 d-flex justify-content-center flex-column my-order-main-in-img">
                                    <img src="frontend/images/products/skin/sk1.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-sm-12  col-md-8 col-lg-8 col-xl-6  my-order-main-desc">

                                    <h5 class="main-head">{{ $order->items()->first()->product->name }}</h5>
                                    {{-- <p>essence Long Lasting Eye Pencil is a creamy and
                                        pigmented eye pencil that brightens and accentuates your eye more....</p> --}}

                                    <ul class="list-unstyled d-flex gap-2 flex-column flex-lg-row">
                                        <li>
                                            <ul class="gap-2 d-flex flex-row flex-lg-column flex-xl-column  gap-lg-1 justify-content-between"
                                                style="padding: 0px 0px 0px 17px;">
                                                <li>Expected Delivery</li>
                                                <li class="no-bullet">19 March 2023</li>
                                            </ul>
                                        </li>
                                        <li class="status ">
                                            <ul class="gap-2 d-flex flex-row flex-lg-column flex-xl-column  gap-lg-2 justify-content-between"
                                                style="padding: 0px 0px 0px 17px;">
                                                <li class="return-order light-sky">
                                                    <a href="http://" class="light-sky">
                                                        Return Order
                                                    </a>
                                                </li>
                                                <li class="cancel-order text-red">
                                                    <a href="http://" class="text-red">
                                                        Cancel Order
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="price">From ₹ {{ $order->total_amount }}</li>
                                    </ul>

                                </div>
                                <div
                                    class="col-sm-12  col-md-12 col-lg-12 col-xl-3 py-3 py-xl-0 py-xxl-0  my-order-main-in-btn gap-2">
                                    {{-- <a href="http://" class="arriving-or-btn">Arriving Wednesday</a> --}}
                                    <button type="submit" class="btn  add-track-btn">
                                        <a href="http://">
                                            Track Order
                                        </a>
                                    </button>
                                    <button type="button" class="btn  add-orderDetails-btn">
                                        <a href="http://">
                                            Order Details
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                @include('frontend.not-found')
            @endforelse

            {{-- <div class="row py-4">
                <div class="d-flex justify-content-center my-order-main">
                    <div class="col-sm-10  my-order-main-out">
                        <div class="row  my-order-main-in">
                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 d-flex justify-content-center flex-column my-order-main-in-img">
                                <img src="frontend/images/products/skin/sk1.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-sm-12  col-md-8 col-lg-8 col-xl-6  my-order-main-desc">

                                <h5 class="main-head">Essence Long Lasting Eye Pencil</h5>
                                <p>essence Long Lasting Eye Pencil is a creamy and
                                    pigmented eye pencil that brightens and accentuates your eye more....</p>

                                <ul class="list-unstyled d-flex gap-2 flex-column flex-lg-row">
                                   <li>
                                    <ul class="gap-2 d-flex flex-row flex-lg-column flex-xl-column  gap-lg-1 justify-content-between" style="padding: 0px 0px 0px 17px;">
                                        <li>Expected Delivery</li>
                                        <li class="no-bullet">19 March 2023</li>
                                    </ul>


                                   </li>
                                    <li class="status">
                                        <ul class="gap-2 d-flex flex-row flex-lg-column flex-xl-column  gap-lg-2 justify-content-between" style="padding: 0px 0px 0px 17px;">
                                            <li class="return-order light-sky">
                                                <a href="http://" class="light-sky">
                                                    Return Order
                                                </a>
                                            </li>
                                            <li class="cancel-order text-red">
                                                <a href="http://" class="text-red">
                                                    Cancel Order
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="price">From ₹ 145.55</li>

                                </ul>

                            </div>
                            <div class="col-sm-12  col-md-12 col-lg-12 col-xl-3 py-3 py-xl-0 py-xxl-0  my-order-main-in-btn gap-2">
                                <a href="http://" class="arriving-2-or-btn">Arriving Friday</a>
                                <a href="http://" class=" opacity-70">Preparing for Dispatch</a>
                                <button type="button" class="btn add-orderDetails-btn">
                                    <a href="http://">
                                        Order Details
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-4">
                <div class="d-flex justify-content-center my-order-main">
                    <div class="col-sm-10  my-order-main-out">
                        <div class="row  my-order-main-in">
                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3 d-flex justify-content-center flex-column my-order-main-in-img">
                                <img src="frontend/images/products/skin/sk1.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-sm-12  col-md-8 col-lg-8 col-xl-6  my-order-main-desc">

                                <h5 class="main-head">Essence Long Lasting Eye Pencil</h5>
                                <p>essence Long Lasting Eye Pencil is a creamy and
                                    pigmented eye pencil that brightens and accentuates your eye more....</p>

                                <ul class="list-unstyled d-flex gap-2 flex-column flex-lg-row">
                                   <li>
                                    <ul class="gap-2 d-flex flex-row flex-lg-column flex-xl-column  gap-lg-1 justify-content-between" style="padding: 0px 0px 0px 17px;">
                                        <li>Expected Delivery</li>
                                        <li class="no-bullet">19 March 2023</li>
                                    </ul>


                                   </li>
                                    <li class="status">
                                        <ul class="gap-2 d-flex flex-row flex-lg-column flex-xl-column  gap-lg-2 justify-content-between" style="padding: 0px 0px 0px 17px;">
                                            <li class="return-order light-sky">
                                                <a href="http://" class="light-sky">
                                                    Return Order
                                                </a>
                                            </li>
                                            <li class="cancel-order text-red">
                                                <a href="http://" class="text-red">
                                                    Cancel Order
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="price">From ₹ 145.55</li>

                                </ul>

                            </div>
                            <div class="col-sm-12  col-md-12 col-lg-12 col-xl-3 py-3 py-xl-0 py-xxl-0  my-order-main-in-btn gap-2">
                                <a href="http://" class="text-green">Delivered</a>
                                <button type="button" class="btn  add-review-btn">
                                    <a href="http://">
                                        Write A Review
                                    </a>
                                </button>
                                <button type="button" class="btn add-orderDetails-btn">
                                    <a href="">
                                        Order Details
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </section>


@endsection
