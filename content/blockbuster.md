<?php template('banner', array_merge($__data__, ['abandoned' => 'open'])) ?> 

<?php template('links', $__data__) ?>  
[EchebKeso](https://twitter.com/EchebKeso) – [Mocap mod](http://www.minecraftforum.net/forums/mapping-and-modding/minecraft-mods/1445402-minecraft-motion-capture-mod-mocap-16-000) – [Mocap's source code](https://github.com/EchebKeso/Mocap)

**Blockbuster** is a Minecraft mod which a machinima studio mod, which offers countless features for video, and possibly for adventure map, production. **It's not advised to use Blockbuster mod a public Minecraft server**, as some features of Blockbuster aren't multiplayer-friendly (like a lack of models and skins synchronization)! **Use it at your own risk**!

Blockbuster is also available in Chinese language thanks to [ycwei982](https://www.youtube.com/channel/UCfUDMSGlXUblXimkvNl_7Ww), Chunk7, H2SO4GepaoAX and KuenYo, and Russian language thanks to [Andruxioid](https://www.youtube.com/channel/UCnHOceBjwMyqCR5oYOoNqhQ)!

This mod works with Forge **14.23.4.2638** (or above) for Minecraft 1.12.2 (past versions are available for 1.10.2 and 1.11.2). Recording and playback is based on, and rewritten from scratch, Mocap mod by [EchebKeso](https://twitter.com/EchebKeso).

<?php template('install', array_merge($__data__, ['dependencies' => ['mclib', 'metamorph']])) ?> 

## For whom is this mod for?

If you're a YouTuber who is looking for a mod to improve overall quality of your (cinematic or improvised) videos, or you're an adventure map creator who wants to add more visuals to your maps, this is a mod for you!

Blockbuster mod provides a ton of features to improve your videos: 

* Recording and playback of multiple actors.
* Post editing of recorded player's actions.
* Importing, editing, and using models (OBJ and MagicaVoxel) with actors.
* Using models as static decorations with model blocks.
* Using models as guns and projectiles with BB gun item.
* [Camera](<?php echo $links['aperture']['curse'] ?>) and audio synchronization with actors.
* Keying tools (chroma blocks, keying solutions with [Minema](<?php echo $links['minema'] ?>) mod).
* Simple animation model mechanims.
* And much more...

## Videos

### Tutorial videos

This is change logs playlist. Almost every update (for exception of patches with bug fixes and minor features) comes with a change log video which showcases new features, and briefly shows how to use them.

<?php echo youtube('faeKqT5FYyA?list=PL6UPd2Tj65nEwg2bfY-NduLihPy6fgnvK', $domain) ?> 

Here is also an up-to-date tutorial series which should teach you the basics of the mod (check more videos [on the same channel](https://www.youtube.com/c/McHorsesmods/videos) for more tutorials about Blockbuster mod).

<?php echo youtube('Vv5ZwtZdwz0?list=PLLnllO8nnzE-xmqdymsLpxnXTaAbyIVjM', $domain) ?> 

### Blockbuster machinimas

This playlist consists out of videos that I've created a bunch of machinimas during Blockbuster mod testings and just when I felt like. Feel free to check out my crazy videos.

<?php echo youtube('eig13klr-kw?list=PL6UPd2Tj65nFdhjzY-z6yCJuPaEanB2BF', $domain) ?> 

Here is also a playlist of 1,000+ community made videos with Blockbuster mod:

<?php echo youtube('kJHMj245qSY?list=PL6UPd2Tj65nEE8kLKBxYYZLAjruJkO0r_', $domain) ?> 

<?php template('bugs', $__data__) ?> 

<?php if ($domain === \mchorse\GH): ?> 
## License

Blockbuster mod's code is licensed under MIT license. See [LICENSE.md](./LICENSE.md) file for more information about the license.
<?php endif ?>