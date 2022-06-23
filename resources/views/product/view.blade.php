@extends('layouts.app')
@section('content')
<div class="container">
    <div class="mb-3 row">
        <div class="col-sm-6 col-md-6">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <label for="metaname" class="text-end control-label col-form-label">Product name
                        :</label>
                </div>
                <div class="col-sm-6 col-md-6 mt-2">
                    <div >{{ $productObj->product_name }}</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <label for="metaname" class=" text-end control-label col-form-label">Category :
                        </label>
                </div>
                <div class="col-sm-6 col-md-6 mt-2">
                    <div >{{ $productObj->category }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-3 row">
        <div class="col-sm-6 col-md-6">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <label for="metaname" class="text-end control-label col-form-label">Status :</label>
                </div>
                <div class="col-sm-6 col-md-6 mt-2">
                    @if($productObj->status == 1)
                    <div>{{ "Active"}}</div>
                    @else
                    <div>{{ "Inactive"}}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <a type="submit" class="btn btn-primary btn-sm" href="{{ url('/home') }}" style="float:right">Back</a>
</div>



@endsection
