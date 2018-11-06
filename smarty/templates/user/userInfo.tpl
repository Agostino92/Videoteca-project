<!DOCTYPE html>
{profile->getUserInfo assign='pInfo'}
<div class="well circled">				
	<p id="important">{$pName}</p>
</div>

<div class="well squared">
	<p id="important"> Nome: </p> <span>{if $pInfo->getFirstName()} {$pInfo->getFirstName()}{/if}</span>
	<p id="important"> Cognome: </p> <span> {if $pInfo->getLastName()} {$pInfo->getLastName()}{/if} </span>
</div>
<div class="well squared">
	<p id="important"> Data di nascita: </p> <span>{if $pInfo->getBirthDate()} {$pInfo->getBirthDate(true)}{/if}</span>
	<p id="important"> Luogo di nascita: </p> <span> {if $pInfo->getBirthPlace()} {$pInfo->getBirthPlace()}{/if} </span>
</div>
<div class="well squared">
	<p id="important">Biografia</p>
	<p>{if $pInfo->getBio()}{$pInfo->getBio()}{/if}</p>
</div>

