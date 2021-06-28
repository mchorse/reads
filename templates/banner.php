<?php if (isset($abandoned)): ?> 
**ATTENTION**: This mod is **no longer being developed**, and it's maintained (bugs and crash fixes) until August/September of 2021.<?php if ($abandoned === 'open'): ?>If you wish to continue the mod, feel free to check out the [source code](<?php echo $links[$project]['github'] ?>). <?php endif ?>
<?php endif ?> 

<?php if ($domain !== \mchorse\PMC): ?> 
![<?php echo $links[$project]['title'] ?>](<?php echo $links[$project]['banner'] ?>)
<?php endif ?> 