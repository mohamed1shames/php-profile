
<?php


$conn = mysqli_connect('localhost', 'root', '', 'contactt_db') or die('connection failed');

if(isset($_POST['sand'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'message sent already';
    }else{
        mysqli_query($conn, "INSERT INTO `contact_form`(name , email, number , message) VALUES('$name','$email','$number','$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="icomoon/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <title>MR. Mohamed Shames</title>
</head>
<body>

    
    <?php 
    
    if(isset($message)){
        foreach($message as $message){
            echo '
         <div class="message" data-aos="zoom-out">
            <span>'. $message .'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
            ';
        }
    }
    
    
    ?>
 <header class="header">

    <div id="mnue-bar" class="icon-menu"></div>

     <a href="#home" class="logo">protfolio</a>

     <nav class="navbar">
         <a href="#home" class="active">home</a>
         <a href="#about">about</a>
         <a href="#services">services</a>
         <a href="#contact">contact</a>
     </nav>
     <div class="follow">
         <a href="https://www.facebook.com/profile.php?id=100071036928407" class="icon-facebook"></a>
         <a href="#" class="icon-twitter"></a>
         <a href="#" class="icon-instagram"></a>
         <a href="#" class="icon-github"></a>
     </div>
 </header>


    <section class="home" id="home">

    <div class="image" data-aos="fade-right">
        <img src="images/mohamed.jpg" alt="">
    </div>
    <div class="contact">
        <h3 data-aos="fade-up" >hi, i'm mohamed shames</h3>
        <span data-aos="fade-up">web designer & developer</span>
        <p data-aos="fade-up"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus nobis voluptate a doloribus consequatur nulla iste id, facilis optio eveniet.</p>
        <a data-aos="fade-up" href="#about" class="btn">about me</a>
    </div>
    </section>

    <section class="about" id="about">

    <h1 class="heading" data-aos="zoom-on"><span>biography</span></h1>
    <div class="boigraphy">

    <p data-aos="fade-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti est ipsa veritatis iure alias eaque consequuntur ipsum commodi tenetur iusto.</p>

    <div class="boi">
        <h3 data-aos="zoom-on"> <span>name : </span> mohamed shames </h3>
        <h3 data-aos="zoom-on"> <span>email : </span> mohamedshames@gmail.com </h3>
        <h3 data-aos="zoom-on"> <span>age : </span> 21 years </h3>
        <h3 data-aos="zoom-on"> <span>address : </span> nasr city </h3>
        <h3 data-aos="zoom-on"> <span>phone : </span> +201061242044 </h3>
        <h3 data-aos="zoom-on"> <span>expertise : </span> +1 year of expertise </h3>
    </div>
    <a href="#" class="btn" data-aos="fade-right">download CV</a>
    </div>
    <div class="skills">
    <h1 class="heading" data-aos="zoom-on"><span>skills</span></h1>
    <div class="progress">
        <div class="bar" data-aos="fade-right"><h3><span>HTML</span><span> 93%</span></h3></div>
        <div class="bar" data-aos="fade-left"><h3><span>CSS</span><span> 75%</span></h3></div>
        <div class="bar" data-aos="fade-right"><h3><span>SASS </span><span> 77%</span></h3></div>
        <div class="bar" data-aos="fade-left"><h3><span>JavaScript</span><span> 66%</span></h3></div>
        <div class="bar" data-aos="fade-right"><h3><span>PHP</span><span> 60%</span></h3></div>
        <div class="bar" data-aos="fade-left"><h3><span>MYSQL</span><span> 87%</span></h3></div>
    </div>
    </div>

    <div class="edu-exp">
    <h1 class="heading" data-aos="fade-right"><span>education & experience</span></h1>
    <div class="row">
        <div class="box-container">
            <h3 class="title">education</h3>
            <div class="box" data-aos="fade-left">
                <span> (2021 - 2022) </span>
                <h3>web designer</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex iure deserunt facilis sapiente distinctio 
                    voluptatem consequatur tenetur, pariatur deleniti, dicta reprehenderit quo quaerat facere odio beatae? Excepturi
                     libero odit delectus!</p>
            </div>
            <div class="box" data-aos="fade-right">
                <span> (2021 - 2022) </span>
                <h3>web developer</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex iure deserunt facilis sapiente distinctio 
                    voluptatem consequatur tenetur, pariatur deleniti, dicta reprehenderit quo quaerat facere odio beatae? Excepturi
                     libero odit delectus!</p>
            </div>
        </div>
        <div class="box-container">
            <h3 class="title">experience</h3>
            <div class="box" data-aos="fade-right">
                <span> (2021 - 2022) </span>
                <h3>front-end developer</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex iure deserunt facilis sapiente distinctio 
                    voluptatem consequatur tenetur, pariatur deleniti, dicta reprehenderit quo quaerat facere odio beatae? Excepturi
                     libero odit delectus!</p>
            </div>
            <div class="box" data-aos="fade-left">
                <span> (2021 - 2022) </span>
                <h3>back-end developer</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex iure deserunt facilis sapiente distinctio 
                    voluptatem consequatur tenetur, pariatur deleniti, dicta reprehenderit quo quaerat facere odio beatae? Excepturi
                     libero odit delectus!</p>
            </div>
        </div>
    </div>
    </div>

    </section>

    <section class="services" id="services">

    <h1 class="heading" data-aos="fade-right"><span>services</span></h1>

    <div class="box-container">
        <div class="box" data-aos="zoom-on">
            <i class="fas fa-code"></i>
            <h3>web development</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Quidem ullam assumenda fugit ratione asperiores quis hic ipsum quo et aliquid.
            </p>
        </div>
        <div class="box" data-aos="fade-up">
            <i class="fab fa-bootstrap"></i>
            <h3>bootstrap</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Quidem ullam assumenda fugit ratione asperiores quis hic ipsum quo et aliquid.
            </p>
        </div>
        <div class="box" data-aos="zoom-on">
            <i class="fas fa-chart-line"></i>
            <h3>seo marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Quidem ullam assumenda fugit ratione asperiores quis hic ipsum quo et aliquid.
            </p>
        </div>
        <div class="box" data-aos="fade-up">
            <i class="fas fa-bullhorn"></i>
            <h3>web development</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Quidem ullam assumenda fugit ratione asperiores quis hic ipsum quo et aliquid.
            </p>
        </div>
    </div>
    </section>




    <section class="contact"  data-aos="fade-right" id="contact">

    <h1 class="heading" data-aos="fade-right"><span>contact</span></h1>

    <form action="" method="post">
        <div class="flex">
            <input type="text" name="name" placeholder="enter your name" class="box"  data-aos="zoom-in" required>
            <input type="email" name="email" placeholder="enter your email" class="box"  data-aos="fade-right" required>
        </div>
        <input type="number" min="0" name="number" placeholder="enter your number" class="box"  data-aos="fade-right" required>
        <textarea name="message" class="box"  data-aos="fade-right" placeholder="enter your message" cols="30" rows="10"></textarea>
        <input type="submit" value="sand message" class="btn"  data-aos="fade-right" name="sand">
    </form>

    <div class="box-container">
        <div class="box"  data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>+201061242066</p>
        </div>
        <div class="box"  data-aos="fade-right">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>mohamedshames222@gmail.com</p>
        </div>
        <div class="box"  data-aos="fade-right">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>cairo , nasr city</p>
        </div>
    </div>

    </section>
 

    <div class="credit"> &copy; Copyright @ <?php echo date('Y'); ?> by <span>mr. mohamed shames</span> </div>






<script src="scrpit.js.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>

    AOS.init({
        duration:800,
        delay:300
    });
</script>
</body>
</html>