<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>



        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>18/12/2024</span> por <span>Gero</span></p>

        <div class="resumen-propiedad">

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero libero exercitationem ipsa, reiciendis fugiat corporis est iusto sequi temporibus vitae, nostrum beatae ullam modi consequuntur nemo recusandae dicta delectus ratione?
            Natus quod voluptates ex! Veniam nulla modi reiciendis temporibus facere harum sint, deserunt ipsa. Vitae accusantium quas sapiente, nemo dolore voluptatibus, numquam alias culpa odit, quibusdam quis eaque autem officiis!
            Accusantium maxime debitis aliquam perspiciatis ipsa incidunt voluptas atque rem, quasi ex. Explicabo facere nam ab quod, temporibus maxime aut eum illum, deleniti veritatis molestias sunt esse pariatur quibusdam aliquid.</p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>