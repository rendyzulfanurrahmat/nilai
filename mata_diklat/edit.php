<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>modul edit mata_diklat</h1>
        </div>
        <div class="col-4">
            <a href="?m=mata_diklat&s=tampil" class="btn btn-large btn-info float-end" style="float: end;"> kembali </a>
        </div>
        <?php
        include_once('koneksi.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM mata_diklat WHERE id ='$id' ";
        $query = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_array($query);
        ?>
        <div class="col">
        <form action="?m=mata_diklat&s=update" method="post">
            <div class="mb-2">
                <label for="">mata diklat</label>
                <input type="text" name="matadiklat" value="<?= $row['matadiklat'] ?>"  class="form-control" autofocus>
            </div>
            <div class="mb-2">
                <label for="">sks</label>
                <input type="number" name="sks" value="<?= $row['sks'] ?>"  class="form-control">
            </div>
            <div class="mb-2">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <input type="reset"class="btn btn-warning">
                <input type="submit" name="update" value="update" class="btn btn-primary">
            </div>          
        </form>
        </div>
    </div>
</section>