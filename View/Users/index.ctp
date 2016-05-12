<div class="well" style="max-width: 70%; margin: auto; text-align: center;padding: 40px;">
	<?php
		if(!empty($gameSlug)) {
			echo $this->Html->image($gameSlug.'.png', ['style' => 'max-height: 200px;']);
		}
	?>
	<h1>Thank you!</h1>
	<small>We will send you a e-mail with further instruction when testing starts.</small>
</div>