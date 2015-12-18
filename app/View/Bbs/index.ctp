<div>
	<h2>掲示板</h2>
	<form method="post" action="/bbs/submit">
		<fieldset>
			<input type="text" name="name" placeholder="投稿者"><br>
			<textarea name="message" rows="6" placeholder="メッセージ"></textarea><br>
			<button class="btn btn-large btn-primary" type="submit">投稿</button>
		</fieldset>
	</form>
</div>

<div>
	<?php
    if(!empty($allPost)) {
  		foreach($allPost as $post) {
  			print('<div>');
  			print('<span class="name">' . $post['bbs']['name'] . '</span>：');
  			print('<span class="date">' . $post['bbs']['created'] . '</span><br>');
  			print('<span class="message">' . $post['bbs']['message'] . '</span>');
  			print('</div>');
  		}
    }
	?>
</div>
