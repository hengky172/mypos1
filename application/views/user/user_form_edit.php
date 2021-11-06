<section class="content-header">
    <h1>User
        <small>Pengguna</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-users"></i></a></li>
        <li class="active">Users</li>
    </ol>
</section>
<!-- Main Content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Edit User</h3>
            <div class="pull-right">
                <a href="<?= site_url('user'); ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Backs
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="" method="post">
                        <div class="form-group <?= form_error('fullname') ? 'has-error' : null; ?>">
                            <label for="name">Name *</label>
                            <input type="hidden" name="user_id" value="<?= $row->user_id; ?>">
                            <input type="text" name="fullname" id="name" value="<?= $this->input->post('fullname') ?? $row->name  ?>" class="form-control">
                            <?= form_error('fullname'); ?>
                        </div>
                        <div class="form-group <?= form_error('username') ? 'has-error' : null; ?>">
                            <label for="username">Username *</label>
                            <input type="text" name="username" id="username" value="<?= $this->input->post('username') ?? $row->username ?>" class="form-control">
                            <?= form_error('username'); ?>
                        </div>
                        <div class="form-group <?= form_error('password') ? 'has-error' : null; ?>">
                            <label for="password">Password</label> <small>(Biarkan Kosong Jika tidak diganti)</small>
                            <input type="password" name="password" id="password" value="<?= $this->input->post('password') ?>" class="form-control">
                            <?= form_error('password'); ?>
                        </div>
                        <div class="form-group <?= form_error('passconf') ? 'has-error' : null; ?>">
                            <label for="passwordcon">Password Confirmation</label>
                            <input type="password" name="passconf" id="passwordcon" value="<?= $this->input->post('passconf') ?>" class="form-control">
                            <?= form_error('passconf'); ?>
                        </div>
                        <div class="form-group <?= form_error('address') ? 'has-error' : null; ?>">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="form-control"><?= $this->input->post('address') ?? $row->address ?></textarea>
                            <?= form_error('address'); ?>
                        </div>
                        <div class="form-group <?= form_error('level') ? 'has-error' : null; ?>">
                            <label>Level *</label>
                            <select name="level" class="form-control">
                                <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                                <option value="1">Admin</option>
                                <option value="2" <?= $level == 2 ? 'selected' : null ?>>Kasir</option>
                            </select>
                            <?= form_error('level'); ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Edit
                            </button>
                            <button type="reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>