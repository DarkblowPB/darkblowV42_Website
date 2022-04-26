<div class="nk-main">
    <div class="nk-gap-2"></div>
    <div class="nk-gap-2"></div>
    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <table class="nk-table table-responsive-lg table-responsive-md table-responsive-sm text-center">
                    <thead>
                        <th width="5%">No.</th>
                        <th>Package Name</th>
                        <th width="15%">Package Price</th>
                        <th width="5%">Qty</th>
                        <th width="10%">Status</th>
                        <th width="25%">Action</th>
                    </thead>
                    <tbody>
                        <?php if ($this->packshop->LoadData() != null) : ?>
                            <?php $num = 1;
                            foreach ($this->packshop->LoadData() as $row) : ?>
                                <tr>
                                    <td><?= $num ?></td>
                                    <td><?= $row['package_name'] ?></td>
                                    <td>&#8373; <?= number_format($row['package_price'], 0, ',', '.') ?></td>
                                    <td><?= $row['package_qty'] ?></td>
                                    <td><?= $row['package_status'] == 1 ? '<input type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-success" value="Available">' : '<input type="button" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-danger" value="Not Available">' ?></td>
                                    <td>
                                        <input type="button" id="details_<?= $row['id'] ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-info" value="Details">
                                        <input type="button" id="buy_<?= $row['id'] ?>" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-primary" value="Buy" onclick="BuyPackage('buy_<?= $row['id'] ?>', '<?= $row['id'] ?>')">
                                    </td>
                                </tr>
                            <?php $num++;
                            endforeach ?>
                        <?php endif; ?>
                        <?php if ($this->packshop->LoadData() == null) : ?>
                            <tr>
                                <td class="text-center" colspan="6">No Data Available</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <script>
                    var CSRF_TOKEN = '<?= $this->security->get_csrf_hash() ?>';
                    var RETRY = 0;

                    function BuyPackage(button_id, package_id) {
                        SetAttribute(button_id, 'button', 'Processing...');

                        $.ajax({
                            url: '<?= base_url('packshop/do_buy') ?>',
                            type: 'POST',
                            dataType: 'JSON',
                            data: {
                                '<?= $this->security->get_csrf_token_name() ?>': CSRF_TOKEN,
                                'id_pack': package_id
                            },
                            success: (response) => {
                                var GetString = JSON.stringify(response);
                                var Parse = JSON.parse(GetString);

                                ShowToast(2000, Parse.response, Parse.message);
                                CSRF_TOKEN = Parse.token;
                                SetAttribute(button_id, 'button', 'Buy');
                                setTimeout(() => {
                                    window.location.reload();
                                }, 2000);
                            },
                            error: () => {
                                ShowToast(2000, 'error', 'Failed To Buy Package.');
                                SetAttribute(button_id, 'button', 'Buy');
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>
</div>