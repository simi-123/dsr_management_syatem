@extends('admin.layouts.common')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Module Update Form</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <a class="btn btn-secondary" href="{{ route('module.store') }}"><b>Back</b></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Module Details</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                    @foreach ($module as $module)
                    <form class="" action="{{ route('module.update', $module->module_id) }}" method="post">
                    @method('PUT')  <!-- or @method('PATCH') -->
                    @csrf
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Project ID<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                <select class="form-control" name="project_id">
                                @if(!empty($projects))
                                @foreach($projects as $key => $value)
                                <option value="{{ $value->project_id }}" {{ ($module->project_id == $value->project_id) ? 'selected' : '' }}> {{ $value->project_id }}</option>
                            @endforeach
                            @endif
                                </select>
                                    
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Module Name<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="module_name" data-validate-length-range="name" type="text" placeholder="{{ old('module_name', $module->module_name) }}">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 offset-md-3">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="reset" class="btn btn-success">Reset</button>
                                </div>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
