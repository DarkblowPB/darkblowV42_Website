<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <?= form_open_multipart('', 'id="webshop_add_form" autocomplete="off"') ?>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="item_id">Item</label>
                    <select name="item_id" id="item_id" class="form-control reward_selection" style="width: 100%;" required>
                        <option value="" disabled selected>Select Item</option>
                        <?php foreach ($this->darkblowlib->GetItemRewardList() as $key => $value) : ?>
                            <option value="<?= $value['item_id'] ?>"><?= $value['item_name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="item_image">Image</label>
                    <input type="file" name="item_image" id="item_image" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="item_description">Description</label>
                    <textarea name="item_description" id="item_description" rows="10" class="form-control" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <label for=""></label>
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