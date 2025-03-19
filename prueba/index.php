<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fusa-Fusion</title>
    <link rel="icon" href="img/icom.gif">

    <meta name="description" content="Fusa, el destino culinario donde la tradición se encuentra con la innovación, ofreciendo exquisitas fusiones de sabores que cautivan tus sentidos en cada bocado.">

    <!-- Meta etiquetas para redes sociales -->
    <meta property="og:title" content="Fusa-fusion">
    <meta property="og:description" content="Fusa, el destino culinario donde la tradición se encuentra con la innovación, ofreciendo exquisitas fusiones de sabores que cautivan tus sentidos en cada bocado.">
    <meta property="og:url" content="https://lacarta.shop/fusa/">
    <meta property="og:image" content="https://lacarta.shop/fusa/img/LOGO-rojo.gif">

    <!-- Meta etiquetas para Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Fusa-fusion">
    <meta name="twitter:description" content="Fusa, el destino culinario donde la tradición se encuentra con la innovación, ofreciendo exquisitas fusiones de sabores que cautivan tus sentidos en cada bocado.">
    <meta name="twitter:image" content="https://lacarta.shop/fusa/img/LOGO-rojo.gif">
    <meta name="keywords" content="Restaurante, Fusión de cocina, Comida gourmet, Experiencia gastronómica">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="loader-container">
        <div id="lottie-loader"></div>
    </div>
    holaa
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js"></script>
    <script>
        // Carga la animación Lottie desde el archivo JSON
        const loaderContainer = document.getElementById('loader-container');
        const lottieLoader = document.getElementById('lottie-loader');

        const animationData = {
            container: lottieLoader,
            renderer: 'svg', // Puedes usar 'canvas' en lugar de 'svg' si lo prefieres
            loop: false, // No deseamos que la animación se repita
            autoplay: true, // No deseamos que la animación se reproduzca automáticamente
            path: 'prueba.json'
            // path: 'json/jusafinal.json' // Ruta al archivo JSON de animación
        };

        const anim = lottie.loadAnimation(animationData);

        // Espera a que se cargue completamente la página y luego oculta el pre-loader deslizándolo hacia arriba
        anim.addEventListener('complete', () => {
            setTimeout(() => {
                loaderContainer.style.transform = 'translateY(-100%)';
            }, 1000); // Agrega un retardo opcional antes de ocultar el pre-loader
        });
    </script>
</body>
</html>