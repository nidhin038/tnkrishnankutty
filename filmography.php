<link rel="stylesheet" href="css/innerpage.css">
<div class="intro-section" id="home-section">


<!------ Include the above in your HEAD tag ---------->



<div class="container-fluid">
<div class="row">
	<div class="row film-padding">
			<div class="col-md-6 search-film-container "><input type="text" name="searchfilm" class="form-group" placeholder="Search Film"></div>
	</div>
</div>
<div class="row">

<div class="row film-padding films-container" id="films-container">
		
</div>
</div>
</div>

<script>

$( document ).ready(function() {
  
      $.ajax({
      type: "GET",
      url: "json/films.json",
      success: function (data, status) {
        var films = "";
		var newFilm = "";
		for(var i=0;i<data.length;i++){
			newFilm = '<div class="col-md-4">'+
					  '<div class="card mb-4 box-shadow">'+
						'<img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="'+data[i].imgUrl+'" data-holder-rendered="true">'+
						'<div class="card-body">'+
						  '<p class="card-text">'+data[i].desc+'</p>'+
						  '<div class="d-flex justify-content-between align-items-center">'+
							'<div class="btn-group">'+
							  
							'</div>'+
							'<a href="'+data[i].link+'"><small class="text-muted">More Details</small></a>'+
						  '</div>'+
						'</div>'+
					  '</div>'+
		'</div>';
			films = films + newFilm;	
		}
		$('#films-container').html(films);
      },
      error: function () {
        alert('Something went wrong. Please reload the page.')
      },
      complete: function () {

      }
    });
  
  
  
  
  
});

</script>