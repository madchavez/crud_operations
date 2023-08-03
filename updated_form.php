<main>
    <!doctype html>
    <html lang="en">
    <head>
    <?php
    session_start();
    if($_SESSION["login"] != 1){
        header("location:login.php");
    }
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form style="background-color: #AFD3E2;text-align: center; height: 100%; width: 70%; margin: 0 auto;">
            <div >
                <!-- <div  style="text-align: left;"> -->
                    <h1 style="background-color: #146C94; height: 100px;">
                        <div style="text-align:left;">
                            <?php $username = $_SESSION["user"];?>
                            <label style="color:#F6F1F1; font-size: 20px; padding-top: 5px; padding-left:10px; font-family: monospace;">SIGNED IN AS <?php echo $username;?></label>
                            <button id="logout" style="font-size: 15px; border: none; background: none; padding-left: 650px; font-family: Helvetica; color:#F6F1F1;"><a href="logout.php" style="color:whitesmoke;">Logout</a></button>

                        </div>
                    </h1>
                    <!--    <button type="button" id="darkBtn"style="background-image: url('xampp/darkmode.png'); background-repeat: no-repeat; background-size: 95%; background-size: 30px; height: 30px; width: 30px; background-color: transparent; border: 0px;"></button> -->
                    <h2 class="text-center" style="font-family: Verdana; font-size: 60px; padding-top: 10px;"><strong>CAR REGISTRATION</strong></h2>


                    <div id="liveAlertPlaceholder" style="text-align: center; visibility: visible; position: fixed;  left:517px ; width: 500px;" id="sAlert"></div>
                </div>
                <div class="mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" style="padding-top: 30px; font-family: Georgia; font-size: 14px;">Plate Number:</label>
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center">
                            <input  type="text" class="form-control form-control-sm" id="sPlate" style="border-radius:10px; background-color: #F6F1F1;">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" style="font-family: Georgia; font-size: 14px;">Brand:</label>
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center">
                            <input  type="text" class="form-control form-control-sm" id="sBrand" style="border-radius:10px; background-color: #F6F1F1;">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"style="font-family: Georgia; font-size: 14px;">Model:</label>
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center">
                            <input  type="text" class="form-control form-control-sm" id="sModel"style="border-radius:10px; background-color: #F6F1F1;" >
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"style="font-family: Georgia; font-size: 14px;">Year:</label>
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center">
                            <input  type="number" class="form-control form-control-sm" id="sYear"style="border-radius:10px; background-color: #F6F1F1;">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"style="font-family: Georgia; font-size: 14px;">Color:</label>
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center">
                            <input  type="text" class="form-control form-control-sm" id="sColor" style="border-radius:10px; background-color: #F6F1F1;">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"style="font-family: Georgia; font-size: 14px;">Transmission Type:</label>
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center">
                            <input  type="text" class="form-control form-control-sm" id="sTransmission"style="border-radius:10px; background-color: #F6F1F1;">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="col-sm-2 col-form-label col-form-label-sm"style="font-family: Georgia; font-size: 14px;">Employee ID:</label>
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center">
                            <input  type="number" class="form-control form-control-sm" id="sEmployee"style="border-radius:10px; background-color: #F6F1F1;">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="align-items-center" style="padding-top: 20px;">
                        <button type="button" id="searchBtn" onclick="searchBtnFunc('sPlate.value')" style="background-color: lightblue; border-radius: 20px; border-color: lightblue;">Search</button>

                        <button type="button" id="addBtn" onclick="addBtnFunc('sPlate.value')" style="background-color: lightgreen; border-radius: 20px; border-color: lightgreen;">Add</button>

                        <button type="button" id="updateBtn"data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: lightpink;border-radius:20px; border-color: lightpink;">Update</button>

                        <button type="button"  id="deleteBtn"data-bs-toggle="modal" data-bs-target="#exampleModal1" style="background-color: orangered;border-radius:20px; border-color: orangered;" >Delete</button>
                        <input type="reset" id='resetBtn' style="background-color: whitesmoke;border-radius:20px; border-color: whitesmoke;">

                        <!-- //UPDATE MODAL -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to update?</h5>
                                        <p id ="modalOutput"></p>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" style="background-color: lightpink; border-color: lightpink;border-radius: 20px;"data-bs-dismiss="modal" onclick="editBtnFunc('sPlate.value')">Update</button>
                                        <button type="button" style="background-color: black; border-color: black; color: white;border-radius: 20px;"data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- DELETE MODAL -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" style="background-color: orangered; border-color: orangered;border-radius: 20px;"data-bs-dismiss="modal" data-bs-dismiss="modal"onclick="deleteBtnFunc('sPlate.value')">Delete</button>
                                        <button type="button" style="background-color: black; border-color: black; color: white;border-radius: 20px;"data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script>
    function searchBtnFunc(plate_input){
        if (plate_input.length == 0) {
            document.getElementById("sPlate").value = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                let text = this.responseText;
                const textArray = text.split(",");

                document.getElementById("sPlate").value = textArray[0];
                document.getElementById("sBrand").value = textArray[1];
                document.getElementById("sModel").value = textArray[2];
                document.getElementById("sYear").value = textArray[3];
                document.getElementById("sColor").value = textArray[4];
                document.getElementById("sTransmission").value = textArray[5];
                document.getElementById("sEmployee").value = textArray[6];
                appendAlert(textArray[7], 'success');

                document.getElementById("sPlate").disabled = true;
                //document.getElementbyId("searchAlert").value = textArray[7];
            //document.getElementById("sEmployee").value = textArray[6];
                //document.querySelector('.changeSelected');
            }
        };
        xmlhttp.open("POST", "process.php?process=0" + " &plate=" + document.getElementById("sPlate").value + "&brand=" + document.getElementById("sBrand").value + "&model=" + document.getElementById("sModel").value + "&year=" + document.getElementById("sYear").value + "&color=" + document.getElementById("sColor").value + "&transmission=" + document.getElementById("sTransmission").value + "&employee=" + document.getElementById("sEmployee").value , true);
        xmlhttp.send();
    }
}

