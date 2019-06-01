<?php template('banner', $__data__) ?> 

<?php template('links', $__data__) ?> 

**Commander** is a Minecraft mod which allows enhances command usage experience. Currently, this mods adds only one command to execute commands in a loop. 

I don't recommend using this mod on a server, since it's very easy to get the server lag, freeze or crash with the loop command. **If you're going to use it on the public server, use it at your own risk**.

<?php if ($domain === \mchorse\MCF): ?> 
[mod]299411-commander[/mod]
<?php endif ?> 

<?php template('install', array_merge($__data__, ['dependencies' => ['mclib']])) ?> 

## How to use

At the moment, commander provides `/forin` command which allows executing commands in a loop. `/forin` command's syntax is following:

    /forin <start> <end> <command>

Where `<start>` is first index, and `<end>` is the value that you want `/forin` to iterate between. Both of those arguments must be integers, and the step value is `1`. Also, you can nest `/forin` command only **three** times.

`<command>` argument can be any valid commands, however, besides that, `<command>` accepts variables through `@{...}` construction. For example, if you want to spawn 5 creepers in a row across X axis, you can use this `/forin` like this:

    /forin 0 4 summon Creeper ~@{i} ~ ~
    # Or for 1.11.2+
    /forin 0 4 summon minecraft:creeper ~@{i} ~ ~

This command will evaluate into this:

    /summon Creeper ~0 ~ ~
    /summon Creeper ~1 ~ ~
    /summon Creeper ~2 ~ ~
    /summon Creeper ~3 ~ ~
    /summon Creeper ~4 ~ ~

As you can see, `@{i}` construction was replaced with the index. Within `@{...}` following variables are present when using `/forin` command:

|Name|Description|
|-|-|
|`i`|Index of the `/forin` loop|
|`j`|Index of the `/forin` loop (second nesting)|
|`k`|Index of the `/forin` loop (third nesting)|
|`i_c`, `j_c` and `k_c`|Count of iteration for given iteration|
|`i_s`, `j_s` and `k_s`|`<start>` index you passed into `/forin` command for given iteration|
|`x`|X coordinate of command sender in the world|
|`y`|Y coordinate of command sender in the world|
|`z`|Z coordinate of command sender in the world|

Besides supporting variables, you can also use mathematical expressions within `@{...}` construct. For example, if you want to spawn 10 creepers around you in the circle (within `10` block radius), you can use this command:

    /forin 0 9 summon Creeper ~@{cos(i/i_c*PI*2)*10} ~ ~@{sin(i/i_c*PI*2)*10}

See [this page](https://github.com/mchorse/aperture/wiki/Math-Expressions) for more information. 

And finally, Commander mod supports multiple commands executed in one line by separating commands using `||` symbols:

    /particle explode ~ ~ ~ 0.1 0.1 0.1 0.1 10 || setblock ~ ~ ~ minecraft:stone

## Video

Here is also a short showcase video of some of the usages of this mod:

<?php echo youtube('R_Nnu-iLj1c', $domain) ?> 

<?php template('terms', $__data__) ?> 

<?php template('media', $__data__) ?> 

<?php template('bugs', $__data__) ?> 