<?php if (isset($abandoned)): ?> 
**ATTENTION**: This mod is **no longer being maintained by McHorse. It is now maintained by Chryfi.**
<?php if ($abandoned === 'open'): ?> There are **still going to be official updates by Chryfi and other contributors** and there have been task forces that are investigating on porting it. **If you also want to contribute to official updates**, or to the porting effort, please **join the official [McHorse's Discord server](<?php echo $links['discord'] ?>), so we can communicate with you.** Check out the [source code](<?php echo $links[$project]['github'] ?>).<?php endif ?> 
<?php endif ?> 

<?php if ($domain !== \mchorse\PMC): ?> 
![<?php echo $links[$project]['title'] ?>](<?php echo $links[$project]['banner'] ?>)
<?php endif ?> 