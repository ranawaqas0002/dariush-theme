<?php
/*
Template Name: Pop-Up Template
*/
get_header();
?>

<style>
  button.btn.btn-primary {
    position: absolute !important;
    top: 36% !important;
}
.form-container2 input#your-email {
    background-color: white !important;
    font-size: 14px !important;
}
#exampleModal input.linebt {
    background-color: black !important;
}
.form-group2 p{
  margin-bottom: 10px !important;
}
button.popup-btn-2 {
    margin-top: 0px !important;
}
@media only screen and (max-width:768px) {
  #exampleModal input.linebt {
    margin-left: 0px !important;
}
  
}
</style>

<!-- Popup Trigger Button -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Open Popup
</button>
<?php 
$popup = get_field('popup');
if($popup){
?>
<!-- Popup Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        
        <div class="container-fluid popup-content ">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="row">
            <!-- Image on the left for desktop, on top for mobile -->
            <div class="col-md-6 img-container">
              <img src="<?php echo $popup['image']; ?>" alt="Image" class="img-fluid">
            </div>
            <!-- Text and form on the right for desktop, below for mobile -->
            <div class="col-md-6 mt-3 mt-md-0 ">
              <h2 class="popup-h2"><?php echo $popup['heading'] ?></h2>
              <p class="popup-p"><?php echo $popup['text'] ?></p>
              <?php echo apply_shortcodes( '[contact-form-7 id="26acde8" title="Popup newsletter"]' ); ?>
              <!-- Newsletter Form -->

                <button type="button" class="popup-btn-2" data-dismiss="modal">NO THANKS</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php
get_footer();

