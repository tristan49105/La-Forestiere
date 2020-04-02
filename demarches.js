let demarchesOnline = document.getElementById("demarchesOnline")
    choixDemarches = document.getElementById("choixDemarche")
    menuActe1 = document.getElementById("menuActe1");

menuActe1.style.display = 'none';
    
choixDemarches.addEventListener('click', function() {
    
choixDemarches.style.display = 'none';
menuActe1.style.display = 'flex';
});