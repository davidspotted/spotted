<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'The fields {{ fields }} were not expected.' => 'Les champs {{ fields }} n\'ont pas été prévus.',
    'The fields {{ fields }} are missing.' => 'Les champs {{ fields }} sont manquants.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} characters.' => 'Cette chaine doit avoir exactement {{ limit }} caractère.|Cette chaine doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait',
    'fos_user.username.short' => '[-Inf,Inf]Le nom d\'utilisateur est trop court',
    'fos_user.username.long' => '[-Inf,Inf]Le nom d\'utilisateur est trop long',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait',
    'fos_user.email.short' => '[-Inf,Inf]L\'adresse e-mail est trop courte',
    'fos_user.email.long' => '[-Inf,Inf]L\'adresse e-mail est trop longue',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait',
    'fos_user.password.short' => '[-Inf,Inf]Le mot de passe est trop court',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait',
    'fos_user.new_password.short' => '[-Inf,Inf]Le nouveau mot de passe est trop court',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait',
    'fos_user.group.short' => '[-Inf,Inf]Le nom est trop court',
    'fos_user.group.long' => '[-Inf,Inf]Le nom est trop long',
  ),
  'messages' => 
  array (
    'login.header.title' => 'Bienvenu sur Spotted - Connexion',
    'Symfony2 is great' => 'J\'aime Symfony2',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Nom d\'utilisateur ou mot de passe incorrect',
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour',
    'group.flash.created' => 'Le groupe a été créé',
    'group.flash.deleted' => 'Le groupe a été supprimé',
    'security.login.username' => 'Nom d\'utilisateur :',
    'security.login.password' => 'Mot de passe :',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Enregistrer',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès',
    'registration.email.subject' => 'Bienvenue %username% !',
    'registration.email.message' => 'Bonjour %username% !

Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe.
',
    'resetting.password_already_requested' => 'Un nouveau mot de passe a déjà été demandé pour cet utilisateur dans les dernières 24 heures.',
    'resetting.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien sur lequel il vous faudra cliquer afin de réinitialiser votre mot de passe.',
    'resetting.request.invalid_username' => 'Le nom d\'utilisateur ou l\'adresse e-mail "%username%" n\'existe pas.',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail :',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe.
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe :',
    'form.username' => 'Nom d\'utilisateur :',
    'form.email' => 'Adresse e-mail :',
    'form.current_password' => 'Mot de passe actuel :',
    'form.password' => 'Mot de passe :',
    'form.password_confirmation' => 'Vérification :',
    'form.new_password' => 'Nouveau mot de passe :',
    'form.new_password_confirmation' => 'Vérification :',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'The fields {{ fields }} were not expected.' => 'The fields {{ fields }} were not expected.',
    'The fields {{ fields }} are missing.' => 'The fields {{ fields }} are missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user current password.' => 'This value should be the user current password.',
    'This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'fos_user.username.already_used' => 'The username is already used',
    'fos_user.username.blank' => 'Please enter a username',
    'fos_user.username.short' => '[-Inf,Inf]The username is too short',
    'fos_user.username.long' => '[-Inf,Inf]The username is too long',
    'fos_user.email.already_used' => 'The email is already used',
    'fos_user.email.blank' => 'Please enter an email',
    'fos_user.email.short' => '[-Inf,Inf]The email is too short',
    'fos_user.email.long' => '[-Inf,Inf]The email is too long',
    'fos_user.email.invalid' => 'The email is not valid',
    'fos_user.password.blank' => 'Please enter a password',
    'fos_user.password.short' => '[-Inf,Inf]The password is too short',
    'fos_user.password.mismatch' => 'The entered passwords don\'t match',
    'fos_user.new_password.blank' => 'Please enter a new password',
    'fos_user.new_password.short' => '[-Inf,Inf]The new password is too short',
    'fos_user.current_password.invalid' => 'The entered password is invalid',
    'fos_user.group.blank' => 'Please enter a name',
    'fos_user.group.short' => '[-Inf,Inf]The name is too short',
    'fos_user.group.long' => '[-Inf,Inf]The name is too long',
  ),
  'messages' => 
  array (
    'login.header.title' => 'Welcome to Spotted - Login',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Invalid username or password',
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated',
    'group.flash.created' => 'The group has been created',
    'group.flash.deleted' => 'The group has been deleted',
    'security.login.username' => 'Username:',
    'security.login.password' => 'Password:',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Login',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

Regards,
the Team.
',
    'resetting.password_already_requested' => 'The password for this user has already been requested within the last 24 hours.',
    'resetting.check_email' => 'An email has been sent to %email%. It contains a link you must click to reset your password.',
    'resetting.request.invalid_username' => 'The username or email address "%username%" does not exist.',
    'resetting.request.username' => 'Username or email address:',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Logout',
    'layout.login' => 'Login',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
    'form.group_name' => 'Group name:',
    'form.username' => 'Username:',
    'form.email' => 'Email:',
    'form.current_password' => 'Current password:',
    'form.password' => 'Password:',
    'form.password_confirmation' => 'Verification:',
    'form.new_password' => 'New password:',
    'form.new_password_confirmation' => 'Verification:',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);


return $catalogue;
