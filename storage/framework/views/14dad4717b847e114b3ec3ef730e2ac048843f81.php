<?php $__env->startSection('main-container'); ?>
<section>
    <div class="carrer__your_bank about__your_bank" data-aos="fade-up" data-aos-duration="2000">
        <div class="carrer__your_content about__your_content">
            <h1>Your Security is Our Top  <span>Priority</span> </h1>
            <p>At YourBank, we understand the importance of keeping your financial information secure. We employ robust security measures and advanced technologies to protect your personal and financial data. Rest assured that when you bank with us, your security is our utmost priority.</p>
        </div>
        <div class="carrer__your_img">
            <img src="<?php echo e(asset('assets/images/security.png')); ?>" alt="security">
        </div>
    </div>

</section>



<!-- the below section copy for carrer page-- -->
<section>
    <div class="career__benifits" data-aos-duration="2000" data-aos="zoom-in">
        <div class="career__benifits_head">
            <h2>How We  <span>Protect You</span></h2>
            <p>At YourBank, we prioritize the security and confidentiality of your financial information. Our state-of-the-art encryption technology and stringent data protection measures ensure your assets and transactions are safeguarded at all times</p>
        </div>
        <div class="career__benifits_content security__cart_content">
            <div class="career__benifits_cart security__cart">
                <div class="career__benifits_cart_in">
                    <div class="social__google">
                        <div class="social__google_in">
                            <img src="<?php echo e(asset('assets/images/sec_icon_1.svg')); ?>" alt="sec_icon_1">
                        </div>
                    </div>
                    <h3>Secure Online Banking Platform</h3>
                </div>
                <p>Our online banking platform is built with multiple layers of security to safeguard your information. We utilize industry-standard encryption protocols to ensure that your data remains confidential and protected during transmission.</p>
            </div>
            <div class="career__benifits_cart security__cart">
                <div class="career__benifits_cart_in">
                    <div class="social__google">
                        <div class="social__google_in">
                            <img src="<?php echo e(asset('assets/images/sec_icon_2.svg')); ?>" alt="sec_icon_2">
                        </div>
                    </div>
                    <h3>Multi-Factor Authentication</h3>
                </div>
                <p>To enhance the security of your online banking experience, we employ multi-factor authentication. This additional layer of security requires you to provide multiple pieces of identification, such as a password and a one-time verification code, to access your account.</p>
            </div>
            <div class="career__benifits_cart security__cart">
                <div class="career__benifits_cart_in">
                    <div class="social__google">
                        <div class="social__google_in">
                            <img src="<?php echo e(asset('assets/images/sec_icon_3.svg')); ?>" alt="sec_icon_3">
                        </div>
                    </div>
                    <h3>Fraud Monitoring</h3>
                </div>
                <p>We have sophisticated fraud detection systems in place to monitor your accounts for any suspicious activities. Our dedicated team works around the clock to detect and prevent unauthorized transactions, providing you with peace of mind.</p>
            </div>
            <div class="career__benifits_cart security__cart">
                <div class="career__benifits_cart_in">
                    <div class="social__google">
                        <div class="social__google_in">
                            <img src="<?php echo e(asset('assets/images/sec_icon_4.svg')); ?>" alt="sec_icon_4">
                        </div>
                    </div>
                    <h3>Secure Mobile Banking</h3>
                </div>
                <p>Our mobile banking app is designed with the same level of security as our online banking platform. You can confidently access your accounts, make transactions, and manage your finances on the go, knowing that your information is protected.</p>
            </div>
        </div>
    </div>

</section>

<section>
    <?php echo $__env->make('include.faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Training Session/Your_Bank/resources/views/pages/security.blade.php ENDPATH**/ ?>