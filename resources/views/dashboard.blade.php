@extends('layouts.user.app')
@section('page_title', 'User Dashboard')

@section('content')  
    {{-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div> --}}

    <div class="row pt-3">
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>150</h3>

            <p>New Orders</p>
            </div>
            <div class="icon">
            <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>

            <p>Bounce Rate</p>
            </div>
            <div class="icon">
            <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
            <h3>44</h3>

            <p>User Registrations</p>
            </div>
            <div class="icon">
            <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>65</h3>

            <p>Unique Visitors</p>
            </div>
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
    </div>

    <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Sales
            </h3>
            <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                </li>
                </ul>
            </div>
            </div><!-- /.card-header -->
            <div class="card-body">
            <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart"
                    style="position: relative; height: 300px;">
                    <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                </div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                </div>
            </div>
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- DIRECT CHAT -->
        <div class="card direct-chat direct-chat-primary">
            <div class="card-header">
            <h3 class="card-title">Direct Chat</h3>

            <div class="card-tools">
                <span title="3 New Messages" class="badge badge-primary">3</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                <i class="fas fa-comments"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
                </button>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <!-- Conversations are loaded here -->
            <div class="direct-chat-messages">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                </div>
                <!-- /.direct-chat-infos -->
                <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                    Is this template really for free? That's unbelievable!
                </div>
                <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                </div>
                <!-- /.direct-chat-infos -->
                <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                    You better believe it!
                </div>
                <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                </div>
                <!-- /.direct-chat-infos -->
                <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                    Working with AdminLTE on a great new app! Wanna join?
                </div>
                <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                </div>
                <!-- /.direct-chat-infos -->
                <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                    I would love to.
                </div>
                <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

            </div>
            <!--/.direct-chat-messages-->

            <!-- Contacts are loaded here -->
            <div class="direct-chat-contacts">
                <ul class="contacts-list">
                <li>
                    <a href="#">
                    <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">

                    <div class="contacts-list-info">
                        <span class="contacts-list-name">
                        Count Dracula
                        <small class="contacts-list-date float-right">2/28/2015</small>
                        </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                    </a>
                </li>
                <!-- End Contact Item -->
                <li>
                    <a href="#">
                    <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">

                    <div class="contacts-list-info">
                        <span class="contacts-list-name">
                        Sarah Doe
                        <small class="contacts-list-date float-right">2/23/2015</small>
                        </span>
                        <span class="contacts-list-msg">I will be waiting for...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                    </a>
                </li>
                <!-- End Contact Item -->
                <li>
                    <a href="#">
                    <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">

                    <div class="contacts-list-info">
                        <span class="contacts-list-name">
                        Nadia Jolie
                        <small class="contacts-list-date float-right">2/20/2015</small>
                        </span>
                        <span class="contacts-list-msg">I'll call you back at...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                    </a>
                </li>
                <!-- End Contact Item -->
                <li>
                    <a href="#">
                    <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">

                    <div class="contacts-list-info">
                        <span class="contacts-list-name">
                        Nora S. Vans
                        <small class="contacts-list-date float-right">2/10/2015</small>
                        </span>
                        <span class="contacts-list-msg">Where is your new...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                    </a>
                </li>
                <!-- End Contact Item -->
                <li>
                    <a href="#">
                    <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">

                    <div class="contacts-list-info">
                        <span class="contacts-list-name">
                        John K.
                        <small class="contacts-list-date float-right">1/27/2015</small>
                        </span>
                        <span class="contacts-list-msg">Can I take a look at...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                    </a>
                </li>
                <!-- End Contact Item -->
                <li>
                    <a href="#">
                    <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">

                    <div class="contacts-list-info">
                        <span class="contacts-list-name">
                        Kenneth M.
                        <small class="contacts-list-date float-right">1/4/2015</small>
                        </span>
                        <span class="contacts-list-msg">Never mind I found...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                    </a>
                </li>
                <!-- End Contact Item -->
                </ul>
                <!-- /.contacts-list -->
            </div>
            <!-- /.direct-chat-pane -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            <form action="#" method="post">
                <div class="input-group">
                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                <span class="input-group-append">
                    <button type="button" class="btn btn-primary">Send</button>
                </span>
                </div>
            </form>
            </div>
            <!-- /.card-footer-->
        </div>
        <!--/.direct-chat -->

        <!-- TO DO List -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">
                <i class="ion ion-clipboard mr-1"></i>
                To Do List
            </h3>

            <div class="card-tools">
                <ul class="pagination pagination-sm">
                <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                <li class="page-item"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                </ul>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <ul class="todo-list" data-widget="todo-list">
                <li>
                <!-- drag handle -->
                <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                </span>
                <!-- checkbox -->
                <div  class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo1" id="todoCheck1">
                    <label for="todoCheck1"></label>
                </div>
                <!-- todo text -->
                <span class="text">Design a nice theme</span>
                <!-- Emphasis label -->
                <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                <!-- General tools such as edit or delete-->
                <div class="tools">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-o"></i>
                </div>
                </li>
                <li>
                <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                </span>
                <div  class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                    <label for="todoCheck2"></label>
                </div>
                <span class="text">Make the theme responsive</span>
                <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                <div class="tools">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-o"></i>
                </div>
                </li>
                <li>
                <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                </span>
                <div  class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo3" id="todoCheck3">
                    <label for="todoCheck3"></label>
                </div>
                <span class="text">Let theme shine like a star</span>
                <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                <div class="tools">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-o"></i>
                </div>
                </li>
                <li>
                <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                </span>
                <div  class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo4" id="todoCheck4">
                    <label for="todoCheck4"></label>
                </div>
                <span class="text">Let theme shine like a star</span>
                <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                <div class="tools">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-o"></i>
                </div>
                </li>
                <li>
                <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                </span>
                <div  class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo5" id="todoCheck5">
                    <label for="todoCheck5"></label>
                </div>
                <span class="text">Check your messages and notifications</span>
                <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                <div class="tools">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-o"></i>
                </div>
                </li>
                <li>
                <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                </span>
                <div  class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo6" id="todoCheck6">
                    <label for="todoCheck6"></label>
                </div>
                <span class="text">Let theme shine like a star</span>
                <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                <div class="tools">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash-o"></i>
                </div>
                </li>
            </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
            <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
            </div>
        </div>
        <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

        <!-- Map card -->
        <div class="card bg-gradient-primary">
            <div class="card-header border-0">
            <h3 class="card-title">
                <i class="fas fa-map-marker-alt mr-1"></i>
                Visitors
            </h3>
            <!-- card tools -->
            <div class="card-tools">
                <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                <i class="far fa-calendar-alt"></i>
                </button>
                <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
            </div>
            <div class="card-body">
            <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.card-body-->
            <div class="card-footer bg-transparent">
            <div class="row">
                <div class="col-4 text-center">
                <div id="sparkline-1"></div>
                <div class="text-white">Visitors</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                <div id="sparkline-2"></div>
                <div class="text-white">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                <div id="sparkline-3"></div>
                <div class="text-white">Sales</div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            </div>
        </div>
        <!-- /.card -->

        <!-- solid sales graph -->
        <div class="card bg-gradient-info">
            <div class="card-header border-0">
            <h3 class="card-title">
                <i class="fas fa-th mr-1"></i>
                Sales Graph
            </h3>

            <div class="card-tools">
                <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                <i class="fas fa-times"></i>
                </button>
            </div>
            </div>
            <div class="card-body">
            <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-transparent">
            <div class="row">
                <div class="col-4 text-center">
                <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                        data-fgColor="#39CCCC">

                <div class="text-white">Mail-Orders</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                        data-fgColor="#39CCCC">

                <div class="text-white">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                        data-fgColor="#39CCCC">

                <div class="text-white">In-Store</div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->

        <!-- Calendar -->
        <div class="card bg-gradient-success">
            <div class="card-header border-0">

            <h3 class="card-title">
                <i class="far fa-calendar-alt"></i>
                Calendar
            </h3>
            <!-- tools card -->
            <div class="card-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="dropdown-menu" role="menu">
                    <a href="#" class="dropdown-item">Add new event</a>
                    <a href="#" class="dropdown-item">Clear events</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">View calendar</a>
                </div>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pt-0">
            <!--The calendar -->
            <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </section>
        <!-- right col -->
    </div>


    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">UI elements /</span> Tabs & Pills</h4>

