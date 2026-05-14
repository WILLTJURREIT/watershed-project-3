  <article class="post-card">

                        <?php if ( has_post_thumbnail() ) : ?>
                            
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'medium_large', array( 'class' => 'post-card__image' ) ); ?>
                            </a>

                        <?php endif; ?>

                        <div class="post-card__content">

                            <h2 class="post-card__title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <p class="post-card__date">
                                <?php echo get_the_date(); ?>
                            </p>

                            <p class="post-card__excerpt">
                                <?php the_excerpt(); ?>
                            </p>

                            <a class="post-card__button" href="<?php the_permalink(); ?>">
                                Read Issue
                            </a>

                        </div>

 </article>