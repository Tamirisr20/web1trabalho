if (localStorage.getItem("token")==null) {
    alert("Você precisa estar logado para acessar essa página.");
    window.location.href = "../html/signin.html";
}

let userLogado = JSON.parse(localStorage.getItem("userLogado"));

let logado = document.querySelector("#logado");

function sair() {
    localStorage.removeItem("token");
    localStorage.removeItem("userLogado");
    window.location.href = "../html/signin.html"
}

function salvarAvatar() {
    const form = document.getElementById('avatarForm');
    const formData = new FormData(form);
    const data = {};
    
    formData.forEach((value, key) => {
        data[key] = value;
    });
    
    fetch('save_avatar.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    }).then(response => response.json())
      .then(data => {
          if (data.success) {
              alert('Seu avatar foi salvo!');
          } else {
              alert('Erro ao salvar avatar!');
          }
      });
}