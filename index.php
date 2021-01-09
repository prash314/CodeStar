<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>CodeStar</title>
</head>

<body>
    <!-- Navigation -->
    <?php require 'navbar.php' ?>

    <!-- Jumbotron -->
    <section class="jumbotron text-center" style="height: auto !important;">
        <div class="container"><img class="img-fluid logoimg1" src="https://pbs.twimg.com/profile_images/1267892245362913281/2rm_VB9z.png" alt="logo" style=" box-shadow: 0px 0px 20px 8px grey;display:flex; width: 18rem; height: 18rem; border-radius: 100%; margin: auto; margin-bottom: 2rem;">
            <h1 class="jumbotron-heading"><span id="typed"></span></h1>
            <p class="lead text-muted">Confused on which course to take? I have got you covered. Browse courses and find out the best course for you. Its free!
                CodeStar is an attempt to teach basics and those coding techniques to people in short time which takes ages to learn.</p>
        </div>
    </section>

    <!-- Card-Groups -->
    <div class="card-group">
        <div class="card mx-4 my-4 align-items-center p-2 rounded-3">
            <img src="https://i.ibb.co/QpfLYHS/logo-website-website-logo-png-transparent-background-background-15.png" class="card-img-top my-2 mx-0.5 img-fluid" alt="img1">
            <div class="card-body text-center">
                <h5 class="card-title">Web Development</h5>
                <p class="card-text">Learn WebD from the Best Tutor of Coding World!</p>
                <a href="https://codewithharry.com/videos/web-development-in-hindi-1" target="_blank" class="btn btn-primary gocwh">Learn WebD
                    »</a>
            </div>
        </div>
        <div class="card mx-4 my-4 align-items-center p-2 rounded-3">
            <img src="https://codewithharry.com/media/videoSeries/cpp.png" class="card-img-top my-2 mx-0.5" alt="img2">
            <div class="card-body text-center">
                <h5 class="card-title">C++</h5>
                <p class="card-text">Learn C++ from the Best Tutor of Coding World!</p>
                <a href="https://codewithharry.com/videos/cpp-tutorials-in-hindi-1" target="_blank" class="btn btn-primary gocwh">Learn
                    C++
                    »</a>
            </div>
        </div>
        <div class="card mx-4 my-4 align-items-center p-2 rounded-3">
            <img src="https://codewithharry.com/static/home/img/python.png" class="card-img-top my-2 mx-0.5 img-fluid" alt="3img3">
            <div class="card-body text-center">
                <h5 class="card-title">Python</h5>
                <p class="card-text">Learn Python from the Best Tutor of Coding World!</p>
                <a href="https://codewithharry.com/videos/python-tutorials-for-absolute-beginners-0" target="_blank" class="btn btn-primary gocwh">Learn Python »</a>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require 'footer.php' ?>

</body>

</html>