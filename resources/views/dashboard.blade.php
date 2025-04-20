@extends('layouts.app')
@section('title')Dashboard @endsection
@section('content')
<div class="grid grid-cols-3 gap-10 mt-5">
    <div class="bg-lime-400 rounded-lg text-white p-5 shadow-lg">
        <h2 class="text-2xl font-bold ">Total Users</h2>
        <p class="text-4xl font-bold text-center"></p>
    </div>

    <div class="bg-yellow-400 rounded-lg text-white p-5 shadow-lg">
        <h2 class="text-2xl font-bold">Total Notices</h2>
        <p class="text-4xl font-bold text-center">{{$totalnotices}}</p>
    </div>

    <div class="bg-sky-400 rounded-lg text-white p-5 shadow-lg">
        <h2 class="text-2xl font-bold">Total Categories</h2>
        <p class="text-4xl font-bold text-center">{{$totalcategories}}</p>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
@endsection