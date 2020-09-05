<?php template('banner', $__data__) ?> 

**Emoticons** is an aesthetic Minecraft mod which adds custom player animations (which support bends) and emote system. At the moment of release, there are **58** emotes (you can also animate your own, see FAQ) which can be triggered by the player using keybinds which come with the mod. Beside that, that's all what the mod does.

Check out this playlist for showcase of the mod.

<?php echo youtube('11lAGyM1Fyc?list=PL6UPd2Tj65nFUAUardpcX1sGXNEo21ZIQ', $domain) ?> 

<?php template('install', array_merge($__data__, ['dependencies' => [['mclib', '2.0']]])) ?> 

## FAQ

**Q: Can you add custom music to emotes?**  
A: No, because I have no time/skill to make cool tunes for every emote, and if I use the original audio that would be illegal. However, you can replace the sounds in Emoticons' jar. Keep in mind that these sounds are going to loop.

**Q: I don't like Emoticons' animations, but emotes are very cool. Can I disable them?**  
A: You can disable them in McLib's dashboard (Ctrl + 0, check for conflicting keybinds in Options - Controls, if it doesn't work) by enabling **Disable non-emote animations** toggle option.

**Q: I'm playing with my friends on the server, and why I can't see them emote, or they can't see me emote?**  
A: In order to see other people emote, the server must also install the mod. No mod on the server, no people emoting.

**Q: Can you add support with mod X?**  
A: No, I won't add support with any other mods.

**Q: Can I add custom emotes myself?**  
A: Yes, watch [this tutorial](https://youtu.be/dhSYT2HEweM) video! Those are not synchronized across clients though. You'll have to manually send these emote files to other people.

**Q: Will you downgrade/upgrade mod to X?**  
A: No. It's gonna stay 1.12.2 only.

**Q: I've seen emotes exactly like yours in Badlion Client. Do you know about it?**  
A: I know, I used to be a Badlion dev. I helped to integrated the client side aspect of the mod into the client.

<?php template('media', $__data__) ?>