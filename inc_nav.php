<?php 
    session_start();

    if (!isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
    }
?>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Y I E W Cenima</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="movie.php" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Movies
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="movie.php">Now Showing</a>
                    <a class="dropdown-item" href="movie.php">Comimg Soon</a>
                    <div class="dropdown-divider"></div>
                    <div class="form-inline dropdown-item">
                        <input type="text" name="movie_name" class="form-control" placeholder="Movies Name...">
                        <button type="button" class="btn btn-outline-primary">Search</button>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="promotion.php">Promotion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="news.php">News</a>
            </li>

            <li class="form-inline my-2 my-lg-0">
                <a class="nav-link" href="#"></a>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sign in 
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <form class="px-4 py-3">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email"
                                    placeholder="Username">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password"
                                    placeholder="Password">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="register.php" class="btn btn-outline-primary my-2 my-sm-0">Sign up</a>
                </li>
                <?php if (isset($_SESSION['name'])) : ?>
                <li class="nav-item">
                    <p class="btn btn-outline-primary my-2 my-sm-0"><?php echo $_SESSION['name'] ?></p>
                </li>
                <li class="nav-item">
                    <a href="index.php?logout='1'" class="btn btn-outline-primary my-2 my-sm-0">Logout</a>
                </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>