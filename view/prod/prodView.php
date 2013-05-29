
      <!-- page content -->
      <div class="span9">
        <div class="well pageContent">
            <table class="table table-striped">
                <thead>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>QTY</th>
                </thead>
                <tbody>
<?php

    foreach ($product as $key => $item) { ?>

                    <tr>
                        <td><?php print $item["prod_name"]; ?></td>
                        <td><?php print $item["prod_description"]; ?></td>
                        <td><?php print $item["retail"]; ?></td>
                        <td><?php print $item["qty"]; ?></td>
                    </tr>

<?php } ?>
                </tbody>
            </table>
        </div><!--/well-->
      </div><!--/span-->
      <!-- End page content -->