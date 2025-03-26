
$(document).ready(function() {
  $('#connexion').submit(function(e) {
      e.preventDefault(); // Empêche le rechargement de la page

      var $form = $(this);
      var data = $form.serialize(); // Sérialise les données du formulaire
      var url = 'processings/connection.php'; // URL du script PHP

      // Vérification des champs non vides
      var isValid = true;
      $form.find('input, textarea, select').each(function() {
          var $this = $(this);
          if ($(this).val() === null || $(this).val().trim() === '') {
              isValid = false;
              $this.css('border', '1px solid red'); // Mettre une bordure rouge pour indiquer l'erreur
          } else {
              $this.css('border', ''); // Réinitialiser la bordure si le champ est valide
          }
      });

      if (!isValid) {
          Swal.fire({
              icon: 'error',
              title: 'Erreur',
              text: 'Veuillez remplir tous les champs.',
          });
          return; // Empêche l'envoi de la requête AJAX si des champs sont vides
      }

      // Envoie une requête POST avec les données du formulaire
      $.post(url, data, function(response) {
          console.log(response); // Affiche la réponse dans la console
          if (response === 'ok') {
              Swal.fire({
                  icon: 'success',
                  title: 'Succès',
                  text: 'Connexion réussie !',
              }).then(() => {
                  window.location.href = 'home';
              });
          } 

          if (response === '2') {
              Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: 'Vos informations sont incorrect.',
              })
          } 
         
      }).fail(function(jqXHR, textStatus, errorThrown){
          // Gère les erreurs
          console.error('Erreur lors de la requête AJAX:', textStatus, errorThrown);
          Swal.fire({
              icon: 'error',
              title: 'Erreur',
              text: 'Une erreur est survenue. Veuillez réessayer.',
          });
      });
  });
});

