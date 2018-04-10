<h2>Adaugati o inregistrare</h2>
<?php
echo $this->Form->create('Flower', ['url'=>'/add']);
echo $this->Form->input('nume');
echo $this->Form->input('culoare');
echo $this->Form->input('marime');
echo $this->Form->input('pret');
echo $this->Form->button('Submit Form', ['type' => 'submit']);
echo $this->Form->end();
?>

