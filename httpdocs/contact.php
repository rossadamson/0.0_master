<?php include_once 'particles/header.php'; ?>


<!-- First Panel -->

<div class="jumbotron jumbotron-fluid bg-image text-white">
    <div class="bg-dark-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 animated fadeInLeft">
                <h2  class=" uppercase">Contact us</h2>
                <h3>We would love to hear what you have to say, fill in the form below and we will get back to you as soon as possable</h3>
            </div>
        </div>
    </div>
</div>

<div class="container" id="Section1">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 m-b-2">
            <div class="main-section">
                <?php include_once 'particles/form-validation.php'; ?>

                <form method="post" class="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="Name*" id="name" value="<?php echo $name;?>"/>
                            <label class="name">Name*:</label>
                            <span class="error"> <?php echo $nameErr;?></span>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="email" placeholder="E-mail*" id="email" value="<?php echo $email;?>"/>
                            <label class="email">E-mail*:</label>
                            <span class="error"> <?php echo $emailErr;?></span>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="website" placeholder="Website" id="website" value="<?php echo $website;?>"/>
                            <label class="website">Website:</label>
                            <span class="error"><?php echo $websiteErr;?></span>
                        </div>
                        <div class="col-md-6">

                            <div class="row radio-header">
                                <div class="col-md-12 ">
                                    <label class="check-label">Gender*:</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?> value="female" id="female"/><label for="female" class="check-label">Female<div class="checker"></div></label>
                                </div>

                                <div class="col-xs-6">
                                    <input type="radio" name="gender" id="male" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"/><label for="male" class="check-label">Male <div class="checker"></div></label>

                                </div>

                                <div class="col-md-12">
                                    <span class="error"> <?php echo $genderErr;?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="comment" rows="3" cols="40" id="comment" placeholder="Comment"><?php echo $comment;?></textarea>
                            <label class="comment">Comment:</label>
                        </div>
                    </div>


                    <p><span class="error">* required field.</span></p>
                    <input type="submit" name="submit" value="Submit" class="btn btn-gold">
                </form>

                <div class="row">
                    <div class="col-md-12 form-input">
                        <h3>Your input</h3>

                        <?php if ($name): ?>
                        <div class="label">
                            <span>Name:</span>
                            <?php echo $name; ?>
                        </div>
                        <?php endif; ?>

                        <?php if ($email): ?>
                        <div class="label">
                            <span>E-mail:</span>
                            <?php echo $email; ?>
                        </div>
                        <?php endif; ?>

                        <?php if ($website): ?>
                        <div class="label">
                            <span>Website:</span>
                            <?php echo $website; ?>
                        </div>
                        <?php endif; ?>


                        <?php if ($gender): ?>
                        <div class="label">
                            <span>Gender:</span>
                            <?php echo $gender; ?>
                        </div>
                        <?php endif; ?>

                        <?php if ($comment): ?>
                        <div class="label">
                            <span>Comment:</span>
                            <?php echo $comment; ?>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>


<?php include_once 'particles/footer.php'; ?>
