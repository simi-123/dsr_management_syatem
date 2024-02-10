@extends('admin.layouts.common')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Task Form</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                    <a class="btn btn-secondary"  href="{{route('task.store') }}"><b>Back</b></a>
                        
                    </div>
                </div>
            </div>
        </div>
      <div class="clearfix"></div>

      <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                  <div class="x_title">
                      <h2>Task Details </h2>
                      <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                      </ul>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<form class="" action="{{route('task.store')}}" method="post" >
@csrf 
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Customer Id<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
    <select class="form-control" name="customer_id" class='optional' >
    @foreach($customer as $customers)
            <option value="{{$customers->customer_id }}">{{$customers->name }}</option>
        @endforeach
    
  </select>
    </div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Project Id<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
    <select class="form-control" name="project_id" class='optional' >
    @foreach($project as $projects)
            <option value="{{$projects->project_id}}">{{ $projects->project_code }}</option>
        @endforeach
  </select>
</div>
</div>

<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Module Id<span class="">*</span></label>
    <div class="col-md-6 col-sm-6">
    <select class="form-control" name="module_id" class='optional'>
    @foreach($module as $modules)
            <option value="{{$modules->module_id}}">{{ $modules->module_name }}</</option>
        @endforeach
    </select>
</div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Task Description<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <textarea class="form-control" type="text" class='optional' name="task_desc" data-validate-linked='email' required='required' ></textarea></div>
</div>       
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Task Detailed<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <textarea class="form-control" type="text" class='optional' name="task_detailed_understanding" data-validate-linked='email' required='required' ></textarea></div>
</div>      
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Assigned To<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" type="text" class='optional' name="assigned_to" data-validate-linked='email' required='required' /></div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Expected Time To Complete<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input id="time_spent" class="form-control timepicker" type="number" name="expected_time_to_complete" data-validate-linked='email' required='required' placeholder="Select time spent" /></div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Expected Start Date<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" type="date" class='optional' name="expected_start_date" data-validate-linked='email' required='required' /></div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Expected Completion Date<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" type="date" class='optional' name="expected_completion_date" data-validate-linked='email' required='required' /></div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Any Previous Task Refference<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" type="text" class='optional' name="any_previous_task_refference" data-validate-linked='email' required='required' /></div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Actual Start Date<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" type="date" class='optional' name="actual_start_date" data-validate-linked='email' required='required' /></div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Actual Completion Date<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" type="date" class='optional' name="actual_completion_date" data-validate-linked='email' required='required' /></div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Actual Time Taken<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
    <input id="time_spent" class="form-control timepicker" type="number" name="actual_time_taken" data-validate-linked='email' required='required' placeholder="Select Actual time taken" /></div>
</div>
<div class="field item form-group">
    <label class="col-form-label col-md-3 col-sm-3  label-align">Resaon For Delay<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input class="form-control" type="text" class='optional' name="resaon_for_delay" data-validate-linked='email' placeholder="Optional" /></div>
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