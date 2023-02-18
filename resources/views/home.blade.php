@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-9 d-flex align-items-center">
        <div class="col-md-3 text-center pt-3" >
            <div class="col-md-8 m-auto ">
                <img src="{{url('images/maytheme.jpeg')}}" alt=""  class="rounded-circle img-fluid">
            </div>

        </div>

        <div class="col-9  p-3 m-auto">
            <div class="main-header">
                <h1>Noe Myatt Theme</h1>
            </div>
            <div class="col-md-4 followers-wrapper d-flex justify-content-between">
                <div><strong>200</strong> post </div>
                <div><strong>200</strong> post </div>
                <div><strong>200</strong> post </div>
            </div>
            <div class="main-desc mt-2">
                <p>Playing to your audience — and embracing how they see your brand — is another way to get laughs.
                </p>
            </div>

        </div>

    </div>
  </div>
<div class="row mt-3">
    <div class="col  d-flex justify-content-center">
       <strong class="border-top p-2">Posts</strong>
    </div>
</div>
  <div class="row pt-4 justify-content-center m-auto">

    <div class="col-md-3 ">
        <img src="{{url('images/maytheme.jpeg')}}" alt=""  class="w-100 rounded ">
    </div>
    <div class="col-md-3">
        <img src="{{url('images/maytheme.jpeg')}}" alt=""  class="w-100 rounded ">
    </div>
    <div class="col-md-3">
        <img src="{{url('images/maytheme.jpeg')}}" alt=""  class=" w-100 rounded    ">
    </div>

  </div>
</div>
@endsection
