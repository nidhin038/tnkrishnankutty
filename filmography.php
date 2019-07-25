<link rel="stylesheet" href="css/innerpage.css">


<!------ Include the above in your HEAD tag ---------->



<div class="container-fluid page-container">

<div class="page-title">
	<h4>Filmography</h4>
</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Year</th>
      <th scope="col">Film Name</th>
      <th scope="col">Director</th>
	  <th scope="col">Notes</th>	
    </tr>
  </thead>
  <tbody id="films-container">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
	  <td>Otto</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
	  <td>Otto</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
	  <td>Otto</td>
    </tr>
  </tbody>
</table>


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
			/*newFilm = '<div class="col-md-4">'+
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
		'</div>'; */
		
			newFilm = '<tr>'+
				  '<th scope="row">'+(i+1)+'</th>'+
				  '<td>'+data[i].year+'</td>'+
				  '<td>'+data[i].film+'</td>'+
				  '<td>'+data[i].director+'</td>'+
				  '<td>'+data[i].notes+'</td>'+
			'</tr>'
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