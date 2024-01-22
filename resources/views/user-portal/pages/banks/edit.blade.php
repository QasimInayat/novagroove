@extends('layouts.user_scaffold')
@push('title')
- {{isset($title) && !empty($title) ? $title : ''}}
@endpush
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-10">
            <h3>Hi, <span style="color: white;">{{Auth::user()->name}}</span></h3>
        </div>
        <div class="col-lg-2">
            <!-- <a class="btn btn-lg" href="{{route('user.banks.index')}}" style="background-color:white; color: #333;;">View All</a> -->
        </div>
        <div class="col-lg-12">
            <h2 class="text-center" style="color: white;">{{$title}}</h2>
        </div>
    </div>
    <div class="section__campaignForm mt-5">
        <div class="mb-3">
            @if($errors->any())
            @foreach($errors->all() as $value)
            <span class="text-danger" style="font-size:15px;"> {{$value}} </span><br>
            @endforeach
            @endif
        </div>
        <div class="container-fluid">
            <form action="{{route('user.banks.update' , $edit->id)}}" id="form__campaign" method="POST">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="twLink">Bank Name</label>
                            <input type="text" class="form-control" name="bank_name" value="{{!empty($edit->bank_name) ? $edit->bank_name : ''}}" placeholder="Enter Bank Name">
                            @error("bank_name") <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="artistName">Account Holder Name</label>
                            <input type="text" class="form-control" name="account_holder" value="{{!empty($edit->account_holder) ? $edit->account_holder : ''}}" placeholder="Enter account holder name">
                            @error('account_holder') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="artistName">Account Number</label>
                            <input type="number" class="form-control" name="account_number" value="{{!empty($edit->account_number) ? $edit->account_number : ''}}" placeholder="Enter account number">
                            @error('account_number') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="fbLink">IBAN Number</label>
                            <input type="text" class="form-control" name="iban" value="{{!empty($edit->iban) ? $edit->iban : ''}}" placeholder="Enter IBAN number">
                            @error("iban") <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div>

                    {{-- <div class="col-lg-6">
                        <div class="form-group">
                            <label for="musicVideoLink">Swift Code</label>
                            <input type="text" class="form-control" name="switf_code" value="{{!empty($edit->switf_code) ? $edit->switf_code : ''}}" placeholder="Enter your swift code">
                            @error("switf_code") <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div> --}}
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="contactNumber">Bank Country</label>
                            <input type="text" class="form-control" name="bank_country" value="{{!empty($edit->bank_country) ? $edit->bank_country : ''}}" placeholder="Enter bank country name ">
                            @error("bank_country") <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="form-group">
                            <label for="releaseDate">Bank Location</label>
                            <input type="text" class="form-control" name="bank_location" value="{{!empty($edit->bank_location) ? $edit->bank_location : ''}}" placeholder="Enter bank location">
                            @error("bank_location") <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div> --}}
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="igLink">Bank Street Address</label>
                            <input type="text" class="form-control" name="bank_street" value="{{!empty($edit->bank_street) ? $edit->bank_street : ''}}" placeholder="Enter bank street address">
                            @error("bank_street") <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="form-group">
                            <label for="contactNumber">Bank Zip Code</label>
                            <input type="number" class="form-control" name="bank_zip_code" value="{{!empty($edit->bank_zip_code) ? $edit->bank_zip_code : ''}}" placeholder="Enter bank zip code">
                            @error("bank_zip_code") <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-6">
                        <div class="form-group">
                            <label for="releaseDate">Bank Password</label>
                            <input type="password" class="form-control" name="bank_password" value="{{!empty($edit->bank_password) ? $edit->bank_password : ''}}" placeholder="Enter your bankD account password">
                            @error("bank_password") <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div><br> --}}
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center mt-3" style="color: white;">Personal Information</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="email">Street Address</label>
                            <input type="text" class="form-control" name="street" id="email" value="{{!empty($edit->street) ? $edit->street : ''}}" placeholder="Enter your street address">
                            @error("street") <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="form-group">
                            <label for="releastTitle">Zip Code</label>
                            <input type="number" class="form-control" name="zip_code" value="{{!empty($edit->zip_code) ? $edit->zip_code : ''}}" placeholder="Enter your zip code">
                            @error("zip_code") <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div> --}}

                    {{-- <div class="col-lg-6">
                        <div class="form-group">
                            <label for="spotifyLink">Location</label>
                            <input type="text" class="form-control" name="location" value="{{!empty($edit->location) ? $edit->location : ''}}" placeholder="Enter your house location ">
                            @error("location") <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div> --}}

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="appleLink">Country</label>
                            <input type="text" class="form-control" name="country" value="{{!empty($edit->country) ? $edit->country : ''}}" placeholder="Enter your country">
                            @error("country") <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="soundCLink">Routing Number</label>
                            <input type="text" class="form-control" name="routing_number" value="{{!empty($edit->routing_number) ? $edit->routing_number : ''}}" placeholder="Enter your routing number">
                            @error("routing_number") <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg" style="background-color:white; color: #333;;">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>





    <!-- Music Plateforms -->



    <!-- partial -->
</div>


@endsection
@push("scripts")
<!-- inject:js -->
<script src="{{asset('web/js/off-canvas.js')}}"></script>
<script src="{{asset('web/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('web/js/misc.js')}}"></script>
<script src="{{asset('web/js/settings.js')}}"></script>
<script src="{{asset('web/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('web/js/dashboard.js')}}"></script>
<!-- End custom js for this page -->
<!-- Adding Charst to sharplinedistro -->
<script src="{{asset('web/js/chart.js')}}"></script>
<script type="">
    $(document).ready(function () { $('#example').DataTable(); });
        </script>

@endpush
