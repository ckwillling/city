<? use_helper('Form')?>
<?=form_tag('account/loggin') ?>
用户名：<?=input_tag('user_name')?>
密码:<?=input_password_tag('password');?>
<?=submit_tag('submit')?>
<?=checkbox_tag('remember_me',1,false); ?>
</form>