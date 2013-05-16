# ElFinder

Plugin for integrating [elFinder](http://elfinder.org/) into [Croogo](http://croogo.org).

Requires Croogo v1.5 or higher

## Installation

1. Clone repository to /app/Plugin/ElFinder, and activate the plugin from your admin panel.
2. Create a symlink in /app/webroot called ElFinder to ../Plugin/ElFinder/webroot

The second step bypasses CakePHP's plugin routing when calling elFinder by ajax.
