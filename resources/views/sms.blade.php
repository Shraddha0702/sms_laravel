<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send SMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color:#1c87c9;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
            <br><br><br>
                @if (session('result'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('result')}}</strong>
                    
                </div>

                @endif
                <br><br><br>
                <div class="card">
                    <div class="card-header d-flex justify-content-center align-item-center">
                        <div>
                            <h4>Send SMS</h4>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="/sms" method="post">
                            @csrf
                            <center>
                                <br>
                                <label for="number" class="form-label">Enter Number</label>
                                <input type="text" name="number" placeholder="Enter Number">

                                <br><br><br>
                                <label for="message" class="form-label">Enter Message</label>
                                <input type="text" name="message" placeholder="Enter Message">
                                <br><br><br>
                                <button type="submit" class="btn btn-primary">Send SMS</button>
                            </center>
                        </form>
</body>

</html>