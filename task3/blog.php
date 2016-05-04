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
            <li><a href="blog.php">All Blog Items</a></li>
            <li><a href="blog.php?display=work">Work Items</a></li>
            <li><a href="blog.php?display=uni">University Items</a></li>
            <li><a href="blog.php?display=family">Family Items</a></li>
            <li><a href="add.php">Insert Items</a></li>
        </ul>

    </nav>
</header>
<main class="grid-container">
    <section class="grid-99" id="blogpage">
        <br>


        <?php
        include('connection.php');
        $display=$_GET["display"];
        if($display=="work")
        {
            $sql = "SELECT * FROM blogView WHERE category='Work'";
        }
        else if($display=="uni")
        {
            $sql = "SELECT * FROM blogView WHERE category='University'";
        }
        else if($display=="family")
        {
            $sql = "SELECT * FROM blogView WHERE category='Family'";
        }
        else
        {
            $sql = "SELECT * FROM blogView";
        }
        $result =mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo  $row["blogitemID"]. "<br> Entry Title : " . $row["entryTitle"]. "<br> Entry Summary : " . $row["entrySummary"].  "<br> Bug Category : " . $row["category"]."<br> Submited By : " . $row["submitter"]."<br><hr>";
            }
        } else {
            echo "0 results";
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