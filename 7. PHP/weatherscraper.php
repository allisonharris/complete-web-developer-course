<!doctype html>
<html>
<head>
    <title>Weather Scraper</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<style>

    html, body {
        height: 100%;
    }

    .container {
        background-image: url("beach.jpg");
        height: 100%;
        width: 100%;
        background-size: cover;
        background-position: center;
        padding-top: 150px;
    }

    .center {
        text-align: center;
    }

    p {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    button {
        margin-top: 40px;
    }



</style>
        
    
</head>
<body>

    <div class="container">

        <div class="row">

            <div class="col-md-6 col-md-6-offset-3 center">

                <h1 class="center">Weather Predictor</h1>

                <p class="lead center">Enter your city name to get a weather forecast.</p>

                <form>

                    <div class="form-group">

                        <input type="text" class="form-control" name="city" id="city" placeholder="Ex: London, Paris, San Francisco..."/>

                        <button class="btn btn-success btn-lg">Get My Weather</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body>
</html>


