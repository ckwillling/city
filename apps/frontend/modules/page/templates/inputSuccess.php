<? use_helper('Form') ?>
<?=form_tag('page/create?');?>
<li>文章标题：<?=input_tag('page_title',$isEdit?$pageRecord->getPageTitle():'')?></li>
<li>文章内容：<?=content_tag('textarea',$isEdit?$pageRecord->getPageContent():'','name=page_content')?></li>
<li><?=checkbox_tag('is_main',1, $isEdit?$pageRecord->getIsMainPage():'')?>是否首页</li>
<?=input_hidden_tag('id',$isEdit?$pageRecord->getId():null) ?>
<li><?=submit_tag('提交')?></li>
</form>