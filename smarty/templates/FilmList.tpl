<!DOCTYPE html>
{if $array}
<!-- Table che mostra le canzoni -->
<table class="table table-responsive">
	<tbody>					
	{foreach $array as $film}
		<tr>
			{if !$film->isHidden()} 
			<!-- Nome film -->
			<td><a href="/videoteca-project/film/show/{$film->getId()}">{$film->getName()}</a></td>
			{if isset($key)}
			<!-- Autore film (se la table e' richiamata nella ricerca )-->
			<td>{$film->getAuthor()}</a></td>
			<!-- Genere del film -->
			<td>{$film->getGenre()}</td> 
			{/if} 
		</tr>
	{/foreach}
	</tbody>
</table>
{else}
<p>Non è stato trovato alcun film!</p>
{/if}
		
