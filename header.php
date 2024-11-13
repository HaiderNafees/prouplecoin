<?php
if (!defined('ABSPATH')) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <main id="main-content">

    <!-- Auth Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Welcome</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <!-- Login Form -->
                    <div id="loginForm">
                        <h4>Sign In</h4>
                        <form>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Sign In</button>
                            <p class="text-center mt-3">
                                <a href="#" class="toggle-auth" data-type="register">Create new account</a>
                            </p>
                        </form>
                    </div>

                    <!-- Register Form -->
                    <div id="registerForm" style="display: none;">
                        <h4>Create Account</h4>
                        <form>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Create Account</button>
                            <p class="text-center mt-3">
                                <a href="#" class="toggle-auth" data-type="login">Already have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 