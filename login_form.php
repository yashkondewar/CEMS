<?php
include_once 'classes/db1.php'; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>College Event Management</title>
    <style>
        span.error {
            color: red;
        }
    </style>
    <?php require 'utils/styles.php'; ?>
    <!--css links. file found in utils folder-->
</head>


<script>
    function onSubmit(token) {
        document.getElementById("demo-form").submit();
    }
</script>
<script src="script.js"></script>

<body>
    <?php require 'utils/header.php'; ?>
    <!--header content. file found in utils folder-->
    <div class="content">
        <!--body content holder-->
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <form method="POST">
                    <!--form-->
                    <!--username field-->
                    <label>UserName:</label><br>
                    <input type="text" name="name" class="form-control" required><br>
                    <label>Password</label><br>
                    <input type="password" name="password" class="form-control" required><br>

                    <label for="" style="color: white ">Enter Captcha</label>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" readonly id="capt">
                        </div>
                        <!-- <p>huhhhhh</p> -->
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="textinput">
                        </div>
                    </div>



                    <input type="submit" name="update" class="btn btn-default" type="submit" onclick="validcap()" name="login" class="btn btn-primary btn-block" value="login">

                    <h5 style="color: Black; padding-left: 10px; "> Refresh Captcha <img style="width: 20px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYwVrN3cDrOijoWaXnRk8Zkk3qo__W9-Otfg&usqp=CAU" onclick="cap()"></h5>


                    <!-- <button type="submit" name="update" class="btn btn-default">Login</button> -->
                </form>
            </div>
            <!--col md 6 div-->
        </div>
        <!--container div-->
    </div>
    <!--content div-->
    <?php require 'utils/footer.php'; ?>
    <!--footer content. file found in utils folder-->
</body>

<script type="text/javascript">
    function cap() {
        var alpha = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
            'U', 'V', 'W', 'X', 'Y', 'Z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e',
            'f', 'g', 'h', 'i',
            'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '!', '@', '#', '$',
            '%', '^', '&', '*', '+'
        ];
        var a = alpha[Math.floor(Math.random() * 71)];
        var b = alpha[Math.floor(Math.random() * 71)];
        var c = alpha[Math.floor(Math.random() * 71)];
        var d = alpha[Math.floor(Math.random() * 71)];
        var e = alpha[Math.floor(Math.random() * 71)];
        var f = alpha[Math.floor(Math.random() * 71)];

        var final = a + b + c + d + e + f;
        document.getElementById("capt").value = final;
    }

    function validcap() {
        var stg1 = document.getElementById('capt').value;
        var stg2 = document.getElementById('textinput').value;
        if (stg1 == stg2) {
            alert("Form is validated Succesfully");
            return true;
        } else {
            alert("Please enter a valid captcha");
            location.reload();
            history.go(-1)
            return false;
        }
    }
</script>



</html>
<?php
if (isset($_POST["update"])) {
    $myusername = $_POST['name'];
    $mypassword = $_POST['password'];
    if ($mypassword == 'admin' && $myusername == 'admin') {
        echo "<script>
    alert('Login Successfull');
    window.location.href='adminPage.php';
    </script>";
    } else {
        echo "<script>
    alert('Invalid credentials');
    window.location.href='login_form.php';
    </script>";
    }
}
?>