// Űrlap ellenőrző script
function validateForm() {
    // Név ellenőrzése
    var nameInput = document.getElementById("FormControlTextarea").value.trim();
    if (nameInput === "") {
      alert("Kérlek add meg a nevedet!");
      return false;
    }
    
    // Email cím ellenőrzése
    var emailInput = document.getElementById("exampleFormControlInput1").value.trim();
    if (emailInput === "") {
      alert("Kérlek add meg az email címedet!");
      return false;
    }
    
    // Email cím formátumának ellenőrzése
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailInput)) {
      alert("Kérlek adj meg egy érvényes email címet!");
      return false;
    }
    
    // Lakcím ellenőrzése
    var addressInput = document.getElementById("FormControlTextarea1").value.trim();
    if (addressInput === "") {
      alert("Kérlek add meg a lakcímedet!");
      return false;
    }
    
    // Minden adat helyesen van megadva
    alert("Az űrlap adatok helyesek!");
    return true;
  }
  