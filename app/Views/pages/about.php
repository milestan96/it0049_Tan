<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="panel">
    <p class="eyebrow">About the system</p>
    <h1>Built for a clearer day.</h1>
    <p>Tasks for Today is a lightweight task management system designed to keep daily priorities visible and organized.</p>
    <div class="info-grid">
        <article class="info-card"><h2>Developer</h2><p>Developed by Miles Tan for IT0049 Technical FA1.</p></article>
        <article class="info-card"><h2>Technology</h2><p>Built with CodeIgniter 4, PHP, MySQL, and a simple responsive interface.</p></article>
    </div>
</section>
<?= $this->endSection() ?>
