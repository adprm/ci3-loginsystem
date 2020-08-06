<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <!-- table row -->
    <div class="row">
        <div class="col-lg-6">
            <!-- table -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $i = 1; ?>
                    <?php foreach($role as $r) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $r['role']; ?></td>
                        <td>
                            <a class="badge badge-warning" href="<?= base_url('admin/roleaccess/') . $r['id']; ?>">access</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->