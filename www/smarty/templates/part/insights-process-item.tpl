{foreach $taskItem as $currentProcess}
    {if isset($currentProcess['process_id'])}
        {if $currentProcess['start_time']<=$day && $currentProcess['end_time']>=$day}
            <p style="font-size: 14px">{$processList[$currentProcess['process_id']-1]["name"]}</p>
        {/if}
    {/if}
{/foreach}