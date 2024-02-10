@extends('admin.layouts.common')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Developer manager Form</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                    <a class="btn btn-secondary"  href="{{route('link.store') }}"><b>Back</b></a>
                        
                    </div>
                </div>
            </div>
        </div>
      <div class="clearfix"></div>

      <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                  <div class="x_title">
                      <h2>Developer Manager Details </h2>
                      <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                      </ul>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<form class="" action="{{route('link.update',$developer_manager->link_id)}}" method="post" >
@csrf 
@method('put')
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Developer id<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
    <select class="form-control" name="developer_id" class='optional' >
    @foreach($developer as $developers)
            <option value="{{$developers->id }}">{{$developers->developer_name }}</option>
        @endforeach
  </select>
    </div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Manager Id<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" class='optional' name="manager_id" data-validate-length-range="name" type="text" value="{{ $developer_manager->manager_id}}" /></div>
</div>
     
                             
    <div class="ln_solid">
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <button type='submit' class="btn btn-primary">Submit</button>
                <button type='reset' class="btn btn-success">Reset</button>
            </div>
        </div>
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



  

</body>

</html>
@endsection 