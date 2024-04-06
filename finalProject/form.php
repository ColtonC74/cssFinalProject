<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Campbell Weight Loss Program: Starting Your Journey</title>
    <link href="css/form.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Outfit">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend">
</head>
<body>
<header>
    <h1>The Campbell Weight Loss Program</h1>
    <h2>Abbreviated <strong>CWLP</strong></h2>
    <!-- navigation to all pages -->
    <nav>
        <ul>
            <li><a href="index.html" title="Go to the Home page">Home Page</a></li>
            <li><a href="about.html" title="Learn about the CWLP">About</a></li>
            <li><a href="contact.html" title="Find how to contact us">Contact Us</a></li>
            <li><a href="product.html" title="product description page">Product Page</a></li>
            <li><a href="signup.html" title="sign up now!">Sign up Page</a></li>
        </ul>
    </nav>
</header>
    
        <h2>Congratulations on starting your CWLP weight loss journey!</h2>
        
    
    
    
    <?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $address = $_GET['address'];
    $height = $_GET['height'];
    $weight = $_GET['weight'];
    $ideal_weight = $_GET['ideal-weight'];
    $plan = $_GET['plan'];
    
    // Calculating current BMI
    $current_bmi = $weight / (($height * 0.0254) * ($height * 0.0254));
    
    // Calculating ideal BMI
    $ideal_bmi = $ideal_weight / (($height * 0.0254) * ($height * 0.0254));
    
    // Estimating time needed
    $projected_months = round((($current_bmi - $ideal_bmi) * 9),2);

    echo('<p> Thank you for partnering with us, '.$name.'! We will send an email to: '.$email.' shortly to set up an in-person or Zoom meeting to discuss our strategies.</p>');
    echo('<p> We have estimated that your journey will take roughly '.$projected_months.' months.</p>');
    ?>
    
    

    
    <a href="index.html"><button>Return to homepage</button></a>

</body>
</html>