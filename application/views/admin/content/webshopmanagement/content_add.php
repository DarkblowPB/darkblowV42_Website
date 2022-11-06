<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <?= form_open('', 'id="webshop_add_form" autocomplete="off"') ?>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="itemid">Item</label>
                    <select name="webshop_itemid" id="webshop_itemid" class="form-control reward_selection" style="width: 100%;" required>
                        <option value="" disabled selected>Select Item</option>
                        <?php foreach ($this->darkblowlib->GetItemRewardList() as $key => $value) : ?>
                            <option value="<?= $value['item_id'] ?>"><?= $value['item_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="webshop_itemdescription">Item Description</label>
                    <textarea name="webshop_itemdescription" id="webshop_itemdescription" class="form-control" rows="10" placeholder="Item Description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="webshop_itemimg">Image</label>
                    <input type="file" name="webshop_itemimg" id="webshop_itemimg" class="form-control-file" required>
                </div>
                <div class="form-group">
                    <label for="webshop_itemprice_3days">3 Days Price</label>
                    <input type="number" name="webshop_itemprice_3days" id="webshop_itemprice_3days" class="form-control" placeholder="3 Days Price" required>
                </div>
                <div class="form-group">
                    <label for="webshop_itemprice_7days">7 Days Price</label>
                    <input type="number" name="webshop_itemprice_7days" id="webshop_itemprice_7days" class="form-control" placeholder="7 Days Price" required>
                </div>
                <div class="form-group">
                    <label for="webshop_itemprice_30days">30 Days Price</label>
                    <input type="number" name="webshop_itemprice_30days" id="webshop_itemprice_30days" class="form-control" placeholder="30 Days Price" required>
                </div>
                <div class="form-group">
                    <label for="webshop_itemprice_permanent">Permanent Price</label>
                    <input type="number" name="webshop_itemprice_permanent" id="webshop_itemprice_permanent" class="form-control" placeholder="Permanent Price" required>
                </div>
            </div>
            <div class="card-footer text-right">
                <input type="submit" id="submit" class="btn btn-outline-primary text-white" value="Submit">
            </div>
        </div>
        <?= form_close() ?>
        <script>
            function DoAddWebshop() {

            }
        </script>
    </div>
</div>