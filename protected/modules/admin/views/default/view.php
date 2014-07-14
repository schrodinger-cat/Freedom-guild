<?php
	foreach ($news as $n_elem) {
		?>
		<div class="media">
			<div class="media-body">
				<?php
					echo CHtml::link('<h4 class="media-heading">'.$n_elem['news_name'].'</h4>', 
								array('default/update&id='.$n_elem['id'])
					);
				?>
	    
			    <div class="media">
			    	<?= $n_elem['description']; ?>
			    </div>
		  	</div>
		</div>
		<?
	}
?>