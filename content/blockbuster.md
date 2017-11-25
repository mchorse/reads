<?php template('banner', $__data__) ?> 

<?php template('links', $__data__) ?>  
[EchebKeso](https://twitter.com/EchebKeso) – [Mocap mod](http://www.minecraftforum.net/forums/mapping-and-modding/minecraft-mods/1445402-minecraft-motion-capture-mod-mocap-16-000) – [Mocap's source code](https://github.com/EchebKeso/Mocap)

Blockbuster is a Minecraft mod which lets you create Minecraft machinimas in singleplayer using NPC body actors. This mod works with Forge for Minecraft 1.10.2, 1.11.2 and 1.12.

Blockbuster mod depends upon [Metamorph](<?php echo $links['metamorph']['curse'] ?>). Every new change log will specify the version of Metamorph supported. Blockbuster is also provides **optional** integration for [Aperture](<?php echo $links['aperture']['curse'] ?>) mod.

Recording is based and rewritten from scratch on recording code from Mocap mod by [EchebKeso](https://twitter.com/EchebKeso).

<?php if ($domain === \mchorse\MCF): ?> 
[mod]254152-blockbuster[/mod]
<?php endif ?> 

## Features

Blockbuster mod provides you with lots of features to make cool machinimas:

* **Actors and player recording** – the most important feature, as you won't be able to create a machinimas without it. With Blockbuster mod you can record yourself doing things and then playback it using an actor. *Recording code has some limitations on which actions it can record*. See [Blockbuster Wiki](<?php echo $links['blockbuster']['wiki'] ?>) for more information about limitations.
* **Director blocks** – one actor is good, a crowd of them is even better. Blockbuster mod provides you with a mechanism called *director block* which manages playback of registered actors. It allows you to record actors. It has also outlets for redstone contraptions, making it easy attaching some custom commands or redstone logic on start or the end of the scene playback.
* **[Aperture](<?php echo $links['aperture']['curse'] ?>) support** – camera is how you present your machinima. Blockbuster mod has built-in Aperture integration. When Aperture is loaded, Blockbuster mod provides you with some features such as: ability to attach camera profiles to playback button, and previewing director block playback while editing cameras in the camera editor.
* **Custom models** – recording only player-like entities limits the originality of your machinimas. Blockbuster mod let's you create custom models using [McME](https://mchorse.github.io/mcme/) model editor or in-game integrated model editor. Unleash your creativity with custom models!
* **OBJ models** – beside custom models which can be created with in-game custom model editor, Blockbuster also supports OBJ models on top of custom JSON models!
* **Mobs support** – thanks to [Metamorph](<?php echo $links['metamorph']['curse'] ?>)'s public API, Blockbuster is capable of using any morphs which Metamorph provides to be used by Blockbuster actors.
* **[Minema](<?php echo $links['minema'] ?>) compatability** – thanks to frame-based player recording and cameras, you can convert your in-game machinimas to videos with a press of a button.

<?php template('install', array_merge($__data__, ['dependencies' => ['metamorph']])) ?> 

## Videos

### Tutorial videos

Feature videos for 1.4. This playlist shows how to use the mod features. Almost every update comes with a change log video which show out new features.

<?php echo youtube('R-g6fIUBtR4?list=PL6UPd2Tj65nEwg2bfY-NduLihPy6fgnvK', $domain) ?> 

There's also a video that shows how to create a simple machinima using Blockbuster mod. This video shows basics of director block, how to attach actors to director block, and how to setup cameras:

<?php echo youtube('cVTIzKzWtqg?list=PL6UPd2Tj65nE0Pmf6GD2Fk3aRGWTGKlZk', $domain) ?> 

### Machinima Examples

This playlist consists out of videos that I've created a bunch of machinimas during Blockbuster mod testings and just when I felt like. Earlier of those videos are my lab experiments.

<?php echo youtube('LmG1vWHgp-A?list=PL6UPd2Tj65nFdhjzY-z6yCJuPaEanB2BF', $domain) ?> 

<?php template('terms', $__data__) ?> 

<?php template('media', $__data__) ?> 

<?php template('bugs', $__data__) ?> 

<?php if ($domain === \mchorse\GH): ?> 
## License

Blockbuster mod's code is licensed under MIT, see file [LICENSE.md](./LICENSE.md) for more information about the license.

## For Devs

Language files are compiled from YML (which are located in `help/` folder) to INI format. 

If you're going to work with localization strings, modify the appropriate YML file, first. Then use the `./gradlew buildLangFiles` command to convert YML to INI format `.lang` files directly to `src/main/resources/assets/blockbuster/lang` folder. 

Don't forget to refresh your IDE after building of YML files.
<?php endif ?>