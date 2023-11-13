    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="post" action="<?= base_url('auth/register'); ?>">
                <h1>Create Account</h1>
                <input type="text" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                <?= form_error('name', '<small>', '</small>'); ?>
                <input type="text" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small>', '</small>'); ?>
                <input type="password" id="password1" name="password1" placeholder="Password">
                <?= form_error('password1', '<small>', '</small>'); ?>
                <input type="password" id="password2" name="password2" placeholder="Repeat Password">
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="post" action="<?= base_url('auth'); ?>">
                <h1>Sign In</h1>

                <?= $this->session->flashdata('message'); ?>
                <input type="text" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                <?= form_error('email', '<small>', '</small>'); ?>
                <input type="password" id="password" name="password" placeholder="Password">
                <?= form_error('password', '<small>', '</small>'); ?>
                <a href="#">Forget Your Password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

