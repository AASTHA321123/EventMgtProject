@extends('layouts.app')
@section('title')Dashboard @endsection
@section('content')
<div class="grid grid-cols-3 gap-10 mt-5">
    <div class="bg-yellow-400 rounded-lg text-white p-5 shadow-lg">
        <h2 class="text-2xl font-bold ">Total Users</h2>
        <p class="text-4xl font-bold text-center">{{$totalusers}}</p>
    </div>

    <div class="bg-pink-500 rounded-lg text-white p-5 shadow-lg">
        <h2 class="text-2xl font-bold">Total Notices</h2>
        <p class="text-4xl font-bold text-center">{{$totalnotices}}</p>
    </div>

    <div class="bg-sky-400 rounded-lg text-white p-5 shadow-lg">
        <h2 class="text-2xl font-bold">Total Categories</h2>
        <p class="text-4xl font-bold text-center">{{$totalcategories}}</p>
    </div>

    <div class="bg-orange-400 rounded-lg text-white p-5 shadow-lg">
        <h2 class="text-2xl font-bold">Total Package</h2>
        <p class="text-4xl font-bold text-center">{{$totalpackages}}</p>
    </div>

    
</div>
          

          <div class="flex  justify-center items-center">
             <div class="w-80"><canvas id="myChart2"></canvas></div>
           </div>




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

 

<script>
  const ctx = document.getElementById('myChart2');

  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Category', 'Notice', 'Package', 'Users' ],
      datasets: [{
        label: 'Count',
        data: [{{$totalcategories}}, {{$totalnotices}}, {{$totalpackages}}, {{$totalusers}} ],
        borderWidth: 1
      }]
    },
    options: {
      
    }
  });
</script>
@endsection