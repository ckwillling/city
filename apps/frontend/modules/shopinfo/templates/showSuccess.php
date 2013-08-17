<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $shopinfo->getId() ?></td>
    </tr>
    <tr>
      <th>F name:</th>
      <td><?php echo $shopinfo->getFName() ?></td>
    </tr>
    <tr>
      <th>F password:</th>
      <td><?php echo $shopinfo->getFPassword() ?></td>
    </tr>
    <tr>
      <th>F number:</th>
      <td><?php echo $shopinfo->getFNumber() ?></td>
    </tr>
    <tr>
      <th>F mobile:</th>
      <td><?php echo $shopinfo->getFMobile() ?></td>
    </tr>
    <tr>
      <th>F address:</th>
      <td><?php echo $shopinfo->getFAddress() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('shopinfo/edit?id='.$shopinfo->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('shopinfo/index') ?>">List</a>
