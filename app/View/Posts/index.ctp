<h1>Posts</h1>

<table>
	<tr>
		<td><?=$this->Paginator->sort('id','ID')?></td>
		<td><?=$this->Paginator->sort('titulo')?></td>
		<td>Criado</td>
		<td>Editado</td>
		<td>A��es</td>
	</tr>
	<?	foreach($posts as $post):?>
			<tr>
				<td><?=$post['Post']['id']?></td>
				<td><?=$post['Post']['titulo']?></td>
				<td><?=$post['Post']['created']?></td>
				<td><?=$post['Post']['modified']?></td>
				<td>
					<?=$this->Html->link('Editar',array('controller' => 'posts','action' => 'edit',$post['Post']['id']))?> |
					<?=$this->Html->link('Exclu�r',array('controller' => 'posts','action' => 'delete',$post['Post']['id']),null,'Deseja exclu�r o post #'.$post['Post']['titulo'].'?')?> |
					<?=$this->Html->link('Visualizar',array('controller' => 'posts','action' => 'view',$post['Post']['id']))?>
				</td>
			</tr>
	<?	endforeach;?>
</table>
<br />
<?	echo $this->Paginator->prev('Anterior | '),
		 $this->Paginator->numbers(),
		 $this->Paginator->next(' | Pr�ximo')?>
<br /><br />
<?=$this->Html->link('Adicionar Post',array('controller' => 'posts','action' => 'add'));?>