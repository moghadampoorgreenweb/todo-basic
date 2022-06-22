<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="<?php asset('css/style.css'); ?>" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="register-box">
        <h3 class="text-center">
            Register
        </h3>
        <hr>
        <form action="<?php echo BASE_URL ?>/user/register" method="post" class="p-1">
            <div>
                <label for="firstname" class="form-label">Firstnanme</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Firstnanme</span>
                    <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
            </div>
            <div>
                <label for="lastname" class="form-label">Lastname</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Lastname</span>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
            </div>
            <div>
                <label for="mobile" class="form-label">Mobile</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Mobile</span>
                    <input type="text" class="form-control" id="mobile" name="mobile">
                </div>
            </div>
            <div>
                <label for="email" class="form-label">Email</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Email</span>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div>
                <label for="password" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Password</span>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <button type="submit" name="register" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>