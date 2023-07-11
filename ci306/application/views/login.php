<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Responsive Login and Signup Form </title>
    </head>
    <body>
        <section class="container1 forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>

                    <form action="<?php echo base_url('../Welcome/log'); ?>" method="post">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input" name="mail">
                        </div>
                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password" name="mdp">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button>Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                    </div>
                </div>
            </div>


            <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form action="<?php echo base_url('../Welcome/inscri'); ?>" method="post">
                        <div class="field input-field">
                            <input type="text" placeholder="User name" class="input" name="nom">
                        </div>

                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input" name="mail">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Create password" class="password" name="mdp">
                        </div>
                        <div class="field button-field">
                            <button>Signup</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>

            </div>
        </section>

        <!-- JavaScript -->
        <script src="<?php echo base_url('js/script.js'); ?>"></script>
        
    </body>
</html>