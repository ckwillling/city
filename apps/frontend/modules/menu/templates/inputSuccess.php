<? use_helper('Form','Javascript') ?>
<?=form_tag('menu/create?');?>
<li>菜单名：&nbsp;&nbsp;&nbsp;<?=input_tag('menuname',$isEdit?$menuRecord->getMenuname():'')?></li>
<li>菜单类型：<?=select_tag('menutype',options_for_select(array(
                '0'=>'内部链接',
                '1'=>'外部链接'
    ),$isEdit?$menuRecord->getMenutype():'0'))?></li>
<li>菜单链接：<?=input_tag('menulink',$isEdit?$menuRecord->getMenuLink():'')?></li>
<li>父菜单：&nbsp;&nbsp;&nbsp;<?=input_tag('parent',$isEdit?$menuRecord->getParentId():'')?></li>
<?=input_hidden_tag('id',$isEdit?$menuRecord->getId():null) ?>
<li><?=submit_tag('提交')?></li>
</form>

<div id="page_list"></div>
<? foreach($pages as $p):?>
    <input type="radio" name="page_select"  onclick="insertInsideLink('<?=url_for('/page/show/id='.$p->getId())?>')"  value='<?=url_for('/page/show/id='.$p->getId())?>'>
    <?=$p->getPageTitle(); ?>
    </input>
    <br />
<? endforeach;?>
<div id="d1"></div>​