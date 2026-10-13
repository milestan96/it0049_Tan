<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section>
    <div class="section-heading">
        <div>
            <p class="eyebrow">Task List / Archive</p>
            <h1>Every task.</h1>
            <p class="intro">All tasks in the system, ordered by scheduled date.</p>
        </div>
        <span class="count"><?= count($tasks) ?> records</span>
    </div>
    <div class="table-card table-wrapper">
        <table>
            <thead><tr><th>Task</th><th>Status</th><th>Scheduled date</th><th>Created</th></tr></thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= esc($task['title']) ?></td>
                        <td><span class="status status-<?= esc($task['status']) ?>"><?= esc(ucfirst($task['status'])) ?></span></td>
                        <td><?= esc(date('M j, Y', strtotime($task['task_date']))) ?></td>
                        <td><?= esc(date('M j, Y', strtotime($task['created_at']))) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
<?= $this->endSection() ?>
