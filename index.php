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
        .card {
            box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;
        }

        .card:hover {
           
            cursor: pointer;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
        }
        .card-body{
            vertical-align: middle!important;
        }
    </style>
</head>

<body>
    <?php include "navbar.php"; ?>
  
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <div class="row my-3">
                   


                    <?php foreach($products as $pro): ?>
                    <div class="col-md-4 my-3 ">
                        <div class="card">
                            <img class="card-img-top" src="core/img/<?=$pro->image?>" alt="Card image cap">
                            <div class="card-body text-center ">
                                <h5 class="card-title"  style="height: 50px; "><?=substr($pro->name,0,30)?></h5>
                                <hr>
                                <p class="card-text" style="height: 50px; "><?=substr($pro->name,0,30)?></p>
                                <a href="#" product_id="<?=$pro->id?>" class="btn btn-primary btn-block add_to_chart">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;  ?>



                    

                    
                   


                </div>
             

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $(".add_to_chart").on("click",function(){
                var id=$(this).attr("product_id");
                $.post("ajax.php",{id:id},function(e){
                   var data=JSON.parse(e);
                   $("#product_count").html(data.total_count)
                })
            })
        })
    </script>
</body>

</html>