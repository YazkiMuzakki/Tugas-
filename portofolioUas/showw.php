<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.1">
   
   

    </head>
    <body>
        <div class="header">
            <nav>
                <a href="#" class="logo">Protofolio</a>
                <div class="nav-links">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skill">Skill</a></li>
                        <li><a href="#portofolio">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                       
                    </ul>
                </div>
            </nav>
        </div>

        <section id="home">
            <div class="left-sidebar"></div>
            <div class="row">
                <div class="left-col">
                    <img src="img/foto.jpg">
                </div>
                <div class="right-col" >
                    
                    <h1>Hello, </h1>
                    <h1> I'm Yazki Muzakki</h1>
                    <p>This is my official portfolio website to showcase all about me and the projects i create 
                        </p>
                        <div class="social-icon">
                        
                            <div class="icon">
                                <img src="img/Linkedin.png">
                                <a href="">
                                <img src="img/link.png">
                                </a>
                            </div>
                            <div class="icon">
                                <img src="img/twitter.png">
                                <a href="">
                                <img src="img/link.png">
                                </a>
                            </div>
                            <div class="icon">
                                <img src="img/instagram.png">
                                <a href="">
                                <img src="img/link.png">
                                </a>
                            </div>
                        </div>
                        
                </div>
                
            </div>
        </section>

    <section id="about">
            <div class="row">
                <div class="right-sidebar"></div>
                <div class="about-col">
                    
                    <h1>About Me </h1>
                    <p>Saya meupakan mahasiswa semester 3 urusan Teknologi Rekayasa Multimedia dari Politeknik Negeri Media Kreativ saya pernah mengikuti organisasi senimedia dalam divisi editing, selain memiliki minat dengan
                    teknik editiing, saya juga memiliki minat dengan dunia Desain dan Fotografi. Mempunyai kemampuan mengoperasikan software adobe ilustrator, figma, Adobe Premeire pro dan juga kamera Slr. Dan telah menyelesaikan banyak project desain, editing dan memotret foto dengan kamera slr.
                    </p>          
                      
                </div> 
            </div>
    </section>
        
    <section id="skill">
     
     <div class="row">
                
                <div class="skill">
                    <h1>My Skill</h1></br></br>
                    <h3>Adobe Illustrator</h3>
                        <span class="bar"><span class=" adobe">75%</span></span>
                    <h3>Fotografi</h3>
                        <span class="bar"><span class=" desain">60%</span></span>
                    <h3>Figma</h3>
                        <span class="bar"><span class=" figma">70%</span></span></br>
                </div>
            </div>
    </section>  

    <section class="portofolio">
            
        <!-------------------Main Content------------------------------>

        <div id="portofolio" class="container main"></br></br>
			<h3>Portofolio</h3>
			<div class="img-box">
             <?php
        
            
                include "connection.php";

                $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
                mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
                $image_query = mysqli_query($result,"select img_name,img_path,img_kategori from image_table");
                while($rows = mysqli_fetch_array($image_query))
                {
                    $img_name = $rows['img_name'];
                    $img_src = $rows['img_path'];
                ?>
                
                <div class="img-block">
                <img src="<?php echo $img_src; ?>" alt="" title="<?php echo $img_name; ?>" class="img-responsive" />
                <p><strong><?php echo $img_name; ?></strong></p>
                </div>
                
            <?php
            }
        ?>
	    </div>
                
    </section>

    <section id="contact"class="contact">
        <div class="contact-form">
            <h1>Contact   <span>Us</span></h1>
            <p>Jika tertarik silahkan tinggakan pesan</p>
            <form id="contact-form" method="post" role="form">
              <label>First Name *</label>
              <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
              <label>SurName *</label>
              <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
              <label>E-mail *</label>
              <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
              <label>Phone *</label>
              <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
              <label>Message *</label>
              <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
               
              <input type="submit" name="ok" class="btn" value="Send message">

            </form>
            <?php 
            if(isset($_POST['ok'])){
                include_once 'function.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==false){
                    echo "<script>alert('Berhasil Terkirim. Makasih gess')</script>";
                }else{
                    echo "<script>alert('Something Went wrong!!')</script>";
                }
            }
            ?>
        </div>
        
       
       
    
    </section>

    <div class="footer">
            
            <ul class="list">
                <li>
                    <a href="#">Service</a>
                </li>
                <li>
                    <a href="#">Terms & Condition</a>
                </li>
            </ul>
            <p class="copyright" href="https://github.com/anmol420">
                Yazki Muzakki © 2022
            </p>
    </div>

    </body>
</html>


