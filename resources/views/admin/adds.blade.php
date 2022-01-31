@extends('layouts.admin')

@section('header')
<div class="page-title-heading">
    <div class="page-title-icon">
        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
        </i>
    </div>
    <div>Adds Settings </div>
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
                <form action="/admin/add" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group"><label for="add1" >Add image 1</label><input name="add1" id="add1" type="file" class="form-control"></div>

                    <img src="/image/adds/{{$set->add1}}" height="100px" width="150px">

                    <div class="position-relative form-group"><label for="link1" >Add link 1</label><input name="link1" id="link1" type="text" class="form-control" value="{{$set->link1}}"></div>

                    <div class="position-relative form-group"><label for="add2" >Add image 2</label><input name="add2" id="add2" type="file" class="form-control"></div>

                    <img src="/image/adds/{{$set->add2}}" height="100px" width="150px">

                    <div class="position-relative form-group"><label for="link2" >Add link 2</label><input name="link2" id="link2" type="text" class="form-control" value="{{$set->link2}}"></div>

                    <div class="position-relative form-group"><label for="add3" >Add image 3</label><input name="add3" id="add3" type="file" class="form-control"></div>

                    <img src="/image/adds/{{$set->add3}}" height="100px" width="150px"> 

                    <div class="position-relative form-group"><label for="link3" >Add link 3</label><input name="link3" id="link3" type="text" class="form-control" value="{{$set->link3}}"></div>
                    
                    <div class="position-relative form-group"><label for="add4" >Add image 4</label><input name="add4" id="add4" type="file" class="form-control"></div>

                    <img src="/image/adds/{{$set->add4}}" height="100px" width="150px"> 

                    <div class="position-relative form-group"><label for="link4" >Add link 4</label><input name="link4" id="link4" type="text" class="form-control" value="{{$set->link4}}"></div>

                    <div class="position-relative form-group"><label for="add5" >Add image 5</label><input name="add5" id="add5" type="file" class="form-control"></div>

                    <img src="/image/adds/{{$set->add5}}" height="100px" width="150px"> 

                    <div class="position-relative form-group"><label for="link5" >Add link 5</label><input name="link5" id="link5" type="text" class="form-control" value="{{$set->link5}}"></div>

                    <div class="position-relative form-group"><label for="add6" >Add image 6</label><input name="add6" id="add6" type="file" class="form-control"></div>

                    <img src="/image/adds/{{$set->add6}}" height="100px" width="150px"> 

                    <div class="position-relative form-group"><label for="link6" >Add link 6</label><input name="link6" id="link6" type="text" class="form-control" value="{{$set->link6}}"></div>

                    <div class="position-relative form-group"><label for="add7" >Add image 7</label><input name="add7" id="add7" type="file" class="form-control"></div>

                    <img src="/image/adds/{{$set->add7}}" height="100px" width="150px">

                    <div class="position-relative form-group"><label for="link7" >Add link 7</label><input name="link7" id="link7" type="text" class="form-control" value="{{$set->link7}}"></div>

                    <div class="position-relative form-group"><label for="add8" >Add image 8</label><input name="add8" id="add8" type="file" class="form-control"></div>

                    <img src="/image/adds/{{$set->add8}}" height="100px" width="150px"> 

                    <div class="position-relative form-group"><label for="link8" >Add link 8</label><input name="link8" id="link8" type="text" class="form-control" value="{{$set->link8}}"></div>

                    <button type="submit" class="mt-1 btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection