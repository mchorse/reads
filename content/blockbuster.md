<?php template('banner', $__data__) ?> 

<?php template('links', $__data__) ?>  
[EchebKeso](https://twitter.com/EchebKeso) – [Mocap mod](http://www.minecraftforum.net/forums/mapping-and-modding/minecraft-mods/1445402-minecraft-motion-capture-mod-mocap-16-000) – [Mocap's source code](https://github.com/EchebKeso/Mocap)

**Blockbuster** is a Minecraft mod which helps you create Minecraft machinimas/roleplays series using NPC body actors. Besides providing basic recording and playback, it also features a ton of miscellaneous features which can help you to add some originality to your video, extending your possibilities beyond plain body acting (see **Features** section). 

This mod works with Forge for Minecraft 1.10.2, 1.11.2 and 1.12.2 (requires Forge **14.23.4.2638** or higher).

Blockbuster mod depends upon [Metamorph](<?php echo $links['metamorph']['curse'] ?>) and [McLib](<?php echo $links['mclib']['curse'] ?>). Every new change log will specify the version of Metamorph supported. Blockbuster also provides **optional** integration for [Aperture](<?php echo $links['aperture']['curse'] ?>) mod.

Recording and playback is based on, and rewritten from scratch, Mocap mod by [EchebKeso](https://twitter.com/EchebKeso).

<?php if ($domain === \mchorse\MCF): ?> 
[mod]254152-blockbuster[/mod]
<?php endif ?> 

![MachinimaHub](<?php echo $links['hub']['banner'] ?>)

If you're interested in any aspect of Minecraft machinimas, roleplays or animations (creation, watching, voice acting and etc.), [feel free to join](<?php echo $links['hub']['invite'] ?>) the MachinimaHub. **MachinimaHub** is a community run Discord server about machinimas (and other forms of story-telling videos such as first-person roleplays and animations). 

Beside that, MachinimaHub has lots of Blockbuster users, so if you need any help feel free to hop on the server!

<?php template('install', array_merge($__data__, ['dependencies' => ['mclib', 'metamorph']])) ?> 

## FAQ

**Q: Model block is invisible when I hold it in the hand. How to fix it? (1.12.2)**  
A: Looks like you're using Optifine D1 or below. Update Optifine to D2 or higher.

## Features

Blockbuster mod provides you with lots of features to create outstanding machinimas/roleplay series:

* **Actors and player recording** – the most important feature, as you won't be able to create a machinimas without it. With Blockbuster mod you can record yourself doing things and then playback it using an actor. *Recording code has some limitations on which actions it can record*. See [Blockbuster Wiki](<?php echo $links['blockbuster']['wiki'] ?>) for more information about limitations.
* **Director blocks** – special blocks which manage playback of multiple actors. With a director block, you can record an actor at a time, meanwhile reacting to previously recorded actors, making it possible to create complex scenes solo.
* **Scenes** – scenes are just like director blocks, but cooler. They are stored in separate files (in world's `blockbuster/scenes/` folder), as opposed in the world. With scenes, you can create templates, transfer to another worlds, and most importantly you will never lose them in the world.
* **Model block** – besides actors, Blockbuster also adds a *model block*, allowing you placing down custom models or mobs as static props, which allows creating magnificient and immersive scenes. Besides placing them down, you can also hold those models or mobs in your hand.
* **BB gun item** – a special item which shoots projectiles on right click. This feature provides many different configuration options which can be used to create not only firearm combat scenes, but also special effects like avalanches, fake physics, crowd explosion and much more!
* **[Aperture](<?php echo $links['aperture']['curse'] ?>) support** – Blockbuster mod has built-in Aperture integration. When Aperture is loaded, Blockbuster mod provides you with some features such as: ability to attach camera profiles to playback button, previewing director block playback while editing cameras and editing the player recording actions within the camera editor.
* **Custom models** – recording only player-like entities limits the originality of your machinimas. Blockbuster mod let's you create custom models using in-game model editor. Unleash your creativity with custom models!
* **OBJ models** – beside custom models which can be created with in-game custom model editor, Blockbuster also supports OBJ models on top of custom JSON models!
* **Morphs support** – thanks to [Metamorph](<?php echo $links['metamorph']['curse'] ?>)'s morph API, Blockbuster is capable of using any morphs which Metamorph provides to be used by Blockbuster actors. Including Blockbuster's provided morphs and [Emoticons](<?php echo $links['emoticons']['curse'] ?>)' morphs.
* **Advanced morphs** – beside registering custom models into morph system, Blockbuster also provides special morphs for advanced machinima creation:
	* **Image morph** – a morph which allows to display an image (on a plane).
    * **Sequencer morph** – a morph that switches between given morphs automatically, depending on delays set between multiple morphs.
    * **Record morph** – a morph that allows to playback a player recording within the morph itself (useful with model block or body part system).
    * **Structure morph** – a morph that allows to morph into a structure saved with structure block.
    * **Particle morph** – a morph which allows to emote vanilla and morph particles.
* **Green screen features** – Blockbuster adds glowing green blocks without any shading and an option to turn the sky fully green which makes it easier creating green screens for post processing of your machinimas. 
* **Animated GIF support** – now you can put reaction and meme GIFs onto Blockbuster models and just as images. Credit goes to [MrCrayfish's furniture mod](https://github.com/MrCrayfish/MrCrayfishFurnitureMod) and [DhyanB](https://github.com/DhyanB/Open-Imaging/blob/master/src/main/java/at/dhyan/open_imaging/GifDecoder.java).
* **[Minema](<?php echo $links['minema'] ?>) compatability** – thanks to frame-based player recording and cameras, you can convert your in-game machinimas to videos with a press of a button.
* **Speaks multiple languages** – besides English, Blockbuster is also translated into Russian and Chinese thanks to [Andruxioid](https://www.youtube.com/channel/UCnHOceBjwMyqCR5oYOoNqhQ) and [ycwei982](https://www.youtube.com/channel/UCfUDMSGlXUblXimkvNl_7Ww), respectively.

## Videos

### Tutorial videos

This is change logs playlist. Almost every update (for exception of patches with bug fixes and minor features) comes with a change log video which showcases new features, and briefly shows how to use them.

<?php echo youtube('4n5p83KAG4k?list=PL6UPd2Tj65nEwg2bfY-NduLihPy6fgnvK', $domain) ?> 

Here is also a playlist of tutorials directly or indirectly related to Blockbuster/Minecraft machinima creation. Make sure to check it out, as it consists out of tutorials such as basics of Blockbuster mod, how to import OBJ models, etc.

<?php echo youtube('vo8fquY-TUM?list=PLLnllO8nnzE-LIHZiaq0-ZAZiDO82K1I9', $domain) ?> 

### Blockbuster machinimas

This playlist consists out of videos that I've created a bunch of machinimas during Blockbuster mod testings and just when I felt like. Feel free to check out my crazy videos.

<?php echo youtube('0h0KeuHaXM4?list=PL6UPd2Tj65nFdhjzY-z6yCJuPaEanB2BF', $domain) ?> 

Here is also a playlist of 400+ community made videos with Blockbuster mod:

<?php echo youtube('mSvKmB25kPQ?list=PL6UPd2Tj65nEE8kLKBxYYZLAjruJkO0r_', $domain) ?> 

<?php template('media', $__data__) ?> 

<?php template('bugs', $__data__) ?> 

<?php if ($domain === \mchorse\GH): ?> 
## License

Blockbuster mod's code is licensed under MIT license. See [LICENSE.md](./LICENSE.md) file for more information about the license.

## For Devs

Language files are compiled from YML (which are located in `help/` folder) to INI format. 

If you're going to work with localization strings, modify the appropriate YML file, first. Then use the `./gradlew buildLangFiles` command to convert YML to INI format `.lang` files directly to `src/main/resources/assets/blockbuster/lang` folder. Don't forget to refresh your IDE after building the langauge files.

Also, you need [Aperture](<?php echo $links['aperture']['github'] ?>)'s, [McLib](<?php echo $links['mclib']['github'] ?>) and [Metamorph](<?php echo $links['metamorph']['github'] ?>)'s dev builds. Build them and then grab `-sources.jar` and `-dev.jar` to `run/libs/` folder, and refresh the IDE.
<?php endif ?>