document.getElementById('child-form').addEventListener('submit', function(event) {
    var childName = document.getElementById('child-name').value;
    var dentistName = document.getElementById('dentist-name').value;

    if (!childName || !dentistName) {
        event.preventDefault();
        alert('Por favor, preencha todos os campos.');
    }
});
