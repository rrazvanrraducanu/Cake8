<h2>Adunare</h2>
<?php
echo $this->Form->create();
echo $this->Form->input('var1', ['type'=>'text','value'=>$var1,'style'=>'width:200px; height:40px;']);
echo $this->Form->input('', ['type'=>'text','value'=>'+','style'=>'width:30px; height:40px;']);
echo $this->Form->input('var2', ['type'=>'text','value'=>$var2,'style'=>'width:200px; height:40px;']);
echo $this->Form->button('=', ['type' => 'submit']);
echo $this->Form-> input('Rezultat',['type'=>'text','value'=>$var3,'style'=>'width:200px; height:40px;']);
echo $this->Form->end();
?>

