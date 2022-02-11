    <?php if( count($errors) > 0): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            
            <?php foreach ($errors as $error): ?>
                <li><?php echo $error ?></li>
            <?php endforeach; ?>

        </div>
    <?php endif; ?> 