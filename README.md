## Initial project from :

https://github.com/edouardl/bt-sass-blank-theme


## Blade template :

https://fr.wordpress.org/plugins/blade/


## How to
    $ git clone https://github.com/benoitcarquillat/starterFacem.git [your_theme_name]
    $ cd [your_theme_name]
    $ npm install
    $ gulp

then you can start coding


## Gulp Tasks
- `gulp`: watch js/sass/img directories ; compile sass ; minify js ; optimize images
- `gulp watch`: watch js/sass/img directories
- `gulp sass`: compile sass to style.css
- `gulp lint`: Validate main theme Javascript file (main.js)
- `gulp js`: Minify the js files
- `gulp img`: Compress theme images
- `gulp font`:  Move fonts from assets to dist (including Boostrap Font from npm package)


## Optimizations
### Menus
if your need full implementation of Boostrap Menu in WordPress, I recommand the great custom walker: https://github.com/wp-bootstrap/wp-bootstrap-navwalker
### Boostrap-sass
By default all modules are loaded, but you can comment any Bootstrap module you don't need in assets/scss/style.scss
Morover, to create your own Bootstrap theme, you can use Bootstrap Magic to generate your variables.scss file
### WordPress snippets
If you're not comfortable with WordPress snippets to add components and customize them, you can use [WP Hasty](https://www.wp-hasty.com/) to generate them

Version 1.0
- Initial
