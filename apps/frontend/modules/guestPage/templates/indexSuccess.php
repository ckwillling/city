<div>
 <p>
     <span>文章名称：</span>
     <span><?=$page->getPageTitle();    ?></span>
 </p>
 <p>
     <span>文章内容</span>
     <span><?=$page->getPageContent();?></span>
 </p>
 <p>
    <span>创建日期</span>
    <span><?=$page->getCreatedAt()?></span>
 </p>
</div>