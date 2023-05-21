<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="refresh" content="5; url=https://www.google.com/"> -->
    <title>checkout</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- jquery minified version cdn path -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <div class="container mt-3">
        <div class="alert alert-success">
            <button type="button" class="btn btn-primary p-3" >
            <strong>Sucess!</strong>  Payment Paid Sucessfully.
            </button>
        </div>

        <button type="button" class="btn btn-primary p-3" >
            <strong id="goHome">Go to the home page</strong>
            </button>

    </div>

<script>
        $("#goHome").click(function(){
            window.location.href="index.html"
        });
</script>


</body>

</html>