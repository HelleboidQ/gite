<div class="container">
	<div class="row">
        <h2 id="titre_contact" class="col-xs-12">Pour toutes questions suppl&eacute;mentaires, contactez nous: </h2>
		<form class="form-horizontal" role="form" action="contact/sendForm" method="post" id="form_email" >
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-4 control-label"></label>
                    <div class="col-lg-12">
                        <input type="email" class="form-control" id="inputEmail1" name="mail" required placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="col-lg-4 control-label"></label>
                    <div class="col-lg-12">
                        <input type="text" class="form-control" id="text1" name="nom" required placeholder="Nom">
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="col-lg-4 control-label"></label>
                    <div class="col-lg-12">
                        <textarea  class="form-control" name="message" required placeholder="Message ..." rows="8" ></textarea>
                    </div>
                </div>
                 <div class="form-group">
                        <div class="g-recaptcha col-lg-12" data-sitekey="6LfZMSYTAAAAAAw3tibuzOdPyyd3jitLrYnSkUMG"></div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                        <button type="submit" name="envoyer" id="send_mail" class="btn btn-success">Envoyer</button>
                    </div>
                </div>
            </form><!-- form -->
	</div>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
