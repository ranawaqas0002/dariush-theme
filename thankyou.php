<?php
/*
Template Name: Thank You Page Template
*/
get_header();
?>

<!-- Section 1 -->
<section class="section-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-1">
        <h1 class="display-4"><div class="animates"><span class="rotate animate" data-animate="rotate-back"><?php echo get_field('banner_text') ?></span></div> </h1>
      </div>
    </div>
  </div>
</section>
<!-- Section 2 -->

<?php
$section_2 = get_field('section_2');
if($section_2){
?>
<section class="thankyou-section-2">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1><?php echo $section_2['heading'] ?></h1>
        <h4><?php echo $section_2['sub_heading1'] ?></h4>
        <p><?php echo $section_2['text1'] ?></p>
        <h4><?php echo $section_2['sub_heading2'] ?></h4>
        <p><?php echo $section_2['text2'] ?></p>    
      </div>
      <div class="col-md-6 img-container">
        <img src="<?php echo $section_2['image']; ?>" alt="Want More">
      </div>
    </div>
  </div>
</section>
<?php } ?>
<!-- Section 3 -->

<?php
$helpful_reminder = get_field('helpful_reminder');
if($helpful_reminder){
?>
<section class="thankyou-section-2 section-3 pt-120 pb-150">
  <div class= "container">
    <div class= "row">
      <div class="col-md-10">
        <h1><?php echo $helpful_reminder['heading'] ?></h1>
        <p><?php echo $helpful_reminder['text'] ?></p>
        <a href="<?php echo $helpful_reminder['cta_link'] ?>"><button class="section3-btn"><?php echo $helpful_reminder['cta_text'] ?></button></a>
      </div>
    </div>    
  </div>
</section>
<?php } ?>
	


<!-- Add more sections and content here -->

<?php
get_footer();


