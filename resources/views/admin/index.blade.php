<!DOCTYPE html>
<html>
<head>

    <title> Admin</title>
    {{Html::style("admin/assets/css/bootstrap.css" )}}
    {{Html::style("admin/assets/css/custom.css" )}}
    {{Html::style("admin/assets/css/table.css" )}}

   <!--The Add/delete form-->
    {{Html::style("admin/mycss/reset.css" )}}
    {{Html::style("admin/mycss/style.css" )}}


</head>
<body>



    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">

                    </button>
                    <a class="navbar-brand" href=>
                        <h1>IVOTE</h1>

                    </a>

                </div>

                <span class="logout-spn" >
                  <a href="{{route('logout')}}" style="color:#fff;">LOGOUT {{Auth::user()->name}}</a>

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a ><i class="fa fa-qrcode "></i></a>
                    </li>
                    <li>
                        <a href="index"><i class="fa fa-bar-chart-o"></i>Students</a>
                    </li>

                    <li>
                        <a href="{{route('admin.candidates')}}"><i class="fa fa-edit "></i>Candidates</a>
                    </li>
                    

                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">



  <form action="{{route('register')}}" method="POST" class="contact">
  {{ csrf_field() }}
  <fieldset class="contact-inner">
  <p class="contact-input">
      <input type="text" name="regno" placeholder="Registration number" required>
    </p>
    <p class="contact-input">
      <input type="text" name="name" placeholder="Name" required>
    </p>
    <p class="contact-input">
        <label for="department">Department</label>
        <select name="dept" id="dept">
            <option value="{{0}}">None</option>
            @foreach($departments as $department)
                <option value="{{$department->name ?? 0}}">{{$department->name}}</option>
            @endforeach
        </select>
      </p>
      <p class="contact-input">
        <label for="faculty">Faculty</label>
        <select name="faculty" id="faculty">
            <option value="{{0}}">None</option>
            @foreach($faculties as $faculty)
                <option value="{{$faculty->name}}">{{$faculty->name}}</option>
            @endforeach
        </select>
      </p>
    <p class="contact-input">
      <input type="email" name="email" placeholder="email" required>
    </p>
    <p class="contact-input">
      <input type="password" name="password" placeholder="password" required>
    </p>
    
    <p class="contact-submit">
      <input type="submit" value="Add Student">
    </p>
  </fieldset>
</form>
<!--End of Form-->

<!--Start of Student Block-->
<div id="constrainer1">
<h3>Students Voters</h3>
    <table>
        <thead class="row">
        <th class="text-center col-lg-3">Matric Number</th>
        <th class="text-center col-lg-2">Name</th>
        <th class="text-center col-lg-2">Email</th>
        <th class="text-center col-lg-1">Department</th>
        <th class="text-center col-lg-1">Faculty</th>
        <th class="text-center col-lg-1">Status</th>
        <th class="text-center col-lg-2">action</th>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td class="text-center col-lg-3">{{$user->regno}}</td>
            <td class="text-center col-lg-2">{{$user->name}}</td>
            <td class="text-center col-lg-2">{{$user->email}}</td>
            <td class="text-center col-lg-1">{{$user->department ?? "None"}}</td>
            <td class="text-center col-lg-1">{{$user->user_faculty ?? "None"}}</td>
            <td class="text-center col-lg-1">{{$user->admission_status}}</td>
            <td class="text-center col-lg-2">
                <form action="{{route('candidate.add')}}" method="POST">
                    @if(empty($user->candidate)) {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <select name="seat">
                        @foreach ($seats as $seat)
                        <option value="{{$seat->position}}">{{$seat->position}}</option>
                        @endforeach
                    </select>
                    <input type="submit"value="Add Student">
                    @else
                    <input type="text"value="{{$user->candidate->seat}}" disabled>
                    @endif
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!--End of student block-->

             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
            </div>
    <div class="footer">


            <div class="row">
                <div class="col-lg-12" >
                   Copyright.2016Derk.All rights reserved.
                </div>
            </div>
        </div>


     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
