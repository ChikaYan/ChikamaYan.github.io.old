<!--
/**
 * Created by IntelliJ IDEA.
 * User: ChikamaYan
 * Date: 10/17/2018
 * Time: 8:01 AM
 */
-->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=<?php echo WEB_STATIC . '/index.php' ?>>Walter's Personal Website</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavBar">
            <ul class="nav navbar-nav navbar-right">

                <li id="index"><a href="<?php echo WEB_STATIC . '/index.php' ?>">Home</a></li>
                <li id="posts"><a href="<?php echo WEB_STATIC . '/posts.php' ?>">Posts</a></li>
                <li id="about"><a href="#">About</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
    var fileName = getFileName();
    fileName = fileName.substring(0, fileName.indexOf("."));
    document.getElementById(fileName).classList.add("active");

    function getFileName() {
        var url = document.location.href;
        url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
        url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
        url = url.substring(url.lastIndexOf("/") + 1, url.length);
        return url;
    }
</script>


