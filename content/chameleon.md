<?php template('banner', $__data__) ?> 

<?php template('links', $__data__) ?> 

**Chameleon** is a Minecraft mod, and a Metamorph add-on, which allows to import static and animated [Blockbench](<?php echo $links['blockbench'] ?>) models into Metamorph's morph system, which allows using loaded Blockbench models as morphs (i.e. you can morph into animated models), actors, decorations or custom projectiles (through Blockbuster mod). 

This mod works only with Forge for Minecraft **1.12.2**. Chameleon mod is powered by [GeckoLib](<?php echo $links['geckolib']['curse'] ?>) (**3.0.0 or above**), an amazing animation library for Minecraft mod!

<?php template('install', array_merge($__data__, ['dependencies' => ['mclib', 'metamorph', 'geckolib']])) ?> 

## Tutorial videos

If you don't know how to import Blockbench models into Chameleon, check out this playlist. Besides showing feature set, it also features a couple of videos that show how to load Blockbench models.

<?php echo youtube('97romIu2DGo?list=PLLnllO8nnzE94k_xh3tqX58_tJzx92NcG', $domain) ?> 

<?php template('bugs', $__data__) ?> 

<?php if ($domain === \mchorse\GH): ?> 
## License

Chameleon mod's code is licensed under MIT license. See LICENSE file for more information about the license.
<?php endif ?>