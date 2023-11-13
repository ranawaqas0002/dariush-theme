<?php
/*
Template Name: Contact Page Template
*/
get_header();
?>

<style>


 /* Basic styling for the form */
 .form-container {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }
        
        .form-group {
            width: 50%;
            padding: 0 10px;
            box-sizing: border-box;
        }
        .form-group p{
          margin-bottom: 0px !important;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            background-color: #ffffff !important;
            border: none !important;
            height: 50px !important;
            color: #949494 !important;
            margin-left: 0px !important;
            margin-bottom: 20px !important;
            font-size: 14px !important;
            padding-left: 23px !important;
        }
        

        textarea {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            resize: vertical;
        }
        .textfield {
              max-width: 763px !important;
              width: 100% !important;
              padding: 8px !important;
          }
          
          textarea#your-message {
              background-color: #ffffff !important;
              font-size: 14px !important;
              padding-left: 20px !important;
              border: none !important;
              color: #949494 !important;
          }

        input[type="submit"] {
          width: 208% !important;
            background-color: transparent;
            color: #000000;
            padding: 10px 20px;
            border: 1px solid #000000;
            cursor: pointer;
            font-size: 14px !important;
            letter-spacing: 3px !important;
        }

       
        
        input[type="submit"]:hover {
            background-color: #000000;
            color: #ffffff;
        }
        p.black-text.sm-pb {
    margin-left: 13px !important;
}
        /* Media query for screens with a maximum width of 768px */
        @media screen and (max-width: 768px) {
            .form-group {
                width: 100%; /* Make each form group take full width */
            }
            input[type="submit"] {
              width: 100% !important;
            }
        }


@media screen and (min-width:992px) {
    .contact-detail-col-2 {
    margin-left: 50px !important;
}   
.form-group {
    width: 50%!important;
    float: left;
    padding: 0px 10px!important;
}
.form-group textarea#message {
    width: 610px!important;
}



}

@media screen and (max-width: 992px) {
        .contact-detail-col-1 {
            padding-top: 30px;
}       
    }

</style>




<?php
$section_2 = get_field('section_2');
if($section_2){
?>
<section class="contact-sec-2 light-gray-bg">
<div class="container pt-220 pb-120 top">
        <div class="row" id="contact">
          <div class="col-lg-5 offset-lg-1 left animate" data-animate="fade-in-left">
            <h3 class="ml-09 section-heading black-text sm-pb">
            <span class="black-text"></span><?php echo $section_2['heading'] ?></h3>
            <p class="black-text sm-pb"><?php echo $section_2['text'] ?></p>
            <!-- <a href="#contact" class="linebt">Get In Touch</a> -->
          </div>
          <div class="col-lg-2 animate contact-detail-col-1" data-animate="fade-in-right">
            <span class="tinytext uppercase mb-60 graytext">CONTACT</span><br>
            <a href="tel:+97148347391" class="black-text">+971 4 834 7391</a><br><br>

            <span class="tinytext uppercase mb-60 graytext">LOCATION</span><br>
            <a href="mailto:ali@arenacapital.com" class="black-text">3305, 33rd Floor, Dubai Marina Plaza, UAE</a><br><br>
          </div>
            
          <div class="col-lg-2 offset-lg-1 animate graytext contact-detail-col-2" data-animate="fade-in-right">
                      
            <span class="tinytext uppercase mb-60 graytext">PODCAST ENQUIRIES</span><br>
            <a href="mailto:keera@arenacapital.com" class="black-text">alexa@arenacapital.com</a><br><br>

            <span class="tinytext uppercase">BUSINESS & SPEAKING ENQUIRIES</span><br>
            <a href="tel:+97336156641" class="black-text">ali@arenacapital.com</a><br><br>

            <span class="tinytext uppercase graytext">PRESS</span><br>
            <a href="mailto:alexa@arenacapital.com" class="black-text">keera@arenacapital.com</a><br><br>
          </div>
        </div>
      </div>
</section>
<?php } ?>

<!-- Section 3 -->

<section class="pb-220 light-gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-1">
        <!-- <h1 class="section-heading">Contact Dariush</h1> -->
        <p class="black-text sm-pb">For general inquiries, events, PR and podcast opportunities feel free to contact me via the below form. My team will revert back within 24hrs.</p>
        <?php echo apply_shortcodes( '[contact-form-7 id="4e03a09" title="Contact form 1"]' ); ?>
          
    </div>
    </div>
  </div>
</section>



<?php
get_footer();