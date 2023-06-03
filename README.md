# mediawiki-extensions-MobileSkin
A small extension to change your MediaWiki skin based on the platform the
wiki is running on.

There was an extension with the same name, but it hasn't been updated
in the last decade, hosts its code on-wiki, doesn't support the current
version of MediaWiki, and due to all these reasons, is archived.
You can find that extension [here](https://www.mediawiki.org/w/index.php?oldid=1351936).

There is also a similar extension called [MobileFrontend][mobilefrontend], but it has
more functionality, so I developed this extension to drop much of the functionality
provided by MobileFrontend.

## Configuration
* `$wgNameOfMobileSkin`
  
  Name of the skin to use on mobile devices.
  
  **Default:** `minerva`

[mobilefrontend]: https://https://mediawiki.org/wiki/Extension:MobileFrontend
