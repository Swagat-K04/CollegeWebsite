<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page-IIIT Nagpur</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/iiitn-logo.png">
</head>
<body>
    <!-- header -->
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/Indian_Institute_of_Information_Technology,_Nagpur_Logo.svg"height="100px" alt="College logo"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="course.html">COURSE</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="faculty.html">FACULTIES</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Our Certificates & Online programs For 2023</h1>
    </section>

    <!-- blog -->
    <section class="blog-content">
        <div class="row">
            <div class="blog-left">
                <img src="images/certificate.jpg" alt="Certificates">
                <h2>Our Certificates & Online programs For 2023</h2>
                <p>Securing a promising future is a top priority for students, and one vital aspect of that journey is the placement opportunities provided by educational institutions. In this blog, we will delve into the placement scene at IIIT Nagpur, exploring the remarkable opportunities, industry collaborations, and student achievements that make it a preferred destination for aspiring professionals.</p><br>
                <p>IIIT Nagpur boasts strong ties with renowned companies and organizations, creating a conducive environment for placements. Collaborations with industry leaders ensure that students gain exposure to real-world challenges, industry practices, and emerging technologies. Regular guest lectures, workshops, and internships provide invaluable industry insights, helping students align their skills with industry requirements.</p><br>
                <p>The institute emphasizes the importance of practical experience through its robust internship programs. Students have the opportunity to intern with reputed companies, both nationally and internationally. These internships provide a platform to apply classroom knowledge, develop practical skills, and build a professional network. The hands-on experience gained during internships enhances students' employability and prepares them for the challenges of the corporate world.</p><br>
                <p>IIIT Nagpur offers a wide range of placement opportunities across domains such as software development, data analytics, cybersecurity, artificial intelligence, and more. Students have the flexibility to explore their interests and pursue careers in their preferred domains. The institute's curriculum is designed to equip students with the necessary technical and soft skills demanded by the industry, making them well-rounded professionals.</p>


                <div class="comment-box">
                    <h3>Leave a Comment</h3>
                    <form action="blog.php" method="post" class="comment-form">
                        <input type="text" name="name" placeholder="Enter Name">
                        <input type="email" name="email" placeholder="Enter Email">
                        <textarea rows="5" name="comment" placeholder="Your Comment"></textarea>
                        <button type="submit" name="formbtn" class="red-btn hero-btn">POST COMMENT</button>
                    </form>
                </div>
            </div>
            <div class="blog-right">
                <h3>Post Categories</h3>
                <div>
                    <span>Computer Science</span>
                    <span>21</span>
                </div>
                <div>
                    <span>Data Structure</span>
                    <span>13</span>
                </div>
                <div>
                    <span>Machine Learning</span>
                    <span>15</span>
                </div>
                <div>
                    <span>CSE-Gaming</span>
                    <span>7</span>
                </div>
                <div>
                    <span>Electronics</span>
                    <span>20</span>
                </div>
                <div>
                    <span>Intenet of Things</span>
                    <span>10</span>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <section class="footer">
        <div class="area" >
            <div class="context">
                <h3>About Us</h3>
                <p>Welcome to IIIT Nagpur, a premier institute dedicated to excellence in education and research. With a focus on cutting-edge technology and interdisciplinary learning, we strive to empower our students to become skilled professionals and innovative thinkers. <br> At IIIT Nagpur, we are committed to nurturing talent, fostering innovation, and producing leaders who will shape the future. Join us on this transformative journey of knowledge and discovery.</p>
                <div class="icons">
                    <a href="https://www.facebook.com/IIITNagpurOfficial/?locale=hi_IN" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/iiitn_official?lang=en" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/iiitnagpur/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/school/indian-institute-of-information-technology-nagpur/" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
                <p>copyright <i class="fa fa-copyright"></i> 2023</p>
            </div>
                <ul class="circles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                </ul>
        </div >
    </section>
    <?php
    if(isset($_POST["formbtn"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $comment = $_POST["comment"];

        if(empty($name) || empty($email) || empty($comment)){
            echo '<script type="text/JavaScript"> 
            alert("Field Empty!!!");
            </script>';
        }
        else{
            $sql = "INSERT INTO btable(name, email, comment)
                    VALUES ('$name', '$email', '$comment')";
            mysqli_query($conn, $sql);
            echo '<script type="text/JavaScript"> 
            alert("Your Blog is Posted!");
            </script>'
       ;
        }
    }
    mysqli_close($conn);
?>

<script>
    alert($message);
</script>

<!-- Javascript for toggle button -->
<script src="index.js"></script>

</body>
</html>