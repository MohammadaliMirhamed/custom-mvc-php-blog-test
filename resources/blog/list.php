<!-- blog layout -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Blog</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="blog-posts">
                <?php foreach ($posts as $post) : ?>
                    <div class="blog-post">
                        <h2><?= $post->title ?></h2>
                        <p><?= $post->body ?></p>
                        <?= $post->user->name ?> , <?= $post->created_at ?> 
                    </div>
                    <hr>
                <?php endforeach; ?>
            </div>
        </div>
    </div>