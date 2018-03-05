<form id="registration_form" action="<?php echo BASE_URL;?>register/<?php echo $task?>" method="post">

    <fieldset>
        <legend>Register Here</legend>
        <label for="first_name">First Name: </label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" required="first_name" />
        <br />

        <label for="last_name">Last Name: </label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name;?>" required="last_name" />
        <br />

        <label for="email">E-mail Address: </label>
        <input type="text" id="email" name="email" value="<?php echo $email;?>" required="email" />
        <br />

        <label for="password">Password: </label>
        <input type="password" id="password" name="password" value="<?php echo $password;?>" required="password" />

        <br />


        <button id="submit" type="submit">Register</button>
    </fieldset>
</form>
