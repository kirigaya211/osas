<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Recognition</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .certificate-container {
            position: relative;
            width: 800px;
            margin: 50px auto;
            padding: 50px;
            background: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border: 10px solid #8B0000;
        }

        .logo {
            text-align: center;
            margin-bottom: 10px;
        }

        .logo img {
            width: 50px;
            height: auto;
        }

        .heading {
            text-align: center;
            margin-top: 20px;
        }

        .heading h1 {
            margin: 0;
            font-size: 24px;
            color: #000;
            text-transform: uppercase;
        }

        .sub-heading {
            text-align: center;
            font-size: 14px;
            margin-top: 5px;
            color: #555;
        }

        .certificate-title {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin: 20px 0;
        }
        .org-name {
            text-align: center;
            font-size: 36px;
            font-family: 'Times New Roman', serif;
            font-weight: bold;
            color: #D4AF37;
            margin: 10px 0 20px;
        }
        .description {
            text-align: center;
            font-size: 16px;
            line-height: 1.6;
            margin: 0 auto;
            width: 80%;
            color: #333;
        }
        .date {
            margin-top: 30px;
            text-align: center;
            font-size: 16px;
        }
        .signature {
            text-align: center;
            margin-top: 40px;
            position: relative;
        }
        .director {
            font-weight: bold;
            text-transform: uppercase;
        }
        .role {
            font-size: 12px;
            color: #D4AF37;
        }
        .corner {
            position: absolute;
            width: 50px;
            height: 50px;
            background-color: #8B0000;
        }
        .corner-top-left {
            top: 0;
            left: 0;
        }
        .corner-bottom-right {
            bottom: 0;
            right: 0;
        }
    </style>
</head>
<body>
    <div class="certificate-container">
        <div class="corner corner-top-left"></div>
        <div class="logo">
            <img src="images/USeP-Logo.jpg" alt="University Logo">
        </div>
        <div class="heading">
            <h1>University of Southeastern Philippines</h1>
            <div class="sub-heading">Office of Student Affairs and Services</div>
        </div>
        <div class="certificate-title">CERTIFICATE OF RECOGNITION</div>
        <div class="org-name">
            {{ $organization->OrganizationName }}
        </div>
        <div class="description">
            has completed all requirements for Recognition/Re-Accreditation of Organizations.<br>
            The Office of Student Affairs and Services hereby recognizes<br>
            this school organization for the S.Y.
            <?php
            $currentYear = date('Y');
            $nextYear = $currentYear + 1;
            echo "$currentYear - $nextYear";
            ?>.
        </div>
        <div class="date">
            <?php
            echo 'Given this ' . date('jS \of F Y') . ' at the University of Southeastern Philippines, Obrero Campus.';
            ?>
        </div>
        <div class="signature">
            <div class="director">JOSE ALTHER M. RIVERA</div>
            <div class="role">Director, Office of Student Affairs and Services</div>
        </div>
        <div class="corner corner-bottom-right"></div>
    </div>
</body>
</html>
