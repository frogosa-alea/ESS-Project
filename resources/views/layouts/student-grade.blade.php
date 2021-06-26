<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1f7074acbb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=sunburst"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
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
    <div class="container container-md">
        <div class="row">
            <div class="col">
            <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">Dela Cruz, Juan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Student Number: 2021-124512-00-XX</td>
                            <td>Section: 1-Apple</td>
                        </tr>
                        <tr>
                            <td>Adviser: Ms. Julianna Dela Cruz</td>
                            <td>GWA: A++</td>
                        </tr>
                        <tr>
                            <td>Session : Afternoon</td>
                            <td>Current Period: 4th Grading</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Learner Progress and Achievements Table -->
                <table class="table text-center">
                    <thead> Learner Progress and Achievements </thead>
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
            </div>
            <div class="col">
                <!-- second column -->
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">1st</th>
                            <th scope="col">2nd</th>
                            <th scope="col">3rd</th>
                            <th scope="col">4th</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Lorem Ipsum</td>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Lorem Ipsum</td>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Lorem Ipsum</td>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Lorem Ipsum</td>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Lorem Ipsum</td>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Lorem Ipsum</td>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Lorem Ipsum</td>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Lorem Ipsum</td>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                            <th scope="col">A</th>
                        </tr>
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Average</th>
                                <th scope="col">A</th>
                                <th scope="col">A</th>
                                <th scope="col">A</th>
                                <th scope="col">A</th>
                            </tr>
                        </thead>
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
