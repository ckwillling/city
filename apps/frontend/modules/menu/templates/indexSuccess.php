<h1>Menu List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Menuname</th>
      <th>Menutype</th>
      <th>Menu link</th>
      <th>Parent</th>
      <th>Shopinfo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($menuinfo_list as $menuinfo): ?>
    <tr>
      <td><a href="<?php echo url_for('menu/show?id='.$menuinfo->getId()) ?>"><?php echo $menuinfo->getId() ?></a></td>
      <td><?php echo $menuinfo->getMenuname() ?></td>
      <td><?php echo $menuinfo->getMenutype() ?></td>
      <td><?php echo $menuinfo->getMenuLink() ?></td>
      <td><?php echo $menuinfo->getParentId() ?></td>
      <td><?php echo $menuinfo->getShopinfoId() ?></td>
      <td><?=link_to('delte','menu/delete?id='.$menuinfo->getId())?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('menu/new') ?>">New</a>
