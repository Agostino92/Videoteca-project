<!DOCTYPE html>
{if $array}
<table class="table table-responsive">
	<tbody>					
	{foreach $array as $user} <p> porcodio </p> 	{/foreach}
		<tr>
			<td><a href="/videoteca-project/user/profile/{$user->getId()}">{$user->getNickName()}</a></td>
			<td>{substr(get_class($user),1)}</td>
		</tr>

	</tbody>
</table>
{else}
<p>Non è stato trovato alcun utente!</p>
{/if}