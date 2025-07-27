<!DOCTYPE html>
<?php include("config.php"); ?>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <style>
        .logo-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo {
            max-width: 120px;
        }

        .header-text {
            text-align: center;
        }

        .staff-section {
            display: flex;
            justify-content: space-around;
            margin-top: 40px;
        }

        .staff-card {
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 15px;
        }

        .staff-card img {
            max-width: 200px;
            border-radius: 10px;	
        }

        .btn-home {
            display: block;
            width: 140px;
            height: 40px;
            line-height: 40px;
            margin: 40px auto;
            font-size: 20px;
            text-align: center;
            text-decoration: none;
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            color: white;
            border-radius: 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            user-select: none;
			margin-top: 240px;
        }

        .btn-home:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        .btn-home:active {
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
        }

		h1,h2,h3,h5{
			color: red;
		}

    </style>
</head>

<body>

    <!-- Page Content -->
    <div class="container">

        <!-- Header Section -->
        <div class='well'>
            <div class="logo-container">
                <img src="index_image/clg_logo.png" alt="College Logo" class="logo" class="img-responsive">
                <div class="header-text">
                    <h1 class='text-info'>GOVERNMENT ARTS COLLEGE (AUTONOMOUS) - SALEM-7</h1>
                    <h2 class='text-success'>YRC - YOUTH RED CROSS</h2>
                    <h3 class='text'>INTEGRATED BLOOD BANK PORTAL</h3>
                </div>
                <img src="index_image/yrc_logo.png" alt="YRC Logo" class="logo" class="img-responsive">
            </div>
        </div>

        <!-- Staff Section -->
        <div class="staff-section">
            <div class="staff-card">
                <img src="index_image/Principal_mam.jpg" alt="Staff 1" class="img-responsive">
                <h5>Dr. N. SHENBAGALAKSHMI,</h5>
                <p style="font-size: 12px">MA(Tamil) MA.(JMC) M.Sc.,<br> (Yoga) B.Ed., M.Phil.,<br> Ph.D., (NET).,<br>
				PRINCIPAL</p>
            </div>

			<div>
        		<a href="home.php" class="btn-home">Enter &#8594;</a>
			</div>

            <div class="staff-card">
                <img src="index_image/yrc_sir.jpg" alt="Staff 2" class="img-responsive">
                <h5>Dr. A. PALANISAMI,</h5>
                <p style="font-size: 12px">	
					M.A, B.Ed, MBA, M.Phil, PhD, <br>
					Associate Professor of Economics, <br>
					YRC Programme Officer, <br>
					Department of Economics
				</p>
            </div>
        </div>

        <!-- Home Page Button -->

        <!-- Footer -->
        <?php include "footer.php"; ?>

    </div>

</body>

</html>
