<h2>Edit post</h2>
<?php
echo $this->Form->create($flower, array('url'=>'/flowers/update/id'));
echo $this->Form->input('id', array('type'=>'hidden'));
echo $this->Form->input('nume');
echo $this->Form->input('culoare');
echo $this->Form->input('marime');
echo $this->Form->input('pret');
echo $this->Form->button('Submit Form', ['type' => 'submit']);
echo $this->Form->end();

