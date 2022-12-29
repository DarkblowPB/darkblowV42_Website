<?php
$option = array(
    'label_for' => 'test',
    'label_class' => 'col-form-label',
    'label_name' => 'Test',
    'select_id' => 'test',
    'select_name' => 'test',
    'select_class' => 'form-control',
    'select_required' => 'required',
    'option_selected' => '0'
);

$shop = $this->db->order_by('item_id', 'desc')->get('shop')->result_array();

foreach ($shop as $key => $value) {
    if (!in_array($value['item_name'], $data)) {
        $data[$value['item_id']] = $value['item_name'];
    }
}
echo $this->darkblowtools->create_select($option, $data);
