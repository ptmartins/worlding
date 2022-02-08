<?php get_header(); ?>

    <div class="page page--aboutUs">
        <?php get_template_part( 'includes/section', 'page' ); ?>

        <!-- MATERIAL SPONSORS -->
        <h2 class="sponsors-title">Material sponsors</h2>

        <div class="sponsors-list">

            <!-- ARTGRAF - VIARCO -->
            <a href="https://www.viarco.pt/en/artgraf-products/" target="_blank" class="sponsor sponsor--viarco">
                <img src="<?php echo get_template_directory_uri(); ?>/images/artgraf_logo.png" alt="">
            </a>

        </div>

        <!-- ADVISORY BOARD -->
        <h2 class="advisoryBoard-title">Advisory Board</h2>

        <div class="advisoryBoard-list">

            <!-- Johana Carrier -->
            <div class="card board-member">
                <div class="board-thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/johana_carrier.png" alt="Diogo Pimentao">
                </div>
                <div class="board-details">
                    <h2 class="board-name">Johana Carrier</h3>
                    <p class="board-role">Co-director Roven, Revue de Dessin Contemporain</p>
                    <p class="board-location">Paris</p>
                </div>
            </div>

            <!-- Filipa Oliveira -->
            <div class="card board-member">
                <div class="board-thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/filipa_oliveira.png" alt="Diogo Pimentao">
                </div>
                <div class="board-details">
                    <h2 class="board-name">Filipa Oliveira</h3>
                    <p class="board-role">Director of Casa da Cerca</p>
                    <p class="board-location">Lisbon</p>
                </div>
            </div>

            <!-- Elizabeth Tennenbaum -->
            <div class="card board-member">
                <div class="board-thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/elizabeth_tenebaum.png" alt="Diogo Pimentao">
                </div>
                <div class="board-details">
                    <h2 class="board-name">Elizabeth Tennenbaum</h3>
                    <p class="board-role">Founder and Program manager</p>
                    <p class="board-location">New York</p>
                </div>
            </div>

            <!-- Gregory Lang -->
            <div class="card board-member">
                <div class="board-thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gregory_lang.png" alt="Diogo Pimentao">
                </div>
                <div class="board-details">
                    <h2 class="board-name">Gregory Lang</h3>
                    <p class="board-role">Independent Curator and Critic</p>
                    <p class="board-location">Brussels</p>
                </div>
            </div>


        </div>


        <!-- STAFF -->
        <h2 class="staff-title">Staff</h2>
        <div class="staff-list">

            <!-- Diogo Pimentao -->
            <div class="staff-member">
                <div class="staff-thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/diogo_pimentao.png" alt="Diogo Pimentao">
                </div>
                <div class="staff-details">
                    <h2 class="staff-name">Diogo Pimentao</h3>
                    <p class="staff-role">Founder and Program manager</p>
                </div>
            </div>

            <!-- Joana P R Neves -->
            <div class="staff-member">
                <div class="staff-thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/joana_neves.png" alt="Joana P R Neves">
                </div>
                <div class="staff-details">
                    <h2 class="staff-name">Joana P R Neves</h3>
                    <p class="staff-role">Founder and Artistic Director</p>
                </div>
            </div>

            <!-- Andre Figueiredo -->
            <div class="staff-member">
                <div class="staff-thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/andre_figueiredo.png" alt="Andre Figueeiredo">
                </div>
                <div class="staff-details">
                    <h2 class="staff-name">Andre Figueiredo</h3>
                    <p class="staff-role">Assistant Manager</p>
                </div>
            </div>
 
            <!-- Libby Welsh -->
            <div class="staff-member">
                <div class="staff-thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/libby_welsh.png" alt="Libby Welsh">
                </div>
                <div class="staff-details">
                    <h2 class="staff-name">Libby Welsh</h3>
                    <p class="staff-role">Development Associate</p>
                </div>
            </div>

            <!-- Mafalda Figueiredo -->
            <div class="staff-member">
                <div class="staff-thumbnail">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mafalda_figueiredo.png" alt="Mafalda Figueiredo">
                </div>
                <div class="staff-details">
                    <h2 class="staff-name">Mafalda Figueiredo</h3>
                    <p class="staff-role">Communication Assistant</p>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>