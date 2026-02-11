<html>

<head>
	<meta charset="utf-8">
	<title>Invoice - The Nexus</title>
	<link rel="stylesheet" href="style.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

	<script src="script.js"></script>
	<style>
		/* reset */

		* {
			border: 0;
			box-sizing: content-box;
			color: inherit;
			font-family: inherit;
			font-size: inherit;
			font-style: inherit;
			font-weight: inherit;
			line-height: inherit;
			list-style: none;
			margin: 0;
			padding: 0;
			text-decoration: none;
			vertical-align: top;
		}

		/* content editable */

		*[contenteditable] {
			border-radius: 0.25em;
			min-width: 1em;
			outline: 0;
		}

		*[contenteditable] {
			cursor: pointer;
		}

		*[contenteditable]:hover,
		*[contenteditable]:focus,
		td:hover *[contenteditable],
		td:focus *[contenteditable],
		img.hover {
			background: #DEF;
			box-shadow: 0 0 1em 0.5em #DEF;
		}

		span[contenteditable] {
			display: inline-block;
		}

		/* heading */

		h1 {
			font: bold 100% sans-serif;
			letter-spacing: 0.5em;
			text-align: center;
			text-transform: uppercase;
		}

		/* table */

		table {
			font-size: 75%;
			table-layout: fixed;
			width: 100%;
		}

		table {
			border-collapse: separate;
			border-spacing: 2px;
		}

		th,
		td {
			border-width: 1px;
			padding: 0.5em;
			position: relative;
			text-align: left;
		}

		th,
		td {
			border-radius: 0.25em;
			border-style: solid;
		}

		th {
			background: #EEE;
			border-color: #BBB;
		}

		td {
			border-color: #DDD;
		}

		/* page */

		html {
			font: 16px/1 'Open Sans', sans-serif;
			overflow: auto;
			padding: 0.5in;
		}

		html {
			background: #999;
			cursor: default;
		}

		body {
			box-sizing: border-box;
			height: 11in;
			margin: 0 auto;
			overflow: hidden;
			padding: 0.5in;
			width: 8.5in;
		}

		body {
			background: #FFF;
			border-radius: 1px;
			box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
		}

		/* header */

		header {
			margin: 0 0 3em;
		}

		header:after {
			clear: both;
			content: "";
			display: table;
		}

		header h1 {
			background: #000;
			border-radius: 0.25em;
			color: #FFF;
			margin: 0 0 1em;
			padding: 0.5em 0;
		}

		header address {
			float: left;
			font-size: 75%;
			font-style: normal;
			line-height: 1.25;
			margin: 0 1em 1em 0;
		}

		header address p {
			margin: 0 0 0.25em;
		}

		header span,
		header img {
			display: block;
			float: right;
		}

		header span {
			margin: 0 0 1em 1em;
			max-height: 25%;
			max-width: 60%;
			position: relative;
		}

		header img {
			max-height: 100%;
			max-width: 100%;
		}

		header input {
			cursor: pointer;
			/* -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; */
			height: 100%;
			left: 0;
			opacity: 0;
			position: absolute;
			top: 0;
			width: 100%;
		}

		/* article */

		article,
		article address,
		table.meta,
		table.inventory {
			margin: 0 0 3em;
		}

		article:after {
			clear: both;
			content: "";
			display: table;
		}

		article h1 {
			clip: rect(0 0 0 0);
			position: absolute;
		}

		article address {
			float: left;
			font-size: 125%;
			font-weight: bold;
		}

		/* table meta & balance */

		table.meta,
		table.balance {
			float: right;
			width: 36%;
		}

		table.meta:after,
		table.balance:after {
			clear: both;
			content: "";
			display: table;
		}

		/* table meta */

		table.meta th {
			width: 40%;
		}

		table.meta td {
			width: 60%;
		}

		/* table items */

		table.inventory {
			clear: both;
			width: 100%;
		}

		table.inventory th {
			font-weight: bold;
			text-align: center;
		}

		table.inventory td:nth-child(1) {
			width: 26%;
		}

		table.inventory td:nth-child(2) {
			width: 38%;
		}

		table.inventory td:nth-child(3) {
			text-align: right;
			width: 12%;
		}

		table.inventory td:nth-child(4) {
			text-align: right;
			width: 12%;
		}

		table.inventory td:nth-child(5) {
			text-align: right;
			width: 12%;
		}

		/* table balance */

		table.balance th,
		table.balance td {
			width: 50%;
		}

		table.balance td {
			text-align: right;
		}

		/* aside */

		aside h1 {
			border: none;
			border-width: 0 0 1px;
			margin: 0 0 1em;
		}

		aside h1 {
			border-color: #999;
			border-bottom-style: solid;
		}

		/* javascript */

		.add,
		.cut {
			border-width: 1px;
			display: block;
			font-size: .8rem;
			padding: 0.25em 0.5em;
			float: left;
			text-align: center;
			width: 0.6em;
		}

		.add,
		.cut {
			background: #9AF;
			box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
			background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
			background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
			border-radius: 0.5em;
			border-color: #0076A3;
			color: #FFF;
			cursor: pointer;
			font-weight: bold;
			text-shadow: 0 -1px 2px rgba(0, 0, 0, 0.333);
		}

		.add {
			margin: -2.5em 0 0;
		}

		.add:hover {
			background: #00ADEE;
		}

		.cut {
			opacity: 0;
			position: absolute;
			top: 0;
			left: -1.5em;
		}

		.cut {
			-webkit-transition: opacity 100ms ease-in;
		}

		tr:hover .cut {
			opacity: 1;
		}

		@media print {
			* {
				-webkit-print-color-adjust: exact;
			}

			html {
				background: none;
				padding: 0;
			}

			body {
				box-shadow: none;
				margin: 0;
			}

			span:empty {
				display: none;
			}

			.add,
			.cut {
				display: none;
			}
		}

		@page {
			margin: 0;
		}
	</style>

