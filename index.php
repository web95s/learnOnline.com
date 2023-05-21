<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- jquery minified version cdn path -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


    <!-- <button id="rzp-button1">Pay</button> -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <!-- form.php has been added here -->

    <?php
    include 'form.php';
    ?>

    <!-- <form>
        <input type="text" name="name" placeholder="Enter Name" id="name"> <br><br>
        <input type="number" name="amount" placeholder="Enter Amount" id="amount"> <br><br>
        <input type="button" name="button" value="pay now" onclick="pay_now()">
    </form> -->

    <?php
    $apiKey = "rzp_test_QQm05rYuatzBmt";
    ?>

    <script>
        function pay_now() {
            var name = $("#name").val();

            // name validation applied
            if (name == "" || name == null) {
                alert('Enter the name');
                return false;
            }
            var className = $("#class").val();
            console.log(className);

            // class validation applied, class can't be used as we have class as an attribute so class1 used

            if (className == "" || className == null) {
                document.querySelector("#submessage").innerHTML=
                alert('Enter the class');
                return false;
            }
            var subjectName = $("#subject").val();
            console.log(subjectName);

            // subject validation applied
            if (subjectName == "" || subjectName == null) {
                alert('Enter the subject');
                return false;
            }

            var amount = $("#change").text();
            console.log(amount);
            var options = {
                "key": "<?php echo $apiKey ?>",
                "amount": amount * 100,
                "currency": "INR",
                "name": name, //your business name
                "className": className,
                "subjectName": subjectName,
                "description": "Test Transaction",
                "image": "https://web95s.github.io/newrepo/img/logo.png",
                "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                "handler": function (response) {
                    console.log(response);
                    $.post(
                        'http://localhost/test_database/process_payment.php',
                        { 'payment_id': response.razorpay_payment_id, 'amount': amount, 'name': name, 'className': className, 'subjectName': subjectName },
                        function (data) {
                            // console.log(data);
                            // alert(`sub is : ${sub}  Name is : ${name} and payment id is : ${response.razorpay_payment_id}`);
                            window.location.href = 'thank_you.php';

                        }

                    );
                    // $.ajax({
                    //     url: 'process_payment.php',
                    //     type: 'POST',
                    //     data: { 'payment_id': response.razorpay_payment_id, 'amount': amount,'name': name},
                    //     success: function (data) {
                    //         // console.log(data);
                    //         // alert(`Amount is : ${amount}  Name is : ${name} and payment id is : ${response.razorpay_payment_id}`);
                    //         window.location.href = 'thank_you.php';
                    //     }
                    // });
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        }
    </script>
</body>

</html>