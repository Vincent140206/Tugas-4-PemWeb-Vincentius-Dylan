<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; 
            background-image: url('https://images.pexels.com/photos/305821/pexels-photo-305821.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 850px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 10px;
        }
        h2 {
            font-size: 28px;
            margin-top: 20px;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }
        h3 {
            font-size: 24px;
            margin-top: 15px;
        }
        p {
            margin: 5px 0;
        }
        .sub {
            margin: 10px 0;
        }
        .date {
            float: right;
            font-style: italic;
            color: #777;
        }
        hr {
            border: none; 
            height: 2px; 
            background-color: black; 
            margin: 20px 0; 
        }
    </style>
</head>
<body>
    <div class="container"> 
        <h1>Curriculum Vitae</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $name = htmlspecialchars($_POST['name']);
            $summary = nl2br(htmlspecialchars($_POST['summary']));
            $experience = nl2br(htmlspecialchars($_POST['experience']));
            $education = nl2br(htmlspecialchars($_POST['education']));
            $award = nl2br(htmlspecialchars($_POST['award']));
            $capability = nl2br(htmlspecialchars($_POST['capability']));
            $additional_info = nl2br(htmlspecialchars($_POST['additional_info']));

            
            echo "<h2>Personal Information</h2>";
            echo "<p><strong>Nama:</strong> $name</p>";
            echo "<p><strong>Summary:</strong> $summary</p>";

            echo "<h2>Work Experience</h2>";
            echo "<div class='sub'>$experience</div>";

            echo "<h2>Education</h2>";
            echo "<div class='sub'>$education</div>";

            echo "<h2>Awards</h2>";
            echo "<div class='sub'>$award</div>";

            echo "<h2>Capabilities</h2>";
            echo "<div class='sub'>$capability</div>";

            echo "<h2>Additional Information</h2>";
            echo "<div class='sub'>$additional_info</div>";
        } else {
            echo "<p>Invalid request.</p>";
        }
        ?>
    </div>
</body>
</html>