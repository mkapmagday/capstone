<?php if(Auth::user()->hasrole('admin')): ?>
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

    <?php echo $__env->make('layouts.anavigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <center></center>
      <section class="content">
        <h1>HOTLINE DIRECTORY</h1>
        <table>
          <tr>
            <th rowspan="2">STATION BASE(PS-14)</th>
            <td>LandLine: (02) 936-9182 </td>

          </tr>
          <tr>
            <td>CP NR. : 0935-883-2083</td>
          </tr>
          <tr>
            <td> RED CROSS</td>
            <td> 143 </td>
          </tr>
          <tr>
            <td> MMDA</td>
            <td> 136 </td>
          </tr>
          <tr>
            <td> 911</td>
            <td> 86505 </td>
          </tr>
          <tr>
            <td> PDEA</td>
            <td>351-74-33 </td>
          </tr>
          <tr>
            <td>MPD CRIME LAB</td>
            <td>316-75-27</td>
          </tr>
          <tr>
            <td>MDTEU</td>
            <td>527-3086-89</td>
          </tr>
          <tr>
            <td>MDA RESCUE</td>
            <td>862-3983</td>
          </tr>
          <tr>
            <td>COASTGUARD</td>
            <td>527-8481</td>
          </tr>
          <tr>
            <td>DE OCAMPO HOSPITAL</td>
            <td>715-0968 loc 101</td>
          </tr>
          <tr>
            <td>MERALCO</td>
            <td>+63 (2) 1 6211</td>
          </tr>
          <tr>
            <td>BACOOD FIRE STATION</td>
            <td>0997883 / (632) 714-6923</td>
          </tr>
          <tr>
            <td>STA. MESA FIRE STATION</td>
            <td>7166424</td>
          </tr>
          <tr>
            <td>MALACANANG FIRE STATION</td>
            <td>7351894</td>
          </tr>
          <tr>
            <td rowspan="3">PNP COMMAND CENTER</td>
            <td>GLOBE - 09175382495</td>
          </tr>
          <tr>
            <td>SMART - 09988490013</td>
          </tr>
          <tr>
            <td>LANDLINE - 0287253178</td>
          </tr>
          <tr>
            <td>CRB MENDIOLA PCP</td>
            <td>8-751-4530</td>
          </tr>
          <tr>
            <td>UBA PCP</td>
            <td>8-524-1791</td>
          </tr>
        </table>

      </section>
      </center>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!---->

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
<style>
  table, th, tr, td {
    border: 1px solid black;
  }
</style>

<?php else: ?>

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

    <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <center>
      <section class="content">
        <h1>HOTLINE DIRECTORY</h1>
        <table>
          <tr>
            <th rowspan="2">STATION BASE(PS-14)</th>
            <td>LandLine: (02) 936-9182 </td>

          </tr>
          <tr>
            <td>CP NR. : 0935-883-2083</td>
          </tr>
          <tr>
            <td> RED CROSS</td>
            <td> 143 </td>
          </tr>
          <tr>
            <td> MMDA</td>
            <td> 136 </td>
          </tr>
          <tr>
            <td> 911</td>
            <td> 86505 </td>
          </tr>
          <tr>
            <td> PDEA</td>
            <td>351-74-33 </td>
          </tr>
          <tr>
            <td>MPD CRIME LAB</td>
            <td>316-75-27</td>
          </tr>
          <tr>
            <td>MDTEU</td>
            <td>527-3086-89</td>
          </tr>
          <tr>
            <td>MDA RESCUE</td>
            <td>862-3983</td>
          </tr>
          <tr>
            <td>COASTGUARD</td>
            <td>527-8481</td>
          </tr>
          <tr>
            <td>DE OCAMPO HOSPITAL</td>
            <td>715-0968 loc 101</td>
          </tr>
          <tr>
            <td>MERALCO</td>
            <td>+63 (2) 1 6211</td>
          </tr>
          <tr>
            <td>BACOOD FIRE STATION</td>
            <td>0997883 / (632) 714-6923</td>
          </tr>
          <tr>
            <td>STA. MESA FIRE STATION</td>
            <td>7166424</td>
          </tr>
          <tr>
            <td>MALACANANG FIRE STATION</td>
            <td>7351894</td>
          </tr>
          <tr>
            <td rowspan="3">PNP COMMAND CENTER</td>
            <td>GLOBE - 09175382495</td>
          </tr>
          <tr>
            <td>SMART - 09988490013</td>
          </tr>
          <tr>
            <td>LANDLINE - 0287253178</td>
          </tr>
          <tr>
            <td>CRB MENDIOLA PCP</td>
            <td>8-751-4530</td>
          </tr>
          <tr>
            <td>UBA PCP</td>
            <td>8-524-1791</td>
          </tr>
        </table>

      </section>
      </center>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!---->

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
<?php endif; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<style>
  table, th, tr, td {
    border: 1px solid black;
  }
</style><?php /**PATH C:\xampp\htdocs\capstone\resources\views/contact.blade.php ENDPATH**/ ?>