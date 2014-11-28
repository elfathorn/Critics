{{ form('users/create', 'method' : 'post', 'class': 'form-signin', 'role' : 'form') }}
  <h2 class="form-signin-heading">Inscrivez vous</h2>

  <label for="inputEmail" class="sr-only">Email</label>
  {{ email_field('inputEmail', 'class' : 'form-control', 'placeholder' : 'Email', 'name' : 'email') }}

  <label for="inputPassword" class="sr-only">Mot de passe</label>
  {{ password_field('inputPassword', 'class' : 'form-control', 'placeholder' : 'Mot de passe', 'name' : 'password') }}

  {{ submit_button("S'enregistrer", 'class' : 'btn btn-lg btn-primary btn-block') }}
</form>

<form method="post">
    <?php
        //Traverse the form
        foreach ($form as $element) {

            echo $form->renderDecorated($element->getName());

        }
    ?>
    <input type="submit" value="Send"/>
</form>