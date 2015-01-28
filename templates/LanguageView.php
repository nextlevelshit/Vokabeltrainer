{extends file="_layout.tpl"}

{block name="headline"}
    test
{/block}

{block name="text"}
    test
{/block}

{block name="content"}
    <pre>
        {$all_language_pairs|var_dump}
    </pre>
{/block}

{block name='footer'}
{/block}