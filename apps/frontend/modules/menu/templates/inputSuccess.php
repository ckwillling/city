<? use_helper('Form') ?>
<?=form_tag('menu/create?');?>
<li>菜单名：&nbsp;&nbsp;&nbsp;<?=input_tag('menuname',$isEdit?$menuRecord->getMenuname():'')?></li>
<li>菜单类型：<?=input_tag('menutype',$isEdit?$menuRecord->getMenuType():'')?></li>
<li>菜单链接：<?=input_tag('menulink',$isEdit?$menuRecord->getMenuLink():'')?></li>
<li>父菜单：&nbsp;&nbsp;&nbsp;<?=input_tag('parent',$isEdit?$menuRecord->getParentId():'')?></li>
<li>所属店铺：<?=input_tag('shop',$isEdit?$menuRecord->getShopinfoId():'')?></li>
<?=input_hidden_tag('id',$isEdit?$menuRecord->getId():null) ?>
<li><?=submit_tag('提交')?></li>
</form>