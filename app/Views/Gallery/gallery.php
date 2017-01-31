<div class="container">
	<div class="row">

		  {% for image in images %}
		 	<div class="col-xs-4">
			 	<div class="div_img row">
			 		<img src="{{ image }}" class="col-xs-12 img-responsive" />
			 	</div>
		 	</div>
		  {% endfor %}
	</div>
</div>