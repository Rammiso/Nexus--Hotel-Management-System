<?php
    session_start();
    include '../config.php';

    // roombook
    $roombooksql ="Select * from roombook";
    $roombookre = mysqli_query($conn, $roombooksql);
    $roombookrow = mysqli_num_rows($roombookre);

    // staff
    $staffsql ="Select * from staff";
    $staffre = mysqli_query($conn, $staffsql);
    $staffrow = mysqli_num_rows($staffre);

    // room
    $roomsql ="Select * from room";
    $roomre = mysqli_query($conn, $roomsql);
    $roomrow = mysqli_num_rows($roomre);

    //roombook roomtype
    $chartroom1 = "SELECT * FROM roombook WHERE RoomType='Superior Room'";
    $chartroom1re = mysqli_query($conn, $chartroom1);
    $chartroom1row = mysqli_num_rows($chartroom1re);

    $chartroom2 = "SELECT * FROM roombook WHERE RoomType='Deluxe Room'";
    $chartroom2re = mysqli_query($conn, $chartroom2);
    $chartroom2row = mysqli_num_rows($chartroom2re);

    $chartroom3 = "SELECT * FROM roombook WHERE RoomType='Guest House'";
    $chartroom3re = mysqli_query($conn, $chartroom3);
    $chartroom3row = mysqli_num_rows($chartroom3re);

    $chartroom4 = "SELECT * FROM roombook WHERE RoomType='Single Room'";
    $chartroom4re = mysqli_query($conn, $chartroom4);
    $chartroom4row = mysqli_num_rows($chartroom4re);
?>
<!-- moriss profit -->
<?php 	
					$query = "SELECT * FROM payment";
					$result = mysqli_query($conn, $query);
					$chart_data = '';
					$tot = 0;
					while($row = mysqli_fetch_array($result))
					{
              $chart_data .= "{ date:'".$row["cout"]."', profit:".$row["finaltotal"]*10/100 ."}, ";
              $tot = $tot + $row["finaltotal"]*10/100;
					}

					$chart_data = substr($chart_data, 0, -2);
				
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/nexus-design-system.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- morish bar -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <title>The Nexus | Admin</title>
</head>
<body>
   <!-- Enhanced Dashboard Summary Cards -->
   <div class="databox">
        <!-- Total Rooms Card -->
        <div class="box totalroomsbox">
          <div class="box-icon">
            <i class="fa-solid fa-door-open"></i>
          </div>
          <div class="box-content">
            <h2>Total Rooms</h2>
            <h1><?php echo $roomrow ?></h1>
            <p class="box-subtitle">In inventory</p>
          </div>
        </div>

        <!-- Active Bookings Card -->
        <div class="box roombookbox">
          <div class="box-icon">
            <i class="fa-solid fa-calendar-check"></i>
          </div>
          <div class="box-content">
            <h2>Active Bookings</h2>
            <h1><?php echo $roombookrow ?></h1>
            <p class="box-subtitle">Currently booked</p>
          </div>
        </div>

        <!-- Available Rooms Card -->
        <?php
          // Feature Enhancement: Calculate available rooms for better visibility
          // This helps administrators quickly see capacity status
          $availableRooms = $roomrow - $roombookrow;
        ?>
        <div class="box availablebox">
          <div class="box-icon">
            <i class="fa-solid fa-bed"></i>
          </div>
          <div class="box-content">
            <h2>Available Rooms</h2>
            <h1><?php echo $availableRooms ?></h1>
            <p class="box-subtitle">Ready to book</p>
          </div>
        </div>

        <!-- Total Revenue Card -->
        <div class="box profitbox">
          <div class="box-icon">
            <i class="fa-solid fa-dollar-sign"></i>
          </div>
          <div class="box-content">
            <h2>Total Revenue</h2>
            <h1>$<?php echo number_format($tot, 2)?></h1>
            <p class="box-subtitle">10% margin</p>
          </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="chartbox">
        <div class="bookroomchart">
            <canvas id="bookroomchart"></canvas>
            <h3 style="text-align: center;margin:10px 0; color: #1e1b4b; font-weight: 600;">Room Type Distribution</h3>
        </div>
        <div class="profitchart" >
            <div id="profitchart"></div>
            <h3 style="text-align: center;margin:10px 0; color: #1e1b4b; font-weight: 600;">Revenue Trends</h3>
        </div>
    </div>
</body>



<script>
        const labels = [
          'Superior Room',
          'Deluxe Room',
          'Guest House',
          'Single Room',
        ];
      
        const data = {
          labels: labels,
          datasets: [{
            label: 'My First dataset',
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(153, 102, 255, 1)',
            ],
            borderColor: 'black',
            data: [<?php echo $chartroom1row ?>,<?php echo $chartroom2row ?>,<?php echo $chartroom3row ?>,<?php echo $chartroom4row ?>],
          }]
        };
  
        const doughnutchart = {
          type: 'doughnut',
          data: data,
          options: {}
        };
        
      const myChart = new Chart(
      document.getElementById('bookroomchart'),
      doughnutchart);
</script>

<script>
Morris.Bar({
 element : 'profitchart',
 data:[<?php echo $chart_data;?>],
 xkey:'date',
 ykeys:['profit'],
 labels:['Profit'],
 hideHover:'auto',
 stacked:true,
 barColors:[
  'rgba(153, 102, 255, 1)',
 ]
});
</script>

</html>