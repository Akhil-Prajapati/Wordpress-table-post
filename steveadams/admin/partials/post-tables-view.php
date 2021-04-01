<?php echo do_shortcode('[wpdatatable id=2]');?>
<div id="iframe" class="modal" >

</div>
<style>
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 9999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  text-align: center;
  justify-content: center;
}
.modal-content {
  background-color: #fefefe;
  margin: 5% auto; /* 15% from the top and centered */
  padding: 10px;
  width: 70% !important; /* Full width */
  height: 80%; /* Full height */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}
</style>