
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @hasrole('admin')
                    <h1>Total Number Of Users: </h1>
                    @if(App\Models\User::all())
                        <h2>{{App\Models\User::count()}}</h2>
                    @endif
                    <canvas id="myChart"></canvas>
                    <h1>Total Number Of Document Request: </h1>
                    @if(App\Models\User::all())
                        <h2>{{App\Models\DocumentRequest::count()}}</h2>
                    @endif
                    <canvas id="docresChart"></canvas>
                    
                    <h1>Total Number Of Document Issued: </h1>
                    @foreach($data2 as $claimed)
                      <h2>{{$claimed}}</h2>
                    @endforeach
                    <canvas id="docresClaimedChart"></canvas>

                    @endhasrole

                    @hasrole('resident')
  <div class="container text-center">
    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Number Of Request: </h5>
            <p class="card-text">
              @foreach($docres1 as $docres)
              @if($loop->last)
              {{$loop->count}}
              @endif
              @endforeach
            </p>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Number Of Request Pending: </h5>
            <p class="card-text">
              @foreach($pending as $pending)
              @if($loop->last)
              {{$loop->count}}
              @endif
              @endforeach
            </p>
          </div>
        </div>
      </div>
    </div>
    &nbsp;
    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Number Of Request Approved: </h5>
            <p class="card-text">
              @foreach($approved as $approved)
              @if($loop->last)
              {{$loop->count}}
              @endif
              @endforeach
            </p>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Number Of Request Claimed: </h5>
            <p class="card-text">
              @foreach($claimed as $claimed)
              @if($loop->last)
              {{$loop->count}}
              @endif
              @endforeach
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endhasrole
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
canvas {
  border:1px solid black;
  height: 150px;
  width: 600;
}
</style>
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