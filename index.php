<?php 
include ("Calculator.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Online Calculator with OOP</title>
</head>

<body>
    <div class="container">

        <div class="mt-4">

            <h3 class="text-center text-danger">Online Calculator with OOP</h3>

            <form  method="post" class="form-inline">

                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td><input type="text" name="input_1" class="form-control" placeholder="First Number"></td>
                            <td> <select name="operator" id="operator" class="form-control">
                                    <option value="add">Addition</option>
                                    <option value="sub">Substraction</option>
                                    <option value="multi">Multification</option>
                                    <option value="div">Division</option>
                                </select>
                            </td>
                            <td><input type="text" name="input_2" class="form-control" placeholder="Second Number"></td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="submit" class="btn btn-primary">Calculate</button></td>
                        </tr>
                    </tbody>
                </table>

            </form>


            <?php 
            if(isset($_POST['submit'])){
                $cal = new Calculator();
                $cal->calculator("Result is: ");
            }
            
            ?>

        </div>





    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>

</html>