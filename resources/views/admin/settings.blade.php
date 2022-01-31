@extends('layouts.admin')

@section('header')
<div class="page-title-heading">
    <div class="page-title-icon">
        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
        </i>
    </div>
    <div>Settings </div>
</div>
<div class="page-title-actions">
    <a href="/admin/home" class="btn btn-info">Go Back</a>
</div> 
@endsection

@section('content')
<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
  <div class="row">
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Site settings</h5>
                <form action="/admin/setting" method="post">
                    @csrf
                    <div class="position-relative form-group"><label for="ship" >Shipping Charge</label><input name="ship" id="ship" type="number" class="form-control" value="{{$set->ship}}"></div> 

                    <div class="position-relative form-group"><label for="payment" >Payment Policy</label><textarea class="form-control" name="payment" id="payment" rows="10">{{$set->payment}}</textarea></div>

                    <div class="position-relative form-group"><label for="privacy" >Privacy Policy</label><textarea class="form-control" name="privacy" id="privacy" rows="10">{{$set->privacy}}</textarea></div>

                    <div class="position-relative form-group"><label for="terms" >Terms Policy</label><textarea class="form-control" name="terms" id="terms" rows="10">{{$set->terms}}</textarea></div>

                    <div class="position-relative form-group"><label for="about" >About us</label><textarea class="form-control" name="about" id="about" rows="10">{{$set->about}}</textarea></div>

                    <div class="position-relative form-group"><label for="complain" >Complain Center</label><textarea class="form-control" name="complain" id="complain" rows="10">{{$set->complain}}</textarea></div>

                    
                    <button type="submit" class="mt-1 btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection