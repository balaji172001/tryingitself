<?php $__env->startSection('main-container'); ?>
<section>
    <!-- the same class using login page so using same class-- -->
    <div class="login__page signup__page">
        <div class="login__page_block signup__page_block">
            <h1>Sign Up</h1>
            <p>Join our community today! Create an account to unlock exclusive features and personalized experiences.</p>

            <form action="">
                <div class="form__input">
                    <input type="text" placeholder="Enter your First Name" class="form_text" required>
                    <input type="text" placeholder="Enter your Last Name" class="form_text" required>
                </div>

                <div class="form__input form_signup">
                    <input type="text" placeholder="Enter your  Email" class="form_text" required>

                    <div class="form__password">
                        <input type="password" placeholder="Enter your Password" class="form_pass" id="myInput" required>
                        <div onclick="myFunction()">
                            <img src="<?php echo e(asset('assets/images/icon.svg')); ?>" alt="icon">
                        </div>
                    </div>
                </div>

                <h4>Forgot Password?</h4>
                
                <div class="login_a">
                    <a href="#">Login</a>
                </div>
                <div class="signup_a">
                    <a href="">Sign Up</a>
                </div>

                <p class="continue">Or Continue with</p>
                <div class="social_icon">
                    <div class="social__google">
                        <div class="social__google_in">
                            <img src="<?php echo e(asset('assets/images/google_icon.svg')); ?>" alt="google_icon">
                        </div>
                    </div>
                    <div class="social__google">
                        <div class="social__google_in">
                            <img src="<?php echo e(asset('assets/images/fb__icon.svg')); ?>" alt="fb__icon">
                        </div>
                    </div>
                    <div class="social__google">
                        <div class="social__google_in">
                            <img src="<?php echo e(asset('assets/images/app__icon.svg')); ?>" alt="app__icon">
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>

<section>
    <?php echo $__env->make('include.swiper_terminal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Training Session/Your_Bank/resources/views/pages/signup.blade.php ENDPATH**/ ?>