@include('layouts.partials.head')

<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav navbar-light bg-white">
        <li style="border-bottom: 1px solid rgb(222,226,230);">
            <img class="rounded-circle mt-2" id="profilepic" src="./css/images/profileimg.png" width="50px" height="50px">
            <div id="adminid" class="my-3"><h6>admin001@plusme.com</h6></div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admindashboard') }}">
            <span><img src="./css/icons/table.png" width="24px"></span>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active" href="{{ route('abookings') }}">
            <span><img src="./css/icons/bookings.png" width="24px"></span>
            <span>Bookings</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ausers') }}">
            <span><img src="./css/icons/users.png" width="24px"></span>
            <span>Users</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('avehicles') }}">
                <span><img src="./css/icons/car.png" width="24px"></span>
            <span>Vehicles</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('aparkinglot') }}">
                <span><img src="./css/icons/carpark.png" width="24px"></span>
                <span>Parking lots</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('anotifications') }}">
                <span><img src="./css/icons/notification.png" width="24px"></span>
                <span>Notifications</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('adminprofile') }}">
                <span><img src="./css/icons/profile.png" width="24px"></span>
                <span>My Profile</span>
            </a>
        </li>
      </ul>


      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom border-dark">
                <h1 class="h1">Bookings</h1>
                <div class="input-group col-md-6 mb-2">
                    <input type="text" class="form-control" placeholder="Search" aria-label="search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Search</button>
                    </div>
                </div>
                <div class="btn-toolbar mb-2">
                    <div class="download btn-group mr-2">
                        <button class="btn btn-sm btn-outline-light" style="padding-left:15px;padding-right:15px;"><img src="./css/icons/download.png" width="24px"></button>
                        <button class="btn btn-sm btn-outline-light" style="padding-left:15px;padding-right:15px;"><img src="./css/icons/print.png" width="24px"></button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div id="app" class="col-md-12">
                    <!-- vuesax file found assets/js/partials/DatatableComponent -->
                    <datatable-componenet></datatable-componenet>
                </div>
              </div>
              <!-- table -->

            </main>

    </div>
    <!-- /#wrapper -->
    <script src="//unpkg.com/vue/dist/vue.js"></script>
<script src="//unpkg.com/element-ui/lib/index.js"></script>
<script src="//unpkg.com/element-ui/lib/umd/locale/en.js"></script>
<script src="//unpkg.com/vue-data-tables@3.4.2/dist/data-tables.min.js"></script>
  </body>

</html>