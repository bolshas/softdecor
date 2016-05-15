<?php
/* @var $this \Cake\View\View */
use Cake\Core\Configure;

$this->prepend('tb_body_attrs', ' class="nav"');
?>

<div class="container" style="margin-top: 50px;">
	<div class="row">
		<div class="col-md-2">
			<?= $this->Html->image('preview.png', ['class' => 'img-responsive']) ?>
		</div>	
		<div class="col-md-8">
			<h3>Apie mane</h3>
			<p>
				Asdoj asdkh asdkj hasdkl ahsklashd lkashd lkasjdh aslkjd hasdkj hasdlk ashd lkasjdh klrhewori uewkljh f
				sdasjkdn asdk ashdlk asdh lkarhewioh wrkljwerklwejrh wlkf lkf jhsdf kljsdfh lksdf sdlkf hsdlfk hsdflk hsd
				sdkfj hsdf lksdfh sdkfhsdlkf hsdlf hsdf.
			</p>
		</div>
		<div class="col-md-2">
			<h4>Kontaktai</h4>
			<p><strong>Email:</strong> laura@test.com</p>
			<p><strong>Facebook:</strong> laura</p>
			<p><strong>Tel:</strong> laura@test.com</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<h1>Laura</h1>
			<p>Vilnius</p>
		</div>
		<div class="col-md-10">
			<?= $this->fetch('content') ?>
		</div>
	</div>
</div>




		
