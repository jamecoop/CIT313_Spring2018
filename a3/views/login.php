<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> the Login View </h1>

        <form id="login_form" action="<?php echo BASE_URL;?>login/do_login" method="post">

            <fieldset>
                <legend>Log In</legend>
                <label for="username">Username/E-mail Address:</label>
                <input type="text" id="email" name="email" required="username" />
                <br />

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required="password" />
                <br />

                <br />

                <button id="submit" type="submit">Log In</button>
            </fieldset>
        </form>

  </div>
</div>
<?php include('elements/footer.php');?>

