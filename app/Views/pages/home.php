<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section>
    <div class="section-heading">
        <div>
            <p class="eyebrow">Welcome / <?= esc(date('l, F j, Y', strtotime($today))) ?></p>
            <h1>Tasks for today.</h1>
            <p class="intro">A focused view of what needs your attention right now.</p>
        </div>
        <span class="count"><?= count($tasks) ?> <?= count($tasks) === 1 ? 'task' : 'tasks' ?></span>
    </div>

    <?php if ($tasks): ?>
        <div class="task-grid">
            <?php foreach ($tasks as $task): ?>
                <article class="task-card">
                    <div class="task-meta"><span class="status status-<?= esc($task['status']) ?>"><?= esc(ucfirst($task['status'])) ?></span></div>
                    <h2><?= esc($task['title']) ?></h2>
                    <p>Due today</p>
                </article>
            <?php endforeach ?>
        </div>
    <?php else: ?>
        <div class="empty-state">No tasks are scheduled for today.</div>
    <?php endif ?>
</section>
<?= $this->endSection() ?>
