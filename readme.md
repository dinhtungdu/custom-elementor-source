# custom-elementor-source

This plugin is an example of overriding Elementor template library as detail [here](https://dinhtungdu.github.io/create-your-own-elementor-template-library/). This plugin is never meant to use in the production.

## Installation
1. Clone this repository or download it as a zip file.
2. Extract and move the plugin folder into the `wp-content/plugins` folder.
3. Edit `includes/source.php` file and replace the following constants' value with yours:
    * `$api_info_url`: The URL that returns the information of your library.
    * `$api_get_template_content_url`: The URL that returns the detail of specific template id (Notice the `%d`).
4. Activate the plugin.
5. Manually sync the library using Elementor > Tools.
6. Create/edit a post and see the new remote library.

## Notes
* This plugin is just an example of how we override Elementor library. You should put the source class in your plugin (recommended) or your theme.
