<h1>Page List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Page title</th>
      <th>Page number</th>
      <th>Page content</th>
      <th>Shopinfo</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Is mainpage</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($shoppage_list as $shoppage): ?>
    <tr>
      <td><a href="<?php echo url_for('page/show?id='.$shoppage->getId()) ?>"><?php echo $shoppage->getId() ?></a></td>
      <td><?php echo $shoppage->getPageTitle() ?></td>
      <td><?php echo $shoppage->getPageNumber() ?></td>
      <td><?php echo $shoppage->getPageContent() ?></td>
      <td><?php echo $shoppage->getShopinfoId() ?></td>
      <td><?php echo $shoppage->getCreatedAt() ?></td>
      <td><?php echo $shoppage->getUpdatedAt() ?></td>
      <td><?php echo $shoppage->getIsMainpage() ?></td>
      <td><?=link_to('delete',url_for('page/delete?id='.$shoppage->getId())) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('page/new') ?>">New</a>
