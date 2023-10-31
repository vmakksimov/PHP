<?php $permissions = 1; ?>

<?php if ($permissions == 1) : ?>;
    <h1>Hello, admin</h1>
<?php elseif($permissions == 2) : ?>;
    <h2>Hello, mod</h2>
<?php else : ?>
    <h2>Hello, guest</h2>

<?php endif; ?>