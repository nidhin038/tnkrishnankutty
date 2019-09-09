<link rel="stylesheet" href="css/innerpage.css">

<link rel="stylesheet" href="css/blueimp-gallery.css" />
<link rel="stylesheet" href="css/blueimp-gallery-indicator.css" />
<link rel="stylesheet" href="css/demo.css" />



<!------ Include the above in your HEAD tag ---------->



<div class="container-fluid page-container">

<div class="page-title">
	<h4>Gallery</h4>
</div>

<div class="container">


<div id="links" class="links"></div>
<!-- The Gallery as lightbox dialog -->
<div id="blueimp-gallery" class="blueimp-gallery">
  <div class="slides"></div>
  <h3 class="title"></h3>
  <a class="prev">‹</a>
  <a class="next">›</a>
  <a class="close">×</a>	
  <a class="play-pause"></a>
  <ol class="indicator"></ol>
</div>

</div>

<script src="js/blueimp-helper.js"></script>
<script src="js/blueimp-gallery.js"></script>
<script src="js/blueimp-gallery-indicator.js"></script>

<script src="js/vendor/jquery.js"></script>
<script src="js/jquery.blueimp-gallery.js"></script>
<script src="js/demo.js"></script>

<script>



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
