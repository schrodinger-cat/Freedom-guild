<h2>Добавить новость</h2>

<?php if(!empty($success)) { ?>
	<div class="alert alert-success"><i class="icon-ok"></i> Новость успешно добавлена</div>
<?php } ?>

<form class="form-horizontal" method="post">
	<div class="row">
		<div class="span9 mb10">
		  	Название новости:<br/>
			<input class="input-xxlarge" type="text" name="news-name" placeholder="Введи название новости">
		</div>

		<div class="span9 mb10">
			Дата:<br/>
			<input class="input-xxlarge" type="text" name="news-date" value="<?= date('d.m.Y', time()); ?>">
		</div>

		<div class="span9 mb10">
			Описание:<br/>
			<textarea class="input-xxlarge tarea-toll" name="news-description"></textarea>
		</div>

		<div class="span9 mb10">
			Полный текст:<br/>
			<textarea class="input-xxlarge tarea-toll" name="news-text"></textarea>
		</div>
		
		<div class="span9">
			<input type="submit" name="news-add" class="btn btn-success" value="Добавить">
		</div>
	</div>
</form>