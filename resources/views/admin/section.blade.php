@extends('layouts.admin')

@section('header')
<div class="page-title-heading">
    <div class="page-title-icon">
        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
        </i>
    </div>
    <div>Sections Settings </div>
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
                <form action="/admin/section" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group"><label for="title1" >Section Title 1</label><input name="title1" id="title1" type="text" class="form-control" value="{{$set->title1}}"></div>

                    <div class="position-relative form-group"><label for="title2" >Section Title 2</label><input name="title2" id="title2" type="text" class="form-control" value="{{$set->title2}}"></div>

                    <div class="position-relative form-group"><label for="title3" >Section Title 3</label><input name="title3" id="title3" type="text" class="form-control" value="{{$set->title3}}"></div>

                    <div class="position-relative form-group"><label for="code1" >Content 1</label><select name="code1" id="code1" class="form-control">
                      <option value="">Select content to show product</option>
                      <option <?php echo $set->code1 == 'on' ? 'selected' : ''; ?> value="on">Best Sellet</option>
                      @foreach($cats as $cat)
                      <option <?php echo $cat->id == $set->code1 ? 'selected' : ''; ?> value="{{$cat->id}}">{{$cat->title}}</option>
                      @endforeach
                    </select></div>

                    <div class="position-relative form-group"><label for="code2" >Content 2</label><select name="code2" id="code2" class="form-control">
                      <option value="">Select content to show product</option>
                      <option <?php echo $set->code2 == 'on' ? 'selected' : ''; ?> value="on">Best Sellet</option>
                      @foreach($cats as $cat)
                      <option <?php echo $cat->id == $set->code2 ? 'selected' : ''; ?> value="{{$cat->id}}">{{$cat->title}}</option>
                      @endforeach
                    </select></div>

                    <div class="position-relative form-group"><label for="code3" >Content 3</label><select name="code3" id="code3" class="form-control">
                      <option value="">Select content to show product</option>
                      <option <?php echo $set->code3 == 'on' ? 'selected' : ''; ?> value="on">Best Sellet</option>
                      @foreach($cats as $cat)
                      <option <?php echo $cat->id == $set->code3 ? 'selected' : ''; ?> value="{{$cat->id}}">{{$cat->title}}</option>
                      @endforeach
                    </select></div>

                    <div class="position-relative form-group"><label for="btn1" >Button text 1</label><input name="btn1" id="btn1" type="text" class="form-control" value="{{$set->btn1}}"></div> 

                    <div class="position-relative form-group"><label for="btn2" >Button text 2</label><input name="btn2" id="btn2" type="text" class="form-control" value="{{$set->btn2}}"></div> 

                    <div class="position-relative form-group"><label for="btn3" >Button text 3</label><input name="btn3" id="btn3" type="text" class="form-control" value="{{$set->btn3}}"></div> 

                    <div class="position-relative form-group"><label for="slide1" >Home Page Slide 1</label><input name="slide1" id="slide1" type="file" class="form-control" value="{{$set->slide1}}"></div>

                    <img src="/image/adds/{{$set->slide1}}" height="100px" width="150px"> 

                    <div class="position-relative form-group"><label for="slide2" >Home Page Slide 3</label><input name="slide2" id="slide2" type="file" class="form-control" value="{{$set->slide2}}"></div>

                    <img src="/image/adds/{{$set->slide2}}" height="100px" width="150px"> 

                    <div class="position-relative form-group"><label for="slide3" >Home Page Slide 3</label><input name="slide3" id="slide3" type="file" class="form-control" value="{{$set->slide3}}"></div>

                    <img src="/image/adds/{{$set->slide3}}" height="100px" width="150px"> 

                    <div class="position-relative form-group"><label for="slide4" >Electronics Page Slide</label><input name="slide4" id="slide4" type="file" class="form-control" value="{{$set->slide4}}"></div>

                    <img src="/image/adds/{{$set->slide4}}" height="100px" width="150px"> 

                    <div class="position-relative form-group"><label for="slide5" >Blog Page Slide</label><input name="slide5" id="slide5" type="file" class="form-control" value="{{$set->slide5}}"></div>

                    <img src="/image/adds/{{$set->slide5}}" height="100px" width="150px"> 

                    <hr>
                    
                    <button type="submit" class="mt-1 btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection