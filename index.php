<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Commands</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

</head>
<body>
    <div class="container">

        <div class="demo-flex-spacer"></div>
        <div class="demo-flex-spacer"></div>

        <div class="webflow-style-input">
            <input id="input" class="" type="text" autocomplete="off" placeholder="Enter your command here"/>
            <button id="btn" type="submit" onclick="onSubmit()"<i class="icon ion-android-arrow-forward"></i></button>
        </div>
        <div class="demo-flex-spacer"></div>
        <h1 id="result" class="demo">Your result will appear here</h1>
        <div class="demo-flex-spacer"></div>
        <div class="demo-flex-spacer"></div>



        <div id="snackbar"></div>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
