# custom-elementor-source

This plugin is an example of overriding Elementor template library as detail [here](https://dinhtungdu.github.io/create-your-own-elementor-template-library/). This plugin is never meant to use in the production.

## Installation
1. Clone this repository or download it as a zip file.
2. Extract and move the plugin folder into the `wp-content/plugins` folder.
3. Activate the plugin.
4. Manually sync the library using Elementor > Tools.
5. Create/edit a post and see the new remote library.

## Notes
* This branch is updated with a dummy API to help you test the custom source without any modification to the plugin as `master` readme shows.
* You shouldn't use the (dummy) method used in this branch in production.
* This plugin is just an example of how we override Elementor library. You should put the source class in your plugin (recommended) or your theme.
