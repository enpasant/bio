<?php include './header.php'; 
?>

<main>
  <section id="about" class="section">
    <div id="text">
      <div id="container">
        <img src="./images/avatarhd.png" class="pfp" alt="Profile picture">
        <p>biography - enpasant</p>
      </div>    
      <h6>php testing version v0.1</h6>
      <h1>Hey there!</h1>
      <p>My name is Enpasant. I play <yellow>ULTRAKILL</yellow>, 
         <yellow>Chess</yellow>, <yellow>Deltarune</yellow>, 
         and I read <yellow>Oyasumi Punpun</yellow>.
      </p>
    </div>  
  </section>
  
  <section id="nav" class="section">
    <div id="text">
      <a href="./bio/am.php">About Me</a><br>
      <a href="./bio/a.php">Utilized Assets</a><br>
      <a href="./bio/kl.php">Knowledge</a><br>
      <a href="./bio/s.php">Social Media</a><br>  
      <a href="./bio/w.php">Work</a><br>  
    </div>
  </section>

  <button id="showImageButton">something</button>
  <img id="displayImage" src="./images/goatboi.gif" alt="Image placeholder" height="64px">
</main>

<script src="./scripts/smoothscroll.js"></script>
<script src="./scripts/displayimg.js"></script>

<?php include './footer.php'; ?>