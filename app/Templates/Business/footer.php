</div>

<?php
Assets::js([
	'https://code.jquery.com/jquery-1.12.1.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',
     Url::templatePath().'js/bootstrap.min.css',
     Url::templatePath().'js/jquery.css',
]);
echo $js; //place to pass data / plugable hook zone
echo $footer; //place to pass data / plugable hook zone
?>

</body>
</html>
