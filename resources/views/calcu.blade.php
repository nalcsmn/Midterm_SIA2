<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Midterm Exam</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
       
    </head>
    <!-- <body style="background-image: #02f7d7"> -->
    <body background=
"https://images.pexels.com/photos/2693212/pexels-photo-2693212.png?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260">

    <div class="container py-4">
    

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Midterm Exam</h1>
        <p class="col-md-8 fs-4">Create a simple API that will be able to accept user input then output the result of the mathematical formulas mentioned below:</p>
      

               
                    <form action="calculation" method="POST">
                        @csrf
                      
                        <div class="card-body m-auto">
                            
                            <h4>Calculator</h4>
                            <div class="form-group row">
                                <div class="col-md-3" style="padding: 20px">
                                    <input type="number" name="firstnumber" class="form-control" placeholder="Enter first number:" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3"style="padding: 20px">
                                    <input type="number" name="secondnumber" class="form-control" placeholder="Enter second number:" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3"style="padding: 20px">
                                    <input type="number" name="thirdnumber" class="form-control" placeholder="Enter third number:" required="">
                                </div>
                            </div>

                             <div class="form-group row">
                                <div class="col-md-3" >
                                    <select name="formula" class="form-control" style="padding: 20px">
                                        <option>Select Formula</option>
                                        <option value="perimeter">Perimeter of rectangle</option>
                                        <option value="volume">Volume of Cuboid</option>
                                        <option value="area">Area of a square</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="btn" class="btn btn-warning btn-lg font-weight-bold" style="margin-left: 100px" value="Enter">
              
                    </form>
         
      

      </div>


    </div>
    <!-- <div class="row">
            <div class="col-md-3 m-auto">
                @if(session('message'))
                <div class="alert alert-warning">
                    <h1 class="text-center"> {{session ('message')}}</h1>
                </div>
                @endif 
            </div>
        </div> -->

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
         
          
                @if(session('message'))
            
                    <h1 class="text-center"> {{session ('message')}}</h1>
              
                @endif 
           
        </div>
      </div>

      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Neil Angelo D. Lacsamana</h2>
          <p>BSIT - 4A</p>
          
        </div>
      </div>
    </div>

    <footer class="pt-3 mt-4 text-muted border-top">
      &copy; 
    </footer>
  </div>
</main>
      
    
</html>
