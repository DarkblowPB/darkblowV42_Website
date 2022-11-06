<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header text-center">
                    <a href="<?= base_url('adm/webshopmanagement/add') ?>" class="btn btn-outline-primary text-white" title="Create New Webshop Item"><i class="fa fa-plus-circle mr-2"></i>Create New Item</a>
                </div>
                <div class="card-body">
                    <table id="webshop_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="5%">No.</th>
                            <th width="15%">Action</th>
                            <th>Item Name</th>
                            <th width="10%">Category</th>
                            <th width="5%">Rating</th>
                            <th width="10%">Status</th>
                        </thead>
                        <tbody>
                            <?php $num = 1;
                            foreach ($webshop as $key => $value) : ?>
                                <tr>
                                    <td><?= $num ?></td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-outline-info" title="Detail"><i class="fa fa-info-circle"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-outline-success" title="Edit"><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-outline-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                    <td><?= $this->darkblowlib->GetItemName($value['webshop_itemid']) ?></td>
                                    <td><?= $this->darkblowlib->GetItemCategory($value['webshop_itemcategory']) == 1 ? 'Weapon' : ($this->darkblowlib->GetItemCategory($value['webshop_itemcategory']) == 2 ? 'Character & Headgear' : 'Item') ?></td>
                                    <td><?= $value['webshop_itemrating'] ?></td>
                                    <td><?= $value['webshop_itemstatus'] == 1 ? 'Available' : 'Not Available' ?></td>
                                </tr>
                            <?php $num++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>