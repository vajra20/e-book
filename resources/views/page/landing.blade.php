<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="background">
    <div class="overlay">
    <nav class="navbar">
        <div class="row d-flex align-items-center w-100">
            <div class="col d-flex align-items-center my-1 ms-5">
                <img src="{{asset('img/logo.png')}}" width="60px" height="auto">
                <span class="logo-text h3 text-primary ms-3 ">WIKBOOK</span>
            </div>
            <div class="col">
                <div class="d-flex justify-content-end">
                    <ul class="list d-flex mb-0">
                      <li class="me-4">
                        <a class="list-text nav-link text-primary fs-5" href="">Home</a>
                      </li>
                    </ul>
                    <button class="btn btn-sm btn-outline-primary me-5" type="button">Login</button>
                </div>
            </div>
        </div>
      </nav>
      
      <div class="d-flex align-items-center justify-content-center mx-5 ">
          <div class="mt-5 pb-5">
            <div class="mb-0">
              <h1 class="mb-3 fw-bold text-center title-text"> Better Solutions For Your <br>Choice Book</h1>
              <div class="d-flex justify-content-center mt-2">
                <span class="fst-italic fw-lights" style="color: white">We can access book for online and free!</span>
              </div>
            </div>
              <br>
              <div class="d-flex align-items-center justify-content-center mt-4">
                <button class="btn-register">Register</button>
                <button class="btn btn-outline-light ms-4">
                    <span><i class=" fa fa-solid fa-play me-2"></i>Watch Video</span>
                </button>
              </div>
            </div>
        </div>
    </div>
    </div>

    <div class="background-sponsor">
    <div class="sponsor">
        <div class="row">
          <div class="col-item col">  
              <img src="{{asset('img/mixue.png')}}" width="100px" height="90px" >
          </div>
          <div class="col-item col">  
              <img src="{{asset('img/gramedia.png')}}" width="100px" height="90px">
          </div>
          <div class="col-item col">  
              <img src="{{asset('img/logo.png')}}" width="100px" height="90px">
          </div>
          <div class="col-item col">  
              <img src="{{asset('img/reading.png')}}" width="100px" height="90px">
          </div>
          <div class="col-item col">  
              <img src="{{asset('img/google.png')}}" width="100px" height="90px">
          </div>
        </div>
    </div>
    </div>

    <div class="m-5">
        <div class="row">
            <div class="d-flex justify-content-center pb-3">
                <a href="" class="garis nav-link">
                    <h1 class="text-primary fw-bold">About Us</h1>
                </a>
            </div>
        <p class="text-center">
            Digital libraries are also referred to as electronic libraries or digital repositories. The contents of this digital library collection can be stored locally, or accessed remotely via a computer network.
            Many schools and institutions have embarked on the task of converting their collections of books and traditional educational materials into electronic format: some files are available in HTML format while others can be downloaded in PDF format, for printing if necessary.
        </p>
    </div>    
    <div class="d-flex justify-content-center">
        <button class="btn btn-outline-primary w-25" style="font-weight: 600">Learn More</button>
    </div>
    </div>

    <div class="footer">
        <div class="grid">
            <div class="grid-item">
                <div class="mb-3">
                    <h1 class="text-primary">WIKBOOK</h1>
                    <span>SMK Wikrama Bogor</span> <br>
                    <span class="lh-1"> Jl. Raya Wangun, Kelurahan Sindangsari, <br>Bogor Timur 16720</span>
                </div>
                <span class="fw-bold d-flex ">Phone<p class="fw-normal mb-0">: 089618778844</p></span>
                <span class="fw-bold d-flex">Email<p class="fw-normal">: benediktusvajrasagara@smkwikrama.sch.id</p></span>
            </div>
            <div class="grid-item">
                <h3 class="text-primary"> Our Social Networks</h3>
                <span>Buku-buku dapat mengembangkan kecerasan, membina watak, dan bahkan mengubah dunia.</span>
                <div class="mt-3">
                    <div class="d-flex justify-content-start">
                        <i class="me-4 fa fa-brands fa-whatsapp " style="font-size: 2rem !important"></i>
                        <i class="me-4 fa fa-brands fa-instagram" style="font-size: 2rem !important"></i>
                        <i class="me-4 fa fa-brands fa-facebook" style="font-size: 2rem !important"></i>
                    </div>
                </div>
            </div>
        </div>    
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>