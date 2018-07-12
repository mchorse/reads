<?php template('banner', $__data__) ?> 

<?php template('links', $__data__) ?>  
[EchebKeso](https://twitter.com/EchebKeso) – [Mocap mod](http://www.minecraftforum.net/forums/mapping-and-modding/minecraft-mods/1445402-minecraft-motion-capture-mod-mocap-16-000) – [Mocap's source code](https://github.com/EchebKeso/Mocap)

Blockbuster is a Minecraft mod which lets you create Minecraft machinimas/roleplays series in singleplayer using NPC body actors. Besides providing basic recording and playback, it also features a lot of miscellaneous features which can help you add some originality to your video, extending your possibilities beyond plain body acting (see **Features** section). 

This mod works with Forge for Minecraft 1.10.2, 1.11.2 and 1.12.2 (requires Forge **14.23.4.2638** or higher).

Blockbuster mod depends upon [Metamorph](<?php echo $links['metamorph']['curse'] ?>). Every new change log will specify the version of Metamorph supported. Blockbuster also provides **optional** integration for [Aperture](<?php echo $links['aperture']['curse'] ?>) mod.

Recording and playback is based on, and rewritten from scratch, Mocap mod by [EchebKeso](https://twitter.com/EchebKeso).

<?php if ($domain === \mchorse\MCF): ?> 
[mod]254152-blockbuster[/mod]
<?php endif ?> 

## Features

Blockbuster mod provides you with lots of features to make cool machinimas/roleplay series:

* **Actors and player recording** – the most important feature, as you won't be able to create a machinimas without it. With Blockbuster mod you can record yourself doing things and then playback it using an actor. *Recording code has some limitations on which actions it can record*. See [Blockbuster Wiki](<?php echo $links['blockbuster']['wiki'] ?>) for more information about limitations.
* **Director blocks** – one actor is good, a crowd of them is even better. Blockbuster mod provides you with a mechanism called *director block* which manages playback of registered actors. It allows you to record actors. It also has outlets for redstone contraptions, making it easy attaching some custom commands or redstone logic on start or the end of the scene playback.
* **Model block** – besides actors, Blockbuster also adds a *model block*, allowing you placing down custom models or mobs as static props, which allows creating magnificient and immersive scenes. Besides placing them down, you can also hold those models or mobs in your hand (this feature available only in 1.12.2 build of the mod).
* **[Aperture](<?php echo $links['aperture']['curse'] ?>) support** – camera is how you present your machinima. Blockbuster mod has built-in Aperture integration. When Aperture is loaded, Blockbuster mod provides you with some features such as: ability to attach camera profiles to playback button, and previewing director block playback while editing cameras in the camera editor.
* **Custom models** – recording only player-like entities limits the originality of your machinimas. Blockbuster mod let's you create custom models using in-game model editor. Unleash your creativity with custom models!
* **OBJ models** – beside custom models which can be created with in-game custom model editor, Blockbuster also supports OBJ models on top of custom JSON models!
* **Mobs support** – thanks to [Metamorph](<?php echo $links['metamorph']['curse'] ?>)'s public API, Blockbuster is capable of using any morphs which Metamorph provides to be used by Blockbuster actors.
* **[Minema](<?php echo $links['minema'] ?>) compatability** – thanks to frame-based player recording and cameras, you can convert your in-game machinimas to videos with a press of a button.
* **Green screen features** – Blockbuster adds glowing green blocks without any shading and an option to turn the sky fully green which makes it easier creating green screens for post processing of your machinimas. 

<?php template('install', array_merge($__data__, ['dependencies' => ['metamorph']])) ?> 

## Videos

### Tutorial videos

Feature videos for 1.4. This playlist shows how to use the mod features. Almost every update comes with a change log video which show out new features.

<?php echo youtube('r3BpwMBDxwk?list=PL6UPd2Tj65nEwg2bfY-NduLihPy6fgnvK', $domain) ?> 

There's also a video that shows how to create a simple machinima using Blockbuster mod. This video shows basics of director block, how to attach actors to director block, and how to setup cameras:

<?php echo youtube('cVTIzKzWtqg?list=PL6UPd2Tj65nE0Pmf6GD2Fk3aRGWTGKlZk', $domain) ?> 

### Machinima Examples

This playlist consists out of videos that I've created a bunch of machinimas during Blockbuster mod testings and just when I felt like. Earlier of those videos are my lab experiments.

<?php echo youtube('3uMywkj1_Gs?list=PL6UPd2Tj65nFdhjzY-z6yCJuPaEanB2BF', $domain) ?> 

<?php template('terms', $__data__) ?> 

<?php template('media', $__data__) ?> 

<?php template('bugs', $__data__) ?> 

<?php if ($domain === \mchorse\GH): ?> 
## License

Blockbuster mod's code is licensed under MIT license. See [LICENSE.md](./LICENSE.md) file for more information about the license.

## For Devs

Language files are compiled from YML (which are located in `help/` folder) to INI format. 

If you're going to work with localization strings, modify the appropriate YML file, first. Then use the `./gradlew buildLangFiles` command to convert YML to INI format `.lang` files directly to `src/main/resources/assets/blockbuster/lang` folder. Don't forget to refresh your IDE after building the langauge files.

Also, you need [Aperture](<?php echo $links['aperture']['github'] ?>)'s and [Metamorph](<?php echo $links['metamorph']['github'] ?>)'s dev builds. Build them and then grab `-sources.jar` and `-dev.jar` to `run/libs/` folder, and refresh the IDE.
<?php endif ?>