<h1>Shopinfo List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>F name</th>
      <th>F password</th>
      <th>F number</th>
      <th>F mobile</th>
      <th>F address</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($shopinfo_list as $shopinfo): ?>
    <tr>
      <td><a href="<?php echo url_for('shopinfo/show?id='.$shopinfo->getId()) ?>"><?php echo $shopinfo->getId() ?></a></td>
      <td><?php echo $shopinfo->getFName() ?></td>
      <td><?php echo $shopinfo->getFPassword() ?></td>
      <td><?php echo $shopinfo->getFNumber() ?></td>
      <td><?php echo $shopinfo->getFMobile() ?></td>
      <td><?php echo $shopinfo->getFAddress() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('shopinfo/new') ?>">New</a>
