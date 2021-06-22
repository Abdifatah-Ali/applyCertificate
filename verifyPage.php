<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="error"></div>
    <div class="success"></div>
    <form id="frm-mobile-verification">
        <div class="form-row">
            <label>OTP is sent to Your Mobile Number</label>
        </div>

        <div class="form-row">
            <input type="number" id="mobileOtp" class="form-input" placeholder="Enter the OTP">
        </div>

        <div class="row">
            <!-- <input id="verify" type="button" class="btnVerify" value="Verify" onClick="verifyOTP();"> -->
            <button type="submit" class="btnVerify" value="Verify" onClick="verifyOTP();">Verify</button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="main.js"></script>

    <script>
    function verifyOTP() {
        //   $(".error").html("").hide();
        //   $(".success").html("").hide();
        var otp = $("#mobileOtp").val();
        var input = {
            otp: otp,
            action: "verify_otp",
        };
        if (otp.length == 6 && otp != null) {
            $.ajax({
                url: "controller.php",
                type: "POST",
                dataType: "JSON",
                data: input,
                success: function(response) {
                    // swal("success!", response, "success");
                    let status = response["status"];
                    let resultData = response.data;
                    if (status) {
                        // console.log(resultData);
                        swal("Good job!", resultData, "success");
                        window.location.href = "profile/Profile.php";
                    } else {
                        swal("info!", resultData, "info");
                        // console.log(response);
                    }
                },
                error: function(response) {
                    alert(response);

                },
            });
        } else {
            swal("error!", "You have entered wrong OTP!", "error");

            // $(".error").html("You have entered wrong OTP.");
            // $(".error").show();
        }
    }
    </script>
</body>

</html>