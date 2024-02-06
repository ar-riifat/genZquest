<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>genZquest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .navbar .navbar-nav .nav-item a{
        padding: 15px;
    }
    .navbar .navbar-nav-but{
        padding: 5px;
    }
    .nev{
        padding-left: 300px;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
                <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="../index.php">genZquest</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" aria-current="page" href="#">Job List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" aria-current="page" href="../index.php">employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2 " aria-current="page" href="#">employer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2 " aria-current="page" href="#">Contact Us</a>
                    </li>


                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
                    </li>
                </ul> -->
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav nev me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;"> 
                    <li class="nav-item">
                        <a class="nav-link me-2" aria-current="page" href="../logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" aria-current="page" href="profile.php">Profile</a>
                    </li>
                </ul>
                    
            </div>   
            
        </div>
    </nav>
</body>

</html>



