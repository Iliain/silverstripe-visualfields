<ul {$AttributesHTML}>
	<% loop $Options %>
        <li class="{$Class}">
            <input id="{$ID}" name="{$Name}" type="radio" value="{$Value}" <% if $isChecked %> checked<% end_if %> disabled />
            <label for="{$ID}" class="disabled" style="background-image: url('{$Title}'); {$Top.CustomStyles}"></label>
        </li>
	<% end_loop %>
</ul>
