<div class="container">
	<div class="row">

		  {% for image in images %}
		 	<div class="col-xs-4">
		 	<img src="{{ image }}" class="img-responsive" />
		 	</div>
		  {% endfor %}
	</div>
</div>