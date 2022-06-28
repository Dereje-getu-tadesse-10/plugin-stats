<?php

/**
* Plugin Name: Statistique
* Version: 1
* Author: Dereje
**/


function stats(){
    $i = array('post_type' => 'statistique');
    $stats = new WP_Query($i);

    if ( $stats -> have_posts() ) : 
        while ($stats->have_posts()) : $stats->the_post();

            // field name 2 && value
            $nom_champ = get_field('nom_champ');
            $valeur_champ = get_field('valeur_champ');

            // field name 2 && value
            $nom_champ_2 = get_field('nom_champ_2');
            $valeur_champ_2 = get_field('valeur_champ_3');

            // field name 3 && value
            $nom_champ_3 = get_field('nom_champ_4');
            $valeur_champ_3 = get_field('valeur_champ_5');

            // field name 4 && value
            $nom_champ_4 = get_field('nom_champ_6');
            $valeur_champ_4 = get_field('valeur_champ_7');

            // field name 5 && value
            $nom_champ_5 = get_field('nom_champ_8');
            $valeur_champ_5 = get_field('valeur_champ_9');

            // field name 6 && value
            $nom_champ_6 = get_field('nom_champ_10');
            $valeur_champ_6 = get_field('valeur_champ_11');

            // champ 1
            $res .= "<div class='container-stats'>";

                $res .= "<div class='stats-container'>";

                    $res .= "<i class='fa-solid fa-user'></i>";

                    $res .= "<div class='item'>";
                        $res .= "<p class='bold'> $valeur_champ <p>";
                        $res .= "<p> $nom_champ <p>";
                    $res .= "</div>";

                $res .= "</div>";

                // champ 2

                $res .= "<div class='stats-container'>";

                    $res .= "<i class='fa-solid fa-user'></i>";

                    $res .= "<div class='item'>";
                        $res .= "<p class='bold'> $valeur_champ_2 <p>";
                        $res .= "<p> $nom_champ_2 <p>";
                    $res .= "</div>";

                $res .= "</div>";

                // champ 3

                $res .= "<div class='stats-container'>";

                    $res .= "<i class='fa-solid fa-user'></i>";

                    $res .= "<div class='item'>";
                        $res .= "<p class='bold'> $valeur_champ_3<p>";
                        $res .= "<p> $nom_champ_3 <p>";
                    $res .= "</div>";

                $res .= "</div>";
             
            $res .= "</div>";


            // section 2

            $res .= "<div class='container-stats cnt-2'>";

                $res .= "<div class='stats-container'>";

                    $res .= "<i class='fa-solid fa-user'></i>";

                    $res .= "<div class='item'>";
                        $res .= "<p class='bold'> $valeur_champ_4 <p>";
                        $res .= "<p> $nom_champ_4 <p>";
                    $res .= "</div>";

                $res .= "</div>";

                // champ 2

                $res .= "<div class='stats-container'>";

                    $res .= "<i class='fa-solid fa-user'></i>";

                    $res .= "<div class='item'>";
                        $res .= "<p class='bold'> $valeur_champ_5 <p>";
                        $res .= "<p> $nom_champ_5 <p>";
                    $res .= "</div>";

                $res .= "</div>";

                // champ 3

                $res .= "<div class='stats-container'>";

                    $res .= "<i class='fa-solid fa-user'></i>";

                    $res .= "<div class='item'>";
                        $res .= "<p class='bold'> $valeur_champ_6<p>";
                        $res .= "<p> $nom_champ_6 <p>";
                    $res .= "</div>";

                $res .= "</div>";
             
            $res .= "</div>";

        endwhile;
        wp_reset_postdata();
    endif;
    return $res;

}

add_shortcode('stat', 'stats');