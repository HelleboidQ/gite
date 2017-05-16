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
  padding-top: 100px;
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
  max-width: 1200px;
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
</style>

<div class="container">
	<div class="row">

		<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-4"> 
				 	<img src="app/Templates/Business/Assets/images/cathedraleNotreDamePhilippeHudelle.jpg" onclick="openModal();currentSlide(1)" class=" col-xs-12 img-responsive" alt="Cathedrale" />
				 	<p>Cathedrale Notre Dame Philippe Hudelle Balades en Audomarois</p> 
				</div>

				<div class="col-xs-4"> 
				 	<img src="app/Templates/Business/Assets/images/CHAPELLEDESJESUITESOTRSO.jpg" onclick="openModal();currentSlide(2)"  class="  col-xs-12 img-responsive" alt="" />
				 	<p>2014 Facade renovee CHAPELLE DES JESUITES OTRSO</p> 
				</div>

				<div class="col-xs-4"> 
				 	<img src="app/Templates/Business/Assets/images/BACOVE_2013OTRSO.jpg" onclick="openModal();currentSlide(3)"  class=" col-xs-12 img-responsive" alt="" />
				 	<p>BACOVE_2013OTRSO</p> 
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<div class="row">
		<div class="col-xs-4"> 
		 	<img src="app/Templates/Business/Assets/images/MotteCastrale023.jpg" class="col-xs-12 img-responsive" alt="" />
		 	<p>Balades en Audomarois, P.Hudelle - Motte Castrale 023</p> 
		</div>

		<div class="col-xs-4"> 
		 	<img src="app/Templates/Business/Assets/images/claimaraisbareaux42010.jpg" class="col-xs-12 img-responsive" alt="" />
		 	<p>claimarais bareaux4  2010-Photo Carl-Office de Tourisme de la Region de Saint-Omer</p> 
		</div>

		<div class="col-xs-4"> 
		 	<img src="app/Templates/Business/Assets/images/claimaraispaysageprintemps.jpg" class="col-xs-12 img-responsive" alt="" />
		 	<p>claimarais paysage printemps 063 2013-Photo Carl-Office de Tourisme de la Region de Saint-Omer</p> 
		</div>
</div>
		</div>
		<div class="col-xs-12">
			<div class="row">
		<div class="col-xs-4"> 
		 	<img src="app/Templates/Business/Assets/images/claimarais_romelaere.jpg" class="col-xs-12 img-responsive" alt="" />
		 	<p>claimarais romelaere promenade 04  2011-Photo Carl-Office de Tourisme de la Region de Saint-Omer</p> 
		</div>

		<div class="col-xs-4"> 
		 	<img src="app/Templates/Business/Assets/images/ClairmaraisMaraisRomelaere.jpg" class="col-xs-12 img-responsive" alt="" />
		 	<p>Clairmarais Marais Romelaere 03  2010 - Comimatex - Office de Tourisme de la Region de Saint-Omer</p> 
		</div>

		<div class="col-xs-4"> 
		 	<img src="app/Templates/Business/Assets/images/DOMELaCoupole.JPG" class="col-xs-12 img-responsive" alt="" />
		 	<p>DOME  La Coupole</p> 
		</div>
</div>
		</div>
		<div class="col-xs-12">
			<div class="row">
		<div class="col-xs-4"> 
		 	<img src="app/Templates/Business/Assets/images/LACOUPOLEINTERIEURLaCoupole.JPG" class="col-xs-12 img-responsive" alt="" />
		 	<p>LACOUPOLE INTERIEUR La Coupole</p> 
		</div>

		<div class="col-xs-4"> 
		 	<img src="app/Templates/Business/Assets/images/RUINESSAINTBERTINOTRSO.JPG" class="col-xs-12 img-responsive" alt="" />
		 	<p>RUINES SAINT BERTINOTRSO</p> 
		</div>

		<div class="col-xs-4"> 
		 	<img src="app/Templates/Business/Assets/images/SaintOmerCathedraleNotre-Dame.jpg" class="col-xs-12 img-responsive" alt="" />
		 	<p>Saint-Omer Cathedrale Notre-Dame 024 2013-PhotoCarl-Office de Tourisme de la Region de Saint-Omer</p> 
		</div>
</div>
		</div>
		<div class="col-xs-12">
			<div class="row">
		<div class="col-xs-4"> 
		 	<img src="app/Templates/Business/Assets/images/vueaeriennemaraisaudomaroisIsnor.jpg" class="col-xs-12 img-responsive" alt="" />
		 	<p>vue aerienne marais audomarois  Isnor.jpg</p> 
		</div>
	</div>
</div>
</div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
	  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
        <img src="app/Templates/Business/Assets/images/cathedraleNotreDamePhilippeHudelle.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
        <img src="app/Templates/Business/Assets/images/cathedraleNotreDamePhilippeHudelle.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
        <img src="app/Templates/Business/Assets/images/cathedraleNotreDamePhilippeHudelle.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
        <img src="app/Templates/Business/Assets/images/cathedraleNotreDamePhilippeHudelle.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="column">
      <img class="demo" src="app/Templates/Business/Assets/images/cathedraleNotreDamePhilippeHudelle.jpg" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo" src="app/Templates/Business/Assets/images/cathedraleNotreDamePhilippeHudelle.jpg" onclick="currentSlide(2)" alt="Trolltunga">
    </div>

    <div class="column">
      <img class="demo" src="app/Templates/Business/Assets/images/cathedraleNotreDamePhilippeHudelle.jpg" onclick="currentSlide(3)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo" src="app/Templates/Business/Assets/images/cathedraleNotreDamePhilippeHudelle.jpg" onclick="currentSlide(4)" alt="Lights">
    </div>
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