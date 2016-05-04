<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog home page</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css" >
    <link href='https://fonts.googleapis.com/css?family=Amiri:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<header>

    <a href="index.php"><h1>myBlog</h1></a>
    <h3>because internet needs to know what i think</h3>

    <nav>
        <ul>
            <li><a href="blog.html">All Blog Items</a></li>
            <li><a href="blog.html">Work Items</a></li>
            <li><a href="blog.html">University Items</a></li>
            <li><a href="blog.html">Family Items</a></li>
            <li><a href="add.html">Insert Items</a></li>
        </ul>

    </nav>
</header>
<main class="grid-container">
    <section class="grid-99" id="addpage">

        <br>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // execute if requested using HTTP GET Method
            ?>
            <form action="<? echo $_SERVER['PHP_SELF'];?>" method="post">
                <br>
                <legend>Blog Entry...</legend>
                <label >Entry Title : </label><input type="text" name="title" size="45" REQUIRED> <br><br>
                <label>Entry Summary : </label><textarea name="summary" cols="45" rows="5" required></textarea><br>
                <label>Bug Category : </label>
                <select name="category" required>
                    <option value="">select category</option>
                    <option value="Work">Work</option>
                    <option value="University">University</option>
                    <option value="Family">Family</option>
                </select>
                <br><br>
                <label >Submited By : </label><input type="text" name="person" size="45"> <br><br>
                <p><input type="submit" value="Submit" id="submitbutton"></p>
            </form>
            <?
        }
        elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // execute if requested using HTTP POST Method
            include("connection.php");

            $title = $_POST["title"];
            $summary = $_POST["summary"];
            $category=$_POST["category"];
            $submitter=$_POST["person"];

            $sql = "INSERT INTO blogView (entryTitle, entrySummary, category,submitter) VALUES ('$title',' $summary', '$category', '$submitter')";
            if (mysqli_query($db, $sql)) {
            }
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($db);
            }
            header("location:blog.php");
        }
        else {
            header("location:index.php");
        }
        ?>



    </section>
</main>
<footer>
    <hr>
    <p>Designed by[Ami Jiyani[2016]]</p>
</footer>
</body>
</html>