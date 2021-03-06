
        <h1> <span class="glyphicon glyphicon-home"></span>&nbsp;Welcome Add Users</h1>

    </div>
</div>
<div class="container">
    <h3>USERS LIST</h3>
    <?php
    if($this->session->flashdata('success_msg')){
        ?>
        <div class="alert-success">
            <?=$this->session->flashdata('success_msg');?>
        </div>
        <?php
    }
    ?>
    <?php
    if($this->session->flashdata('error_msg')){
        ?>
        <div class="alert-success">
            <?=$this->session->flashdata('error_msg');?>
        </div>
        <?php
    }
    ?>
    <a href="<?= base_url('users/add') ?>" class="btn btn-default">Add New</a>

    <table class="table table-bordered table-responsive">
        <thead>
        <tr>
            <td>Id</td>
            <th>User_name</th>
            <th>User_email</th>
            <th>User_country_id</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($all_users as $user): ?>
        <tr>
            <td><?=$user['id'];?></td>
            <td><?=$user['user_name'];?></td>
            <td><?=$user['user_email'];?></td>
            <td><?=$user['user_country_id'];?></td>
            <td>
                 <a href="<?= base_url('users/edit/'.$user['id']);?>" class="btn btn-info">Edit</a>
                <a  href="<?= base_url('users/delete/'.$user['id']);?>" class="btn btn-danger"
                    onclick="return confirm('do you want to delete this record?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
