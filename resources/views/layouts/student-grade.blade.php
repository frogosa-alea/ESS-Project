<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Grades</title>
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
                            <td>GWA: <span>A++</span> </td>
                        </tr>
                        <tr>
                            <td>Session : <span>Afternoon</span> </td>
                            <td>Current Period: <span> 4th Grading</span></td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <!-- Learner Progress and Achievements Table -->
                <table class="table text-center grades-progress-achievement table-borderless" style="border:2px solid #FFC415; background-color:#FDF8DB; border-color:#FC6300">
                    <thead class="border border-warning border border-2 "><th colspan="3">Learner Progress and Achievements</th>  </thead>
                    <tbody>
                        <tr>
                            <th scope="col">Descriptors</th>
                            <th scope="col">Grading Sytem</th>
                            <th scope="col">Remarks</th>
                        </tr>
                        <tr>
                            <td>Outstanding</td>
                            <td>90-100</td>
                            <td>Passed</td>
                        </tr>
                        <tr>
                            <td>Very Satisfactory</td>
                            <td>85-89</td>
                            <td>Passed</td>
                        </tr>
                        <tr>
                            <td>Satisfactory</td>
                            <td>80-84</td>
                            <td>Passed</td>
                        </tr>
                        <tr>
                            <td>Fairly Satisfactory</td>
                            <td>75-79</td>
                            <td>Passed</td>
                        </tr>
                        <tr>
                            <td>Did Not Meet Expectations</td>
                            <td>Below 75</td>
                            <td>Failed</td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-grid gap-2 col-6 mx-auto ">
                    <button class="btn" type="button">View Awards <i class="fa fa-star" aria-hidden="true"></i></button>
                    <br>
                </div>
            </div>
            <div class="col">
                <!-- second column -->
                <table class="table table-borderless text-center grades-student-grades">
                    <thead class="border border-warning border border-2 ">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" >Subject</th>
                            <th scope="col" colspan="4" class="text-center">GRADING PERIOD</th>
                        </tr>
                    </thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">1st</th>
                        <th scope="col">2nd</th>
                        <th scope="col">3rd</th>
                        <th scope="col">4th</th>
                    </tr>
                    <tbody>
                        <tr style="border-top: 2px solid #FC6300">
                            <td scope="row">1</td>
                            <td>Lorem Ipsum</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td sctdcol">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Lorem Ipsum</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Lorem Ipsum</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <td>Lorem Ipsum</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr>
                            <td scope="row">5</td>
                            <td>Lorem Ipsum</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr>
                            <td scope="row">6</td>
                            <td>Lorem Ipsum</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr>
                            <td scope="row">7</td>
                            <td>Lorem Ipsum</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr style="border-bottom: 2px solid #FC6300">
                            <td scope="row">8</td>
                            <td>Lorem Ipsum</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                        <tr >
                            <td scope="col"></td>
                            <td scope="col">Average</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                            <td scope="col">A</td>
                        </tr>
                    </tbody>
                </table>
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
