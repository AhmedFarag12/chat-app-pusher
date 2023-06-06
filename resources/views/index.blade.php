<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Chat App</title>
</head>
<body>
        <h1 class="text-center">Chat App</h1>

        <div class="container m-8">
            <div class="row">
                <div class="col-xs-6">
                    <div class="card text-center">
                        <div class="card-body p-3">
                            <div  class="" id="messageOutPut"> </div>
                            <hr>
                            <form method="post" action="" id="chatForm">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="message" placeholder="Message...">
                                </div>
                                <button class="btn btn-primary" type="submit">Send</button>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>

        </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="./js/app.js"></script>
</body>
</html>