<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | CodeStar</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>

<body>
    <!-- Navigation -->
    <?php require 'navbar.php' ?>

    <!-- Jumbotron -->
    <div class="m-2 jumbotron text-center">
        <h1 class="jumbotron-heading mb-5"><u>Contact:</u></h1>
        <h3>Still Thinking What to write here...!</h3>
        <p class="lead text-muted">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit amet qui dolore corporis odit cumque. Magni adipisci perferendis quod dolorem eos? Iure exercitationem a et earum cum itaque quasi? Vel ab deserunt tempora, dignissimos ratione alias veniam quisquam itaque incidunt, assumenda dolorum temporibus voluptatibus doloribus dolore obcaecati mollitia asperiores! Reprehenderit dolorum nam provident explicabo, omnis incidunt, eos vel dolore mollitia perspiciatis quam quas totam. Impedit eius aliquid, facere voluptates provident reiciendis quas fugit, soluta voluptas ea eum architecto! Assumenda odit nulla provident, at doloremque maxime esse pariatur dolores fugit nemo aut voluptatibus vero placeat necessitatibus, laudantium quae reprehenderit quis alias obcaecati eaque ratione ex neque atque? Fugiat harum doloribus modi tempora repudiandae fugit qui, aut a nemo. Assumenda quas minus voluptatum dicta at nulla vitae, illo dolores non ab molestiae esse commodi quidem maiores cupiditate reprehenderit, fuga doloribus voluptas. Modi adipisci beatae incidunt provident, reprehenderit blanditiis optio accusamus ipsa perspiciatis, culpa saepe sequi corporis at? Ratione voluptatum vero quisquam ullam earum dicta cum nisi qui? Ipsa facilis iure rem nesciunt aliquam distinctio, atque veniam reiciendis nobis excepturi! Eaque voluptates totam voluptas provident perspiciatis fugit sequi rerum! In qui at velit, rem explicabo ipsam earum pariatur id aliquam impedit aut, vel neque quia eveniet expedita animi dolore! Assumenda delectus hic dolorem corrupti qui voluptatem, iure enim tempore tenetur cupiditate praesentium animi aperiam dicta eligendi repellendus libero distinctio omnis, officiis rerum mollitia? Asperiores, ipsam. Dicta tenetur est ab, laudantium quibusdam molestias quidem inventore placeat iste repellat porro deserunt cupiditate! Sapiente, animi. Quae quaerat quibusdam hic voluptates iusto omnis, ab aliquid modi impedit sint aspernatur veniam dolore est quisquam id obcaecati molestiae, expedita labore explicabo, blanditiis inventore. A accusantium, minus ullam, nobis accusamus amet laborum necessitatibus cumque doloribus deleniti voluptates perspiciatis qui, provident officia corporis voluptatum soluta itaque? Rem temporibus officiis eveniet pariatur.
        </p>

        <!-- Card Groups -->
        <div class="container">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control mb-2" placeholder="Gmail" aria-label="Email" aria-describedby="basic-addon2">
                <span class="input-group-text mb-2" id="basic-addon2">@gmail.com</span>
                <div class="input-group">
                    <span class="input-group-text">Describe:</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="d-grid gap-2 ">
                    <button type="button" class="btn btn-primary m-2" id="sentbtn" onclick="sent()">Send!</button>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require 'footer.php' ?>

    </div>
</body>

</html>