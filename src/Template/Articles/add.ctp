<!-- File: src/Template/Articles/add.ctp -->

<h1>Add Article</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo '<div class="form-group"><label for="title">Title</label>';
    echo $this->Form->control('title', ['label' => false, 'class' => 'form-control']);
    echo '</div>';
    echo '<div class="form-group"><label for="body">Body</label>';
    echo $this->Form->control('body', ['rows' => '3', 'label' => false, 'class' => 'form-control']);
    echo '</div>';
    echo '<div class="form-group"><label for="tag_string">Tags</label>';
    echo $this->Form->control('tag_string', ['type' => 'text', 'label' => false, 'class' => 'form-control']);
    echo '</div>';
    echo $this->Form->button(__('Save Article'), ['class' => 'btn btn-primary']);
    echo $this->Form->end();
?>