@extends('admin.layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-description d-flex align-items-center">
                    <div class="page-description-content flex-grow-1">
                        <h1>Add Inspector</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">  
            <div class="col-xl-12">
                <div class="card widget widget-stats">
                    <div class="card-body">
                        <div class="widget-stats-container d-flex">
                            <div class="widget-stats-content flex-fill">
                                <form class="row g-3" action="{{ route('admin.store_inspector')}}" method="POST" enctype="multipart/form-data">
                                    
                                    @csrf
                                    <div class="col-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                                        <div class="error-message">{{$errors->first('name')}}</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email id" value="{{ old('email') }}">
                                        <div class="error-message">{{$errors->first('email')}}</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="mobile_no" class="form-label">Mobile Number</label>
                                        <input type="tel" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile Number" value="{{ old('mobile_no') }}">
                                        <div class="error-message">{{$errors->first('mobile_no')}}</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password" >
                                        <div class="error-message">{{$errors->first('password')}}</div>
                                    </div>
                                   
                                    <!-- <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            Checkbox do you wanna share credentials on the mail 
                                            </label>
                                        </div>
                                    </div> -->
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