<!DOCTYPE html>
<html lang="zh-hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logo Site</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css').'?'.time()}}">
    
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark py-4 fixed-top">
        <a class="navbar-brand" href="#">Logo Site</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-1">
                    <a class="nav-link" href="#"><i class="fas fa-bookmark"></i> 願望清單</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-bag"></i> 購物車</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link" href="#"><i class="fas fa-bell"></i> 最新消息</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link" href="#"><i class="fas fa-user"></i> 會員專區</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('main')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>