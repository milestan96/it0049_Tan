<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section>
    <div class="section-heading">
        <div>
            <p class="eyebrow">Directory / 02</p>
            <h1>Team</h1>
            <p class="intro">Staff accounts currently stored in the workspace.</p>
        </div>
        <span class="count"><?= count($users) ?> records</span>
    </div>

    <div class="table-card table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Full name</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['full_name']) ?></td>
                        <td><span class="role"><?= esc($user['role']) ?></span></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
<?= $this->endSection() ?>
