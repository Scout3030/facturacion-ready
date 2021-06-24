@extends('tenant.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <tenant-woocommerce-form :type-user="{{ json_encode(auth()->user()->type) }}"></tenant-woocommerce-form>
        </div>
    </div>
@endsection
