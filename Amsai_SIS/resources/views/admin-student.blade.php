<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/admin-users.css">
    <title>Admin Student</title>
</head>
<body>
    <div class="container">
        <nav>Nav Bar</nav>
      
        <main class="main-container">
            <header class="content1">
                <div class="header-left">
                    <i class=" fa fa-users"><span>Students</span></i>
                </div>
                <div class="header-right">
                    <button> <a href="#" class="fa fa-user-plus"> Student Admission</a></button>
                </div>
            </header>

            <div id="content2" class="content2">
                <div class="search-bar" id="search-bar">
                    <button class="search-btn"> Search</button>
                    <input type="text" class="input" placeholder="Enter Student Number or Name" name="search">
                </div>
         
                <div id="table-container" class="table-container" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Student Number</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email-Address</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Student Number"> <span class="table-data" id="number">2018-01421-MN-0</span> </td>
                                <td data-label="Name" > <span class="table-data" id="name">Jillian Clarizze Yosa</span> </td>
                                <td data-label="Address" ><span class="table-data" id="address">BLK-1 LOT 13 Major Homes Brgy. Sirang Lupa Calamba, Laguna</span></td>
                                <td data-label="Email-Adress"><span class="table-data" id="email">jian.clarizze@gmail.com</span></td>
                                <td data-label="Actions"><span class="table-data" id="options">
                                    <div class="options" id="actions">
                                        <a href="#" class="actions" id="edit">Edit | </a>
                                        <a href="#" class="actions" id="delete">Delete | </a>
                                        <a href="#" class="actions" id="view">View</a>
                                    </div>
                                </td>
                            </tr>
                         
                           
                    </table>
                </div>
            </div>
          

       </main>
         
        <footer>
            @include('partials.admin-footer')
        </footer>
        <div id="sidebar">
            @include('partials.admin-sidebar');
        </div>
      

       

       
    </div>
</body>
</html>