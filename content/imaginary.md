<?php template('banner', $__data__) ?>

<?php template('links', $__data__) ?> 

**Imaginary** – a Minecraft mod which gives an abilitiy to add images to Minecraft. This mod supports any formats that Minecraft supports for textures (**PNG**, **JPEG** and **GIF** without animations). This mod is built for Minecraft 1.10.2 and Forge 12.18.3.2185. No compatibility with multiplayer available yet (it's planned for next update, though).

Thanks goes to [Tom Soel](https://twitter.com/TomSoel/) for reminding me of the idea for this mod.

<?php if ($domain === \mchorse\MCF): ?> 
[mod]257038-imaginary[/mod]
<?php endif ?> 

<?php template('install', $__data__) ?> 

## How to use

Imaginary mod adds picture item which allows you to add pictures into your world. Simply drag it from Miscellaneous creative tab, or craft it using following recipe:

![Crafting recipe](http://i.imgur.com/2qAR3vd.png)

After you acquired a picture item, you should be able to place a custom picture on any surface. When picture is placed, you can right click it and change some properties of your picture. To pick a picture, you'll have to populate Imaginary's mod picture folder (which is located in `.minecraft/config/imaginary/pictures`) with your **PNG**, **JPEG** or **GIF** pictures. After you dropped your pictures into the pictures folder, you should be able to pick these pictures in picture's GUI.

<?php if ($domain !== \mchorse\PMC): ?> 
## Tutorial

You can learn about imaginary mod from this video.

<?php echo youtube('3JMUUav_8QA', $domain); endif; ?> 

<?php template('bugs', $__data__) ?> 

<?php template('terms', $__data__) ?> 

<?php template('media', $__data__) ?> 