## Version 0.5

This update is compatibility update to work correctly with McLib **2.0**, and others.

**Compatible** with McLib **2.0** and optionally with Blockbuster **2.0** and Metamorph **1.2**. It doesn't mean that future versions of McLib, Blockbuster and Metamorph would be incompatible, but older versions are most likely incompatible.

* Added bone picking by Ctrl + clicking on the blue boxes
* Added all mod options to McLib's mod configurations (Ctrl + 0)
* Added player preview option category
* Added empty sound files for easier replacement of sounds for emotes
* Fixed to work with newer versions of McHorse's mods
* Fixed particle morphs from Blockbuster not working correctly from body parts of `emoticons.*` morphs

## Version 0.4.3

This hot patch update fixes stupid transparency issue with model when used with Optifine, because Optifine changes blending function smh.

**Compatible** with McLib **1.0.4** and optionally with Blockbuster **1.6.4** and Metamorph **1.1.10**. It doesn't mean that future versions of McLib, Blockbuster and Metamorph would be incompatible, but older versions are most likely incompatible.

* Fixed semi-transparent model due to Optifine not cleaning up its OpenGL state

## Version 0.4.2

This update fixes a couple of issues with multiplayer servers ("wallhack" aka F3 skeleton rendering through walls and invisibility potions).

**Compatible** with McLib **1.0.4** and optionally with Blockbuster **1.6.4** and Metamorph **1.1.10**. It doesn't mean that future versions of McLib, Blockbuster and Metamorph would be incompatible, but older versions are most likely incompatible.

* Added a check box "Fixate movement" for specific bone in pose editor
* Added new Nazzy's animations (swimming, landing and dying)
* Fixed model getting rendered when player under invisibility effect
* Fixed armature being rendered and acting as a wall hack 
* Fixed animated poses not working with poseless morph
* Fixed vehicle causing rotation issues (helicopter spinning)

## Version 0.4.1

This tiny patch update makes Emoticons work with Blockbuster 1.6.4.

**Compatible** with McLib **1.0.4** and optionally with Blockbuster **1.6.4** and Metamorph **1.1.10**. It doesn't mean that future versions of McLib, Blockbuster and Metamorph would be incompatible, but older versions are most likely incompatible.

* Fixed a crash with Blockbuster 1.6.4

## Version 0.4

This small update that adds 9 different emote and fixes a couple of bugs.

<?php echo youtube('M76ugB8vtaU', $domain) ?> 

**Compatible** with McLib **1.0.4** and optionally with Blockbuster **1.6.2** and Metamorph **1.1.10**. It doesn't mean that future versions of McLib, Blockbuster and Metamorph would be incompatible, but older versions are most likely incompatible.

* Added 9 new emotes: **Bongo Cat**, **Breathtaking**, **Disgusted**, **Exhausted**, **Punch!**, **Slap**, **Sneeze**, **Threatening** and **Woah**
* Fixed/improve player animation by fixing bezier function to work correctly
* Fixed sitting oriented toward one direction with chairs from other mods

## Version 0.3.2

This small patch update provides new emote animations made by [Nazzy](https://www.youtube.com/channel/UCQ2L7O1KDK7ze75dSe1C-yg) and Moris, beside that it also fixes one mod compatibility issue with [PlayerRevive](https://www.curseforge.com/minecraft/mc-mods/playerrevive) mod.

**Compatible** with McLib **1.0.3** and optionally with Blockbuster **1.6** and Metamorph **1.1.8**. It doesn't mean that future versions of McLib, Blockbuster and Metamorph would be incompatible, but older versions are most likely incompatible.

* Added new non-emote animations (which are made by **Nazzy** and **Moris**)
* Decresed the file size by doing some internal rewriting and file management
* Fixed player not lying on the ground when using PlayerRevive mod by **CreativeMD**

## Version 0.3.1

This patch update fixes few issues with emote synchronization.

**Compatible** with McLib **1.0.3** and optionally with Blockbuster **1.6** and Metamorph **1.1.8**. It doesn't mean that future versions of McLib, Blockbuster and Metamorph would be incompatible, but older versions are most likely incompatible.

* Added custom payload channel `Emoticons` (send `<player_username>` to establish connection, and `<player_username> <emote_id>` to send the emote playing)
* Fixed proper name tag rendering (not just the name but also server side formatting, if there is any)
* Fixed emote server synchronization not working after player dies or goes to another dimension
* Fixed /emote commmand not working on the server.
* Fixed Blockbuster emote action not working with Blockbuster's body actors

## Version 0.3

<?php echo youtube('OmruW-fz7ro', $domain) ?> 

This long update took long quite long to get finished, and I don't think I actually got done anything finished, but here we go.

**Compatible** with McLib **1.0.3** and optionally with Blockbuster **1.6** and Metamorph **1.1.8**. It doesn't mean that future versions of McLib, Blockbuster and Metamorph would be incompatible, but older versions are most likely incompatible.

* Added new emotes: Get Funky, Free Flow, Shimmer, Twerk and Clubbing
* Added new mod dependency **McLib**
* Added simplified models
* Added config option to disable sound event registering
* Added 2 more emote keybinds
* Added Emoticons morph editor to support full configuration of morphs
* Added Emoticons morph animated poses
* Changed different model shading method
* Fixed crash with some strict graphics card drivers
* Fixed crash with dedicated server and morphs

## Version 0.2.1

Third update. This quick patch provides few important tweaks. This update removed the F1 watermark, fixes dying animation not showing up during emote, adds empty sound events for dances, adds an option in emote configuration menu to disable non-emote animations, decreased the file size of the jar, and finally added extra information on the crash screen (so it would be easy to understand what's going on with access key).

## Version 0.2

Includes support for vanilla armor, a tweak to emote key binds (which allows changing to another emote without stopping an emote), and also 10 new emotes: Fist, Gangnam Style, Pointing, Gopak aka Squat Kick (suggested by Andruxioid), Salute, Skibidi, Shrug, T-pose, Take the L and Rock-paper-scissors.

## Version 0.1

Initial release of Emoticons mod (which was rebranded from Fortcraft before release). This inlcludes 4 emote keybinds, 28 emotes and substitute animations for player model.