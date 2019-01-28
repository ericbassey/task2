<?php
session_start();
if (!empty($_POST['name'])){
    $_SESSION['name'][] = $_POST['name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4 card">
                <img src="img/php.jpg" alt="">
                    <h1 class="text-center card-header text-primary">Todo App</h1>
                    <form action="#" method="POST" class="form-row">                
                    <div class="col-sm-10">
                    <input type="text" class="form-control " name="name" value="" aria-describedby="emailHelpId" placeholder="Enter your Task">
                    </div>
                    <button type="submit" class="btn btn-outline-primary col-sm-2  " btn-lg btn-block">submit</button>
                    </form>

                <table class="table card-body">
                        <tr>
                            <th>List</th>
                            <th></th>
                            <th></th>
                            <th>remove</th>      
                        </tr>
                        <?php  if (!empty($_SESSION['name'])):?>
                    <?php  foreach ($_SESSION['name'] as $key => $items):?>
                            
                            <tr>
                                <tbody>
                                <td>
                                    <?php echo $items ?> 
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                <a class="btn btn-outline-danger" href="remove.php?id=<?php echo $key + 1 ?> ">Remove</a>
                                </td>
                                </tbody>
                                 
                            </tr>
                        <?php endforeach ?>
                    <?php endif ?>
                </table>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>


    <!-- <bootsrap jquery> -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>