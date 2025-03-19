let redireccionHecha = false; // Variable para rastrear si la redirección ya se ha realizado

        // Función para redirigir la página si el ancho de la pantalla es menor o igual a 1380px
        function redirigirSiPantallaPequeña() {
            if (window.innerWidth <= 875 && !redireccionHecha) {
                // Cambia la URL a la que quieras redirigir
                window.location.href = 'home';
                redireccionHecha = true; // Marca que la redirección se ha realizado
            }
        }

        // Función para redirigir la página si el ancho de la pantalla es mayor de 1380px
        function redirigirSiPantallaGrande() {
            if (window.innerWidth > 875 && !redireccionHecha) {
                // Cambia la URL a la que quieras redirigir
                window.location.href = 'home';
                redireccionHecha = true; // Marca que la redirección se ha realizado
            }
        }

        // Media query para verificar si la pantalla es menor o igual a 1380px
        const mediaQueryPequeña = window.matchMedia("(max-width: 875px)");
        // Media query para verificar si la pantalla es mayor de 1380px
        const mediaQueryGrande = window.matchMedia("(min-width: 876px)");

        // Llama a la función correspondiente cuando se carga la página
        window.addEventListener('complete', () => {
            redirigirSiPantallaPequeña(); // Redirige si es pequeña
            redirigirSiPantallaGrande(); // Redirige si es grande
        });

        // Llama a las funciones cuando cambia el tamaño de la ventana
        mediaQueryPequeña.addListener((event) => {
            if (event.matches) {
                redirigirSiPantallaPequeña();
            }
        });

        mediaQueryGrande.addListener((event) => {
            if (event.matches) {
                redirigirSiPantallaGrande();
            }
        });