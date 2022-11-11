<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <?= form_open('', 'autocomplete="off"') ?>
        <div class="card">
            <div class="card-header text-center">
                <a href="<?= base_url('adm/webhookmanagement/add') ?>" class="btn btn-outline-primary"><i class="fa fa-plus-circle mr-2"></i>Add New Webhook</a>
            </div>
            <div class="card-body">
                <table id="webhook_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                    <thead class="text-center text-uppercase font-weight-bold bg-primary">
                        <th width="5%">No.</th>
                        <th width="10%">Action</th>
                        <th>Username</th>
                        <th width="15%">Type</th>
                        <th width="10%">Status</th>
                    </thead>
                    <tbody>
                        <?php $num = 1;
                        foreach ($webhook as $key => $value) : ?>
                            <tr>
                                <td class="text-center"><?= $num ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('adm/webhookmanagement/edit/' . $value['id']) ?>" class="btn btn-outline-success" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0)" class="btn btn-outline-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>
                                <td><?= $value['username'] ?></td>
                                <td>
                                    <?= $value['type'] == Darkblowwebhook::REDEEMCODE_WEBHOOK ? 'Redem Code Webhook' : '' ?>
                                    <?= $value['type'] == Darkblowwebhook::REGISTER_WEBHOOK ? 'Register Webhook' : '' ?>
                                </td>
                                <td class="text-center"><?= $value['status'] == 1 ? 'Enabled' : 'Disabled' ?></td>
                            </tr>
                        <?php $num++;
                        endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?= form_close() ?>
    </div>
</div>