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
    <img class="animation__shake" src="https://i.ibb.co/GQzgtG1/My-project.png" alt="AdminLTELogo" height="60" width="60">
  </div>

@include('layouts.navigation')

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
                <h3>{{sizeof($docres1)}}</h3>
                <p>Total Number Of Request:</p>
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
                <h3>{{sizeof($pending)}}</h3>
                <p>Total Number Of Request Pending:</p>
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
                <h3>{{sizeof($approved)}}</h3>
                <p>Total Number Of Request Approved:</p>
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
                <h3>{{sizeof($claimed)}}</h3>
                <p>Total Number Of Request Claimed:</p>
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
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

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
  
</script>