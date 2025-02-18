<?php include 'includes/templates/header.php';?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3.000.000</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero libero exercitationem ipsa, reiciendis fugiat corporis est iusto sequi temporibus vitae, nostrum beatae ullam modi consequuntur nemo recusandae dicta delectus ratione?
            Natus quod voluptates ex! Veniam nulla modi reiciendis temporibus facere harum sint, deserunt ipsa. Vitae accusantium quas sapiente, nemo dolore voluptatibus, numquam alias culpa odit, quibusdam quis eaque autem officiis!
            Accusantium maxime debitis aliquam perspiciatis ipsa incidunt voluptas atque rem, quasi ex. Explicabo facere nam ab quod, temporibus maxime aut eum illum, deleniti veritatis molestias sunt esse pariatur quibusdam aliquid.</p>
        </div>
    </main>


<?php
    include 'includes/templates/footer.php';
?>