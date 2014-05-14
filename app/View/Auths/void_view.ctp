<h1><a href="http://www.Litle.com/developers"><?php echo $this->Html->image('Litle.jpg');?></a></h1>
<div class="auths view">
<h2><?php  echo __('Void View');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($auth['Auth']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Response'); ?></dt>
		<dd>
			<?php echo h($auth['Auth']['voidResponse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($auth['Auth']['creditMessage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LitleTxnId'); ?></dt>
		<dd>
			<?php echo h($auth['Auth']['creditLitleTxnId']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transaction'), array('action' => 'edit', $auth['Auth']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transaction'), array('action' => 'delete', $auth['Auth']['id']), null, __('Are you sure you want to delete # %s?', $auth['Auth']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Back to  Homepage'), array('action' => 'index')); ?> </li>
	</ul>
	<br>
<br>
<br>
<h3><?php echo __('Related Transactions'); ?></h3>
<?php
	$state = 0; 
	if($auth['Auth']['authMessage'] != ""){
	?><ul>
		<li><?php echo $this->Html->link(__('Auth View'), array('action' => 'authView', $auth['Auth']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Capture View'), array('action' => 'captureView', $auth['Auth']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Void View'), array('action' => 'voidView', $auth['Auth']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Auth Reversal View'), array('action' => 'authrevView', $auth['Auth']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('ReAuth View'), array('action' => 'reauthView', $auth['Auth']['id'])); ?> </li>
	</ul><?php
	}
	else if($auth['Auth']['saleMessage'] != ""){
		?><ul>
		<li><?php echo $this->Html->link(__('Sale View'), array('action' => 'saleView', $auth['Auth']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Void View'), array('action' => 'voidView', $auth['Auth']['id'])); ?> </li>
	</ul><?php
	}
	else if($auth['Auth']['tokenMessage'] != ""){
		?><ul>
		<li><?php echo $this->Html->link(__('Token View'), array('action' => 'tokenView', $auth['Auth']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Token Sale View'), array('action' => 'tokenSaleView', $auth['Auth']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Credit View'), array('action' => 'creditView', $auth['Auth']['id'])); ?> </li>
	</ul><?php
	}
?>
</div>