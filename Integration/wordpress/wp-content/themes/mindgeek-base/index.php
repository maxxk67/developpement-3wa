<!-- Affichage de l'entête -->
<?php get_header(); ?>

<main class="container">
<!-- Boucle sur les articles -->
<section class="content">
<!-- Début de la boucle. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="post">
<!-- Affichage du titre en tant que lien vers le Permalien de l'article. -->
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<!-- Affiche la date de publication, l'auteur et les catégories de l'article. -->
<footer class="postmetadata">
<p><small>Publié le <?php the_time('l d M Y'); ?> par <?php the_author() ?> dans la
catégorie <?php the_category(', '); ?></small></p>
</footer>
</article> <!-- Fin de l'article -->
<!-- Fin de La Boucle -->
<?php endwhile; ?>
<?php else: ?>
<!-- Le premier "if" teste l'existence d'articles à afficher.
La partie "else" indique que faire si ce n'est pas le cas. -->
<p>Aucun contenu à afficher.</p>
<!-- Fin -->
<?php endif; ?>
</section>
</main>

<!-- Affichage du footer -->
<?php get_footer(); ?>

