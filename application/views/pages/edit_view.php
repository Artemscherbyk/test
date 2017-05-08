
<h1> <span class="glyphicon glyphicon-home"></span>&nbsp;Welcome Edit Users</h1>

</div>
</div>
<div class="container">
    <h3>EDIT USERS </h3>

    <a href="<?= base_url('users/index') ?>" class="btn btn-default">Back</a>
    <form action="<?= base_url('users/update') ?>" method="post" class="form-horizontal" ">

    <input type="hidden" name="id_hidden" value="<?=$user_edit['id'];?>">

    <div class="form-group">
        <label for="name user" class="col-md-2 text-right" >Name user</label>
        <div class="col-md-10">
            <input type="text" name="name" value="<?=$user_edit['user_name'];?>" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label for="email user" class="col-md-2 text-right">Email user</label>
        <div class="col-md-10">
            <input type="text" name="email" value="<?=$user_edit['user_email'];?>" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label for="country user" class="col-md-2 text-right">Country user</label>
        <div class="col-md-10">
            <input type="text" name="country"value="<?=$user_edit['user_country_id'];?>" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 text-right"></label>
        <div class="col-md-10">
            <input type="submit" name="btn_save" value="UPDATE" class="btn btn-primary">
        </div>
    </div>

    </form>
