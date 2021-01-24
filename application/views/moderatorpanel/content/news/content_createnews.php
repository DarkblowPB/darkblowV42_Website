<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <h5 class="card-header">Create News</h5>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label>News Title</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="news_title" class="form-control" minlength="10" max="255" autocomplete="off" autofocus required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label>News Description</label>
                    </div>
                    <div class="col-sm-9">
                        <textarea name="news_description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <label>News Image</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="file" name="news_img" class="form-control-file" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12">
                        <button type="reset" class="btn btn-outline-danger"><i class="fas fa-eraser mr-2"></i>Reset</button>
                        <button type="submit" class="btn btn-outline-primary"><i class="fas fa-paper-plane mr-2"></i>Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>