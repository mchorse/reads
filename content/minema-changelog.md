## Minema 3.5.1

* Fixed GUI overlays not blending correctly with alpha feature (big thanks to Sekwah)
* Fixed a crash when sync engine is disabled
* Updated French strings for 3.5 (thanks to Lycoon)
* Updated Chinese strings for 3.5 (thanks to Chunk7, KuenYo_ and H2SO4GepaoAX)

## Minema 3.5

<?php echo youtube('GZAstZs8G74', $domain) ?> 

* Added `MinemaAPI` class for API
* Added new config options:
	* Depth capture distance (Capturing) — allows to configure the limit of recorded depth buffer video, which allows to get more grayscale values but losing distance (suggested by Lucatim)
	* Use alpha (Capturing) — enables recording of alpha channel (works with vanilla, but shader packs must support passing of alpha to the final shader, or rather not discard it), you can use Blockbuster's features to cut out 
	* Held frames (Capturing) — allows to render the same frame a couple of times, it's useful for fixing lighting with ray trace based shaders (like SEUS PTGI) (suggested by @STH-FrolDIST)
	* Screenshot alpha (Capturing) — when enabled, enables alpha channel capturing when you make a screenshot with F2 (see Use alpha option's description in this change log for more information on how it works)
	* Encoder logging (Encoding) — allows to disable generation of ffmpeg logs (`*.log` files with same name as the output file) (suggested by Jetpack Rescue)
	* Encoder arguments for alpha (Encoding) — same as Encoder arguments but it's used when Use alpha is enabled, because it requires different encoding (suggested by Jerpack Rescue)
* Added French translations (by @Lycoon)
* Fixed fast forwarding of ticks when starting recording