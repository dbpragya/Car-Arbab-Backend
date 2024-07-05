@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-description d-flex align-items-center">
                    <div class="page-description-content flex-grow-1">
                        <h1> Tax</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">  
            <div class="col-xl-12">
                   @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success')}}
                    </div>
                    @endif
                <div class="card widget widget-stats">
                    <div class="card-body">
                        <div class="widget-stats-container d-flex">
                            <div class="widget-stats-content flex-fill">
                                <form class="row g-3" action="{{ route('admin.store_tax')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-6">
                                        <label for="tax_added" class="form-label">Tax</label>
                                          <div class="d-flex align-items-center">
                                                <span class="input-group-text">%</span>
                                                <input type="number" class="form-control me-2" id="tax_added" name="tax_added" value="{{ isset($tax) ? $tax->tax_added : old('tax_added') }}" placeholder=" 5 ">
                                        </div>
                                        <div class="error-message">{{$errors->first('tax_added')}}</div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection