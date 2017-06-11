<style>
.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 50px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 900px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

.col-xs-4 p{
  padding-left:10px;
}
</style>

<div class="container">
	<div class="row">

		<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-4"> 
				 	<img src="app/Templates/Business/Assets/images/cathedraleNotreDamePhilippeHudelle.jpg" onclick="openModal();currentSlide(1)" class=" col-xs-12 img-responsive" alt="Cathedrale" />
				 	<p>Cathedrale Notre Dame - Philippe Hudelle Balades en Audomarois</p> 
				</div>
 

				<div class="col-xs-4"> 
				 	<img src="app/Templates/Business/Assets/images/BACOVE_2013OTRSO.jpg" onclick="openModal();currentSlide(2)"  class=" col-xs-12 img-responsive" alt="" />
				 	<p>Bacove - Otrso</p> 
				</div>

        <div class="col-xs-4"> 
      <img src="app/Templates/Business/Assets/images/MotteCastrale023.jpg" onclick="openModal();currentSlide(3)" class="col-xs-12 img-responsive" alt="" />
      <p>Motte Castrale - Philippe Hudelle Balades en Audomarois</p> 
    </div>

			</div>
		</div>
		<div class="col-xs-12">
			<div class="row">
		

		<div class="col-xs-4"> 
		 	<img src="app/Templates/Business/Assets/images/claimaraisbareaux42010.jpg" onclick="openModal();currentSlide(4)" class="col-xs-12 img-responsive" alt="" />
		 	<p>Claimarais - Office de Tourisme de la Region de Saint-Omer</p> 
		</div>

		<div class="col-xs-4"> 
		 	<img src="app/Templates/Business/Assets/images/claimaraispaysageprintemps.jpg" onclick="openModal();currentSlide(5)" class="col-xs-12 img-responsive" alt="" />
		 	<p>Claimarais - Carl - Office de Tourisme de la Region de Saint-Omer</p> 
		</div>
    <div class="col-xs-4"> 
      <img src="app/Templates/Business/Assets/images/claimarais_romelaere.jpg" onclick="openModal();currentSlide(6)" class="col-xs-12 img-responsive" alt="" />
      <p>Claimarais, Romelaere - Carl - Office de Tourisme de la Region de Saint-Omer</p> 
    </div>
</div>
		</div>
		<div class="col-xs-12">
			<div class="row">
		
		<div class="col-xs-4"> 
		 	<img src="app/Templates/Business/Assets/images/DOMELaCoupole.jpg" onclick="openModal();currentSlide(7)" class="col-xs-12 img-responsive" alt="" />
		 	<p>Dome de la Coupole - La Coupole</p> 
		</div>
    <div class="col-xs-4"> 
      <img src="app/Templates/Business/Assets/images/LACOUPOLEINTERIEURLaCoupole.jpg" onclick="openModal();currentSlide(8)" class="col-xs-12 img-responsive" alt="" />
      <p>La Coupole</p> 
    </div>

    <div class="col-xs-4"> 
      <img src="app/Templates/Business/Assets/images/RUINESSAINTBERTINOTRSO.jpg" onclick="openModal();currentSlide(9)" class="col-xs-12 img-responsive" alt="" />
      <p>Ruines Saint Bertin - Otrso</p> 
    </div>
</div>
		</div>
		<div class="col-xs-12">
			<div class="row">
		

		<div class="col-xs-4"> 
		 	<img src="app/Templates/Business/Assets/images/BACOVE_2013OTRSO.jpg" onclick="openModal();currentSlide(10)" class="col-xs-12 img-responsive" alt="" />
		 	<p>Saint-Omer Cathedrale Notre-Dame - Carl - Office de Tourisme de la Region de Saint-Omer</p> 
		</div>
    <div class="col-xs-4"> 
      <img src="app/Templates/Business/Assets/images/vueaeriennemaraisaudomaroisIsnor.jpg" onclick="openModal();currentSlide(11)" class="col-xs-12 img-responsive" alt="" />
      <p>Marais audomarois - Isnor</p> 
    </div>
</div>
		</div>
		 
</div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
	  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 11</div>
        <img src="app/Templates/Business/Assets/images/cathedraleNotreDamePhilippeHudelle_1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 11</div>
        <img src="app/Templates/Business/Assets/images/BACOVE_2013OTRSO_1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 11</div>
        <img src="app/Templates/Business/Assets/images/MotteCastrale023_1.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">4 / 11</div>
        <img src="app/Templates/Business/Assets/images/claimaraisbareaux42010_1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 11</div>
        <img src="app/Templates/Business/Assets/images/claimaraispaysageprintemps_1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 11</div>
        <img src="app/Templates/Business/Assets/images/claimarais_romelaere_1.jpg" style="width:100%">
    </div>
 
    <div class="mySlides">
      <div class="numbertext">7 / 11</div>
        <img src="app/Templates/Business/Assets/images/DOMELaCoupole_1.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">8 / 11</div>
        <img src="app/Templates/Business/Assets/images/LACOUPOLEINTERIEURLaCoupole_1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">9 / 11</div>
        <img src="app/Templates/Business/Assets/images/RUINESSAINTBERTINOTRSO_1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">10 / 11</div>
        <img src="app/Templates/Business/Assets/images/BACOVE_2013OTRSO_1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">11 / 11</div>
        <img src="app/Templates/Business/Assets/images/vueaeriennemaraisaudomaroisIsnor_1.jpg" style="width:100%">
    </div>


    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="column">
      <img class="demo img-responsive" src="app/Templates/Business/Assets/images/cathedraleNotreDamePhilippeHudelle_2.jpg" onclick="currentSlide(1)" alt="Nature">
    </div>
 
    <div class="column">
      <img class="demo img-responsive" src="app/Templates/Business/Assets/images/BACOVE_2013OTRSO_2.jpg" onclick="currentSlide(2)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo img-responsive" src="app/Templates/Business/Assets/images/MotteCastrale023_2.jpg" onclick="currentSlide(3)" alt="Lights">
    </div>

    <div class="column">
      <img class="demo img-responsive" src="app/Templates/Business/Assets/images/BACOVE_2013OTRSO_2.jpg" onclick="currentSlide(4)" alt="Trolltunga">
    </div>
    <!-- <div class="column">
      <img class="demo img-responsive" src="app/Templates/Business/Assets/images/claimaraisbareaux42010.jpg" onclick="currentSlide(5)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo img-responsive" src="app/Templates/Business/Assets/images/claimaraispaysageprintemps.jpg" onclick="currentSlide(6)" alt="Trolltunga">
    </div>

    <div class="column">
      <img class="demo img-responsive" src="app/Templates/Business/Assets/images/claimarais_romelaere.jpg" onclick="currentSlide(7)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo img-responsive" src="app/Templates/Business/Assets/images/ClairmaraisMaraisRomelaere.jpg" onclick="currentSlide(8)" alt="Lights">
    </div>
     <div class="column">
      <img class="demo img-responsive" src="app/Templates/Business/Assets/images/DOMELaCoupole.jpg" onclick="currentSlide(9)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo img-responsive" src="app/Templates/Business/Assets/images/LACOUPOLEINTERIEURLaCoupole.jpg" onclick="currentSlide(10)" alt="Trolltunga">
    </div>

    <div class="column">
      <img class="demo img-responsive" src="app/Templates/Business/Assets/images/RUINESSAINTBERTINOTRSO.jpg" onclick="currentSlide(11)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo img-responsive" src="app/Templates/Business/Assets/images/BACOVE_2013OTRSO.jpg" onclick="currentSlide(12)" alt="Lights">
    </div>
     <div class="column">
      <img class="demo img-responsive" src="app/Templates/Business/Assets/images/vueaeriennemaraisaudomaroisIsnor.jpg" onclick="currentSlide(13)" alt="Lights">
    </div>-->
  </div>
</div>


<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>