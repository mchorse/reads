<?php template('banner', $__data__) ?> 

**Emoticons** is a aesthetic Minecraft mod which adds custom player animations (which supports bends) and emote system. At the moment of release, there are **52** emotes which can be triggered by the player using keybinds which come with the mod. Beside that, that's all what the mod does.

Check out this playlist for showcase of the mod.

<?php echo youtube('M76ugB8vtaU?list=PL6UPd2Tj65nFUAUardpcX1sGXNEo21ZIQ', $domain) ?> 

<?php template('install', array_merge($__data__, ['dependencies' => [['mclib', '2.0']]])) ?> 

## F.A.Q.

**Q: Can you add custom music to emotes?**  
A: No, because I have no time/skill to make cool tunes for every emote, and if I use the original audio that would be illegal. However, you can make your own custom resource pack or place the sounds to Emoticons' jar, and replace the emoticons sound events.

**Q: I don't like Emoticons' animations, but emotes are very cool. Can I disable them?**  
A: You can disable them in 0.2.1 (or above) in the emote configuration menu.

**Q: I'm playing with my friends on the server, and why I can't see them emote, or they can't see me emote?**  
A: In order to see other people emote, the server must also install the mod. No mod on the server, no people emoting.

**Q: Can you add support with mod X?**  
A: No, I won't add support with any other mods.

**Q: Can I add custom emotes myself?**  
A: Not yet.

**Q: Will you downgrade/upgrade mod to X?**  
A: No. It's gonna stay 1.12.2 only, for now.

**Q: I've seen emotes exactly like yours in Badlion Client. Do you know about it?**  
A: Yes, I know, I used to be a Badlion dev. I helped to integrated the client side aspect of the mod into the client.

<?php template('media', $__data__) ?>