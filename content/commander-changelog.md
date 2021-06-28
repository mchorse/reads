## Version 1.1

**Compatible** with McLib `2.3`. It doesn't mean that future versions of McLib would be incompatible, but older versions are most likely incompatible.

* Changed to handle multiple commands in a single command to be handled by ` || ` instead of `||` (meaning you'll need to provide spaces between two commands)
* Fixed and updated to work with McLib `2.3`

## Version 1.0.2

This is a tiny update that adds `/forinc` command, which is like `/forin` command, but for client side commands.

**Compatible** with McLib `1.0.2`. It doesn't mean that future versions of McLib would be incompatible, but older versions are most likely incompatible.

* Added `/forinc` command, which is like `/forin` command, but the difference is that it executes client side commands

## Version 1.0.1

Second update of Commander mod. This update now makes Commander mod depend upon McLib (version 1.0.2) mod, and also adds multiple commands in line parsing.

* Added multiple command parsin in one line using `||` construct
* Added `mclib` 1.0.2 as a dependency (which in turns allow to use same math builder system as in McLib which has more functions)

## Version 1.0

Initial release of Commander adds very basic features.

<?php echo youtube('R_Nnu-iLj1c', $domain) ?> 

* Added `/forin <start> <end> <command...>` command
* Added `@{...}` constuction which can be used within commands to execute mathematical expressions, it supports same features as Aperture's [math modifier](https://github.com/mchorse/aperture/wiki/Math-Expressions)
* Added `i`, `j`, `k`,  `i_c`, `j_c`, `k_c`, `i_s`, `j_s`, `k_s`,  `x`,  `y`, `z` variables