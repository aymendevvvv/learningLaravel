<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
    
    <nav class="navbar navbar-expand-lg bg-light px-3">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">


                    
                    <li class="nav-item">
                        <x-nav-link class="nav-link" :active=" request()->is('/') " href="/" >home</x-nav-link>
                    </li>

                    <li class="nav-item">
                        <x-nav-link class="nav-link" :active=" request()->is('job') " href="/jobs" >Jobs</x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link class="nav-link" :active="request()->is('bootstrap')" href="/bootstrap">bootstrap</x-nav-link>
                        
                    </li>
                    <li class="nav-item">
                        <x-nav-link class="nav-link" :active="request()->is('about')" href="/about">about</x-nav-link>
                    </li>
                    <li class="nav-item">
                        <x-nav-link class="nav-link" :active="request()->is('contact')" href="/contact">contact</x-nav-link>
                    </li>

                </ul>
                <form class="d-flex" role="search" style="margin-left: auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
          </div>
        </div>
      </nav>
    {{$slot}} 






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
</body>
</html>