// Voorbeeld JavaScript voor Favoriete docenten pagina

// Functie om een stem toe te voegen aan een docent
function stemmenOpDocent(docentElement) {
    const stemKnop = docentElement.querySelector('.stem-knop');
    const stemTellingElement = docentElement.querySelector('.aantal-stemmen');
    let stemTelling = parseInt(stemTellingElement.textContent);
  
    stemTelling++;
    stemTellingElement.textContent = `${stemTelling} stemmen`;
    stemKnop.disabled = true;
  }
  
  // Event listeners voor stemknoppen
  const docentenItems = document.querySelectorAll('.docenten-lijst li');
  docentenItems.forEach((docentElement) => {
    const stemKnop = docentElement.querySelector('.stem-knop');
    stemKnop.addEventListener('click', () => {
      stemmenOpDocent(docentElement);
    });
  });
  
  // Functie om een opmerking toe te voegen
  function opmerkingToevoegen(opmerkingTekst) {
    const opmerkingenLijst = document.querySelector('.opmerkingen ul');
    const opmerkingItem = document.createElement('li');
    const gebruikerElement = document.createElement('span');
    const tekstElement = document.createElement('span');
  
    gebruikerElement.className = 'opmerking-gebruiker';
    gebruikerElement.textContent = 'Gebruiker:';
    tekstElement.className = 'opmerking-tekst';
    tekstElement.textContent = opmerkingTekst;
  
    opmerkingItem.appendChild(gebruikerElement);
    opmerkingItem.appendChild(tekstElement);
    opmerkingenLijst.appendChild(opmerkingItem);
  }
  
  // Event listener voor het indienen van een opmerking
  const opmerkingFormulier = document.querySelector('.opmerking-toevoegen');
  const opmerkingInvoer = opmerkingFormulier.querySelector('input[type="text"]');
  opmerkingFormulier.addEventListener('submit', (e) => {
    e.preventDefault();
    const opmerkingTekst = opmerkingInvoer.value;
    opmerkingToevoegen(opmerkingTekst);
    opmerkingInvoer.value = '';
  });
  


