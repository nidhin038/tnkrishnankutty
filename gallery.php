<?php
	include("includes/header.php");
?>
<link rel="stylesheet" href="css/innerpage.css">
<link rel="stylesheet" href="css/gallery.css"> 
<script src="js/gallery.js"></script>
<div class="intro-section" id="home-section">


<!------ Include the above in your HEAD tag ---------->



<div class="container-fluid">

<div class="container">
	<div class="row">
		<div class="row row-height" style="margin:110px auto;" id="image-container">
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         alt="Another alt text">
                </a>
         </div>
		 
		 <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                         alt="Another alt text">
                </a>
         </div>
            


        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

</div>

<script>
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

</script>

<?php
	include("includes/footer.php");
?>