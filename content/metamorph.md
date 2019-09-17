**ATTENTION**: This mod is in non-gameplay maintenance mode, meaning that I'm **not going** to work on gameplay features **nor** I'm accepting suggestions. Check out [Changeling](https://www.curseforge.com/minecraft/mc-mods/changeling) mod maintained by asanetargoss, which is a gameplay-wise successor.

<?php template('banner', $__data__) ?> 

<?php template('links', $__data__) ?> 

**Metamorph** (from *[Metamorphosis](https://en.wikipedia.org/wiki/Metamorphosis)*) – a Minecraft mod which allow you to morph into mobs. 

Most of vanilla mob morphs have their abilities (preconfigured), meanwhile most of modded morphs only grant you appearance and some attributes like health, unless configured. Morphs can be disabled and configured. See mod's wiki for more information.

Heavily inspired by iChun's Morph mod and zacuke's Shape Shifter Z mod, and works only with Forge for Minecraft 1.10.2, 1.11.2 and 1.12.2.

<?php if ($domain === \mchorse\MCF): ?> 
[mod]256932-metamorph[/mod]
<?php endif ?> 

## FAQ

**Q: My screen goes up and down. How to fix?**  
A: Most likely you installed MorePlayerModels mod alongside Metamorph. To fix that, either go to `Mod Options > Metamorph > General` and enable `Disable POV` option, or disable POV option in MPM's config and restart the game.

<?php template('install', array_merge($__data__, ['dependencies' => ['mclib']])) ?> 

## Videos

Change log video for Metamorph 1.1.4 by me:

<?php echo youtube('zAOq_VP-vuE', $domain) ?> 

Mod showcases of Metamorph by other people (including in other languages):

<?php echo youtube('D3oScOrqU1U?list=PL6UPd2Tj65nHV_xy6zypT58IgZ73IH-2K', $domain) ?> 

## How to play

To morph into other creatures, you must to acquire a *morph* first. To acquire a *morph*, you have to kill a mob, then a ghost of a mob will appear (that's a *morph*), and when you'll pick it up, you'll acquire a *morph*.

Once you have at least one *morph*, you're able to transform into that *morph*. Use `[` and `]` keys for advancing through the list of *morphs*. There are also `'` and `\` keys for switching between morph variants (you'll see up and down arrows in the selection box if there are morph variants available). Use `enter` key for transforming into selected *morph*. To demorph, you scroll left until you focus character with your skin, and then press `enter` to demorph. Or you can press demorph key (which is `.` by default).

You retain your *morphs* even after death (although you can disable retaining of morphs after death in mod options). In creative mode, you can select almost any available *morph* via Creative Morph Menu which can be opened by pressing `B` key in the game. 

Survival Morph Menu can also be focused, for managing purposes, by pressing `N` key (default). There you can favorite, remove and filter morphs by favorites. You use the same keys to navigate morphs (`[`, `]`, `'` and `\`).

## About morphs

Every *morph* you equip or apply grant you different look, size, and health capacity. Except those properties, every *morph* also has special *abilities*, *attack* and *action*. 

*Abilities* give special properties to *morphs*. **Chicken** *morph* will slowly fall and get no fall damage. **Spider** and **CaveSpider** *morphs* will be able to climb on the wall. **Bat** *morph* will be able to fly and has a night vision.

*Attack* is an effect which is applied onto attacked entity. For example, if you hit some entity while being in **CaveSpider** *morph*, your target will gain **poison** potion effect. If you'll hit an entity while being in **VillagerGolem** *morph*, you'll throw your target high in the air.

*Action* is a special ability that is triggered by "action key" (which is `V` by default). Examples: in **Rabbit** *morph*, you'll jump high; in **Creeper** *morph*, you'll explode like a creeper, and so on.

<?php template('terms', $__data__) ?> 

<?php template('media', $__data__) ?> 

<?php template('bugs', $__data__) ?> 

<?php if ($domain === \mchorse\GH): ?>
## License

This project is licensed under MIT. See `LICENSE.md` file.
<?php endif ?>