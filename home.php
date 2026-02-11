<?php

include 'config.php';
session_start();

// page redirect
$usermail="";
$usermail=$_SESSION['usermail'];
if($usermail == true){

}else{
  header("location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/nexus-design-system.css">
    <link rel="stylesheet" href="./css/home.css">
    <title>The Nexus | Smart Hospitality System</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./admin/css/roombook.css">
    <style>
      #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 450px;
      }
    </style>
</head>

<body>
  <nav>
    <div class="logo">
      <i class="fa-solid fa-gem nexus-logo-icon"></i>
      <p class="nexus-logo-text">THE NEXUS</p>
    </div>
    <ul>
      <li><a href="#firstsection" class="nav-link">Home</a></li>
      <li><a href="#secondsection" class="nav-link">Rooms</a></li>
      <li><a href="#menu" class="nav-link">Menu</a></li>
      <li><a href="#services" class="nav-link">Services</a></li>
      <li><a href="#track" class="nav-link">Track Order</a></li>
      <li><a href="#contactus" class="nav-link">Contact</a></li>
      <a href="./logout.php"><button class="btn btn-danger logout-btn">Logout</button></a>
    </ul>
  </nav>

  <section id="firstsection" class="carousel slide carousel_section" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carousel-image" src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1920&q=80" alt="Luxury Hotel">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=1920&q=80" alt="Modern Hotel Lobby">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=1920&q=80" alt="Hotel Room">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?w=1920&q=80" alt="Smart Hotel">
        </div>

        <div class="welcomeline">
          <h1 class="welcometag">Experience Smart Hospitality Reimagined</h1>
        </div>

      <!-- bookbox -->
      <div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
            <div class="head">
                <h3>RESERVATION</h3>
                <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Guest Information</h4>
                    <input type="text" name="Name" placeholder="Enter Full Name" required>
                    <input type="email" name="Email" placeholder="Enter Email Address" required>

                    <?php
                    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                    ?>

                    <select name="Country" class="selectinput" required>
						<option value="">Select your country</option>
                        <?php
							foreach($countries as $key => $value):
							echo '<option value="'.$value.'">'.$value.'</option>';
                            //close your tags!!
							endforeach;
						?>
                    </select>
                    <input type="tel" name="Phone" placeholder="Enter Phone Number" required>
                </div>

                <div class="line"></div>

                <div class="reservationinfo">
                    <h4>Reservation Information</h4>
                    <select name="RoomType" class="selectinput" required>
						<option value="">Select Room Type</option>
                        <option value="Superior Room">SUPERIOR ROOM - $320/night</option>
                        <option value="Deluxe Room">DELUXE ROOM - $220/night</option>
						<option value="Guest House">GUEST HOUSE - $180/night</option>
						<option value="Single Room">SINGLE ROOM - $150/night</option>
                    </select>
                    <select name="Bed" class="selectinput" required>
						<option value="">Select Bedding Type</option>
                        <option value="Single">Single Bed</option>
                        <option value="Double">Double Bed</option>
						<option value="Triple">Triple Bed</option>
                        <option value="Quad">Quad Bed</option>
						<option value="None">No Bed Preference</option>
                    </select>
                    <select name="NoofRoom" class="selectinput" required>
						<option value="">Number of Rooms</option>
                        <option value="1">1 Room</option>
                    </select>
                    <select name="Meal" class="selectinput" required>
						<option value="">Select Meal Plan</option>
                        <option value="Room only">Room Only</option>
                        <option value="Breakfast">Breakfast Included</option>
						<option value="Half Board">Half Board</option>
						<option value="Full Board">Full Board</option>
					</select>
                    <div class="datesection">
                        <span>
                            <label for="cin">Check-In Date</label>
                            <input name="cin" type="date" required>
                        </span>
                        <span>
                            <label for="cout">Check-Out Date</label>
                            <input name="cout" type="date" required>
                        </span>
                    </div>
                </div>
            </div>
            <div class="footer">
                <button class="btn btn-success" name="guestdetailsubmit" type="submit">Complete Reservation</button>
            </div>
        </form>

        <!-- ==== room book php ====-->
        <?php       
            if (isset($_POST['guestdetailsubmit'])) {
                $Name = $_POST['Name'];
                $Email = $_POST['Email'];
                $Country = $_POST['Country'];
                $Phone = $_POST['Phone'];
                $RoomType = $_POST['RoomType'];
                $Bed = $_POST['Bed'];
                $NoofRoom = $_POST['NoofRoom'];
                $Meal = $_POST['Meal'];
                $cin = $_POST['cin'];
                $cout = $_POST['cout'];

                if($Name == "" || $Email == "" || $Country == ""){
                    echo "<script>swal({
                        title: 'Fill the proper details',
                        icon: 'error',
                    });
                    </script>";
                }
                else{
                  
                  $type_of_room = 0;
	                if ($RoomType == "Superior Room") {
		                  $type_of_room = 320;
	                } else if ($RoomType == "Deluxe Room") {
		                  $type_of_room = 220;
	                } else if ($RoomType == "Guest House") {
		                  $type_of_room = 180;
	                } else if ($RoomType == "Single Room") {
		                  $type_of_room = 150;
	                }
                  $type_of_bed = 0;
	                if ($Bed == "Single") {
		                  $type_of_bed = $type_of_room  * 1 / 100;
	                } else if ($Bed == "Double") {
		                  $type_of_bed = $type_of_room * 2 / 100;
	                } else if ($Bed == "Triple") {
		                  $type_of_bed = $type_of_room * 3 / 100;
	                } else if ($Bed == "Quad") {
		                  $type_of_bed = $type_of_room * 4 / 100;
	                } else if ($Bed == "None") {
		                  $type_of_bed = $type_of_room * 0 / 100;
	                }
                  $type_of_meal = 0;
	                if ($Meal == "Room only") {
		                  $type_of_meal = $type_of_bed * 0;
	                } else if ($Meal == "Breakfast") {
		                  $type_of_meal = $type_of_bed * 2;
	                } else if ($Meal == "Half Board") {
		                $type_of_meal = $type_of_bed * 3;
	                } else if ($Meal == "Full Board") {
		                $type_of_meal = $type_of_bed * 4;
	                }

                  $finaltotal = $type_of_bed + $type_of_meal + $type_of_room;
                    $sta = "Confirm";
                    $sql = "INSERT INTO roombook(Name,Email,Country,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta',datediff('$cout','$cin'))";
                    $result = mysqli_query($conn, $sql);
                    $sql_payment = "INSERT INTO payment(Name, RoomType, Bed, NoofRoom, cin, cout, meal, roomtotal, mealtotal, bedtotal, finaltotal, noofdays) VALUES ('$Name', '$RoomType', '$Bed', '$NoofRoom', '$cin', '$cout', '$Meal', $type_of_room, $type_of_meal, $type_of_bed, $finaltotal, datediff('$cout','$cin'))";
                    $result_payment = mysqli_query($conn, $sql_payment);
                    if ($result) {
                        if ($result_payment) {
                              echo "<script>swal({
                                    title: 'Reservation and Payment record successful',
                                    icon: 'success',
                                    });
                                    </script>";
                        } else {
                              echo "<script>swal({
                                title: 'Reservation successful, but payment record failed',
                                  icon: 'warning',
                              });
                              </script>";
                        }
                    } else {
                          echo "<script>swal({
                          title: 'Something went wrong',
                          icon: 'error',
                          });
                          </script>";
                      }           
                }
            }
            ?>
          </div>

    </div>
  </section>
    
  <section id="secondsection"> 
    <div class="ourroom">
      <h1 class="head">Our Rooms</h1>
      <div class="roomselect">
        <div class="roombox" data-aos="fade-up" data-aos-delay="100">
          <div class="hotelphoto h1" onclick="openRoomModal('Superior Room', 'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800&q=80', '$320/night', ['King Size Bed', 'City View', 'Free WiFi', 'Room Service', 'Spa Access', 'Gym Access', 'Pool Access'])">
            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800&q=80" alt="Superior Room" class="room-image">
          </div>
          <div class="roomdata">
            <h2>Superior Room</h2>
            <div class="room-price">$320<span>/night</span></div>
            <div class="services">
              <i class="fa-solid fa-wifi" title="Free WiFi"></i>
              <i class="fa-solid fa-burger" title="Room Service"></i>
              <i class="fa-solid fa-spa" title="Spa Access"></i>
              <i class="fa-solid fa-dumbbell" title="Gym Access"></i>
              <i class="fa-solid fa-person-swimming" title="Pool Access"></i>
            </div>
            <div class="room-actions">
              <button class="btn btn-outline view-details" onclick="openRoomModal('Superior Room', 'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800&q=80', '$320/night', ['King Size Bed', 'City View', 'Free WiFi', 'Room Service', 'Spa Access', 'Gym Access', 'Pool Access'])">View Details</button>
              <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book Now</button>
            </div>
          </div>
        </div>
        <div class="roombox" data-aos="fade-up" data-aos-delay="200">
          <div class="hotelphoto h2" onclick="openRoomModal('Deluxe Room', 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=800&q=80', '$220/night', ['Queen Size Bed', 'Garden View', 'Free WiFi', 'Room Service', 'Spa Access', 'Gym Access'])">
            <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=800&q=80" alt="Deluxe Room" class="room-image">
          </div>
          <div class="roomdata">
            <h2>Deluxe Room</h2>
            <div class="room-price">$220<span>/night</span></div>
            <div class="services">
              <i class="fa-solid fa-wifi" title="Free WiFi"></i>
              <i class="fa-solid fa-burger" title="Room Service"></i>
              <i class="fa-solid fa-spa" title="Spa Access"></i>
              <i class="fa-solid fa-dumbbell" title="Gym Access"></i>
            </div>
            <div class="room-actions">
              <button class="btn btn-outline view-details" onclick="openRoomModal('Deluxe Room', 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=800&q=80', '$220/night', ['Queen Size Bed', 'Garden View', 'Free WiFi', 'Room Service', 'Spa Access', 'Gym Access'])">View Details</button>
              <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book Now</button>
            </div>
          </div>
        </div>
        <div class="roombox" data-aos="fade-up" data-aos-delay="300">
          <div class="hotelphoto h3" onclick="openRoomModal('Guest House', 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=800&q=80', '$180/night', ['Double Bed', 'Balcony', 'Free WiFi', 'Room Service', 'Spa Access'])">
            <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=800&q=80" alt="Guest House" class="room-image">
          </div>
          <div class="roomdata">
            <h2>Guest House</h2>
            <div class="room-price">$180<span>/night</span></div>
            <div class="services">
              <i class="fa-solid fa-wifi" title="Free WiFi"></i>
              <i class="fa-solid fa-burger" title="Room Service"></i>
              <i class="fa-solid fa-spa" title="Spa Access"></i>
            </div>
            <div class="room-actions">
              <button class="btn btn-outline view-details" onclick="openRoomModal('Guest House', 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=800&q=80', '$180/night', ['Double Bed', 'Balcony', 'Free WiFi', 'Room Service', 'Spa Access'])">View Details</button>
              <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book Now</button>
            </div>
          </div>
        </div>
        <div class="roombox" data-aos="fade-up" data-aos-delay="400">
          <div class="hotelphoto h4" onclick="openRoomModal('Single Room', 'https://images.unsplash.com/photo-1564501049412-61c2a3083791?w=800&q=80', '$150/night', ['Single Bed', 'Compact Design', 'Free WiFi', 'Room Service'])">
            <img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?w=800&q=80" alt="Single Room" class="room-image">
          </div>
          <div class="roomdata">
            <h2>Single Room</h2>
            <div class="room-price">$150<span>/night</span></div>
            <div class="services">
              <i class="fa-solid fa-wifi" title="Free WiFi"></i>
              <i class="fa-solid fa-burger" title="Room Service"></i>
            </div>
            <div class="room-actions">
              <button class="btn btn-outline view-details" onclick="openRoomModal('Single Room', 'https://images.unsplash.com/photo-1564501049412-61c2a3083791?w=800&q=80', '$150/night', ['Single Bed', 'Compact Design', 'Free WiFi', 'Room Service'])">View Details</button>
              <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contactus">
    <div class="contact-container">
        <!-- Breakfast Items -->
        <div class="menu-item" data-category="breakfast" data-aos="fade-up">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1533089860892-a7c6f0a88666?w=400&q=80" alt="Continental Breakfast">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Continental Breakfast" data-price="25">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Continental Breakfast</h3>
            <p>Fresh pastries, fruits, coffee, and juice</p>
            <div class="item-footer">
              <span class="price">$25</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>4.8</span>
              </div>
            </div>
          </div>
        </div>

        <div class="menu-item" data-category="breakfast" data-aos="fade-up" data-aos-delay="100">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1525351484163-7529414344d8?w=400&q=80" alt="Pancakes">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Fluffy Pancakes" data-price="18">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Fluffy Pancakes</h3>
            <p>Stack of pancakes with maple syrup and berries</p>
            <div class="item-footer">
              <span class="price">$18</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>4.9</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Lunch & Dinner Items -->
        <div class="menu-item" data-category="lunch" data-aos="fade-up" data-aos-delay="200">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?w=400&q=80" alt="Grilled Salmon">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Grilled Salmon" data-price="35">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Grilled Salmon</h3>
            <p>Fresh Atlantic salmon with seasonal vegetables</p>
            <div class="item-footer">
              <span class="price">$35</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>4.7</span>
              </div>
            </div>
          </div>
        </div>

        <div class="menu-item" data-category="lunch" data-aos="fade-up" data-aos-delay="300">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=400&q=80" alt="Wagyu Steak">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Wagyu Steak" data-price="65">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Wagyu Steak</h3>
            <p>Premium wagyu beef with truffle mashed potatoes</p>
            <div class="item-footer">
              <span class="price">$65</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>5.0</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Beverages -->
        <div class="menu-item" data-category="beverages" data-aos="fade-up" data-aos-delay="400">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1544145945-f90425340c7e?w=400&q=80" alt="Fresh Juice">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Fresh Juice" data-price="8">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Fresh Juice</h3>
            <p>Orange, apple, or mixed berry juice</p>
            <div class="item-footer">
              <span class="price">$8</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>4.6</span>
              </div>
            </div>
          </div>
        </div>

        <div class="menu-item" data-category="beverages" data-aos="fade-up" data-aos-delay="500">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=400&q=80" alt="Premium Coffee">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Premium Coffee" data-price="12">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Premium Coffee</h3>
            <p>Artisan roasted coffee beans, various preparations</p>
            <div class="item-footer">
              <span class="price">$12</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>4.8</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Desserts -->
        <div class="menu-item" data-category="desserts" data-aos="fade-up" data-aos-delay="600">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?w=400&q=80" alt="Chocolate Cake">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Chocolate Cake" data-price="15">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Chocolate Cake</h3>
            <p>Rich chocolate cake with vanilla ice cream</p>
            <div class="item-footer">
              <span class="price">$15</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>4.9</span>
              </div>
            </div>
          </div>
        </div>

        <div class="menu-item" data-category="desserts" data-aos="fade-up" data-aos-delay="700">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1488477181946-6428a0291777?w=400&q=80" alt="Fruit Tart">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Fruit Tart" data-price="12">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Fruit Tart</h3>
            <p>Fresh seasonal fruits on pastry cream base</p>
            <div class="item-footer">
              <span class="price">$12</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>4.7</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Cart Sidebar -->
  <div id="cartSidebar" class="cart-sidebar">
    <div class="cart-header">
      <h3>Your Order</h3>
      <button class="close-cart" onclick="toggleCart()">
        <i class="fa-solid fa-times"></i>
      </button>
    </div>
    <div class="cart-items" id="cartItems">
      <!-- Cart items will be added here -->
    </div>
    <div class="cart-footer">
      <div class="cart-total">
        <span>Total: $<span id="cartTotal">0</span></span>
      </div>
      <button class="checkout-btn" onclick="checkout()">
        <i class="fa-solid fa-credit-card"></i>
        Order Now
      </button>
    </div>
  </div>

  <!-- Cart Toggle Button -->
  <button class="cart-toggle" onclick="toggleCart()">
    <i class="fa-solid fa-shopping-cart"></i>
    <span class="cart-count" id="cartCount">0</span>
  </button>

  <!-- Room Details Modal -->
  <div id="roomModal" class="modal-overlay">
    <div class="modal-content">
      <div class="modal-header">
        <h2 id="roomModalTitle"></h2>
        <button class="modal-close" onclick="closeModal('roomModal')">
          <i class="fa-solid fa-times"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-image">
          <img id="roomModalImage" src="" alt="">
        </div>
        <div class="modal-info">
          <div class="modal-price" id="roomModalPrice"></div>
          <div class="modal-features" id="roomModalFeatures"></div>
          <div class="modal-actions">
            <button class="btn btn-primary" onclick="closeModal('roomModal'); openbookbox();">
              <i class="fa-solid fa-calendar-check"></i>
              Book This Room
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Facility Details Modal -->
  <div id="facilityModal" class="modal-overlay">
    <div class="modal-content">
      <div class="modal-header">
        <h2 id="facilityModalTitle"></h2>
        <button class="modal-close" onclick="closeModal('facilityModal')">
          <i class="fa-solid fa-times"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-image">
          <img id="facilityModalImage" src="" alt="">
        </div>
        <div class="modal-info">
          <div class="modal-description" id="facilityModalDescription"></div>
          <div class="modal-actions">
            <button class="btn btn-primary" onclick="closeModal('facilityModal');">
              <i class="fa-solid fa-phone"></i>
              Contact for Booking
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="contactus">
    <div class="contact-container">
      <div class="contact-info" data-aos="fade-up">
        <h2>Get In Touch</h2>
        <div class="contact-details">
          <div class="contact-item">
            <i class="fa-solid fa-location-dot"></i>
            <div>
              <h4>Address</h4>
              <p>123 Nexus Boulevard<br>Smart City, SC 12345<br>United States</p>
            </div>
          </div>
          <div class="contact-item">
            <i class="fa-solid fa-phone"></i>
            <div>
              <h4>Phone</h4>
              <p>+1 (555) 123-4567<br>+1 (555) 987-6543</p>
            </div>
          </div>
          <div class="contact-item">
            <i class="fa-solid fa-envelope"></i>
            <div>
              <h4>Email</h4>
              <p>info@nexushotel.com<br>reservations@nexushotel.com</p>
            </div>
          </div>
          <div class="contact-item">
            <i class="fa-solid fa-clock"></i>
            <div>
              <h4>Hours</h4>
              <p>24/7 Reception<br>Concierge: 6AM - 12AM</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="contact-form" data-aos="fade-up" data-aos-delay="200">
        <h3>Send us a Message</h3>
        <form id="contactForm">
          <div class="form-group">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" placeholder="Your Phone">
            <select name="subject" required>
              <option value="">Select Subject</option>
              <option value="reservation">Reservation Inquiry</option>
              <option value="complaint">Complaint</option>
              <option value="feedback">Feedback</option>
              <option value="other">Other</option>
            </select>
          </div>
          <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
          <button type="submit" class="contact-btn">
            <i class="fa-solid fa-paper-plane"></i>
            Send Message
          </button>
        </form>
      </div>
    </div>
    
    <div class="social-section">
      <h3>Follow Us</h3>
      <div class="social">
        <a href="#" class="social-link" data-platform="instagram">
          <i class="fa-brands fa-instagram"></i>
          <span>Instagram</span>
        </a>
        <a href="#" class="social-link" data-platform="facebook">
          <i class="fa-brands fa-facebook"></i>
          <span>Facebook</span>
        </a>
        <a href="#" class="social-link" data-platform="twitter">
          <i class="fa-brands fa-twitter"></i>
          <span>Twitter</span>
        </a>
        <a href="#" class="social-link" data-platform="linkedin">
          <i class="fa-brands fa-linkedin"></i>
          <span>LinkedIn</span>
        </a>
        <a href="mailto:info@nexushotel.com" class="social-link" data-platform="email">
          <i class="fa-solid fa-envelope"></i>
          <span>Email</span>
        </a>
      </div>
    </div>
  </section>

  <!-- Room Service Menu Section -->
  <section id="menu" class="menu-section">
    <div class="container">
      <h2 class="section-title" data-aos="fade-up">Room Service Menu</h2>
      
      <div class="menu-categories" data-aos="fade-up" data-aos-delay="100">
        <button class="category-btn active" data-category="all">All Items</button>
        <button class="category-btn" data-category="breakfast">Breakfast</button>
        <button class="category-btn" data-category="lunch">Lunch & Dinner</button>
        <button class="category-btn" data-category="beverages">Beverages</button>
        <button class="category-btn" data-category="desserts">Desserts</button>
      </div>

      <div class="menu-grid">
        <!-- Breakfast Items -->
        <div class="menu-item" data-category="breakfast" data-aos="fade-up">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1533089860892-a7c6f0a88666?w=400&q=80" alt="Continental Breakfast">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Continental Breakfast" data-price="25">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Continental Breakfast</h3>
            <p>Fresh pastries, fruits, coffee, and juice</p>
            <div class="item-footer">
              <span class="price">$25</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>4.8</span>
              </div>
            </div>
          </div>
        </div>

        <div class="menu-item" data-category="breakfast" data-aos="fade-up" data-aos-delay="100">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1525351484163-7529414344d8?w=400&q=80" alt="Pancakes">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Fluffy Pancakes" data-price="18">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Fluffy Pancakes</h3>
            <p>Stack of pancakes with maple syrup and berries</p>
            <div class="item-footer">
              <span class="price">$18</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>4.9</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Lunch & Dinner Items -->
        <div class="menu-item" data-category="lunch" data-aos="fade-up" data-aos-delay="200">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?w=400&q=80" alt="Grilled Salmon">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Grilled Salmon" data-price="35">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Grilled Salmon</h3>
            <p>Fresh Atlantic salmon with seasonal vegetables</p>
            <div class="item-footer">
              <span class="price">$35</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>4.7</span>
              </div>
            </div>
          </div>
        </div>

        <div class="menu-item" data-category="lunch" data-aos="fade-up" data-aos-delay="300">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=400&q=80" alt="Wagyu Steak">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Wagyu Steak" data-price="65">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Wagyu Steak</h3>
            <p>Premium wagyu beef with truffle mashed potatoes</p>
            <div class="item-footer">
              <span class="price">$65</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>5.0</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Beverages -->
        <div class="menu-item" data-category="beverages" data-aos="fade-up" data-aos-delay="400">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1544145945-f90425340c7e?w=400&q=80" alt="Fresh Juice">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Fresh Juice" data-price="8">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Fresh Juice</h3>
            <p>Orange, apple, or mixed berry juice</p>
            <div class="item-footer">
              <span class="price">$8</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>4.6</span>
              </div>
            </div>
          </div>
        </div>

        <div class="menu-item" data-category="beverages" data-aos="fade-up" data-aos-delay="500">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=400&q=80" alt="Premium Coffee">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Premium Coffee" data-price="12">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Premium Coffee</h3>
            <p>Artisan roasted coffee beans, various preparations</p>
            <div class="item-footer">
              <span class="price">$12</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>4.8</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Desserts -->
        <div class="menu-item" data-category="desserts" data-aos="fade-up" data-aos-delay="600">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?w=400&q=80" alt="Chocolate Cake">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Chocolate Cake" data-price="15">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Chocolate Cake</h3>
            <p>Rich chocolate cake with vanilla ice cream</p>
            <div class="item-footer">
              <span class="price">$15</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>4.9</span>
              </div>
            </div>
          </div>
        </div>

        <div class="menu-item" data-category="desserts" data-aos="fade-up" data-aos-delay="700">
          <div class="item-image">
            <img src="https://images.unsplash.com/photo-1488477181946-6428a0291777?w=400&q=80" alt="Fruit Tart">
            <div class="item-overlay">
              <button class="add-to-cart" data-item="Fruit Tart" data-price="12">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="item-info">
            <h3>Fruit Tart</h3>
            <p>Fresh seasonal fruits on pastry cream base</p>
            <div class="item-footer">
              <span class="price">$12</span>
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <span>4.7</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Room Service Services Section -->
  <section id="services" class="services-section">
    <div class="container">
      <h2 class="section-title" data-aos="fade-up">Room Service Features</h2>
      <div class="services-grid">
        <div class="service-card" data-aos="fade-up">
          <div class="service-icon">
            <i class="fa-solid fa-utensils"></i>
          </div>
          <h3>24/7 Room Service</h3>
          <p>Full menu available at any time with professional in-room dining service</p>
        </div>
        
        <div class="service-card" data-aos="fade-up" data-aos-delay="100">
          <div class="service-icon">
            <i class="fa-solid fa-truck-fast"></i>
          </div>
          <h3>Express Delivery</h3>
          <p>Fast delivery within 15 minutes for most menu items directly to your room</p>
        </div>
        
        <div class="service-card" data-aos="fade-up" data-aos-delay="200">
          <div class="service-icon">
            <i class="fa-solid fa-wine-glass"></i>
          </div>
          <h3>Premium Bar Service</h3>
          <p>Extensive selection of cocktails, wines, and beverages delivered to your room</p>
        </div>
        
        <div class="service-card" data-aos="fade-up" data-aos-delay="300">
          <div class="service-icon">
            <i class="fa-solid fa-birthday-cake"></i>
          </div>
          <h3>Special Occasions</h3>
          <p>Custom arrangements for birthdays, anniversaries, and special celebrations</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Order Tracking Section -->
  <section id="track" class="track-section">
    <div class="container">
      <h2 class="section-title" data-aos="fade-up">Track Your Order</h2>
      <div class="track-container" data-aos="fade-up" data-aos-delay="100">
        <div class="track-input">
          <input type="text" id="orderNumber" placeholder="Enter your order number (e.g., NX123456789)">
          <button onclick="trackOrder()">
            <i class="fa-solid fa-search"></i>
            Track Order
          </button>
        </div>
        <div id="trackingResult" class="tracking-result"></div>
      </div>
    </div>
  </section>

  <!-- Cart Sidebar -->
  <div id="cartSidebar" class="cart-sidebar">
    <div class="cart-header">
      <h3>Your Order</h3>
      <button class="close-cart" onclick="toggleCart()">
        <i class="fa-solid fa-times"></i>
      </button>
    </div>
    <div class="cart-items" id="cartItems">
      <!-- Cart items will be added here -->
    </div>
    <div class="cart-footer">
      <div class="cart-total">
        <span>Total: $<span id="cartTotal">0</span></span>
      </div>
      <button class="checkout-btn" onclick="checkout()">
        <i class="fa-solid fa-credit-card"></i>
        Checkout
      </button>
    </div>
  </div>

  <!-- Cart Toggle Button -->
  <button class="cart-toggle" onclick="toggleCart()">
    <i class="fa-solid fa-shopping-cart"></i>
    <span class="cart-count" id="cartCount">0</span>
  </button>

  <!-- Overlay -->
  <div class="overlay" id="overlay" onclick="toggleCart()"></div>
