<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <meta name="description" content="Walter's Personal Website">
    <meta name="author" content="Walter Wu">

    <title>Walter's Webpage</title>

    <!--Google Fonts?-->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Sofia' >
    <link rel="stylesheet" href="static/css/personal-web.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Walter's Personal Website</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavBar">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#">Posts</a></li>
                <li><a href="#">About</a></li>
                <!--<li><a href="#">Page 3</a></li>-->
            </ul>
            <!--<ul class="nav navbar-nav navbar-center">-->
            <!--<li><a href="#">center 1</a></li>-->
            <!--<li><a href="#">center 2</a></li>-->
            <!--<li><a href="#">center 3</a></li>-->
            <!--</ul>-->
        </div>
    </div>
</nav>

<header>
    <div class="container-fluid">
        <div class="jumbotron">
            <!--need to be centered -->
            <div class="row">
                <div class="text-center">
                    <!--mx-auto only for div with fixed width-->
                    <p>Hi there! Welcome to my website, here I sometimes post my works and projects,<br> talk about
                        myself,as well as try out all the cool techniques I learnt from other websites.</p>
                </div>
            </div>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <h1>This is a test</h1>
        <code> this is a code </code>
    </div>
</main>

<footer class="page-footer">
        <p class="">Walter Wu &copy; <?php echo date('Y'); ?></p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>