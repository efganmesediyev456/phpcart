<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Hello, world!</title>

    <title>Hello, world!</title>
    <style>
       td{
        vertical-align: middle!important;
        text-align: center;
       }
    </style>

</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <table class="table table-bordered table-striped table-hover my-5">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Count</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if(isset($_SESSION["cart"])) :?>
                        <?php foreach($_SESSION["cart"]["products"] as $pro): ?>
                        <tr>
                            <td><?=$pro->id?></td>
                            <td width="100" class="text-center" ><img src="core/img/<?=$pro->image?>" alt="" width="100"></td>
                            <td><?=substr($pro->name,0,10)."..."?></td>
                            <td width="200" class="text-center">
                                <a class="btn btn-success btn-sm"><i class="fas fa-plus text-white"></i></a>&nbsp;
                                <input style="width:60px;" class="text-center form-control form-control-sm d-inline" type="text" value="<?=$pro->count?>">&nbsp;
                                <a class="btn btn-danger btn-sm"><i class="fas fa-minus text-white"></i></a>&nbsp;
                            </td>
                            <td><?=$pro->price?></td>
                            <td><?=$pro->total?></td>

                        </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6">Cart hecne elave dilmeyib yeni bir mehsul elave temek ucun linke daxil olun <br>
                                    <a class="btn btn-success btn-sm" href="index.php"><i class="fas fa-store"></i></a>
                                </td>
                            </tr>

                        <?php endif; ?>
                       
                       
                    </tbody>


                    <tfoot>
                        <tr>
                        <?php if(isset($_SESSION["cart"])) :?>
                           <td colspan="3" class="text-right">
                                Count <span class="badge badge-pill badge-danger"><?=$_SESSION["cart"]["total_count"]?></span>
                           </td>
                           <td colspan="3" class="text-right">
                            Price <span class="badge badge-pill badge-danger"><?=$_SESSION["cart"]["total_price_all"]?>$</span>
                           </td>
                           <?php endif; ?>
                        </tr>
                    </tfoot>

                </table>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

   
</body>


</html>