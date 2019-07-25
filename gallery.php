<link rel="stylesheet" href="css/innerpage.css">
<link rel="stylesheet" href="css/lite-box.css"> 
<script src="js/lite-box.js"></script>


<!------ Include the above in your HEAD tag ---------->



<div class="container-fluid page-container">

<div class="page-title">
	<h4>Gallery</h4>
</div>

<div class="container">
	<div class="row">
		<div class="row row-height" style="margin:110px auto;" id="image-container">
		<?php
            include("gallery-images.php");
        ?>
      
        
	</div>
</div>

</div>

<script>
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
/*
$( document ).ready(function() {
$.get("json/gallery.json", function(data, status){
    console.log(data);
	var images = "";
	var newimage = "";
	for(var i=0;i<data.length;i++){
		newimage = '<div class="col-lg-3 col-md-4 col-xs-6 thumb">'+
                '<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"'+
                   'data-image="'+data[i].imageurl+'"'+
                   'data-target="#image-gallery">'+
                    '<img class="img-thumbnail"'+
                         'src="'+data[i].imageurl+'"'+
                         'alt="'+data[i].alttext+'">'+
                '</a>'+
            '</div>';
		images = images + newimage;	
	}
	$('#image-container').html(images);
  });
  
});
*/
</script>
