<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Behavior</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1f7074acbb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=sunburst"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/navbar.js') }}"></script>


  </head>

  <body style="background-color:#fdf8db;">
    <!-- Start Navbar -->
    <nav>
      @include('partials.navbar')
    </nav>
    <!-- End Navbar -->

    <!-- Banner Start -->
    <section>
    <div class="container container-md grades-content">
        <div class="row grades-student-info">
            <div class="col">
            <table class="table table-borderless grades-student-personal" >
                    <thead class="border border-warning border border-2 ">
                        <th scope="col" colspan="2" class="text-center grades-header "><span>Dela Cruz, Juan</span> </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Student Number: <span>2021-124512-00-XX</span> </td>
                            <td>Section: <span>1-Apple</span> </td>
                        </tr>
                        <tr>
                            <td>Adviser: <span> Ms. Julianna Dela Cruz</span></td>
                            <td>Current Period: <span> 4th Grading</span></td>
                        </tr>
                        <tr>
                            <td>Session : <span>Afternoon</span> </td>
                            
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <!-- Attendance Report Table -->
                <table class="table text-center grades-progress-achievement table-borderless " style="border:2px solid #FFC415; background-color:#FDF8DB; border-color:#FC6300">
                    <thead class="border border-warning border border-2 "><th colspan="3">Teacher's Feedback</th>  </thead>
                    <tr style="border-top: 0px; border-left: 0px;border-right: 0px">
                            <th scope="col">Subject Matter</th>
                            <th scope="col">Date</th>
                            <th scope="col">Discussion</th>
                    </tr>
                    <tbody>
                        <tr style="height: 200px;border: 2px solid #FC6300">
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-grid gap-2 col-6 mx-auto ">
                    <button class="btn" type="button">Consultation <i class="fa fa-comment" aria-hidden="true"></i></button>
                    <br>
                </div>
            </div>
            <div class="col">
                <!-- second column -->
                <table class="table table-borderless text-center schedule-student">
                    <thead class="border border-warning border border-2" style="margin-bottom:5em;">
                        <tr>
                            <th scope="col" colspan="6" class="text-center">WEEKLY BEHAVIOR REPORT</th>
                        </tr>
                    </thead>
                    <tr  style="text-align: left;">
                        <th scope="col">Week #</th>
                        <th scope="col">Report</th>
                    </tr>
                    <tbody>
                        <tr style="border-top:2px solid #FC6300;border-bottom:2px solid #FC6300;  ">
                            <td scope="col" colspan="2" style="height:415px;"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-grid gap-2 col-6 mx-auto ">
                    <button class="btn" type="button">View All Report <i class="fa fa-search" aria-hidden="true"></i></button>
                    <br>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- End Banner Start -->

    <!-- footer -->
    <footer>
      @include('partials.footer')
    </footer>
    <!-- end of footer -->

  </body>

</html>
