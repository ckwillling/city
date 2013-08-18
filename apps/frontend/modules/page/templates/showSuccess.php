<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $shoppage->getId() ?></td>
    </tr>
    <tr>
      <th>Page title:</th>
      <td><?php echo $shoppage->getPageTitle() ?></td>
    </tr>
    <tr>
      <th>Page number:</th>
      <td><?php echo $shoppage->getPageNumber() ?></td>
    </tr>
    <tr>
      <th>Page content:</th>
      <td><?php echo $shoppage->getPageContent() ?></td>
    </tr>
    <tr>
      <th>Shopinfo:</th>
      <td><?php echo $shoppage->getShopinfoId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $shoppage->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $shoppage->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Is mainpage:</th>
      <td><?php echo $shoppage->getIsMainpage() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('page/edit?id='.$shoppage->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('page/index') ?>">List</a>
