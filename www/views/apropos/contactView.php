<h1 class="titrePageSalle marginTop40">Formulaire de contact</h1>
<form action="<?php echo \controller\superController\superController::URL ?>apropos/contact" method="post" class="formContact marginTop40">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" placeholder="Nom…" required/>
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom" placeholder="Prénom…" required/>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="exemple@mail.com" required/>
    <label for="message">Votre message:</label>
    <textarea name="message" id="message" class="textareaContact" required></textarea>
    <input type="submit" class="btnFormContact" value="Envoyer" name="btnFormContact"/>
</form>