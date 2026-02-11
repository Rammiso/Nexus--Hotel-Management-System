<?php

include ('config.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/nexus-design-system.css">
    <link rel="stylesheet" href="./css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- aos animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- loading bar -->
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="./css/flash.css">
    <title>The Nexus | Smart Hospitality System</title>
</head>

<body>
    <!-- Left Side - Futuristic Image Section -->
    <section id="carouselExampleControls" class="carousel slide carousel_section" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="carousel-image" src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1920&q=80" alt="Luxury Hotel Interior">
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=1920&q=80" alt="Modern Hotel Lobby">
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=1920&q=80" alt="Futuristic Hotel Room">
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?w=1920&q=80" alt="Smart Hotel Technology">
            </div>
        </div>
        
        <!-- Futuristic Overlay Content -->
        <div class="carousel-overlay">
            <div class="overlay-content">
                <div class="tech-grid">
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                </div>
                <h1 class="overlay-title">
                    <span class="title-line">NEXUS</span>
                    <span class="title-line">HOSPITALITY</span>
                    <span class="title-subtitle">Smart Management System</span>
                </h1>
                <div class="tech-stats">
                    <div class="stat-item">
                        <div class="stat-number">99.9%</div>
                        <div class="stat-label">Uptime</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Support</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">AI</div>
                        <div class="stat-label">Powered</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- main section -->
    <section id="auth_section">
        <!-- Futuristic Logo -->
        <div class="logo">
            <i class="fa-solid fa-gem nexus-logo-icon"></i>
            <p class="nexus-logo-text">THE NEXUS</p>
        </div>

        <div class="auth_container">
            <!--============ login =============-->

            <div id="Log_in">
                <h2>Log In</h2>
                <div class="role_btn">
                    <div class="btns active">User</div>
                    <div class="btns">Staff</div>
                </div>

                <!-- // ==userlogin== -->
                <?php 
                if (isset($_POST['user_login_submit'])) {
                    $Email = $_POST['Email'];
                    $Password = $_POST['Password'];

                    if(empty($Email) || empty($Password)) {
                        echo "<script>swal({
                            title: 'Please fill all fields',
                            icon: 'error',
                        });
                        </script>";
                    } else {
                        $sql = "SELECT * FROM signup WHERE Email = '$Email' AND Password = BINARY'$Password'";
                        $result = mysqli_query($conn, $sql);

                        if ($result && $result->num_rows > 0) {
                            $_SESSION['usermail'] = $Email;
                            echo "<script>
                                swal({
                                    title: 'Login Successful!',
                                    icon: 'success',
                                }).then(function() {
                                    window.location.href = 'home.php';
                                });
                            </script>";
                        } else {
                            echo "<script>swal({
                                title: 'Invalid email or password',
                                icon: 'error',
                            });
                            </script>";
                        }
                    }
                }
                ?>
                <form class="user_login authsection active" id="userlogin" action="" method="POST">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="Username" placeholder=" ">
                        <label for="Username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="Email" placeholder=" ">
                        <label for="Email">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="Password" placeholder=" ">
                        <label for="Password">Password</label>
                    </div>
                    <button type="submit" name="user_login_submit" class="auth_btn">Log in</button>

                    <div class="footer_line">
                        <h6>Don't have an account? <span class="page_move_btn" onclick="signuppage()">sign up</span></h6>
                    </div>
                </form>
                
                <!-- == Emp Login == -->
                <?php              
                    if (isset($_POST['Emp_login_submit'])) {
                        $Email = $_POST['Emp_Email'];
                        $Password = $_POST['Emp_Password'];

                        if(empty($Email) || empty($Password)) {
                            echo "<script>swal({
                                title: 'Please fill all fields',
                                icon: 'error',
                            });
                            </script>";
                        } else {
                            $sql = "SELECT * FROM emp_login WHERE Emp_Email = '$Email' AND Emp_Password = BINARY'$Password'";
                            $result = mysqli_query($conn, $sql);

                            if ($result && $result->num_rows > 0) {
                                $_SESSION['usermail'] = $Email;
                                echo "<script>
                                    swal({
                                        title: 'Admin Login Successful!',
                                        icon: 'success',
                                    }).then(function() {
                                        window.location.href = 'admin/admin.php';
                                    });
                                </script>";
                            } else {
                                echo "<script>swal({
                                    title: 'Invalid admin credentials',
                                    icon: 'error',
                                });
                                </script>";
                            }
                        }
                    }
                ?> 
                <form class="employee_login authsection" id="employeelogin" action="" method="POST">
                    <div class="form-floating">
                        <input type="email" class="form-control" name="Emp_Email" placeholder=" ">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="Emp_Password" placeholder=" ">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button type="submit" name="Emp_login_submit" class="auth_btn">Log in</button>
                </form>
                
            </div>

            <!--============ signup =============-->
            <?php       
                if (isset($_POST['user_signup_submit'])) {
                    $Username = $_POST['Username'];
                    $Email = $_POST['Email'];
                    $Password = $_POST['Password'];
                    $CPassword = $_POST['CPassword'];

                    if(empty($Username) || empty($Email) || empty($Password) || empty($CPassword)){
                        echo "<script>swal({
                            title: 'Please fill all fields',
                            icon: 'error',
                        });
                        </script>";
                    }
                    else{
                        if ($Password == $CPassword) {
                            $sql = "SELECT * FROM signup WHERE Email = '$Email'";
                            $result = mysqli_query($conn, $sql);
    
                            if ($result && $result->num_rows > 0) {
                                echo "<script>swal({
                                    title: 'Email already exists',
                                    icon: 'error',
                                });
                                </script>";
                            } else {
                                $sql = "INSERT INTO signup (Username,Email,Password) VALUES ('$Username', '$Email', '$Password')";
                                $result = mysqli_query($conn, $sql);
    
                                if ($result) {
                                    $_SESSION['usermail'] = $Email;
                                    echo "<script>
                                        swal({
                                            title: 'Account Created Successfully!',
                                            icon: 'success',
                                        }).then(function() {
                                            window.location.href = 'home.php';
                                        });
                                    </script>";
                                } else {
                                    echo "<script>swal({
                                        title: 'Registration failed. Please try again.',
                                        icon: 'error',
                                    });
                                    </script>";
                                }
                            }
                        } else {
                            echo "<script>swal({
                                title: 'Passwords do not match',
                                icon: 'error',
                            });
                            </script>";
                        }
                    }
                }
            ?>
            <div id="sign_up">
                <h2>Sign Up</h2>

                <form class="user_signup" id="usersignup" action="" method="POST">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="Username" placeholder=" ">
                        <label for="Username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="Email" placeholder=" ">
                        <label for="Email">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="Password" placeholder=" ">
                        <label for="Password">Password</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="CPassword" placeholder=" ">
                        <label for="CPassword">Confirm Password</label>
                    </div>

                    <button type="submit" name="user_signup_submit" class="auth_btn">Sign up</button>

                    <div class="footer_line">
                        <h6>Already have an account? <span class="page_move_btn" onclick="loginpage()">Log in</span></h6>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>


<script src="./javascript/index.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- aos animation-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</html>