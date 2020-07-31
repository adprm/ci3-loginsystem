<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <!-- table row -->
    <div class="row">
        <div class="col-lg-6">
            <!-- btn add new menu -->
            <a href="" class="btn btn-primary mb-3">Add New Menu</a>
            <!-- table -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $i = 1; ?>
                    <?php foreach($menu as $m) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $m['menu']; ?></td>
                        <td>
                            <a class="badge badge-success" href="">edit</a>
                            <a class="badge badge-danger" href="">delete</a>
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