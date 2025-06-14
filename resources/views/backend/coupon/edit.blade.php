@extends('backend.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="layout-px-spacing row layout-top-spacing m-0">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-4 col-md-6  mt-2 mb-1">
                            <legend class="h4">
                                Edit Coupon
                            </legend>
                        </div>

                        <div class="col-xl-4 col-md-6  mb-2 d-flex justify-content-end align-it mt-2 ">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Edit Coupon</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statbox widget box box-shadow col-md-12">
                <div class="row m-0">
                    <div class="col-12">
                        <form class="mt-3" method="POST" action="{{ route('backend.coupon.update', $coupon->id) }}"
                            enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group mb-4 row">
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12">
                                    <label for="formGroupExampleInput" class="">Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Enter Name" minlength="3" maxlength="40" required name="name"
                                        value="{{ old('name') ?? $coupon->name }}">
                                    @if ($errors->has('name'))
                                        <div class="text-danger" role="alert">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12">
                                    <label for="formGroupExampleInput" class="">Code</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Enter Code" minlength="3" maxlength="40" required name="code"
                                        value="{{ old('code') ?? $coupon->code }}">
                                    @if ($errors->has('code'))
                                        <div class="text-danger" role="alert">{{ $errors->first('code') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 py-2">
                                    <label for="formGroupExampleInput" class="">Type</label>
                                    <select name="type" class="form-control" required>
                                        <option value="">Select Any</option>
                                        @if (old('type'))
                                            <option value="promo"
                                                @if (old('type') == 'promo') {{ 'selected' }} @endif>Promo</option>
                                            <option value="external"
                                                @if (old('type') == 'external') {{ 'selected' }} @endif>External
                                            </option>
                                        @else
                                            <option value="promo"
                                                @if ($coupon->type == 'promo') {{ 'selected' }} @endif>Promo</option>
                                            <option value="external"
                                                @if ($coupon->type == 'external') {{ 'selected' }} @endif>External
                                            </option>
                                        @endif
                                    </select>
                                    @if ($errors->has('type'))
                                        <div class="text-danger" role="alert">{{ $errors->first('type') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 py-2">
                                    <label for="formGroupExampleInput" class="">Rate</label>
                                    <select name="rate" class="form-control" required>
                                        <option value="">Select Any</option>
                                        @if (old('rate'))
                                            <option value="promo"
                                                @if (old('rate') == 'flat') {{ 'selected' }} @endif>Flat</option>
                                            <option value="external"
                                                @if (old('rate') == 'percent') {{ 'selected' }} @endif>Percent
                                            </option>
                                        @else
                                            <option value="flat"
                                                @if ($coupon->rate == 'flat') {{ 'selected' }} @endif>Flat</option>
                                            <option value="percent"
                                                @if ($coupon->rate == 'percent') {{ 'selected' }} @endif>Percent
                                            </option>
                                        @endif
                                    </select>
                                    @if ($errors->has('rate'))
                                        <div class="text-danger" role="alert">{{ $errors->first('rate') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 py-2">
                                    <label for="formGroupExampleInput" class="">Value</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Enter Value" required name="value"
                                        value="{{ old('value') ?? $coupon->value }}">
                                    @if ($errors->has('value'))
                                        <div class="text-danger" role="alert">{{ $errors->first('value') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 py-2">
                                    <label for="formGroupExampleInput" class="">Max Usage</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Enter max usage" required name="max_usage"
                                        value="{{ old('max_usage') ?? $coupon->max_usage }}">
                                    @if ($errors->has('max_usage'))
                                        <div class="text-danger" role="alert">{{ $errors->first('max_usage') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 py-2">
                                    <label for="formGroupExampleInput" class="">Valid From</label>
                                    <input type="date" class="form-control" id="formGroupExampleInput"
                                        placeholder="Enter max usage" required name="valid_from"
                                        value="{{ old('valid_from') ?? dd_format($coupon->valid_from, 'Y-m-d') }}">
                                    @if ($errors->has('valid_from'))
                                        <div class="text-danger" role="alert">{{ $errors->first('valid_from') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 py-2">
                                    <label for="formGroupExampleInput" class="">Valid Till</label>
                                    <input type="date" class="form-control" id="formGroupExampleInput"
                                        placeholder="Enter max usage" required name="valid_till"
                                        value="{{ old('valid_till') ?? dd_format($coupon->valid_till, 'Y-m-d') }}">
                                    @if ($errors->has('valid_till'))
                                        <div class="text-danger" role="alert">{{ $errors->first('valid_till') }}</div>
                                    @endif
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary"
                                onclick="return confirm('Are you sure, you want to update?')">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('js')
@endsection

