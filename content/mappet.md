<?php template('banner', array_merge($__data__, ['abandoned' => 'open'])) ?> 

<?php template('links', $__data__) ?> 

**Mappet** is a Minecraft mod (for **1.12.2** exclusively) that is designed as a tool set for far superior adventure maps than possible with vanilla. It's also possible to use Mappet for scripted roleplays, and, to some extent, in Minecraft machinimas.

Special thanks to [Andruxioid](https://www.youtube.com/channel/UCnHOceBjwMyqCR5oYOoNqhQ) for the mod's name, Jvonlins, Centryfuga and [CustomNPCs Forever Vkontakte](https://vk.com/customnpcforever) group for testing, suggestions and directing!

<?php template('install', array_merge($__data__, ['dependencies' => [['mclib'], ['metamorph'], ['blockbuster']]])) ?> 

## Scripting

Mappet features scripting API, which allows program game logic within Minecraft using JS (ES5 by default) or Kotlin scripts. For more information, visit [Mappet wiki's page](https://github.com/mchorse/mappet/wiki/Scripts) about scripts.

### JavaScript (ES5)

For JS scripts to work, you would need to get Nashorn jar (which is located in Java's (JRE/JDK) home folder by path `lib/ext/nashorn.jar`) into Minecraft's mods folder. 

If you're already If you're already using [CustomNPCs](https://www.curseforge.com/minecraft/mc-mods/custom-npcs) mod with Mappet, **you don't need to do this**. If you use GraalVM instead of Oracle's Java or OpenJDK, scripts should work without Nashorn due to GraalJS.

### Kotlin scripts

For Kotlin scripts to work, you would need Mappet 0.3+ and to download this [fat jar](https://github.com/TorayLife/KotlinScripting/releases/tag/release) and place it in Minecraft's mods folder. By default, scripts are assumed to be using JS. 

To make your script use Kotlin scripting, you need re/name your script ending with `.kts`, then instead of JS scripting engine, Kotlin scripting would be used.

## Resources

At the moment, the mod is still in development, however, here is a playlist of videos that cover some Mappet mod's features:

<?php echo youtube('kJypWweCnKg?list=PLLnllO8nnzE__n6aLU8WUtfsGL1A62l0z', $domain) ?> 

Alternatively, there is [an almost complete wiki](<?php echo $links['mappet']['wiki'] ?>) describing all Mappet's mechanics. If you'll have questions about the mod, you can also join [Mappet's Discord server](<?php echo $links['mappet']['discord'] ?>).