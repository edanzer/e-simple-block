# Simple Block

This is a very simple WordPress block plugin based on [@wordpress/create-block](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/).

The goal is just to have a reference point for current best practices for block development. The block editor and block development guidelines are changing rapidly. Official docs are often out of date. It can be hard to know the 'right' way to do things. 

Fortunately, the @wordpress/create-block package current includes nearly all up-to-date best practices. 

A few points for reference: 

* block.json. The latest recommendations are to store block settings - the things traditionally included in registerBlockType() - as meta data in a block.json file. But very few plugins do this. Even frameworks like create-guten-block are not doing this at present. And there is very little documentation about block.json, including how to handle multiple blocks, currently available. 
* `register_block_type( __DIR__ )`. This function, combined with block.json, is the recommended way to register a block on ther server side. But again, nearly no plugin or frameworks currently use this.
* The recommended to register scripts and styles is by adding them to the block metadata in block.json. This departs from long established and long documented idea of enqueuing scripts and styles. Again, very few plugins or frameworks do this. There is also confusion about how to handle scripts and styles that are used for multiple blocks. 
* `useBlockProps()`. This is a new react hook that is now the recommended way to add block properties like class names to block containers. Historically, the save function did this automatically, and people included arguments manually within the edit function. This is not supported in any WordPress version prior to 5.8.
* `apiVersion: 2`. The use of useBlockProps() requires that you include `apiVersion: 2` when registering a block. Otherwise it will error. 

A main challenge is that block examples, including documenation about how to use the @wordpress/scripts package, do not use or document any of the above. 

The create-block script from WordPress is one of the few places where you can see all these latest recommended practices in practice. 

It's worth noting that this script seems to envision and account for single block plugins, rather than multi-block plugins that are more common in the ecosystem. For example, block.json is in the root directory and accounts for a single block only.