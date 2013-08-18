<? use_helper('Form') ?>
<?=form_tag('account/signup')?>
<table>
  <tr>
    <td>用户名：</td><td><?=input_tag('user_name');  ?></td>
  </tr>
  <tr>
    <td>密码：</td><td><?=input_password_tag('first_pwd');  ?></td>
  </tr>
  <tr>
   <td>确认密码：</td><td><?=input_password_tag('second_pwd');  ?></td>
  </tr>
  <tr>
    <td>手机：</td><td><?=input_tag('mobile');  ?></td>
  </tr>
  <tr>
    <td>地址：</td><td><?=input_tag('address');  ?></td>
  </tr>
  <tr>
    <td>身份证：</td><td><?=input_tag('user_id');  ?></td>
  </tr>
  <tr>
    <td><?=submit_tag('提交') ?></td>
  </tr>
</table>

</form>