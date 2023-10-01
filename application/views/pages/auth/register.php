<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 mx-auto text-center">
            <?php $this->load->view('layouts/_alert'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header"><?= $title; ?></div>
                <div class="card-body">
                    <?= form_open('register', ['method' => 'POST']); ?>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <!-- <input type="text" class="form-control" required autofocus name="name" id="name"> -->
                        <?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true]) ?>
                        <?= form_error('name') ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <!-- <input type="email" class="form-control" required name="email" id="email"> -->
                        <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'User your acitive email', 'required' => true]) ?>
                        <?= form_error('email') ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <!-- <input type="password" class="form-control" required name="password" id="password"> -->
                        <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'minimal 6 krakter', 'required' => true]) ?>
                        <?= form_error('password') ?>
                    </div>
                    <div class="form-group">
                        <label for="password-confirmed">Password Confirmation</label>
                        <!-- <input type="password" class="form-control" required name="password-confirmed"
                            id="password-confirmed"> -->
                        <?= form_password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'Confirm your password', 'required' => true]) ?>
                        <?= form_error('password_confirmation') ?>
                    </div>
                    <button type="submit" class="btn btn-success"><?= $title; ?></button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</main>