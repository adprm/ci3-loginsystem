<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <!-- table row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card-body">
                <!-- alert error edit data -->
                <?= $this->session->flashdata('message_error_editsubmenu'); ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $subMenu->id ?>" />
                    <!-- edit name submenu -->
                	<div class="form-group">
                		<label for="menu">Title Sub Menu</label>
                		<input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
                		 type="text" name="title" placeholder="Title menu" value="<?php echo $subMenu->title ?>" />
                		<div class="invalid-feedback">
                			<?php echo form_error('title') ?>
                		</div>
                    </div>
                    <!-- edit menu -->
                    <div class="form-group">
                        <label for="menu">Menu</label>
                        <select name="menu_id" id="menu_id" class="form-control">
                        <option value="">Select Menu</option>
                        <?php foreach ($menu as $m) : ?>
                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- edit url submenu -->
                	<div class="form-group">
                		<label for="url">Url menu</label>
                		<input class="form-control <?php echo form_error('url') ? 'is-invalid':'' ?>"
                		 type="text" name="url" placeholder="Url menu" value="<?= $subMenu->url ?>" />
                		<div class="invalid-feedback">
                			<?php echo form_error('url') ?>
                		</div>
                    </div>
                    <!-- edit icon submenu -->
                	<div class="form-group">
                		<label for="icon">Icon menu</label>
                		<input class="form-control <?php echo form_error('icon') ? 'is-invalid':'' ?>"
                		 type="text" name="icon" placeholder="Icon menu" value="<?= $subMenu->icon ?>" />
                		<div class="invalid-feedback">
                			<?php echo form_error('icon') ?>
                		</div>
                    </div>
                    <!-- edit is active sub menu -->
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active">
                            <label class="form-check-label" for="is_active">
                            Active?
                            </label>
                        </div>
                    </div>
                    <!-- btn -->
                	<input class="btn btn-success" type="submit" name="btn" value="Update" />
                </form>
			</div>
        </div>
    </div>
    
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->