<?php
get_header();

while(have_posts()) {
  the_post(); ?>



<div class="main-content">
    <!-- The about us sign -->
    <section>
        <h1 class="AboutUs">AMONG US</h1>
    </section>

    <!-- Text box... -->
    <!-- the yellow poo text! -->
    <div class="AboutTextBox">
        <h3>Letter from Mr.Athens</h3>
        <p>
Greetings one and all,
<br>
<br>
It is my great honor to introduce you to OUR YEAR--your one stop, student run platform that has been specially designed to link you to all things Binus Simprug.
<br>
<br>
A small, but hearty team of Binusians put in the hard work to make this happen.  Without their manifold efforts, steadfast determination, iron will, and general wherewithal, OUR YEAR might not have arrived.  Now, as of this moment, OUR YEAR has come.
<br>
<br>
But, you may be wondering, what, pray tell, is OUR YEAR???  Well, here is what it isn’t.  OUR YEAR is not a newspaper.  It is not a magazine.  It is not a yearbook.  So, what is it?  It is all of those things combined but the content comes from you, dear reader.   OUR YEAR provides the platform to unite everyone’s work across all of Simprug.  The point is to create a single location from which Binusians can find out anything about Binus.
<br>
<br>
 If you are a member of a club, you will post your club’s news and share access to your content on OUR YEAR. If you are involved in the Weekly Assembly or Program Assembly, your accomplishment will be documented in OUR YEAR!  If your grade level has an event it will appear in OUR YEAR.  
<br>
<br>
We don’t write the stories, we help you share them.  Does your club have social media in need of more followers?  OUR YEAR can help.  Want to share your Personal Project with more people?  Look no further than OUR YEAR.  Do you already have a website, YouTube channel, Instagram account or whathaveyou?  OUR YEAR will link to it. Want to gain some valuable experience helping to maintain and run this student-led, student run school resource?  Need a quality Service as Action or CAS project? Have ideas to make OUR YEAR better?  Join the OUR YEAR team.
<br>
<br>
In short, if it happened during our school year, it’s going to be shared in OUR YEAR.  
<br>
<br>
Sincerely,
<br>
Michael Athens
<br>
OUR YEAR Staff Supervisor


        </p>
    </div>

    <!-- the niggas who made the website -->
  

    <div class="container">
        <!-- box one -->
        <div class="box">
            <div class="img"></div>
            <div class= "overlay"></div>
            <div class= "overlay2"></div>
            <div class="text">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <h2>Raeya Rajiv Savur</h2>
            </div>
        </div>
        


         <!-- box two -->
        <div class="box">
            <div class="img2"></div>
            <div class= "overlay"></div>
            <div class= "overlay2"></div>
            <div class="text">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <h2>Ananya Thirumalai</h2>
            </div>
        </div>


         <!-- box three -->
        <div class="box">
            <div class="img3"></div>
            <div class= "overlay"></div>
            <div class= "overlay2"></div>
            <div class="text">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <h2>Adhara Maika Ryauli Silaban</h2>
            </div>
        </div>
    </div>


  
</body>
</html>

<?php }
  get_footer();
?>