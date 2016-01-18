<!--
<form method="post" action="/passwdchange/login">
	<h2>Please sign in</h2>
	<fieldset>
		<input type="text" name="data[User][username]" placeholder="UserName"><br>
		<input type="password" name="data[User][password]" placeholder="Password"><br>
    <label class="checkbox">
	     <input type="checkbox" value="remember-me"> Remember me<br>
    </label>
		<button class="btn btn-large btn-primary" type="submit">Sign in</button>
	</fieldset>
</form>
-->
<!-- IDを適当な文字列、パスワードに「' OR 'A'='A」と入力すると・・  -->


<div class="users form">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
