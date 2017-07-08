<?php template('banner', $__data__) ?>

<?php template('links', $__data__) ?> 

**Aperture** is a Minecraft mod which allows you to create cinematics using GUI (or commands). It works with Forge for Minecraft 1.10.2, 1.11.2 and 1.12. 

Aperture's features are fully frame based, which allows you to record smooth footage using [Minema](<?php echo $links['minema'] ?>) mod. 

Here are some features which makes Aperture different from other camera mods:

* Camera profiles can be saved and loaded from config folder or the server (if the mod is installed).
* Provides different camera behavior blocks (which are known as camera fixtures):
    * Idle fixture – does nothing, just locks the camera
    * Path fixture – animates the camera through a set of points using one of the three interpolations: linear, cubic or hermite
    * Look fixture – locks the camera at given position, and follows given entity (using entity selector) by looking at it
    * Follow fixture – locks the camera relatively to the given entity (kind of like GoPro but fixed)
    * Circular fixture – circulate around the center point and facing at it
* Provides a GUI which eases camera profile and fixtures editing a lot. There is also command interface, if needed.
* Playback duration is measured in **ticks**, instead of frames or milliseconds, which makes editing more consistent. Tick is a unit which is in the middle between frames and milliseconds. They don't depend on the frame rate in the settings, meanwhile also can be easily converted to seconds. There are about 20 ticks per a second (depends on the lag).
* Provides a smooth camera which is basically an analogue of vanilla cinematic camera, but Minema friendly.

<?php if ($domain === \mchorse\MCF): ?> 
[mod]271561-aperture[/mod]
<?php endif ?> 

## Videos

There is a playlist of videos which are about Aperture. At the moment of public release, there are two videos: mod's teaser and mod's tutorial.

<?php echo youtube('36E5-HYoH5I?list=PL6UPd2Tj65nFLGMBqKaeKOPNp2HOO86Uw', $domain) ?> 

<?php template('install', $__data__) ?> 

<?php template('terms', $__data__) ?> 

<?php template('media', $__data__) ?> 

<?php template('bugs', $__data__) ?> 