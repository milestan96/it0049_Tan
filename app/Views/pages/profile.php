<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="panel">
    <p class="eyebrow">Profile / Demo user</p>
    <h1><?= esc($user['full_name']) ?></h1>
    <div class="profile-card">
        <div><span class="profile-label">Username</span><strong><?= esc($user['username']) ?></strong></div>
        <div><span class="profile-label">Email</span><strong><?= esc($user['email']) ?></strong></div>
        <div><span class="profile-label">Member since</span><strong><?= esc(date('F j, Y', strtotime($user['created_at']))) ?></strong></div>
    </div>
</section>
<?= $this->endSection() ?>