function editBtnFunc(plate_input){
    if (plate_input.length == 0) {
        document.getElementById("sPlate").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            let text = this.responseText;
            const textArray = text.split(",");

            document.getElementById("sPlate").value = textArray[0];
            document.getElementById("sBrand").value = textArray[1];
            document.getElementById("sModel").value = textArray[2];
            document.getElementById("sYear").value = textArray[3];
            document.getElementById("sColor").value = textArray[4];
            document.getElementById("sTransmission").value = textArray[5];
            document.getElementById("sEmployee").value = textArray[6];
            appendAlert(textArray[7], 'success');



            //document.getElementById("sLabel").value = textArray[6];
                //document.querySelector('.changeSelected');
        }
    };
    xmlhttp.open("POST", "process.php?process=2" + " &plate=" + document.getElementById("sPlate").value + "&brand=" + document.getElementById("sBrand").value + "&model=" + document.getElementById("sModel").value + "&year=" + document.getElementById("sYear").value + "&color=" + document.getElementById("sColor").value + "&transmission=" + document.getElementById("sTransmission").value + "&employee=" + document.getElementById("sEmployee").value, true);
    xmlhttp.send();
}
}
function addBtnFunc(plate_input){
    if (plate_input.length == 0) {
        document.getElementById("sPlate").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            let text = this.responseText;
            const textArray = text.split(",");
            //document.getElementById("sLabel").value = textArray[6];

            document.getElementById("sPlate").value = textArray[0];
            document.getElementById("sBrand").value = textArray[1];
            document.getElementById("sModel").value = textArray[2];
            document.getElementById("sYear").value = textArray[3];
            document.getElementById("sColor").value = textArray[4];
            document.getElementById("sTransmission").value = textArray[5];
            document.getElementById("sEmployee").value = textArray[6];
            appendAlert(textArray[7], 'success');

                // document.querySelector('.changeSelected');
        }
    };
    xmlhttp.open("POST", "process.php?process=1" + " &plate=" + document.getElementById("sPlate").value + "&brand=" + document.getElementById("sBrand").value + "&model=" + document.getElementById("sModel").value + "&year=" + document.getElementById("sYear").value + "&color=" + document.getElementById("sColor").value + "&transmission=" + document.getElementById("sTransmission").value + "&employee=" + document.getElementById("sEmployee").value, true);
    xmlhttp.send();
}
}
function deleteBtnFunc(plate_input){
    if (plate_input.length == 0) {
        document.getElementById("sPlate").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            let text = this.responseText;
            const textArray = text.split(",");

            //document.getElementById("sLabel").value = textArray[6];

            document.getElementById("sPlate").value = "";
            document.getElementById("sBrand").value = "";
            document.getElementById("sModel").value = "";
            document.getElementById("sYear").value = "";
            document.getElementById("sColor").value = "";
            document.getElementById("sTransmission").value = "";
            document.getElementById("sEmployee").value = "";
            appendAlert(textArray[0], 'success');
            document.getElementById("sPlate").disabled = false;
        }
    };
    xmlhttp.open("POST", "process.php?process=3" + " &plate=" + document.getElementById("sPlate").value + "&brand=" + document.getElementById("sBrand").value + "&model=" + document.getElementById("sModel").value + "&year=" + document.getElementById("sYear").value + "&color=" + document.getElementById("sColor").value + "&transmission=" + document.getElementById("sTransmission").value + "&employee=" + document.getElementById("sEmployee").value, true);
    xmlhttp.send();
}
}


// ALERTS
const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
const appendAlert = (message, type) => {
    const wrapper = document.createElement('div')
    wrapper.innerHTML = [
        `<div class="alert alert-${type} alert-dismissible" role="alert">`,
        `   <div>${message}</div>`,
        '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
        '</div>'
        ].join('')

    alertPlaceholder.append(wrapper)
}

// const searchTrigger = document.getElementById('searchBtn')
// const addTrigger = document.getElementById('addBtn')
const resetTrigger = document.getElementById('resetBtn');
if (resetTrigger) {
    resetTrigger.addEventListener('click', () => {
        document.getElementById("sPlate").disabled = false;
    })
}

// if (searchTrigger) {
//     searchTrigger.addEventListener('click', () => {
//         appendAlert('Plate Found!', 'success')
//     })
// }
// if (addTrigger) {
//     addTrigger.addEventListener('click', () => {
//         appendAlert('Plate Succesfully Added!', 'success')
//     })
// }
    //DISABLING FUNCTIONS
 // function disableField(){
 //    let get = document.getElementById("sPlate")
 //    get.disabled = true;
 // }
 // function enableField(){
 //    let get = document.getElementById("sPlate")
 //    get.disabled = false;
 // }
</script>

</body>
</html>
</main>