<?php include('header.php') ?>

<form action="addmembers.php" method="post" enctype="multipart/form-data">

                  <p>Veuillez taper votre pseudo:</p>
                    <input type="text" name="pseudo" required/>

                  <p>Veuillez taper votre mot de passe:</p>
                    <input type="password" name="pass" required/>

                    <p>Veuillez confirmer votre mot de passe:</p>
                      <input type="password" name="pass2" required/>

                    <p>Veuillez taper votre email:</p>
                      <input type="email" name="email" required/>

                    <p >Valider :</p>
                      <input class="sub" type="submit" name="valid" value="Valider l'inscription" />
     </form>

<?php include('footer.php') ?>