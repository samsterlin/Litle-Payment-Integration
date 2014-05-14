<h1><a href="http://www.Litle.com/developers"><?php echo $this->Html->image('Litle.jpg');?></a></h1>
<div class="auths form">
<?php echo $this->Form->create('Auth');?>
	<fieldset>
		<h3><?php echo __('Authorization'); ?></h3>
		
		<a id="button" style="cursor: pointer"><?php echo __('SDK Implementation'); ?></a>
		<div id="effect" class = "effect" title="SDK Implementation">
			<script src="#https://gist.github.com/2007176.js"> </script>
		</div>
			
	<h3><?php echo __('User Input:'); ?></h3>
	<tr><?php
	
		echo $this->Form->input('amount');
		?></tr>
		<tr><?php
		echo $this->Form->input('name');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('email');
		echo $this->Form->input('accNum');
		echo $this->Form->input('routingNum');
		echo $this->Form->input('checkNum');
			
	?></tr>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Back to Homepage'), array('action' => 'index'));?></li>
	</ul>
	</br>
	<h3><?php echo __('About Authorization'); ?></h3>
	<?php echo "The Authorization transaction enables you to confirm that a customer has submitted a valid payment method with their order and has sufficient funds to purchase the goods or services they ordered."?>
	</br>
	</br>
	<?php echo "Please fill out the information to process an authorization."?>
	</br>
	</br>
	<?php echo "You may click on the SDK Implementation link to view auth implementation."?>
	</br>
	</br>
	<h3><?php echo ('Sample CreditCards:'); ?></h3>
	<table class="center" style="font-size:10pt">
	<tr><th colspan=2><h4>Sucessful</h4></th></tr>
	<tr><td>amount</td><td>2007</td></tr>
	<tr><td>firstName</td><td>Peter</td></tr>
	<tr><td>lastName</td><td>Green</td></tr>
	<tr><td>companyName</td><td>Green Co</td></tr>
	<tr><td>accType</td><td>Corporate</td></tr>
	<tr><td>accNum</td><td>6099999992</td></tr>
	<tr><td>routingNum</td><td>211370545</td></tr>
	</table>
</div>
