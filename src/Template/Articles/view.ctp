<h1><?= h($article->title) ?></h1>
<p><small>By: <?= $article->user_id ?></small></p>
<p><?= h($article->body) ?></p>
<p><b>Tags:</b> <?= h($article->tag_string) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $article->slug], ['class'=>'btn btn-primary']) ?></p>
<h1>Send with email</h1>

<fieldset>
        <?php
            echo $mailer->message;
            echo $this->Form->create('Website',array('action'=>'contact_email'));
            echo $this->Form->input('useremail',array('class'=>'form-control'));
            echo $this->Form->submit('Send',array('class'=>'btn btn-primary')); 
            echo $this->Form->end(); 
        ?>
</fieldset>