</body>

<script>
    // Booking modal functionality
    var bookbox = document.getElementById("guestdetailpanel");

    openbookbox = () => {
        bookbox.style.display = "flex";
        document.body.style.overflow = "hidden"; // Prevent background scrolling
    }
    
    closebox = () => {
        bookbox.style.display = "none";
        document.body.style.overflow = "auto"; // Restore scrolling
    }

    // Smooth scrolling for navigation links
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const offsetTop = targetSection.offsetTop - 80; // Account for fixed nav
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Active navigation highlighting
    window.addEventListener('scroll', () => {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');
        
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.clientHeight;
            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });

    // Close modal when clicking outside
    bookbox.addEventListener('click', function(e) {
        if (e.target === bookbox) {
            closebox();
        }
    });

    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && bookbox.style.display === 'flex') {
            closebox();
        }
    });

    // Form validation enhancement
    document.querySelector('.guestdetailpanelform').addEventListener('submit', function(e) {
        const requiredFields = this.querySelectorAll('input[required], select[required]');
        let isValid = true;
        
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.style.borderColor = '#ff006e';
                isValid = false;
            } else {
                field.style.borderColor = 'rgba(255, 255, 255, 0.2)';
            }
        });
        
        if (!isValid) {
            e.preventDefault();
            swal({
                title: 'Please fill all required fields',
                icon: 'error',
            });
        }
    });

    // Initialize AOS animations
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });

    // Add loading animation for images
    document.querySelectorAll('.hotelphoto').forEach(photo => {
        photo.style.opacity = '0';
        photo.style.transition = 'opacity 0.5s ease';
        
        const img = new Image();
        img.onload = () => {
            photo.style.opacity = '1';
        };
        
        const bgImage = window.getComputedStyle(photo).backgroundImage;
        const url = bgImage.slice(4, -1).replace(/"/g, "");
        img.src = url;
    });

    // Enhanced image loading with local fallbacks and better debugging
    const imageFallbacks = {
        room: ['redmiimg/home1.jpg', 'redmiimg/home2.jpg', 'redmiimg/home3.jpg', 'redmiimg/home4.jpg'],
        facility: ['redmiimg/d1.jpg', 'redmiimg/d2.jpg', 'redmiimg/d3.jpg', 'redmiimg/d4.jpg', 'redmiimg/home1.jpg']
    };

    // Force all images to be visible immediately
    document.querySelectorAll('.room-image, .facility-image, .item-image img').forEach((img, index) => {
        console.log(`�️ Processning image ${index + 1}:`, img.src);
        
        // Force visibility
        img.style.opacity = '1';
        img.style.display = 'block';
        img.style.visibility = 'visible';
        img.style.zIndex = '10';
        img.style.position = 'relative';
        
        // Add green border when loaded
        img.addEventListener('load', function() {
            console.log('✅ Image loaded successfully:', this.src);
            this.style.border = '2px solid #00ff00';
        });
        
        // Add red border when failed
        img.addEventListener('error', function() {
            console.log('❌ Image failed to load:', this.src);
            this.style.border = '2px solid #ff0000';
            this.style.backgroundColor = '#ff4444';
        });
    });

    // Debug: Log all image URLs being used
    console.log('🖼️ All Images:');
    document.querySelectorAll('img').forEach((img, index) => {
        console.log(`Image ${index + 1}:`, img.src, 'Visible:', img.offsetWidth > 0 && img.offsetHeight > 0);
    });

    // Parallax effect for hero section
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const parallax = document.querySelector('.carousel-inner');
        const speed = scrolled * 0.5;
        
        if (parallax) {
            parallax.style.transform = `translateY(${speed}px)`;
        }
    });

    // Interactive service icons
    document.querySelectorAll('.services i').forEach(icon => {
        icon.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.3) rotate(10deg)';
        });
        
        icon.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) rotate(0deg)';
        });
    });

    // Auto-calculate checkout date (minimum 1 day stay)
    const checkinInput = document.querySelector('input[name="cin"]');
    const checkoutInput = document.querySelector('input[name="cout"]');
    
    if (checkinInput && checkoutInput) {
        checkinInput.addEventListener('change', function() {
            const checkinDate = new Date(this.value);
            const minCheckout = new Date(checkinDate);
            minCheckout.setDate(minCheckout.getDate() + 1);
            
            checkoutInput.min = minCheckout.toISOString().split('T')[0];
            
            if (!checkoutInput.value || new Date(checkoutInput.value) <= checkinDate) {
                checkoutInput.value = minCheckout.toISOString().split('T')[0];
            }
        });
    }

    // Set minimum date to today
    if (checkinInput) {
        const today = new Date().toISOString().split('T')[0];
        checkinInput.min = today;
    }

    // Contact form submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Simulate form submission
            swal({
                title: 'Message Sent!',
                text: 'Thank you for contacting us. We will get back to you within 24 hours.',
                icon: 'success'
            });
            
            this.reset();
        });
    }

    // Menu functionality
    let cart = [];
    let cartTotal = 0;

    // Category filtering
    document.querySelectorAll('.category-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const category = this.getAttribute('data-category');
            const menuItems = document.querySelectorAll('.menu-item');
            
            menuItems.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                    // Re-trigger AOS animation
                    item.classList.add('aos-animate');
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Add to cart functionality
    document.querySelectorAll('.add-to-cart').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            
            const itemName = this.getAttribute('data-item');
            const itemPrice = parseFloat(this.getAttribute('data-price'));
            
            // Add item to cart
            const existingItem = cart.find(item => item.name === itemName);
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    name: itemName,
                    price: itemPrice,
                    quantity: 1
                });
            }
            
            updateCartDisplay();
            
            // Show success message
            swal({
                title: 'Added to Cart!',
                text: `${itemName} has been added to your cart.`,
                icon: 'success',
                timer: 2000
            });
        });
    });

    // Update cart display
    function updateCartDisplay() {
        const cartItems = document.getElementById('cartItems');
        const cartTotalElement = document.getElementById('cartTotal');
        const cartCountElement = document.getElementById('cartCount');
        
        if (!cartItems || !cartTotalElement) return;
        
        cartItems.innerHTML = '';
        cartTotal = 0;
        let totalItems = 0;
        
        cart.forEach((item, index) => {
            const itemTotal = item.price * item.quantity;
            cartTotal += itemTotal;
            totalItems += item.quantity;
            
            const cartItem = document.createElement('div');
            cartItem.className = 'cart-item';
            cartItem.innerHTML = `
                <div class="cart-item-info">
                    <h4>${item.name}</h4>
                    <p>$${item.price} x ${item.quantity}</p>
                </div>
                <div class="cart-item-actions">
                    <button onclick="updateQuantity(${index}, -1)">-</button>
                    <span>${item.quantity}</span>
                    <button onclick="updateQuantity(${index}, 1)">+</button>
                    <button onclick="removeFromCart(${index})" class="remove-btn">×</button>
                </div>
            `;
            cartItems.appendChild(cartItem);
        });
        
        cartTotalElement.textContent = cartTotal.toFixed(2);
        if (cartCountElement) {
            cartCountElement.textContent = totalItems;
            cartCountElement.style.display = totalItems > 0 ? 'flex' : 'none';
        }
    }

    // Update quantity
    window.updateQuantity = function(index, change) {
        cart[index].quantity += change;
        if (cart[index].quantity <= 0) {
            cart.splice(index, 1);
        }
        updateCartDisplay();
    };

    // Remove from cart
    window.removeFromCart = function(index) {
        cart.splice(index, 1);
        updateCartDisplay();
    };

    // Toggle cart
    window.toggleCart = function() {
        const cartSidebar = document.getElementById('cartSidebar');
        cartSidebar.classList.toggle('open');
    };

    // Checkout
    window.checkout = function() {
        if (cart.length === 0) {
            swal({
                title: 'Cart is Empty',
                text: 'Please add some items to your cart before checkout.',
                icon: 'warning'
            });
            return;
        }
        
        swal({
            title: 'Order Placed!',
            text: `Your order total is $${cartTotal.toFixed(2)}. We'll deliver it to your room within 15 minutes.`,
            icon: 'success'
        });
        
        // Clear cart
        cart = [];
        updateCartDisplay();
        toggleCart();
    };

    // Room modal functions
    window.openRoomModal = function(title, image, price, features) {
        const modal = document.getElementById('roomModal');
        const modalTitle = document.getElementById('roomModalTitle');
        const modalImage = document.getElementById('roomModalImage');
        const modalPrice = document.getElementById('roomModalPrice');
        const modalFeatures = document.getElementById('roomModalFeatures');
        
        modalTitle.textContent = title;
        modalImage.src = image;
        modalImage.alt = title;
        modalPrice.textContent = price;
        
        modalFeatures.innerHTML = '';
        features.forEach(feature => {
            const featureDiv = document.createElement('div');
            featureDiv.className = 'feature';
            featureDiv.innerHTML = `
                <i class="fa-solid fa-check"></i>
                <span>${feature}</span>
            `;
            modalFeatures.appendChild(featureDiv);
        });
        
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    // Facility modal functions
    window.openFacilityModal = function(title, image, description) {
        const modal = document.getElementById('facilityModal');
        const modalTitle = document.getElementById('facilityModalTitle');
        const modalImage = document.getElementById('facilityModalImage');
        const modalDescription = document.getElementById('facilityModalDescription');
        
        modalTitle.textContent = title;
        modalImage.src = image;
        modalImage.alt = title;
        modalDescription.textContent = description;
        
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    // Close modal function
    window.closeModal = function(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    };

    // Close modal when clicking outside
    document.querySelectorAll('.modal-overlay').forEach(modal => {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal(modal.id);
            }
        });
    });

    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('.modal-overlay.active').forEach(modal => {
                closeModal(modal.id);
            });
        }
    });

    // ===== DELIVERY/MENU FUNCTIONALITY =====
    
    console.log('🍽️ Initializing menu functionality...');
    
    // Debug: Check if sections exist and are visible
    const sections = ['secondsection', 'menu', 'services', 'track', 'contactus'];
    sections.forEach(sectionId => {
        const section = document.getElementById(sectionId);
        if (section) {
            console.log(`✅ Section ${sectionId} found:`, {
                display: window.getComputedStyle(section).display,
                visibility: window.getComputedStyle(section).visibility,
                opacity: window.getComputedStyle(section).opacity,
                height: section.offsetHeight,
                width: section.offsetWidth
            });
        } else {
            console.log(`❌ Section ${sectionId} NOT found`);
        }
    });
    
    // Debug: Check room content
    const roomBoxes = document.querySelectorAll('.roombox');
    console.log(`Found ${roomBoxes.length} room boxes`);
    roomBoxes.forEach((box, index) => {
        console.log(`Room ${index + 1}:`, {
            display: window.getComputedStyle(box).display,
            visibility: window.getComputedStyle(box).visibility,
            height: box.offsetHeight,
            width: box.offsetWidth
        });
    });
    
    // Debug: Check menu content
    const menuItems = document.querySelectorAll('.menu-item');
    console.log(`Found ${menuItems.length} menu items`);
    menuItems.forEach((item, index) => {
        console.log(`Menu item ${index + 1}:`, {
            display: window.getComputedStyle(item).display,
            visibility: window.getComputedStyle(item).visibility,
            height: item.offsetHeight,
            width: item.offsetWidth
        });
    });
    
    // Cart functionality
    let cart = [];
    let cartTotal = 0;

    // Menu category filtering
    const categoryBtns = document.querySelectorAll('.category-btn');
    const menuItems = document.querySelectorAll('.menu-item');
    
    console.log(`Found ${categoryBtns.length} category buttons and ${menuItems.length} menu items`);

    categoryBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const category = this.dataset.category;
            
            // Update active button
            categoryBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter menu items
            menuItems.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                    item.style.animation = 'fadeIn 0.5s ease';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Add to cart functionality
    const addToCartBtns = document.querySelectorAll('.add-to-cart');
    addToCartBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const itemName = this.dataset.item;
            const itemPrice = parseFloat(this.dataset.price);
            
            addToCart(itemName, itemPrice);
            
            // Visual feedback
            this.style.transform = 'scale(1.2)';
            this.innerHTML = '<i class="fa-solid fa-check"></i>';
            
            setTimeout(() => {
                this.style.transform = 'scale(1)';
                this.innerHTML = '<i class="fa-solid fa-plus"></i>';
            }, 1000);
        });
    });

    // Add item to cart
    function addToCart(name, price) {
        const existingItem = cart.find(item => item.name === name);
        
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({
                name: name,
                price: price,
                quantity: 1
            });
        }
        
        updateCartUI();
        showCartNotification(name);
    }

    // Update cart UI
    function updateCartUI() {
        const cartItems = document.getElementById('cartItems');
        const cartCount = document.getElementById('cartCount');
        const cartTotalElement = document.getElementById('cartTotal');
        
        // Clear cart items
        cartItems.innerHTML = '';
        
        // Calculate total
        cartTotal = 0;
        let totalItems = 0;
        
        cart.forEach((item, index) => {
            cartTotal += item.price * item.quantity;
            totalItems += item.quantity;
            
            const cartItem = document.createElement('div');
            cartItem.className = 'cart-item';
            cartItem.innerHTML = `
                <div class="cart-item-info">
                    <h4>${item.name}</h4>
                    <p>$${item.price} x ${item.quantity}</p>
                </div>
                <div class="cart-item-controls">
                    <button onclick="updateQuantity(${index}, -1)">-</button>
                    <span>${item.quantity}</span>
                    <button onclick="updateQuantity(${index}, 1)">+</button>
                    <button onclick="removeFromCart(${index})" class="remove-btn">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </div>
            `;
            cartItems.appendChild(cartItem);
        });
        
        // Update cart count and total
        cartCount.textContent = totalItems;
        cartTotalElement.textContent = cartTotal.toFixed(2);
        
        // Show/hide cart count
        cartCount.style.display = totalItems > 0 ? 'flex' : 'none';
    }

    // Update item quantity
    window.updateQuantity = function(index, change) {
        cart[index].quantity += change;
        
        if (cart[index].quantity <= 0) {
            cart.splice(index, 1);
        }
        
        updateCartUI();
    }

    // Remove item from cart
    window.removeFromCart = function(index) {
        cart.splice(index, 1);
        updateCartUI();
    }

    // Toggle cart sidebar
    window.toggleCart = function() {
        const cartSidebar = document.getElementById('cartSidebar');
        const overlay = document.getElementById('overlay');
        
        cartSidebar.classList.toggle('open');
        overlay.classList.toggle('active');
        
        // Prevent body scroll when cart is open
        if (cartSidebar.classList.contains('open')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = 'auto';
        }
    }

    // Show cart notification
    function showCartNotification(itemName) {
        swal({
            title: 'Added to Cart!',
            text: `${itemName} has been added to your cart`,
            icon: 'success',
            timer: 2000,
            buttons: false
        });
    }

    // Checkout function
    window.checkout = function() {
        if (cart.length === 0) {
            swal({
                title: 'Cart is Empty',
                text: 'Please add items to your cart before checkout',
                icon: 'warning'
            });
            return;
        }
        
        // Create order summary
        let orderSummary = 'Order Summary:\n\n';
        cart.forEach(item => {
            orderSummary += `${item.name} x${item.quantity} - $${(item.price * item.quantity).toFixed(2)}\n`;
        });
        orderSummary += `\nTotal: $${cartTotal.toFixed(2)}`;
        
        swal({
            title: 'Confirm Order',
            text: orderSummary,
            icon: 'info',
            buttons: {
                cancel: 'Cancel',
                confirm: {
                    text: 'Place Order',
                    value: true,
                    className: 'btn-success'
                }
            }
        }).then((confirmed) => {
            if (confirmed) {
                processOrder();
            }
        });
    }

    // Process order
    function processOrder() {
        // Generate random order number
        const orderNumber = 'NX' + Math.random().toString(36).substr(2, 9).toUpperCase();
        
        // Simulate order processing
        swal({
            title: 'Processing Order...',
            text: 'Please wait while we process your order',
            icon: 'info',
            buttons: false,
            timer: 2000
        }).then(() => {
            // Clear cart
            cart = [];
            updateCartUI();
            toggleCart();
            
            // Show success message
            swal({
                title: 'Order Placed Successfully!',
                text: `Your order number is: ${orderNumber}\nEstimated delivery: 15-20 minutes`,
                icon: 'success',
                button: 'Track Order'
            }).then(() => {
                // Auto-fill tracking input
                document.getElementById('orderNumber').value = orderNumber;
                document.getElementById('track').scrollIntoView({ behavior: 'smooth' });
            });
        });
    }

    // Track order function
    window.trackOrder = function() {
        const orderNumber = document.getElementById('orderNumber').value.trim();
        const trackingResult = document.getElementById('trackingResult');
        
        if (!orderNumber) {
            swal({
                title: 'Enter Order Number',
                text: 'Please enter your order number to track',
                icon: 'warning'
            });
            return;
        }
        
        // Simulate tracking
        trackingResult.innerHTML = `
            <div class="tracking-info">
                <h3>Order Status: ${orderNumber}</h3>
                <div class="tracking-steps">
                    <div class="step completed">
                        <i class="fa-solid fa-check-circle"></i>
                        <span>Order Confirmed</span>
                        <small>2 minutes ago</small>
                    </div>
                    <div class="step completed">
                        <i class="fa-solid fa-utensils"></i>
                        <span>Preparing</span>
                        <small>1 minute ago</small>
                    </div>
                    <div class="step active">
                        <i class="fa-solid fa-truck"></i>
                        <span>Out for Delivery</span>
                        <small>Now</small>
                    </div>
                    <div class="step">
                        <i class="fa-solid fa-home"></i>
                        <span>Delivered</span>
                        <small>Est. 10 minutes</small>
                    </div>
                </div>
                <div class="delivery-info">
                    <p><strong>Delivery Person:</strong> John Smith</p>
                    <p><strong>Contact:</strong> +1 (555) 123-4567</p>
                    <p><strong>Estimated Arrival:</strong> 10-15 minutes</p>
                </div>
            </div>
        `;
        
        trackingResult.style.display = 'block';
    }
</script>

<!-- AOS Animation Script -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</html>