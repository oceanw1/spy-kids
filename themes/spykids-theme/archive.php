<?php
 get_header();
 ?>

    <style type="text/css">
        .dates{
            flex-basis: 0%;
            font-size: 30px;
            font-family: 'Times New Roman', Times, serif;
          }


          .normal{
            height: 2px;
            margin: 10px 0;
            background-color: rgb(223, 166, 97);
          }

          .pastnewstitle{
            font-size: 30px;
          }
          .pastnewsdesc{
            font-size: 20px;
          }
    </style>
    <div style="margin: 50px 120px;">
        <hr style="height: 5px; background-color: maroon;">
        <div>
            <h1 style="font-size: 40px;">News Archives</h1>
        </div>
        <div style="width: 1400px;">
          <div style="flex-basis: 70%; margin: 15px;">
            <div style="padding: 0; display:flex; width: 1200px;">
          <img style="margin-left:50px; margin: 25px;" src="./download.jpg" height="150px" width="150px">

          <div class="column pastnewstxt">
            <h2 class="pastnewstitle">Dead Poets Society</h2>
            <p class="pastnewsdesc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum impedit facere placeat fuga veritatis corruptiLorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <hr class="normal">
          </div>

        </div>

      </div>


    </div>
    
  </div>

<?php
get_footer();
?>