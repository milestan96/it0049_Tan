<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section>
    <div class="section-heading">
        <div>
            <p class="eyebrow">Directory / 01</p>
            <h1>Customers</h1>
            <p class="intro">People currently stored in the workspace.</p>
        </div>
        <span class="count"><?= count($customers) ?> records</span>
    </div>

    <div class="table-card table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= esc($customer['full_name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
<?= $this->endSection() ?>
