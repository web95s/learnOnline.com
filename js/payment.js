// firt request to server to create order
const paymentStart = () => {
    //   let amount =  document.querySelector('.sar').innerHTML;
    let amount = $('.sar').html();  // To get value using jQuery

    alert(amount);
    if (amount == "" || amount == "null") {
        alert("Enter the amount");
        return;

    }
}
// We will use ajax to send request to the server to create order jQuery ajax
$.ajax({
    url: './user/create_order',
    data: JSON.stringify({ amount: amount, info:'order_request'}),
    contentType: 'application/json',
    type: 'POST',
    dataType: 'json',
    success: function (respose) {
        //sucess
        console.log(respose);
    },
    error: function (error) {
        //failee
        console.log(error);
        alert("Something went wrong");

    }
})
