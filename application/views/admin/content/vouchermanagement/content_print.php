<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>
    </title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/goodgames/assets/vendors/bs5/css/bootstrap.min.css">
    <script src="<?= base_url() ?>assets/goodgames/assets/vendor/jquery/dist/jquery.min.js"></script>
</head>

<body>
    <br><br><br>
    <div class="container" style="margin-top: -100px; margin-bottom: 0px;">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header bg-dark text-center text-uppercase">
                        <?= $this->darkblowsettings->load()->project_name . ' Voucher' ?>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead class="bg-dark">
                                <th colspan="2" class="text-white">Voucher Information</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="50%">Voucher Code</td>
                                    <td>
                                        <?= $voucher->voucher_code ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Reward Item List</td>
                                    <td>
                                        <?php
                                        $split = explode(',', $voucher->voucher_item);
                                        $count = count($split);
                                        $string = '';

                                        for ($i = 0; $i < $count; $i++) {
                                            $string .= $this->darkblowlib->GetItemName($split[$i]);
                                            $string .= '<br>';
                                        }

                                        echo $string;
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Reward Cash</td>
                                    <td>
                                        <?= number_format($voucher->voucher_cash, 0, ',', '.') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Reward Webcoin</td>
                                    <td>
                                        <?= number_format($voucher->voucher_webcoin, 0, ',', '.') ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center text-black">
                        Thankyou For Buying <?= $this->darkblowsettings->load()->project_name ?> Voucher<br>Have A Nice Day :)<br><br>
                        Copyright &copy; <b>
                            <?= $this->darkblowsettings->load()->project_name ?>
                        </b> 2020 - <?= date('Y') ?>. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="<?= base_url() ?>assets/goodgames/assets/vendors/bs5/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        window.print();
    });
</script>

</html>