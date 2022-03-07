<?php template('banner', array_merge($__data__, ['abandoned' => 'open'])) ?> 

<?php template('links', $__data__) ?> 

**Disclaimer**: this mod has nothing to do with Aperture Science from Portal games. See the article on what is [Aperture](https://en.wikipedia.org/wiki/Aperture) actually is.

**Aperture** is a Minecraft mod which allows you to create advanced camera movement (for cinematics or machinimas) using camera editor GUI. It works with Forge for Minecraft 1.12.2 (past versions are available for 1.10.2 and 1.11.2).

Aperture is also available in Chinese language thanks to [ycwei982](https://www.youtube.com/channel/UCfUDMSGlXUblXimkvNl_7Ww), Chunk7, H2SO4GepaoAX and KuenYo, and Russian language thanks to [Andruxioid](https://www.youtube.com/channel/UCnHOceBjwMyqCR5oYOoNqhQ)!

<?php template('install', array_merge($__data__, ['dependencies' => ['mclib']])) ?> 

## For whom is this mod for?

If you want to setup cameras for a Minecraft machinima/roleplay, and you already use [Blockbuster mod](<?php echo $links['blockbuster']['curse'] ?>) in **singleplayer**, then this is a mod for you!

Aperture mod provides a ton of features to improve your camera (in comparison to other camera): 

* Camera profiles that lets you load and save camera work.
* Camera fixtures are building blocks within camera profile which lets you flexibly setup different camera movement depending on the type of fixture it is.
* Camera modifiers allow to post process movement to apply certain effects on top of camera fixtures.
* Works with [Minema](<?php echo $links['minema'] ?>).
* And so much more...

Although Aperture has partial support to work on servers, it's not recommended to use on the servers **as these mechanisms are poorly designed**!

## Videos

This playlist is a **tutorial series**. It should teach you how to use Aperture mod from scratch. It bases of Aperture `1.3.4`. Once you watch these videos and learn how to use it, feel free to watch the change log videos for more information about new features.

<?php echo youtube('_KLU8VnMiCQ?list=PLLnllO8nnzE8MGDb6QzE2kt4-KVC1dRRl', $domain) ?> 

Meanwhile, this playlist contains a list of videos about **Aperture's updates**. These are so-called **change log** videos, which showcase new changes added to Aperture mod.

<?php echo youtube('v_OpT704Sp8?list=PL6UPd2Tj65nFLGMBqKaeKOPNp2HOO86Uw', $domain) ?> 

There is also a **stream archive** that showcases most of features (even those that weren't covered in the tutorial serires above). It's the **most up-to-date** tutorial (using `1.7` as a base):

<?php echo youtube('yaBi3Ky6c60', $domain) ?> 

<?php template('bugs', $__data__) ?> 