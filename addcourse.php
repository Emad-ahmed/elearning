<?php

session_start();

?>

<!DOCTYPE html>
<html>

    <head>
        <link rel="shortcut icon" type="png" href="images/icon/favicon.png" />
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Comaptible" content="IE=edge" />
        <title>E-Learning</title>
        <meta name="desciption" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="css/footer.css" />
        <script type="text/javascript" src="script.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script>
        $(window).on("scroll", function() {
            if ($(window).scrollTop()) {
                $("nav").addClass("black");
            } else {
                $("nav").removeClass("black");
            }
        });
        </script>


        <style>
        header {
            height: 70vh;
        }

        .addcourse {
            text-align: center;
            width: 300px;
            margin: auto;

        }

        .addcourse a {
            background: #000;
            color: white;
            padding: 1rem 1rem 1rem 1rem;
        }
        </style>

    </head>


    <body>
        <!-- Navigation Bar -->
        <header id="header">
            <nav>
                <div>
                    <a href="index.php" class="elearn">E-Learning</a>
                </div>

                <?php
            if (isset($_SESSION['email'])) {
                echo '<a class="get-started" href="logout.php">Logout</a>';
            } else if (isset($_SESSION['admin'])) {
                echo '<a class="get-started" href="logout.php">Logout</a>';
            } else {
                echo '<a class="get-started" href="login.php">Login</a>';
            }
            ?>
                <img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu" />
            </nav>


            <div class="diffSection" id="contactus">
                <center>
                    <p style="font-size: 50px; margin-top:6rem; margin-bottom:3rem; color: black;">Add Course</p>
                </center>

                <div class="back-contact">
                    <div class="cc">
                        <form action="addcourceAction.php" method="POST" enctype="multipart/form-data">

                            <label>Topic <span class="imp">*</span></label><br />
                            <select class="form-select" name="topic" aria-label="Default select example">
                                <option selected>Python</option>
                                <option value="C++">C++</option>
                                <option value="C">C</option>
                                <option value="Java">Java</option>
                            </select>
                            <label>Title <span class="imp">*</span></label><br />
                            <input type="text" name="title" style="width: 100%" id="title" required="required" /><br />
                            <label>Description</label><br />
                            <textarea name="description"></textarea><br />
                            <label>Video Link <span class="imp">*</span></label><br />
                            <input type="text" name="video_link" style="width: 100%" id="video_link"
                                required="required" /><br />

                            <label>Image <span class="imp">*</span></label><br />
                            <input type="file" name="image" style="width: 100%" id="image" required="required" /><br />
                            <button type="submit" id="csubmit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
                crossorigin="anonymous">
            </script>

    </body>

</html>