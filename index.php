<!--
/**
 * Created by IntelliJ IDEA.
 * User: ChikamaYan
 * Date: 10/13/2018
 * Time: 8:50 AM
 */
-->

<?php require_once('./includes/init.php') ?>

<!DOCTYPE html>
<html lang="en">

<?php require(INCLUDES_PATH . '/head-section.php') ?>

<body>

<?php require(INCLUDES_PATH . '/navbar.php') ?>

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