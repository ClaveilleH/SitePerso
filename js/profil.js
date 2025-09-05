const form = document.getElementById('profil-form');
const messageBox = document.getElementById('message');

form.addEventListener('submit', async function (e) {
  e.preventDefault();

  const formData = new FormData(form);

  const response = await fetch('profil_update.php', {
    method: 'POST',
    body: formData
  });

  const text = await response.text();
  console.log('[DEBUG]', text);
  const result = JSON.parse(text);
  // const result = await response.json();

  if (result.success) {
    messageBox.style.color = 'green';
    messageBox.textContent = 'Profil mis à jour avec succès !';
  } else {
    messageBox.style.color = 'red';
    messageBox.textContent = result.message || 'Erreur lors de la mise à jour.';
  }
});
