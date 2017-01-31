<div class="container">
	<div class="row">
		<form class="form-horizontal" role="form" action="contact/envoieForm" method="post">
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-4 control-label"></label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" id="inputEmail1" name="mail" required placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="col-lg-4 control-label"></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="text1" name="nom" required placeholder="Nom">
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="col-lg-4 control-label"></label>
                    <div class="col-lg-10">
                        <textarea  class="form-control" name="message" required placeholder="Message ..."></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <button type="submit" name="envoyer" class="btn btn-success">Envoyer</button>
                    </div>
                </div>
            </form><!-- form -->
	</div>
</div>