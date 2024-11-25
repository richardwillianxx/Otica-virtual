<div class="body-camera">

    <img src="../../img/botaoX.png" alt="Fechar" class="botaoX" onclick="window.location.href='javascript:history.back()'"> <!-- Ícone de imagem -->
    <video id="video" width="640" height="480" autoplay></video>

</div>




<script>
    // Função para iniciar a câmera
    function startCamera() {
        if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            const constraints = {
                video: {
                    facingMode: 'user'
                }
            };
            navigator.mediaDevices.getUserMedia(constraints)
                .then(function(stream) {
                    const video = document.getElementById('video');
                    video.srcObject = stream;
                })
                .catch(function(error) {
                    console.error("Erro ao acessar a câmera: ", error);
                });
        } else {
            alert("Seu navegador não suporta a câmera.");
        }
    }

    // Chama a função para iniciar a câmera assim que a página é carregada
    window.onload = startCamera;
</script>

