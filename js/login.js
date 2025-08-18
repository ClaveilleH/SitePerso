document.addEventListener("DOMContentLoaded", () => {

  const overlay = document.getElementById("login-overlay");
  const openBtn = document.getElementById("login_button");
  const closeBtn = document.getElementById("close-login");
  const form = document.getElementById("login-form");
  const messageBox = document.getElementById("login-message");

  if (openBtn && overlay && closeBtn && form && messageBox) {
    openBtn.onclick = () => overlay.style.display = "block";
    closeBtn.onclick = () => overlay.style.display = "none";
    window.onclick = (e) => { if (e.target === overlay) overlay.style.display = "none"; };

    form.onsubmit = async (e) => {
      e.preventDefault(); // pas de rechargement
      messageBox.textContent = "Vérification...";
      messageBox.className = "";

      const formData = new FormData(form);
      const response = await fetch("login.php", {
        method: "POST",
        body: formData
      });

      // const text = await response.text();
      // console.log(text);        // <-- affiche ce que PHP renvoie vraiment
      const result = await response.json();

      if (result.success) {
        messageBox.textContent = "Connexion réussie 🎉";
        messageBox.className = "success";
        setTimeout(() => overlay.style.display = "none",  500);
      } else {
        messageBox.textContent = result.message || "Identifiants incorrects";
        messageBox.className = "error";
      }
    };  
  }

  const accountBtn = document.getElementById("accout_button");
  if (accountBtn) {
    // accountBtn.onclick = () => 
  }

});