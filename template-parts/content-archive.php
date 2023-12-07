<div id="card-row" class="row card-row">
    <div class="col-md-4">
        <img
            class="card-img"
            src="<?php the_post_thumbnail_url('thumbnail') ?>"
        />
    </div>
    <div class="col-md-8">
        <div class="card-body">
            <h5 class="blog-card-title">
                <?php
                    the_title();
                ?>
            </h5>
            <p class="card-text">
                <small class="text-muted">
                    <?php
                        the_date();
                    ?>
                </small>
            </p>
            <p class="blog-card-text">
                <?php
                    the_excerpt();
                ?>
            </p>
            <a href="<?php the_permalink(); ?>"><button class="btn card-btn">Read more</button></a>
        </div>
    </div>
</div>

