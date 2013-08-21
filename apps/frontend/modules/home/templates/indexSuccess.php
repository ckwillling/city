<table>
  <tr>
    <td>菜单ID</td>
    <td>菜单名称</td>
    <td>链接类型</td>
    <td>菜单链接</td>
  </tr>

  <? foreach($menuList as $menu):?>
  <tr>
     <td><?=$menu->getId();?></td>
     <td><?=$menu->getMenuName();?></td>
     <td><?=$menu->getMenuType();?></td>
     <td><?=$menu->getMenuLink();?></td>
   </tr>
  <? endforeach;?>

</table>


<table>
    <tr>
        <td>页面ID</td>
        <td>页面名称</td>
        <td>页面内容</td>
        <td>创建日期</td>
        <td>修改日期</td>
        <td>是否主页</td>
    </tr>

     <? foreach($pages as $page):?>
     <tr>
        <td><?=$page->getId();?></td>
        <td><?=$page->getPageTitle();?></td>
        <td><?=$page->getPageContent();?></td>
        <td><?=$page->getCreatedAt();?></td>
        <td><?=$page->getUpdatedAt();?></td>
        <td><?=$page->isMainpage()?"是":""?></td>
     </tr>
     <? endforeach;?>

</table>