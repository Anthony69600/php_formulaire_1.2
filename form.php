


<form  action="thanks.php"  method="post">

<div>
  <label  for="nom">Nom :</label>
  <input  type="text"  id="nom"  name="user_name" required>
</div>
<div>
  <label  for="prenom">Prénom :</label>
  <input  type="text"  id="prenom"  name="user_first_name" required>
</div>
<div>
  <label  for="courriel">Courriel :</label>
    <input  type="email"  id="courriel"  name="user_email" required>
</div>
<div>
  <label  for="number_phone">Numéro de téléphone :</label>
  <input  type="text"  id="number_phone"  name="user_phone" required>
</div>
<div>
    <label for="sujet">Quel est le sujet de votre message ?</label>
    <select name="user_subject" id="user_subject" required>
        <option value="" disabled selected hidden>Choisissez le sujet de votre message</option>
        <option value="probleme-compte">Problème avec mon compte</option>
        <option value="question-produit">Question à propos d’un produit</option>
        <option value="suivi-commande">Suivi de ma commande</option>
        <option value="autre">Autre...</option>
    </select>
</div>
<div>
  <label  for="message">Message :</label>
  <textarea  id="message"  name="user_message"></textarea>
</div>
<div  class="button">
  <button  type="submit">Envoyer votre message</button>
</div>
</form>
