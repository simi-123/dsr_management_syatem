@extends('admin.layouts.common')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Developer Form</h3>
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
                      <h2>Module Details </h2>
                      <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                      </ul>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<form class="" action="{{route('Developer.store')}}" method="post" >
@csrf 
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Developer Name<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" class='optional' name="developer_name" data-validate-length-range="name" type="text" />
    </div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Developer Email<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" class='optional' name="developer_email" data-validate-linked='email' data-validate-length-range="name" type="text" />
    </div>
</div>
<div class="field item form-group">
	<label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required">*</span></label>
	<div class="col-md-6 col-sm-6">
	<input class="form-control" type="password" id="password1" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}" title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character" required />
												
	<span style="position: absolute;right:15px;top:7px;" onclick="hideshow()" >
	<i id="slash" class="fa fa-eye-slash"></i>
	<i id="eye" class="fa fa-eye"></i>
	</span>
	</div>
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
        <input class="form-control" class='optional' name="auth_token" data-validate-length-range="name" type="tinyint" />
    </div>
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