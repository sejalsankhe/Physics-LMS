<!DOCTYPE html>
<html lang="en">
<?php
    include("partials/head.php")
    
    ?>
<body>
 <?php
    include("partials/header.php");
    include("partials/loader.php");
    
    
    ?>
<section class="dashboard">
<button type="button" class="buton" data-toggle="modal" data-target="#exampleModal">
<i class="fas fa-home"></i>
</button>
<h1 class="herotext">10<sup>th</sup> ICSE Resources</h1>
<div class="container">
    <div class="row">
        <div class="col-lg">
        <a href="chapterselect.php?s=cv" class="link-cat"> 
            <div class="card">
        
                <div class="imgbox">

                    <!--extractig image naed gfg.jpg from images folder-->
                    <h1 class="icon-cat"><i class="fas fa-video"></i></h1>
                    <h2 class="name-cat">Concept Videos</h2>

                </div>

                <div class="content">

                    <!--heading of the card-->
                    

                    <!--content of the card-->
                        
                        <p>
                        Point to point explanation of every topics in creative and engaging way. This encourages students to understand the concepts better and think deeply.
                    </p>

                </div>
            </div>
        </a>

        </div>
        <div class="col-lg">
        <a href="chapterselect.php?s=tq" class="link-cat"> 
            <div class="card">
        
                <div class="imgbox">

                    <!--extractig image naed gfg.jpg from images folder-->
                    <h1 class="icon-cat"><i class="fas fa-book"></i></h1>
                    <h2 class="name-cat">Textual Questions</h2>

                </div>

                <div class="content">

                    <!--heading of the card-->
                    

                    <!--content of the card-->
                        
                        <p>
                        Textbook questions solved with keeping in mind necessary  keywords and key statements from prominent publishers.
                    </p>

                </div>
            </div>
        </a>
       
        </div>
        <div class="col-lg">
         <a href="chapterselect.php?s=qb" class="link-cat"> 
            <div class="card">
        
                <div class="imgbox">

                    <!--extractig image naed gfg.jpg from images folder-->
                    <h1 class="icon-cat"><i class="fas fa-university"></i></h1>
                    <h2 class="name-cat">Question Bank</h2>

                </div>

                <div class="content">

                    <!--heading of the card-->


                    <!--content of the card-->
                        
                        <p>
                        5000+ Extra questions apart from textual questions taken from each and every line of the textbook filtered section wise. What else they can ask!
                    </p>

                </div>
            </div>
        </a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg">
        <a href="chapterselect.php?s=ts" class="link-cat"> 
            <div class="card">
        
                <div class="imgbox">

                    <!--extractig image naed gfg.jpg from images folder-->
                    <img src="../assets/praticepaper.png" alt="exam" class="img-cat">
                    <h2 class="name-cat">Test Series</h2>


                </div>

                <div class="content">

                    <!--heading of the card-->
                    

                    <!--content of the card-->
                        
                        <p>
                        Our well design test series act as the best form of revision as when you solve practice tests over and over again, you keep revising the subjects and topics.
	It makes sure that you are well-versed with every important detail and problem.
                        
                    </p>

                </div>
            </div>
        </a>
        </div>
        <div class="col-lg">
        <a href="chapterselect.php?s=mcq" class="link-cat"> 
        <div class="card">
        
        <div class="imgbox">

            <!--extractig image naed gfg.jpg from images folder-->
            <img src="../assets/filemcq.png" alt="exam" class="img-cat">
                    <h2 class="name-cat">MCQ</h2>
            

        </div>

        <div class="content">

            <!--heading of the card-->
            

            <!--content of the card-->
                
                <p>
                1200+ Multiple Choice Questions which test students for their in depth knowledge of the subject.
                
            </p>

        </div>
    </div>
           
        </a>
        </div>
        <div class="col-lg">
        <a href="chapterselect.php?s=bq" class="link-cat"> 
        <div class="card">
        
        <div class="imgbox">

            <!--extractig image naed gfg.jpg from images folder-->
            <h1 class="icon-cat"><i class="fas fa-graduation-cap"></i></h1>
            <h2 class="name-cat">Board Questions</h2>   
        </div>

        <div class="content">

            <!--heading of the card-->


            <!--content of the card-->
                
                <p>
                Covers questions from boards exams of past 10 years to master them for Final Boards. This will make you familiar with the marking scheme and also the weightage of important topics in the exam.
            </p>

        </div>
    </div>
        </div>
       </a>
    </div>
   
</div>

</section>
<section class="foot">
<?php
    include("../partials/footer.php")
    
    ?>
    </section>


   <!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
    
</body>
</html>