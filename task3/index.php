<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog home page</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css" >
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<header>

    <a href="index.php"><h1>myBlog</h1></a>
    <h3>because internet needs to know what i think</h3>

    <nav>
        <ul>
            <li><a href="blog.php">All Blog Items</a></li>
            <li><a href="blog.php?display=work">Work Items</a></li>
            <li><a href="blog.php?display=uni">University Items</a></li>
            <li><a href="blog.php?display=family">Family Items</a></li>
            <li><a href="add.php">Insert Items</a></li>
        </ul>

    </nav>
</header>
<main class="grid-container">
    <section class="grid-55" id="pageindex">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    </section>
    <aside class="grid-40">
        <img src="blog.png" id="blog" alt="BLOG">
    </aside>
</main>
<footer>
    <hr>
    <p>Designed by[Ami Jiyani[2016]]</p>
</footer>
</body>
</html>