<!-- Tabs -->
<h5 class="py-3 my-4">Tabs</h5>

<div class="row">
  <div class="col-xl-6">
    <h6 class="text-muted">Basic</h6>
    <div class="nav-align-top mb-4">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-messages" aria-controls="navs-top-messages" aria-selected="false">Messages</button>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
          <p>
            Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps powder. Bear
            claw
            candy topping.
          </p>
          <p class="mb-0">
            Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon jelly-o
            jelly-o ice
            cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow jujubes sweet.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
          <p>
            Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice cream. Gummies
            halvah
            tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream cheesecake fruitcake.
          </p>
          <p class="mb-0">
            Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah cotton candy
            liquorice caramels.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-top-messages" role="tabpanel">
          <p>
            Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
            bears
            cake chocolate.
          </p>
          <p class="mb-0">
            Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
            sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
            jelly.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6">
    <h6 class="text-muted">Filled Tabs</h6>
    <div class="nav-align-top mb-4">
      <ul class="nav nav-tabs nav-fill" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-home" aria-controls="navs-justified-home" aria-selected="true"><i class="tf-icons bx bx-home"></i> Home <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger">3</span></button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile" aria-selected="false"><i class="tf-icons bx bx-user"></i> Profile</button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-messages" aria-controls="navs-justified-messages" aria-selected="false"><i class="tf-icons bx bx-message-square"></i> Messages</button>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
          <p>
            Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps powder. Bear
            claw
            candy topping.
          </p>
          <p class="mb-0">
            Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon jelly-o
            jelly-o ice
            cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow jujubes sweet.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
          <p>
            Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice cream. Gummies
            halvah
            tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream cheesecake fruitcake.
          </p>
          <p class="mb-0">
            Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah cotton candy
            liquorice caramels.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
          <p>
            Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
            bears
            cake chocolate.
          </p>
          <p class="mb-0">
            Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
            sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
            jelly.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
    <div class="col-12 col-sm-6">
      <div class="card card-primary card-outline card-tabs">
        <div class="card-header p-0 pt-1 border-bottom-0">
          <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Settings</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="custom-tabs-three-tabContent">
            <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
            </div>
            <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
               Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
            </div>
            <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
               Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
            </div>
            <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
               Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="col-12 col-sm-6">
      <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
          <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Settings</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="custom-tabs-four-tabContent">
            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
            </div>
            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
               Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
            </div>
            <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
               Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
            </div>
            <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
               Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>

@endsection 

@section('script')

@endsection
 

