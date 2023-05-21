<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="formStyle.css">
</head>

<body>
    <div class="container">
        <div class="row m-0">
            <div class="col-lg-7 pb-5 pe-lg-5">
                <div class="row">
                    <div class="col-12 p-5">
                        <img src="https://web95s.github.io/newrepo/img/logo.png" alt="">
                    </div>
                    <div class="row m-0 bg-light px-5 py-0 text-center shadow-lg">

                        <div class="col-md-4 col-4 ps-30 pe-0 my-4 px-0 bg-primary p-3">
                            <p class="text-light" lh-lg">One Month</p>
                            <p class="h6"> &#8377; 499/-<span class="ps-1"></span></p>
                        </div>
                        <div class="col-md-4 col-4  ps-30 my-4 px-0 bg-primary p-3 active ">
                            <p class="text-light" lh-lg">One Year</p>
                            <p class="h6 m-0">&#8377; 5988/-</p>
                        </div>
                        <div class="col-md-4 col-4 ps-30 my-4 px-0 bg-primary p-3">
                            <p class="text-light" lh-lg">One Time</p>
                            <p class="h6 m-0">&#8377; 4790/- <span class="ps-1"></span></p>
                        </div>


                        <div class="col-md-4 col-4 ps-30 pe-0 my-4 px-0 bg-secondary p-3">
                            <p class="text-light" lh-lg">One Month</p>
                            <p class="h6"> &#8377; 499/-<span class="ps-1"></span></p>
                        </div>
                        <div class="col-md-4 col-4  ps-30 my-4 px-0 bg-secondary p-3 active">
                            <p class="text-light" lh-lg">Six Months</p>
                            <p class="h6 m-0">&#8377; 2994/-</p>
                        </div>
                        <div class="col-md-4 col-4 ps-30 my-4 px-0 bg-secondary p-3">
                            <p class="text-light" lh-lg">One Time</p>
                            <p class="h6 m-0">&#8377; 2695/- <span class="ps-1"></span></p>
                        </div>


                        <div class="col-md-4 col-4 ps-30 pe-0 my-4 px-0 bg-success p-3">
                            <p class="text-light" lh-lg">One Month</p>
                            <p class="h6"> &#8377; 499/-<span class="ps-1"></span></p>
                        </div>
                        <div class="col-md-4 col-4  ps-30 my-4 px-0 bg-success p-3 active">
                            <p class="text-light" lh-lg">Three Months</p>
                            <p class="h6 m-0">&#8377; 1497/-</p>
                        </div>
                        <div class="col-md-4 col-4 ps-30 my-4 px-0 bg-success p-3 ">
                            <p class="text-light" lh-lg">One Time</p>
                            <p class="h6 m-0">&#8377; 1422/- <span class="ps-1"></span></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-5 p-lg-5 ps-lg-4">
                <div class="row m-0">
                    <div class="col-12 px-4 shadow-lg">
                        <div class="d-flex align-items-end mt-4 mb-2">
                            <p class="fw-bold">Payment detail</p>
                            <P class="ps-3 textmuted"></P>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Fees</p>
                            <form action="#" class="fs-14 fw-bold">
                                <select name="cars" id="cars" class="fs-14 fw-bold text-end change"
                                    onchange="totalPrice(this.value)"
                                    style="border: none; background-color: transparent;">
                                    <option value="Monthly" id="Monthly" selected>Monthly</option>
                                    <option value="Yearly" id="Yearly">Yearly</option>
                                    <option value="Half-Yearly" id="Half-Yearly">Half-Yearly</option>
                                    <option value="Quarterly">Quarterly</option>
                                </select>
                            </form>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Subtotal</p>
                            <p class="fs-14 fw-bold" id="actualPrice"> &#8377; 499 </p>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Tax</p>
                            <p class="fs-14 fw-bold">Free</p>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Discount</p>
                            <p class="fs-14 fw-bold" id="discount"><span class="px-1"></span>0</p>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <p class="textmuted fw-bold">Total</p>
                            <div class="d-flex align-text-top ">
                                <span class="mt-1 pe-1 fs-14"></span>
                                <span class="h4"><span class="px-1">&#8377;</span><span id="change">499</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-0 my-lg-5">
                        <div class="row m-0 shadow-lg ">
                            <div class="col-12 px-4 my-4">
                                <p class="fw-bold">Student detail</p>
                            </div>
                            <div class="col-12 px-4">
                                <div class="d-flex  mb-4">
                                    <span class="">
                                        <p class="text-muted">Enter Student Name</p>
                                        <input class="form-control" id="name" type="text" value="" placeholder="Enter Name Here"
                                            required>
                                    </span>
                                    <div class=" w-100 d-flex flex-column align-items-end">
                                        <p class="text-muted">Class</p>
                                        <input class="form-control2" name="className" id="class" type="text" value="" placeholder="10th" required>
                                    </div>
                                </div>
                                <div class="d-flex mb-5">
                                    <span class="me-5">
                                        <p class="text-muted">Subject</p>
                                        <input class="form-control" name="subjectName" id="subject" type="text" value=""
                                            placeholder="Enter Subject Here" required>
                                    </span>
                                    <div class="w-100 d-flex flex-column align-items-end">
                                        <p class="text-muted">Age</p>
                                        <input class="form-control3" name="age" type="text" value="" placeholder="XXX" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="col-12  mb-4 p-0">
                                <div class="btn btn-primary" onclick="pay_now()">Proceed to Pay<span class="fas fa-arrow-right ps-2"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        function totalPrice(val) {
            var x = document.getElementById("Monthly").innerHTML;
            var y = document.getElementById("Yearly").innerHTML;
            var z = document.getElementById("Half-Yearly").innerHTML;
            console.log(x);

            if (val == x) {
                document.getElementById("actualPrice").innerHTML =  "499";
                document.getElementById("change").innerHTML =  "499";
                document.getElementById("discount").innerHTML =  "0";


            } else if (val == y) {
                document.getElementById("actualPrice").innerHTML = "5988";
                document.getElementById("change").innerHTML = "4790";
                document.getElementById("discount").innerHTML =  "1198";



            } else if (val == z) {
                document.getElementById("actualPrice").innerHTML =  "2994";
                document.getElementById("change").innerHTML =  "2695";
                document.getElementById("discount").innerHTML =  "299";



            } else {
                document.getElementById("actualPrice").innerHTML =  "1497";
                document.getElementById("change").innerHTML =  "1422";
                document.getElementById("discount").innerHTML =  "75";



            }






        }
    </script>
</body>

</html>