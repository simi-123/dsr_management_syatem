@extends('admin.layouts.common')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Developer Update Form</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                    <a class="btn btn-secondary"  href="{{route('Developer.store') }}"><b>Back</b></a>
                        
                    </div>
                </div>
            </div>
        </div>
      <div class="clearfix"></div>

      <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                  <div class="x_title">
                      <h2>Developer Details </h2>
                      <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                      </ul>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<form class="" action="{{route('Developer.update',$developer->id)}}" method="post">
@csrf 
@method('put')
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Developer Name<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" class='optional' name="developer_name" data-validate-length-range="name" type="text" value="{{ old('developer_name',$developer->developer_name) }}" /></div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Developer Email<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" class='optional' name="developer_email" data-validate-linked='email' data-validate-length-range="name" type="text" value="{{ old('developer_email',$developer->developer_email) }}"/></div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" class='optional' name="password" data-validate-length-range="name" type="text" value="{{old('password',$developer->password) }}"/></div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Developer Type<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
    <select class="form-control" name="developer_type" class='optional'>
    <option value="">select status</option>
<option value="1">Active</option>
<option value="0">In-Active</option>
</select>   
</div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Auth Token<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" class='optional' name="auth_token" data-validate-length-range="name" type="tinyint" value="{{ old('auth_token',$developer->auth_token) }}"/></div>
</div>     
                             
    <div class="ln_solid">
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <button type='submit' class="btn btn-primary">Update</button>
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