<!-- CSS -->
<link rel="stylesheet" href="style.css">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3 py-2" style="position: sticky; top: 0; left: 0; z-index: 1000">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Social
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="https://github.com/prash314" target="_blank">Github</a></li>
                    <li><a class="dropdown-item" href="https://code.dcoder.tech/profile/prash314" target="_blank">Dcoder</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item">On Other Platforms Soon..!</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    More
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="blog.php">Blog</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="https://www.w3schools.com/">W3 Schools</a></li>
                    <li><a class="dropdown-item" href="https://codewithharry.com/videos/web-development-in-hindi-1">Web Development
                            Course</a>
                    </li>
                </ul>
            </li>
        </ul>
        <form class="d-flex" action="search.php" method="get">
            <input class="form-control mx-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit" bled>Search</button>
        </form>
    </div>
</nav>

<!-- Scripts Starts Here -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.9/typed.min.js" async defer></script>

<!-- Custom Scripts Starts Here -->

<!-- Typed Script -->
<script>
    window.onload = function() {
        var typed = new Typed('#typed', {
            strings: ["Welcome to CodeStar", "Let's learn Something new!", "Web development", "Data Science", "Machine Learning", "and other awesome programming concepts available here :) "],
            backSpeed: 15,
            smartBackspace: true,
            backDelay: 1200,
            startDelay: 1000,
            typeSpeed: 25,
            loop: true,
        });
    };
</script>

<!-- Toast -->
<script>
    $(document).ready(function() {
        $('.toast').toast('show');
    });
</script>

<!-- Btn Script -->
<script>
    function sent() {
        document.getElementById('sentbtn').innerHTML = "Sent!";
    }
</script>

<!-- Searching Script -->
<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>
<!-- Scripts Ends Here -->