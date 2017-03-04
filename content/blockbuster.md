<?php template('banner', $__data__) ?> 

<?php template('links', $__data__) ?>  
[EchebKeso](https://twitter.com/EchebKeso) – [Mocap mod](http://www.minecraftforum.net/forums/mapping-and-modding/minecraft-mods/1445402-minecraft-motion-capture-mod-mocap-16-000) – [Mocap's source code](https://github.com/EchebKeso/Mocap)

Blockbuster (**pun intended**) is a Minecraft mod which lets you create Minecraft machinimas in single player, without having to recruit and/or organize a crowd of body actors and cameras.

Blockbuster mod depends upon [Metamorph](<?php echo $links['metamorph']['curse'] ?>). Every new change log will specify the version of Metamorph supported. It's built on top of Forge 12.18.1.2185 for Minecraft 1.10.2, and provides builds for 1.9.4 and 1.11.2.

Recording is based and rewritten from scratch on recording code from Mocap mod by [EchebKeso](https://twitter.com/EchebKeso).

<?php if ($domain === \mchorse\MCF): ?> 
[mod]254152-blockbuster[/mod]
<?php endif ?> 

## Features

Blockbuster mod provides you with lots of features to make cool machinimas:

* **Actors and player recording** – the most important feature, as you won't be able to create a machinimas without it. With Blockbuster mod you can record yourself doing things and then playback it using an actor. *Recording code has some limitations on which actions it can record*. See [Blockbuster Wiki](<?php echo $links['blockbuster']['github'] ?>/wiki/Home) for more information about limitations.
* **Director blocks** – one actor is good, a crowd of them is even better. Blockbuster mod provides you with a mechanism called *director block* which manages playback of registered actors. It has also outlets for redstone contraptions, making it easy attaching some custom commands or redstone logic on start or the end of the scene playback.
* **Camera support** – camera is how you present your machinima. Blockbuster mod has a support for different camera features starting from simple idle camera to complex camera which moves through the path (with FOV animation), following and looking at the actor.
* **Custom models** – recording only player-like entities isn't very fun. Blockbuster mod has support for custom models created in McME model editor (link above). Unleash your creativity with custom models!
* **Mobs support** – thanks to [Metamorph](<?php echo $links['metamorph']['curse'] ?>)'s public API, Blockbuster is capable of using any morphs which Metamorph provides to be used with Blockbuster actors.
* **[Minema](<?php echo $links['minema'] ?>) compatability** – thanks to frame-based player recording and cameras, you can convert your in-game machinimas to high-quality video output.

<?php template('install', array_merge($__data__, ['dependencies' => ['metamorph']])) ?> 

## Videos

### Tutorial videos

Feature videos for 1.4. This playlist shows how to use the mod features. Every update comes with a change log video which show out new features.

<?php echo youtube('EY8pvphu724?list=PL6UPd2Tj65nEwg2bfY-NduLihPy6fgnvK', $domain) ?> 

There's also a video that shows how to create a simple machinima with Blockbuster mod. This video shows basics of director block, how to attach actors to director block, and how to setup cameras:

<?php echo youtube('cVTIzKzWtqg?list=PL6UPd2Tj65nE0Pmf6GD2Fk3aRGWTGKlZk', $domain) ?> 

### Machinima Examples

This playlist consists out of videos that I've created during Blockbuster mod testings. Those videos are my lab experiments. Don't judge the quality of these machinimas yet, I'm still learning.

<?php echo youtube('11L4vLzhcVM?list=PL6UPd2Tj65nFdhjzY-z6yCJuPaEanB2BF', $domain) ?> 

<?php template('bugs', $__data__) ?> 

<?php template('terms', $__data__) ?> 

<?php template('media', $__data__) ?> 

<?php if ($domain === \mchorse\GH): ?> 
## License and Manual

Blockbuster mod's code is licensed under MIT, see file [LICENSE.md](./LICENSE.md) for more information about the license. Manual is located in repository's [wiki](https://github.com/mchorse/blockbuster/wiki). 

## For Devs

Language files have to be compiled from YML to INI format using PHP. You need to have PHP 5 and [composer installed](https://getcomposer.org/download/). Once when you have PHP and composer, run:

```sh
# Go to "php" folder
cd php

# Install PHP dependencies (I assumed you installed composer in the root of repository)
../composer.phar install

# Go back
cd ..

# Or "make check"
make build_lang
```

This should compile YML files into language files. Also, you'll have to refresh Eclipse or your IDE to get the changed file get into the app. Simply open `en_US.lang` in IDE and build the project again.

Also download one of the [Metamorph](<?php echo $links['metamorph']['curse'] ?>)'s `-dev` jars (and optionally `-source`, for documentation) published in releases. Put the `-dev` mod into `run/mods` (for more information check `depenencies` block in `build.gradle`).
<?php endif ?> 