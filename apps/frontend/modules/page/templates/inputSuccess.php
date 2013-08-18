<? use_helper('Form') ?>
<?=form_tag('page/create?');?>
<li>文章标题：<?=input_tag('page_title',$isEdit?$pageRecord->getPageTitle():'')?></li>
<li>文章内容：<?=content_tag('textarea',$isEdit?$pageRecord->getPageContent():'','name=page_content')?></li>
<li>所属商铺：<?=input_tag('shop',$isEdit?$pageRecord->getShopinfoId():'')?></li>
<li>是否设置为首页：<?=input_tag('is_main',$isEdit?$pageRecord->getIsMainPage():'')?></li>
<?=input_hidden_tag('id',$isEdit?$pageRecord->getId():null) ?>
<li><?=submit_tag('提交')?></li>
</form>