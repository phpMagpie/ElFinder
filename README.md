# ElFinder

Plugin for integrating [elFinder](http://elfinder.org/) into [Croogo](http://croogo.org).

Requires Croogo v1.5 or higher, replaces FileManager::Attachments with
a more advanced file manager allowing folder management, context menus, drag and drop 
uploads/moves and image editing amongst other things.

Auto configures Ckeditor to use elFinder as a file browser.  I've also released a plugin for 
[TinyMCE 4 plugin](https://github.com/phpMagpie/Tinymce) that works with this plugin.

## Installation

1. Clone repository to /app/Plugin/ElFinder, and activate the plugin from your admin panel.
2. Create a symlink in /app/webroot called ElFinder to ../Plugin/ElFinder/webroot

The second step bypasses CakePHP's plugin routing when calling elFinder by ajax.  

On my Redhat Linux server I run the following as root:

1. cd /app/webroot
2. ln -s ../Plugin/ElFinder/webroot/ ElFinder
3. chown -h %youruser%:%yourgroup% ElFinder
