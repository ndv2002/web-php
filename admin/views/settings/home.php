<div class="card p-3">
    <form method="post" enctype="multipart/form-data">

        <h4>Setting</h4>
        <div class="form-group">
            <label for="site_title" class="form-control-label">Site Title</label>
            <input class="form-control" type="text" name="site_title" id="site_title" value="<?php echo $setting['site_title'] ?>">
        </div>
        <div class="form-group">
            <label for="logo_url">Logo URL</label>
            <input class="form-control" type="text" name="logo_url" id="logo_url" value="<?php echo $setting['logo_url'] ?>">
        </div>
        <div class="form-group">
            <label for="favicon_url" class="form-control-label">Favicon URL</label>
            <input class="form-control" type="text" name="favicon_url" id="favicon_url" value="<?php echo $setting['favicon_url'] ?>">
        </div>
        <div class="form-group">
            <label for="meta_description" class="form-control-label">Meta_description</label>
            <input class="form-control" type="text" name="meta_description" id="meta_description" value="<?php echo $setting['meta_description'] ?>">
        </div>
        <div class="form-group">
            <label for="meta_keywords" class="form-control-label">Meta_keywords</label>
            <input class="form-control" type="text" name="meta_keywords" id="meta_keywords" value="<?php echo $setting['meta_keywords'] ?>">
        </div>
        <div class="form-group">
            <label for="contact_email" class="form-control-label">Contact Email</label>
            <input class="form-control" type="text" name="contact_email" id="contact_email" value="<?php echo $setting['contact_email'] ?>">
        </div>
        <div class="form-group">
            <label for="contact_phone" class="form-control-label">Contact Phone</label>
            <input class="form-control" type="text" name="contact_phone" id="contact_phone" value="<?php echo $setting['contact_phone'] ?>">
        </div>
        <div class="form-group">
            <label for="contact_address" class="form-control-label">Contact Address</label>
            <input class="form-control" type="text" name="contact_address" id="contact_address" value="<?php echo $setting['contact_address'] ?>">
        </div>

        <div class="form-group float-end">
            <button name="save-setting" class="btn btn-primary" type="submit">Save</button>
            <a href="/admin/dashboard"><button type="button" class="btn btn-secondary">Cancel</button></a>
        </div>


    </form>
</div>