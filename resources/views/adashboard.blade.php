<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

@include('layouts.anavigation')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{App\Models\DocumentRequest::count()}}</h3>

                <p>No. of Document Request</p>
              </div>
              <div class="icon">
                <i class="ion ion-document-text"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                      {{$claimed::count()}}
                </h3>
                <p>No. of Documents Issued</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{App\Models\User::count()}}</h3>
                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{App\Models\Residents::count()}}</h3>
                <p>Number of Residents</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>
                  New Users Per Month
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Bar</a>
                    </li>
                    
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="myChart"></canvas>
                   </div>
                   
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>
                  Document Request Per Month
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Bar</a>
                    </li>
                    
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="docresChart"></canvas>
                   </div>
                   
                  
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>
                  Current Active Users
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Bar</a>
                    </li>
                    
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="activeUserChart"></canvas>
                   </div>
                   
                  
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>
                  Claimed Request
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Bar</a>
                    </li>
                    
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="docresClaimedChart"></canvas>
                   </div>
                   
                  
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-bar mr-1"></i>
                  Document Request Per List
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Bar</a>
                    </li>
                    
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart">
                      <canvas id="documentRequestPerList"></canvas>
                   </div>
                   
                  
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- comment-->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js">
            import { Chart, registerables } from 'chart.js';

</script>
<script type="text/javascript">
  
      var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($data) }};

      var labels1 =  {{ Js::from($labels1) }};
      var docres1 =  {{ Js::from($data1) }};

      var labels2 =  {{ Js::from($labels2) }};
      var docres2 =  {{ Js::from($data2) }};

      var labels3 = {{ Js::from($labels3)}};
      var active_user = {{ Js::from($data3)}};
    
      var labels4 = {{ Js::from($labels4)}};
      var docres4 =  {{ Js::from($data4) }};
      var docres5 =  {{ Js::from($data5) }};
      var docres6 =  {{ Js::from($data6) }};
      var docres7 =  {{ Js::from($data7) }};
      var docres8 =  {{ Js::from($data8) }};
      var docres9 =  {{ Js::from($data9) }};

      console.log(docres4[1]);

      const data = {
        labels: labels,
        datasets: [{
          label: 'No of Users',
          backgroundColor: [
                'Yellow',
                'Blue',
                'Red ',
                'Green',
                'Brown ',
                'Teal',
                'Purple',
                'Gray',
                'Orange',
                'Maroon',
                'Charcoal',
                'Aquamarine'
            ],
          borderColor: 'rgb(255, 99, 132)',
          data: users,
        }]
      };
      const data1 = {
        labels: labels1,
        datasets: [{
          label: 'No of Document Requested',
          backgroundColor: [
                'Yellow',
                'Blue',
                'Red ',
                'Green',
                'Brown ',
                'Teal',
                'Purple',
                'Gray',
                'Orange',
                'Maroon',
                'Charcoal',
                'Aquamarine'
            ],
          borderColor: 'rgb(255, 99, 132)',
          data: docres1,
        }]
      };
      const data2 = {
        labels: labels2,
        datasets: [{
          label: 'No of Issued Documents',
          backgroundColor: [
                'Yellow',
                'Blue',
                'Red ',
                'Green',
                'Brown ',
                'Teal',
                'Purple',
                'Gray',
                'Orange',
                'Maroon',
                'Charcoal',
                'Aquamarine'
            ],
          borderColor: 'rgb(255, 99, 132)',
          data: docres2,
        }]
      };

      const data3 = {
        labels:labels3,
        datasets: [{
          label: 'No of Active Users',
          backgroundColor: [
                'Yellow',
               
            ],
          borderColor: 'rgb(255, 99, 132)',
          data: active_user,
        }]
      };

      
      const data4 = {
        labels:labels4,
        datasets: [
          {
          label: ['Certification'],
          backgroundColor: [
                'red',
               
            ],
          borderColor: 'rgb(255, 99, 132)',
          data: docres4,
          },
          {
          label: ['Certification(Stipend)'],
          backgroundColor: [
                'orange',
               
            ],
          borderColor: 'rgb(255, 99, 132)',
          data: docres5,
          },
          {
          label: ['Indigency'],
          backgroundColor: [
                'Yellow',
               
            ],
          borderColor: 'rgb(255, 99, 132)',
          data: docres6,
          },
          {
          label: ['Job Seeker'],
          backgroundColor: [
                'green',
               
            ],
          borderColor: 'rgb(255, 99, 132)',
          data: docres7,
          },
          {
          label: ['Oath of Undertaking'],
          backgroundColor: [
                'violet',
               
            ],
          borderColor: 'rgb(255, 99, 132)',
          data: docres8,
          },
          {
          label: ['Oneness'],
          backgroundColor: [
                'indigo',
               
            ],
          borderColor: 'rgb(255, 99, 132)',
          data: docres9,
          },
      ]
      };
  
      const config = {
        type: 'bar',
        data: data,
        options: {}
      };
      const config1 = {
        type: 'bar',
        data: data1,
        options: {}
      };
      const config2 = {
        type: 'bar',
        data: data2,
        options: {}
      };
      const config3 = {
        type: 'bar',
        data: data3,
        options: {}
      };
      const config4 = {
        type: 'bar',
        data: data4,
        options: {}
      };
  
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
      const docresChart = new Chart(
        document.getElementById('docresChart'),
        config1
      );
      const docresClaimedChart = new Chart(
        document.getElementById('docresClaimedChart'),
        config2
      );

      const activeUserChart = new Chart(
        document.getElementById('activeUserChart'),
        config3
      );
      const documentRequestPerList = new Chart(
        document.getElementById('documentRequestPerList'),
        config4
      );
  
</script>