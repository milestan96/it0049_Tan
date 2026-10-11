<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="panel">
    <p class="eyebrow">The workspace</p>
    <h1>Small system. Clear purpose.</h1>
    <p>Miles POS is an introductory CodeIgniter 4 project for keeping customer and staff account information close at hand.</p>
    <div class="info-grid">
        <article class="info-card">
            <h2>Built to learn</h2>
            <p>Routes, controllers, views, and reusable layout patterns stay visible and easy to follow.</p>
        </article>
        <article class="info-card">
            <h2>Ready to grow</h2>
            <p>Records are sample arrays today, leaving a clear path for a database and real transactions later.</p>
        </article>
    </div>
</section>
<?= $this->endSection() ?>
