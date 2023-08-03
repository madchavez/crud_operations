<?php
session_start();
session_unset();
//$_SESSION["login"] = [];
?>
<main>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <form action = "login_process.php" method="POST" style="background-color: #AFD3E2; text-align: center; height: 100%; width: 70%; margin: 0 auto;">
                <h1 style="background-color: #146C94; height: 100px;">
                <div>
                    <div  style="text-align: right; padding-bottom: 50px; padding-top:200px;">
                         <h2 class="text-center" style="font-family: Verdana; font-size: 60px; "><strong>USER LOGIN</strong></h2>
                    </div>
                    <!--        <div id="liveAlertPlaceholder"></div> -->

                    <div class="mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" style="font-family: Georgia; font-size: 14px;">User ID:</label>
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3 text-center">
                                <input  type="text" class="form-control form-control-sm" id="sUser" name="user" style="border-radius:10px;">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" style="font-family: Georgia; font-size: 14px;">Password:</label>
                        <div class="row">
                            <div class="col-sm-6 offset-sm-3 text-center">
                                <input  type="password" class="form-control form-control-sm" id="sPass" name="pass" style="border-radius:10px;">
                            </div>
                        </div>
                    </div>
                    <div class="align-items-center" style="padding-top: 10px;">
                        <input type="submit" name="submit" value="Submit" style="background-color: lightblue;border-radius:20px; border-color: lightblue; font-size:20px;">
                        <input type="reset" style="background-color: whitesmoke;border-radius:20px; border-color: whitesmoke; font-size: 20px;">
                        <?php  
                        // if(isset($_SESSION["login"]) && $_SESSION["login"] == 1){
                        //     header("location:updated_form.php");
                        //}
                        ?>
                    </div>
                </div>
            </div>
        </form>
        <script>

// function signInBtnFunc(input){
//     if (input.length == 0) {
//         document.getElementById("sUser").innerHTML = "";
//         return;
//     } else {
//         var xmlhttp = new XMLHttpRequest();
//         xmlhttp.onreadystatechange = function() {
//         //   if (this.readyState == 4 && this.status == 200) {
//         //   	let text = this.responseText;
//         //   	if(text == "true"){
//         //   		window.location.replace("/crud/crud_test/updated_form.php");
//         //   	}
//         // }
//     };
//     xmlhttp.open("GET", "login_process.php?process=1&user=" + document.getElementById("sUser").value + "&pass="+ document.getElementById("sPass").value, true);
//     xmlhttp.send();
// }
// }
        </script>

    </body>
    </html>
</main>
