<?php include 'header.php'; ?>
<header class="bg-primary text-white">
  <div class="slider-container">
    <div class="slider">
      <div class="slider__item">
        <img src="images/a.jpg" alt="">
      </div>
      <div class="slider__item">
        <img src="images/b.jpg" alt="">
      </div>
      <div class="slider__item">
        <img src="images/c.jpg" alt="">
      </div>
    </div>
    <div class="slider__switch slider__switch--prev" data-ikslider-dir="prev">
      <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.89 17.418c.27.272.27.71 0 .98s-.7.27-.968 0l-7.83-7.91c-.268-.27-.268-.706 0-.978l7.83-7.908c.268-.27.7-.27.97 0s.267.71 0 .98L6.75 10l7.14 7.418z"/></svg></span>
    </div>
    <div class="slider__switch slider__switch--next" data-ikslider-dir="next">
      <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.25 10L6.11 2.58c-.27-.27-.27-.707 0-.98.267-.27.7-.27.968 0l7.83 7.91c.268.27.268.708 0 .978l-7.83 7.908c-.268.27-.7.27-.97 0s-.267-.707 0-.98L13.25 10z"/></svg></span>
    </div>
  </div>
</header>

<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mx-auto">
        <h2>About Us</h2>
        <p class="lead">Airline Reservation System is an organization that provides theatre programming to incarcerated and court-involved young people. We are a mobile drama club, bringing our classes into juvenile detention centers, jails and community centers throughout the city. It started as a rehearsal process of a play at Crossroads Juvenile Center, which was presented as a staged reading for staff, fellow residents and family members. The success of this project blossomed into a consistent year-round program.  

Currently, Drama Club works with approximately 500 individual students between the ages of 10-21, developing theatre is offered at five different sites, across three boroughs: </p>
        <button type="button" class="btn btn-default"><a href="about.php">Read More</a></button>
      </div>
    </div>
  </div>
</section>

<section class="dance">
  <div class="container-fluid">
    <h2>Our Flight</h2>
    <div class="row">
      <div class="col-lg-4">
        <div class="box-frame">
          <img src="images/dance.jpg" class="img-fluid" />
          <b><h6 class="lead">Dance</h6></b>
          <p>Dance is a performing art form consisting of purposefully selected sequences of human movement. This movement has aesthetic and symbolic value, and is acknowledged as dance by performers and observers within a particular culture. Kathmandu</p>
        </div>
      </div>
       <div class="col-lg-4">
        <div class="box-frame">
          <img src="images/music.jpg" class="img-fluid" />
         <b> <h6 class="lead">Music</h6></b>
          <p>Music is an art form and cultural activity whose medium is sound organized in time. In general definitions of music will include common elements such as pitch, rhythm, dynamics, and the sonic qualities of timbre and texture. Different styles or types of </p>
        </div>
      </div>
         <div class="col-lg-4">
        <div class="box-frame">
          <img src="images/drama.jpg" class="img-fluid" />
          <b><h6 class="lead">Drama</h6></b>
          <p>Drama is the specific mode of fiction represented in performance: a play, opera, mime, ballet, etc, performed in a theatre, or on radio or television.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once('class/subscribe.class.php');
$subscribe = new subscribe;

if(isset($_POST['Submit']))
{
  $subscribe =$subscribe->save();
  if(is_integer($subscribe))
  {
    $msg='Subscribe Successfully Added';
  }
  else
  {
    $msg = 'Unsuccessful';
  }
}
?>
<article >
  <div class="subscribe-layout">
    <form method="POST" class="form">
      <?php
       if(isset($msg))
            echo $msg;
      ?>
      <div class="row">
        <div class="col-md-4">
          <p>For more information, please subscribe.</p>  
        </div>
        <div class="col-md-6">
          <input type="email" name="email" placeholder="Enter your email address" class="form-control" /> 
        </div>      
        <div class="col-md-2">
          <input type="submit" class="btn btn-sm btn-danger" name="Submit" /> 
        </div>      
      </div>
    </form>
  </div>
</article>
<?php include 'footer.php'; ?>
