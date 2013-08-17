<? use_helper('Form')?>
<?=form_tag('account/loggin') ?>
username:<?=input_tag('f_name')?>
password:<?=input_password_tag('password');?>
<?=submit_tag('submit')?>
</form>