</head>

<body>

		
	<?php
	//=nb
	ob_start();
	include '../config.php';

	$id = $_GET['id'];

	$sql = "select * from payment where id = '$id' ";
	$re = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_array($re)) {
		$id = $row['id'];
		$Name = $row['Name'];
		$troom = $row['RoomType'];
		$bed = $row['Bed'];
		$nroom = $row['NoofRoom'];
		$cin = $row['cin'];
		$cout = $row['cout'];
		$meal = $row['meal'];
		$ttot = $row['roomtotal'];
		$mepr = $row['mealtotal'];
		$btot = $row['bedtotal'];
		$fintot = $row['finaltotal'];
		$days = $row['noofdays'];
	}

	$type_of_room = 0;
	if ($troom == "Superior Room") {
		$type_of_room = 320;
	} else if ($troom == "Deluxe Room") {
		$type_of_room = 220;
	} else if ($troom == "Guest House") {
		$type_of_room = 180;
	} else if ($troom == "Single Room") {
		$type_of_room = 150;
	}
	$type_of_bed = 0;
	if ($bed == "Single") {
		$type_of_bed = $type_of_room  * 1 / 100;
	} else if ($bed == "Double") {
		$type_of_bed = $type_of_room * 2 / 100;
	} else if ($bed == "Triple") {
		$type_of_bed = $type_of_room * 3 / 100;
	} else if ($bed == "Quad") {
		$type_of_bed = $type_of_room * 4 / 100;
	} else if ($bed == "None") {
		$type_of_bed = $type_of_room * 0 / 100;
	}
	$type_of_meal = 0;
	if ($meal == "Room only") {
		$type_of_meal = $type_of_bed * 0;
	} else if ($meal == "Breakfast") {
		$type_of_meal = $type_of_bed * 2;
	} else if ($meal == "Half Board") {
		$type_of_meal = $type_of_bed * 3;
	} else if ($meal == "Full Board") {
		$type_of_meal = $type_of_bed * 4;
	}

	?>
	<header style="border-bottom: 3px solid #06b6d4; padding-bottom: 20px; margin-bottom: 30px;">
		<div style="display: flex; align-items: center; margin-bottom: 15px;">
			<i class="fa-solid fa-gem" style="font-size: 32px; color: #06b6d4; margin-right: 12px;"></i>
			<h1 style="margin: 0; color: #1e1b4b; font-size: 28px;">THE NEXUS</h1>
		</div>
		<h2 style="text-align: center; background: linear-gradient(135deg, #1e1b4b, #06b6d4); color: white; padding: 12px; border-radius: 8px; margin: 20px 0; letter-spacing: 2px;">INVOICE</h2>
		<div style="display: flex; justify-content: space-between; align-items: flex-start;">
			<address style="font-style: normal;">
				<p style="margin: 5px 0; font-weight: 600; color: #1e1b4b; font-size: 16px;">THE NEXUS</p>
				<p style="margin: 5px 0; color: #64748b;">Smart Hospitality Management System</p>
				<p style="margin: 5px 0; color: #64748b;"><i class="fa-solid fa-phone" style="margin-right: 8px; color: #06b6d4;"></i>0904272042</p>
				<p style="margin: 5px 0; color: #64748b;"><i class="fa-solid fa-envelope" style="margin-right: 8px; color: #06b6d4;"></i>info@thenexushotel.com</p>
			</address>
			<div style="text-align: right;">
				<p style="margin: 5px 0; color: #64748b;"><strong>Invoice #:</strong> <?php echo str_pad($id, 5, '0', STR_PAD_LEFT); ?></p>
				<p style="margin: 5px 0; color: #64748b;"><strong>Date:</strong> <?php echo date('F d, Y'); ?></p>
			</div>
		</div>
	</header>
	<article>
		<h3 style="color: #1e1b4b; margin-bottom: 10px; padding-bottom: 8px; border-bottom: 2px solid #e2e8f0;">Guest Information</h3>
		<address style="font-style: normal; margin-bottom: 30px;">
			<p style="font-size: 16px; font-weight: 600; color: #1e293b; margin: 5px 0;"><i class="fa-solid fa-user" style="margin-right: 8px; color: #06b6d4;"></i><?php echo $Name ?></p>
		</address>
		<table class="meta" style="margin-bottom: 30px;">
			<tr style="background: #f8fafc;">
				<th style="padding: 12px; text-align: left; color: #1e1b4b;"><span>Invoice #</span></th>
				<td style="padding: 12px;"><span style="font-weight: 600;"><?php echo str_pad($id, 5, '0', STR_PAD_LEFT); ?></span></td>
			</tr>
			<tr>
				<th style="padding: 12px; text-align: left; color: #1e1b4b;"><span>Check-Out Date</span></th>
				<td style="padding: 12px;"><span><?php echo date('F d, Y', strtotime($cout)); ?> </span></td>
			</tr>

		</table>
		<h3 style="color: #1e1b4b; margin: 20px 0 15px 0; padding-bottom: 8px; border-bottom: 2px solid #e2e8f0;">Billing Details</h3>
		<table class="inventory" style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
			<thead>
				<tr style="background: linear-gradient(135deg, #1e1b4b, #312e81); color: white;">
					<th style="padding: 14px; text-align: left;"><span>Item</span></th>
					<th style="padding: 14px; text-align: center;"><span>No of Days</span></th>
					<th style="padding: 14px; text-align: center;"><span>Rate</span></th>
					<th style="padding: 14px; text-align: center;"><span>Quantity</span></th>
					<th style="padding: 14px; text-align: right;"><span>Price</span></th>
				</tr>
			</thead>
			<tbody>
				<tr style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
					<td style="padding: 12px;"><span><?php echo $troom; ?></span></td>
					<td style="padding: 12px; text-align: center;"><span><?php echo $days; ?> </span></td>
					<td style="padding: 12px; text-align: center;"><span data-prefix>$</span><span><?php echo $type_of_room; ?></span></td>
					<td style="padding: 12px; text-align: center;"><span><?php echo $nroom; ?> </span></td>
					<td style="padding: 12px; text-align: right;"><span data-prefix>$</span><span style="font-weight: 600;"><?php echo $ttot; ?></span></td>
				</tr>
				<tr style="border-bottom: 1px solid #e2e8f0;">
					<td style="padding: 12px;"><span><?php echo $bed; ?> Bed </span></td>
					<td style="padding: 12px; text-align: center;"><span><?php echo $days; ?></span></td>
					<td style="padding: 12px; text-align: center;"><span data-prefix>$</span><span><?php echo $type_of_bed; ?></span></td>
					<td style="padding: 12px; text-align: center;"><span><?php echo $nroom; ?> </span></td>
					<td style="padding: 12px; text-align: right;"><span data-prefix>$</span><span style="font-weight: 600;"><?php echo $btot; ?></span></td>
				</tr>
				<tr style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
					<td style="padding: 12px;"><span><?php echo $meal; ?> </span></td>
					<td style="padding: 12px; text-align: center;"><span><?php echo $days; ?></span></td>
					<td style="padding: 12px; text-align: center;"><span data-prefix>$</span><span><?php echo $type_of_meal ?></span></td>
					<td style="padding: 12px; text-align: center;"><span><?php echo $nroom; ?> </span></td>
					<td style="padding: 12px; text-align: right;"><span data-prefix>$</span><span style="font-weight: 600;"><?php echo $mepr; ?></span></td>
				</tr>
			</tbody>
		</table>

		<table class="balance" style="float: right; width: 40%; border-collapse: collapse;">
			<tr style="background: #f8fafc;">
				<th style="padding: 14px; text-align: left; color: #1e1b4b;"><span>Total Amount</span></th>
				<td style="padding: 14px; text-align: right; font-size: 20px; font-weight: 700; color: #06b6d4;"><span data-prefix>$</span><span><?php echo number_format($fintot, 2); ?></span></td>
			</tr>
			<tr>
				<th style="padding: 14px; text-align: left; color: #64748b;"><span>Amount Paid</span></th>
				<td style="padding: 14px; text-align: right;"><span data-prefix>$</span><span>0.00</span></td>
			</tr>
			<tr style="background: linear-gradient(135deg, #1e1b4b, #312e81); color: white;">
				<th style="padding: 16px; text-align: left; font-size: 16px;"><span>Balance Due</span></th>
				<td style="padding: 16px; text-align: right; font-size: 22px; font-weight: 700;"><span data-prefix>$</span><span><?php echo number_format($fintot, 2); ?></span></td>
			</tr>
		</table>
	</article>
	<aside style="clear: both; margin-top: 60px; padding-top: 20px; border-top: 2px solid #e2e8f0;">
		<h3 style="color: #1e1b4b; margin-bottom: 15px;"><i class="fa-solid fa-address-book" style="margin-right: 10px; color: #06b6d4;"></i><span>Contact Information</span></h3>
		<div style="background: #f8fafc; padding: 20px; border-radius: 8px; border-left: 4px solid #06b6d4;">
			<p style="margin: 8px 0; color: #475569;"><i class="fa-solid fa-envelope" style="margin-right: 10px; color: #06b6d4; width: 20px;"></i><strong>Email:</strong> info@thenexushotel.com</p>
			<p style="margin: 8px 0; color: #475569;"><i class="fa-solid fa-globe" style="margin-right: 10px; color: #06b6d4; width: 20px;"></i><strong>Website:</strong> www.thenexushotel.com</p>
			<p style="margin: 8px 0; color: #475569;"><i class="fa-solid fa-phone" style="margin-right: 10px; color: #06b6d4; width: 20px;"></i><strong>Phone:</strong> 0904272042</p>
		</div>
		<p style="text-align: center; margin-top: 30px; color: #94a3b8; font-size: 14px; font-style: italic;">Thank you for choosing The Nexus - Smart Hospitality Management System</p>
	</aside>

</body>

</html>

<?php

ob_end_flush();

?>