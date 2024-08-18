<x-layout>

  <div class="container ">

    <h1> Jobs page : </h1>
    <div class="container-fluid d-flex flex-wrap justify-content-center">
      @foreach ($jobs as $job)


      <a href="/jobs/{{$job['id']}}" class="d-inline-block border border-2 border-dark m-2 p-4 rounded " style="text-decoration: none  ; color: #000; text-align: center; ">
        
        {{ $job['label'] }}
        <br>
        {{$job['salary']}}
        <div class="font-weight-bold text-primary"  >
        ~{{ $job->employer->name  }}~
        </div>
      </a>


      @endforeach
    </div>
  </div>
</x-layout>