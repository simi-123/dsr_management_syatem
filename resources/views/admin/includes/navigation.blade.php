<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>

        <ul class="nav side-menu">
            <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
          
            @if(Auth::user()->role == 1)  
            <li><a><i class="fa fa-edit"></i>Customer<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('CustomerMaster')}}"><b>Customer Listing</b> </a></li>
          <li><a href="{{route('customer.create')}}"><b>Add Customer</b> </a></li>
        </ul>

   
      <li><a><i class="fa fa-edit"></i>Projects<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('ProjectMaster')}}"><b>Project Listing</b> </a></li>
          <li><a href="{{route('ProjectMaster.create')}}"><b>Add Project</b> </a></li>
        </ul>



      <li><a><i class="fa fa-edit"></i>Modules<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('ModuleMaster')}}"><b>Module Listing</b> </a></li>
          <li><a href="{{route('module.create')}}"><b>Add Module</b> </a></li>
        </ul>

      <li><a><i class="fa fa-edit"></i>Developer <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('DeveloperMaster')}}"><b>Developer Listing</b> </a></li>
          <li><a href="{{route('Developer.create')}}"><b>Add Developer</b> </a></li>
        </ul>


      <li><a><i class="fa fa-edit"></i>Manager <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('DeveloperManager')}}"><b>Manager Listing</b> </a></li>
          <li><a href="{{route('link.create')}}"><b>Add Manager</b> </a></li>
        </ul>

  
        <li><a><i class="fa fa-edit"></i>Task<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('TaskMaster')}}"><b>Task Listing</b> </a></li>
          <li><a href="{{route('task.create')}}"><b>Add Task</b> </a></li>
        </ul>

      <li><a><i class="fa fa-edit"></i>Task Progress<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('ProgressMaster')}}"><b>Progress Listing</b> </a></li>
          <li><a href="{{route('progress.create')}}"><b>Add Progress</b> </a></li>
        </ul>

        
        

        <li><a><i class="fa fa-edit"></i> Role Management<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('roles.index')}}"><b>Roles</b></a></li>
              <li><a href="{{route('permissions.index')}}"><b>Permission</b></a></li>
            </ul>
          </li>
         <li>
             <a href="{{route('users.index')}}"><i class="glyphicon glyphicon-user"></i>Users </a>
        </li>

      @endif

      @if(Auth::user()->role == 2)  
            <li><a><i class="fa fa-edit"></i>Customer<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('CustomerMaster')}}"><b>Customer Listing</b> </a></li>
          <li><a href="{{route('customer.create')}}"><b>Add Customer</b> </a></li>
        </ul>

   
      <li><a><i class="fa fa-edit"></i>Projects<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('ProjectMaster')}}"><b>Project Listing</b> </a></li>
          <li><a href="{{route('ProjectMaster.create')}}"><b>Add Project</b> </a></li>
        </ul>



      <li><a><i class="fa fa-edit"></i>Modules<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('ModuleMaster')}}"><b>Module Listing</b> </a></li>
          <li><a href="{{route('module.create')}}"><b>Add Module</b> </a></li>
        </ul>

      <li><a><i class="fa fa-edit"></i>Developer <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('DeveloperMaster')}}"><b>Developer Listing</b> </a></li>
          <li><a href="{{route('Developer.create')}}"><b>Add Developer</b> </a></li>
        </ul>


      <li><a><i class="fa fa-edit"></i>Manager <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('DeveloperManager')}}"><b>Manager Listing</b> </a></li>
          <li><a href="{{route('link.create')}}"><b>Add Manager</b> </a></li>
        </ul>

  
        <li><a><i class="fa fa-edit"></i>Task<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('TaskMaster')}}"><b>Task Listing</b> </a></li>
          <li><a href="{{route('task.create')}}"><b>Add Task</b> </a></li>
        </ul>

      <li><a><i class="fa fa-edit"></i>Task Progress<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('ProgressMaster')}}"><b>Progress Listing</b> </a></li>
          <li><a href="{{route('progress.create')}}"><b>Add Progress</b> </a></li>
        </ul>

      @endif

      @if(Auth::user()->role == 3)  

        <li><a><i class="fa fa-edit"></i>Task<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('TaskMaster')}}"><b>Task Listing</b> </a></li>
          <li><a href="{{route('task.create')}}"><b>Add Task</b> </a></li>
        </ul>

      <li><a><i class="fa fa-edit"></i>Task Progress<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('ProgressMaster')}}"><b>Progress Listing</b> </a></li>
          <li><a href="{{route('progress.create')}}"><b>Add Progress</b> </a></li>
        </ul>

      @endif

        </ul>
    </div>
</div>
<!-- /sidebar menu -->
