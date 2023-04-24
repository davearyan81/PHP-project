
// Example starter JavaScript for disabling form submissions if there are invalid fields
$(document).ready(function () {
    $(".rzp-button").click(function (e) {
        e.preventDefault();
        var firstname = $(".firstname").val();
        var lastname = $(".lastname").val();
        var username = $(".username").val();
        var email = $(".email").val();
        var address = $(".address").val();
        var address2 = $(".address2").val();
        var phone = $(".phone").val();
        var states = $(".states").val();
        var city = $(".city").val();
        var zip = $(".zip").val();
        if (!firstname) {
            // console.log("hiiii");

            // $("#firstname").html("")
            $("#firstnames").html("Valid first name is required.")
        }
        else {
            $("#firstnames").html("");

        }
        if (!lastname) {
            // console.log("hiiii");

            // $("#firstname").html("")
            $("#lastnames").html("Valid last name is required.")
        }
        else {
            $("#lastnames").html("");

        }
        if (!username) {
            // console.log("hiiii");

            // $("#firstname").html("")
            $("#usernames").html("Valid user name is required.")
        }
        else {
            $("#usernames").html("");

        }
        if (email == "") {
            // console.log("hiiii");

            // $("#firstname").html("")
            $("#emails").html("Valid email is required.")
        }
        else {
            $("#emails").html("");

        }
        if (address == "") {
            // console.log("hiiii");

            // $("#firstname").html("")
            $("#addresss").html("Valid address is required.")
        }
        else {
            $("#addresss").html("");

        }
        if (address2 == "") {
            // console.log("hiiii");

            // $("#firstname").html("")
            $("#addresss2").html("Valid address2 is required.")
        }
        else {
            $("#addresss2").html("");

        }
        if (phone == "") {
            // console.log("hiiii");

            // $("#firstname").html("")
            $("#phones").html("Valid phone is required.")
        }
        else {
            $("#phones").html("");

        }
        if (states == "") {
            // console.log("hiiii");

            // $("#firstname").html("")
            $("#statess").html("Valid state is required.")
        }
        else {
            $("#statess").html("");

        }
        if (city == "") {
            // console.log("hiiii");

            // $("#firstname").html("")
            $("#citys").html("Valid city is required.")
        }
        else {
            $("#citys").html("");

        }
        if (zip == "") {
            // console.log("hiiii");

            // $("#firstname").html("")
            $("#zips").html("Valid zip is required.")
        }
        else {
            $("#zips").html("");

        }
        if (firstname != '' && lastname != "" && username != "" && email != "" && address != "" && address2 != "" && states != "" && city != "" && zip != "") {
            var data = {
                'orderid':$("#orderid").val(),
                'firstname': firstname,
                'lastname':lastname,
                'username': username,
                'email': email,
                'address': address,
                'address2': address2,
                'phone': phone,
                'state': states,
                'city': city,
                'zip': zip
            }
            $.ajax({
                type: "POST",
                url: "form.php",
                data: data,
                success: function (response) {
                    // console.log(response);
                    var price = document.getElementById("price").value;
                    // alert(price);
                    var options = {
                        "key": "rzp_test_F6dl5gPTJafIEl", // Enter the Key ID generated from the Dashboard
                        "amount": price * 100,
                        "currency": "INR",
                        "description": "Pooja.com   ",
                        "image": "https://s3.amazonaws.com/rzp-mobile/images/rzp.jpg",
                        "prefill":
                        {
                            "email": email,
                            "contact": "+91"+phone,
                        },
                        config: {
                            display: {
                                blocks: {
                                    utib: { //name for Axis block
                                        name: "Pay using Axis Bank",
                                        instruments: [
                                            {
                                                method: "card",
                                                issuers: ["UTIB"]
                                            },
                                            {
                                                method: "netbanking",
                                                banks: ["UTIB"]
                                            },
                                        ]
                                    },
                                    other: { //  name for other block
                                        name: "Other Payment modes",
                                        instruments: [
                                            {
                                                method: "card",
                                                issuers: ["ICIC"]
                                            },
                                            {
                                                method: 'netbanking',
                                            }
                                        ]
                                    }
                                },
                                hide: [
                                    {
                                        method: "upi"
                                    }
                                ],
                                sequence: ["block.utib", "block.other"],
                                preferences: {
                                    show_default_blocks: false // Should Checkout show its default blocks?
                                }
                            }
                        },
                        "handler": function (response) {
                            // alert(response.razorpay_payment_id);
                            $.ajax({
                                type: "POST",
                                url: "form.php",
                                data: {
                                    'payment_id':response.razorpay_payment_id,
                                    'orderid':$("#orderid").val(),
                                    'status':'success'
                                },
                                success: function (response) {
                                    if(response)
                                    {
                                        window.location.href="confirm_order.php";
                                        // console.log(response);
                                    }
                                    else
                                    {
                                        alert("Transcation failed");
                                    }
                                }
                            });
                        },
                        "modal": {
                            "ondismiss": function () {
                                if (confirm("Are you sure, you want to close the form?")) {
                                    txt = "You pressed OK!";
                                    console.log("Checkout form closed by the user");
                                } else {
                                    txt = "You pressed Cancel!";
                                    console.log("Complete the Payment")
                                }
                            }
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    document.getElementById('rzp-button1').onclick = function (e) {
                        rzp1.open();
                        e.preventDefault();
                    }
                }
            });

        }
    });
});
