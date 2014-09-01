<?php $this->load->view("partial/header"); ?>
<div id="page_title" style="margin-bottom:8px;"><?php echo $this->lang->line('sales_register'); ?></div>

<thead>
<tr>
<th style="width:11%;"><?php echo $this->lang->line('common_delete'); ?></th>
<th style="width:30%;"><?php echo $this->lang->line('sales_item_number'); ?></th>
<th style="width:30%;"><?php echo $this->lang->line('sales_item_name'); ?></th>
<th style="width:11%;"><?php echo $this->lang->line('sales_price'); ?></th>
<th style="width:11%;"><?php echo $this->lang->line('sales_quantity'); ?></th>
<th style="width:11%;"><?php echo $this->lang->line('sales_discount'); ?></th>
<th style="width:15%;"><?php echo $this->lang->line('sales_total'); ?></th>
<th style="width:11%;"><?php echo $this->lang->line('sales_edit'); ?></th>
</tr>
</thead>
<tbody id="cart_contents">

</tbody>





<?php $this->load->view("partial/footer"); ?>
