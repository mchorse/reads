<?php template('links', $__data__) ?> 

**Commander** is a Minecraft mod which allows enhances command usage experience. Currently, this mods adds only one command to execute commands in a loop. 

<?php if ($domain === \mchorse\MCF): ?> 
[mod]257038-commander[/mod]
<?php endif ?> 

<?php template('install', $__data__) ?> 

## How to use

At the moment, commander provides `/forin` command which allows executing commands in a loop. `/forin` command's syntax is following:

    /forin <start> <end> <command>

Where `<start>` is first index, and `<end>` is the value that you want `/forin` to iterate between. Both of those arguments must be integers, and the step value is `1`.

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

As you can see, `@{i}` construction was replaced with the index. `i` is the value of the index. Besides supporting index variable, you can also use mathematical expressions within `@{...}` construct. For example, if you want to spawn 10 creepers around you in the circle (within `10` block radius), you can use this command:

    /forin 0 9 summon Creeper ~@{cos(i/10*PI*2)*10} ~ ~@{sin(i/10*PI*2)*10}

See [this page](https://github.com/mchorse/aperture/wiki/Math-Expressions) for more information.

<?php template('terms', $__data__) ?> 

<?php template('media', $__data__) ?> 

<?php template('bugs', $__data__) ?> 