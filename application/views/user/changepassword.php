<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= base_url('user/changepassword'); ?>" method="post">
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                </div>
            </form>
        </div>
    </div>
    
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->