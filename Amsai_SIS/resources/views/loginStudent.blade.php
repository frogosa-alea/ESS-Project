<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/loginStudent.css">
    <title>Student Login</title>
</head>
<body>
    <div class="Login-student">
        <div class="container">
            <div class="main">
                <div class="greeting-icon-box">
                    <h3 class="greetings">Greetings! Little Humans</h3>
                    <div class="icons">
                        <img src="/assets/student.png" alt="Female Student" class="icons female">
                        <img src="/assets/male.png" alt="Male Student" class="icons male">
                    </div>

                </div>
                <div class="form-box">
                    <img class="logo amsai" src="/assets/Logo.png" alt="AMSAI Logo">
                    <div class="header">
                        <label  class="name school">
                            AMSAI LEARNING SCHOOL
                        </label>
                        <br>
                        <label class="name system">
                            STUDENT INFORMATION SYSTEM
                        </label>   
                    </div>
                    <div class="line"></div>
                    <form class="form">
                        <label for="number" class="label">Student Number</label>
                        <input type="text" class="input" placeholder="Enter Student Number" name="number" required>
                        <label for="password" class="label">Password</label>
                        <input type="text" class="input" placeholder="Password" name="password" required>
                        <button class="btn">Sign-in</button>
                        <a href="#" class="forgot">Forgot Password?</a>
                
                    </form >
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
