<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero">
    <div class="hero-copy">
        <p class="eyebrow">Point-of-sale workspace</p>
        <h1>Keep the counter moving.</h1>
        <p class="lede">A quiet, focused home for the people and records behind your daily sales.</p>
        <div class="actions">
            <a class="button" href="/customers">Browse customers <span aria-hidden="true">&rarr;</span></a>
            <a class="button button-secondary" href="/users">View team</a>
        </div>
    </div>
    <aside class="hero-note">
        <span class="dot"></span> Workspace status
        <strong>10</strong>
        <p>sample profiles ready to review across customers and staff.</p>
    </aside>
</section>
<?= $this->endSection() ?>
