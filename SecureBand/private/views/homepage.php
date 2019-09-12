
<?php $this->layout('standard_layout')?>
<body onload="showSlides()">
<img class="hoofder" src="https://assets.bigcartel.com/theme_images/34502008/t3.png?auto=format&fit=max&h=250&w=1300" alt="">
<p></p>
  <div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 6</div>
    <img class="hehexd" src="images/t1.gif">
    <div class="text">MOOH</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 6</div>
    <img src="images/t2.gif" style="width:100%">
    <div class="text">"can you down that bottle in 2 sec?"</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 6</div>
    <img src="images/t3.gif" style="width:100%">
    <div class="text">Did you know an egg cant break like this</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">4 / 6</div>
    <img src="images/t4.gif" style="width:100%">
    <div class="text">OVER 9000</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">5 / 6</div>
    <img src="images/t5.gif" style="width:100%">
    <div class="text">When ur going 140 on a highway</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">6 / 6</div>
    <img src="images/t6.gif" style="width:100%">
    <div class="text">CY@</div>
  </div>



  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
</div>
</div>
<div class="balkje">
</div>
<div class="achter">

      <h1 class="hoofdnieuws">News</h1>
      <div class="boxnews">
<div class="cya">
      <?php foreach ($news as $article): ?>
      <div class="grid9">
        <div class="achterg">
          <h3 class="hoofd3"><?php echo $article['title'];?></h3>
        <img class="een" src="images/<?php echo $article ['img']; ?>"  alt="hehexd">
        <p class="tekstxd"><?php echo $article['inhoud'];?></p>
        <p class="tekstxd"><?php echo $article['datum'];?></p>
      </div>
    </div>

<?php endforeach;  ?>
  </div>
</div>
</div>
</body>
