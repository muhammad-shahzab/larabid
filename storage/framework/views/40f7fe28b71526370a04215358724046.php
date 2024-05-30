<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/login.css')); ?>">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="left">
            <div class="leftimg"><img src="<?php echo e(asset('assets/images/dis.png')); ?>" alt="Left Image" /></div>
            
        </div>
        
        <div class="right">
            <form action="<?php echo e(route('login.submit')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('post'); ?>
                <div class="loginbox">
                    
                    <div class="logo"></div>
                    
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter Email Here" class="inp emailinp" required/>
                    
                    <label for="password">Password</label>
                    <div class="pas">
                        <input type="password" name="password" placeholder="Enter Password Here" class="inp pasinp" required/>
                        <p class="togglepass" id="toggleBtn" onClick={passwordToggle}>show/hide</p>
                    </div>
                    
                    <div class="btnbox">
                        <input type="submit"  value="Login" class="btn" name="login"/>
                        <button class="btn"><a href="<?php echo e(route('signup.index')); ?>">Signup</a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="<?php echo e(asset('assets/javascripts/login.js')); ?>"></script>
</html>
<?php /**PATH C:\Users\mshah\OneDrive\Documents\asdss daigrams\larabid\larabid\resources\views/login.blade.php ENDPATH**/ ?>