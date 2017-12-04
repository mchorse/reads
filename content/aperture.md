<?php template('banner', $__data__) ?>

<?php template('links', $__data__) ?> 

**Disclaimer**: this mod has nothing to do with Aperture Science from Portal games.

**Aperture** is a Minecraft mod which allows you to create advanced camera movement (for cinematics or machinimas) using camera editor GUI. It works with Forge for Minecraft 1.10.2, 1.11.2 and 1.12.

## Features

**Aperture** mod provides a lot of features for flexible camera editing.

* **Loadable and saveable camera profiles**. You don't need to worry about losing your camera setup. With Aperture's camera profiles, you can save your camera setup on the server (if the Aperture is installed on the server) or on the client (in `config/aperture/cameras` folder).
* **Duration is measured in ticks**. A tick is basically an update in game's logic. Minecraft's logic loop running at 20 ticks per second. Why ticks? They're static, while frames depend on framerate, and can be easily converted into seconds (while not depending on real-time).
* **Flexible camera setup with multiple camera fixtures within a camera profile**. Other camera mods usually gives you an ability to setup only one path at the time. Aperture allows you to have as much camera paths (and not only) as you need to within same camera profile. There are few types of camera fixtures in Aperture: 
    * Idle fixture – static camera
    * Path fixture – animates the camera through a set of given points using one of the three interpolations: linear, cubic or hermite
    * Look fixture – locks the camera at given position, and looks at given entity (using entity selector)
    * Follow fixture – locks the camera relatively to the given entity (kind of like GoPro but fixed)
    * Circular fixture – circulate around the center point and facing at it
* **More camera flexibility with camera modifiers**. Camera modifiers are modular blocks which post-process camera fixture's output. With these modifiers, you can add camera shake, apply math equation, make a GoPro-like behavior, look at some entity while traveling a path, and much more combined. See [wiki](<?php echo $links['aperture']['wiki'] ?>) for more information.
* **Provides a smooth camera** as a Minema-friendly alternative of vanilla cinematic camera.

<?php if ($domain === \mchorse\MCF): ?> 
[mod]271561-aperture[/mod]
<?php endif ?> 

## Videos

This playlist contains a list of videos about Aperture's updates and tutorials.

<?php echo youtube('dKmurdnlj1A?list=PL6UPd2Tj65nFLGMBqKaeKOPNp2HOO86Uw', $domain) ?> 

<?php template('install', $__data__) ?> 

<?php template('terms', $__data__) ?> 

<?php template('media', $__data__) ?> 

<?php template('bugs', $__data__) ?> 