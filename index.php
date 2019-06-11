<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Face Detector with PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body, html{
            height:100%;
            color:white;
        }
        body{
            background:black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="background:white;margin:auto;padding:20px;margin-top:30px;">
                <div class="panel-heading">
                    <h1>Face Detection</h1><br>
                </div>
                <form action="image.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="image" accept="image/*" class="form-control">
                    <br/> 
                    <button class="btn btn-success btn-large" style="width:100%;">Detect Face</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>