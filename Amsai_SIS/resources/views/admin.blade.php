<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/admin-dashboard.css">
    <title>Admin-Student</title>
</head>
<body>
    <div class="container">
        <nav>Nav Bar</nav>
        
       <main class="main-container">
            <header>Header</header>

            <div id="content1" class="content">
                <i class="fa fa-users" id="header">Students</i>
                <span class="total-number" id="total-student"></span>
                <span id="sub-header">Total Number of Students</span>

            </div>

            <div id="content2" class="content">Classes</div>
            <div id="content3" class="content">Subjects</div>
            <div id="content4" class="content">Faculties</div>
            <div id="content5" class="content">Content 5</div>
            <div id="content6" class="content">Content 6</div>
            <div id="content7" class="content">Content 7</div>

       </main>
            
            
       <footer>
            @include('partials.admin-footer')
       </footer>

        <div id="sidebar">
            @include("partials.admin-sidebar")
        </div>
      
    
    </div>
</body>
</html>