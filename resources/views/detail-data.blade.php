<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    <center>
        <h3>Data User</h3>
    </center>

    <br />
    <br />

    <div class="d-flex align-items-center justify-content-center">
        <div class="card" style="width: 30%;">
            <div class="card-body d-flex flex-column align-items-center justify-content-center" style="">
                <div class="border d-flex flex-column align-items-center justify-content-center">
                    <img src="{{ asset('storage/foto/'.$data->foto_path) }}" alt="" style="width: 50%; height: 50%;">
                </div>
        
                <div class="border d-flex" style="width: 100%; height: 100%;">
                    <div class="border" style="width: 100%; height: 100%; text-align: center;">
                        First Name
                    </div>
                    <div class="border" style="width: 100%; height: 100%; text-align: center;">
                        {{ $data->fname }}
                    </div>
                </div>
                
                <div class="border d-flex" style="width: 100%; height: 100%;">
                    <div class="border" style="width: 100%; height: 100%; text-align: center;">
                        Last Name
                    </div>
                    <div class="border" style="width: 100%; height: 100%; text-align: center;">
                        {{ $data->lname }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>