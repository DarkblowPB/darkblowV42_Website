<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th colspan="2">Voucher Information</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Voucher Code</td>
                                <td><?php echo $voucher->voucher_code ?></td>
                            </tr>
                            <tr>
                                <td>Reward List</td>
                                <td>
                                    <?php
                                    $split = explode(',', $voucher->voucher_item);
                                    $count = count($split);
                                    $string = '';

                                    for ($i=0; $i < $count; $i++)
                                    {
                                        $string .= $this->vouchermanagement->GetItemName($split[$i]);
                                        $string .= '<br>';
                                    }

                                    echo $string;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Cash</td>
                                <td><?php echo number_format($voucher->voucher_cash, 0, ',', '.') ?></td>
                            </tr>
                            <tr style="border-bottom: 1px solid gray;">
                                <td>Total Webcoin</td>
                                <td><?php echo number_format($voucher->voucher_webcoin, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <?php
                                    switch ($voucher->active)
                                    {
                                        case 't':
                                            {
                                                echo '<span class="text-success">Active</span>';
                                                break;
                                            }
                                        case 'f':
                                            {
                                                echo '<span class="text-danger">Expired</span>';
                                                break;
                                            }
                                        
                                        default:
                                            break;
                                    }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mt-3 text-center">
                        <button type="button" class="btn btn-outline-primary text-white" onclick="self.history.back();"><i class="fas fa-arrow-left mr-2"></i>Back</button>
                        <a href="<?php if ($voucher->active == 't'){ ?><?php echo base_url('adm/vouchermanagement/print?id='.$voucher->id) ?><?php }else{ ?>javascript:void(0)<?php } ?>" target="_blank" class="btn btn-outline-primary text-white"><i class="fas fa-print mr-2"></i>Print</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>