<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $menuinfo->getId() ?></td>
    </tr>
    <tr>
      <th>Menuname:</th>
      <td><?php echo $menuinfo->getMenuname() ?></td>
    </tr>
    <tr>
      <th>Menutype:</th>
      <td><?php echo $menuinfo->getMenutype() ?></td>
    </tr>
    <tr>
      <th>Menu link:</th>
      <td><?php echo $menuinfo->getMenuLink() ?></td>
    </tr>
    <tr>
      <th>Parent:</th>
      <td><?php echo $menuinfo->getParentId() ?></td>
    </tr>
    <tr>
      <th>Shopinfo:</th>
      <td><?php echo $menuinfo->getShopinfoId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('menu/edit?id='.$menuinfo->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('menu/index') ?>">List</a>
