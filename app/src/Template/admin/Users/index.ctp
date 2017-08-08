<div class="col-lg-6">
    <h2>List user</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Publish</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->level) ?></td>
                <td><?= h($user->publish) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<i class="fa fa-eye fa-4" aria-hidden="true"></i>', ['action' => 'view', $user->id],['escape'=>false]) ?>
                    <?= $this->Html->link('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', ['action' => 'edit', $user->id],['escape'=>false]) ?>
                    <?= $this->Form->postLink('<i class="fa fa-trash-o fa-lg"></i>', ['action' => 'delete', $user->id], ['escape'=>false,'confirm' => __('Are you sure you want to delete {0}?', $user->username)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>

</div>