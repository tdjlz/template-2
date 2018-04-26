/** 
/ The following are our requirements for 
/ our script. Each requirement is a node 
/ module we downloaded using the 
/ 'npm install' command.
**/

var gulp 		= require('gulp'),
	sass 		= require('gulp-sass'),
	fs 			= require('node-fs'),
	fse			= require('fs-extra'),
	json		= require('json-file'),
	jshint 		= require('gulp-jshint'),
	concat 		= require('gulp-concat'),
	imagemin 	= require('gulp-imagemin'),	
	plumber 	= require('gulp-plumber'),
	util 		= require('gulp-util'),
	livereload 	= require('gulp-livereload'),
	sourcemaps 	= require('gulp-sourcemaps'),
	notify 		= require('gulp-notify'),
	gulpif 		= require('gulp-if'),
	babel 		= require('gulp-babel'),
	minify 		= require('gulp-babel-minify'),
	minifyCSS 	= require('gulp-minify-css'),
	pump	 	= require('pump'),
	browserSync = require('browser-sync'),
	themeName	= json.read('./package.json').get('themeName'),
	stylish 	= require('jshint-stylish'),
	rename 		= require('gulp-rename'),
	themeDir	= '../' + themeName;

/**
/ The following is a flag that we define
/ that tells our script if we are running 
/ it in production mode or development mode
**/

var config = {
    production: !!util.env.production
};

/**
/ This is our error handler. It takes our javascript errors
/ and outputs them in the terminal where we can evaluate them
**/

var plumberErrorHandler = { errorHandler: notify.onError({
		title: 'Gulp',
		message: 'Error: <%= error.message %>'
	})
};

/**
/ Using the BrowserSync node library we can set up 
/ a small server that automatically refreshes the 
/ page whenever HTML, PHP or Javascript is edited. 
/ Also when the SASS is edited and saved, the CSS 
/ is compiled and injected into the page.
/ We will go in to more detail here when we get to 
/ the 'watch' task.
**/

gulp.task('browserSync', function() {
  browserSync({
    proxy: "localhost/nova_project"
  })
})

/**
/ TASK: SASS
/ The following SASS compilation task runs whenever we 
/ change a file within our css/src folder or any subfolders.
/ Within this task we have multiple pipes that handle errors, 
/ compile our SASS, export sourcemaps so we can track our 
/ SASS files in relation to our CSS, export the compiled 
/ CSS to our css/ folder and finally stream (inject) the new 
/ css into the browser.
**/

gulp.task('sass', function() {
	gulp.src('./css/src/**/*.scss')
		.pipe(plumber(plumberErrorHandler))
		.pipe(sass())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('./css'))
	    .pipe(browserSync.reload({
	      stream: true
	    }));
});

/**
/ TASK: JS
/ The following JavaScript compilation task runs whenever we 
/ change a file within our js/src folder or any subfolders.
/ Firstly we handle any errors in our code / compilation, next 
/ offering hints and reporting the hints to our console. Next we 
/ set a setting for babel (a ECMAScript version converter) before
/ using a conditional to check if our script is running in 
/ production mode (if it is then minify the javascript) and 
/ concatenate all the files in js/src into a single 'theme.js' 
/ file before outputting this file into the js/ folder.
/
/ n.b. a good way to make sure your files are being concatenated 
/ in the order you want is to prefix them with a number, e.g.
/ 1_init.js, 2_browser.js, 3_functions.js etc
**/

gulp.task('js', function() {
	gulp.src('js/src/*.js')
		.pipe(plumber(plumberErrorHandler))
		.pipe(jshint())
		.pipe(jshint.reporter('fail'))
		.pipe(babel({ presets: ['env'] })) 
		.pipe(config.production ? minify({ mangle: { keepClassName: true } }) : util.noop())
		.pipe(jshint.reporter( stylish ))
		.pipe(concat('theme.js'))
		.pipe(gulp.dest('js'));
});

/**
/ TASK: IMG
/ In this task we check to see any changes within the img/src
/ directory, first handling any errors within, and then 
/ minifying the files before outputting them into the img/ 
/ folder
**/

gulp.task('img', function() {
	gulp.src('img/src/*.{png,jpg,gif}')
		.pipe(plumber(plumberErrorHandler))
		.pipe(imagemin({
			optimizationLevel: 7,
			progressive: true
		}))
		.pipe(gulp.dest('img'));
});

/**
/ TASK: Watch
/ In this task we define folders and filetypes for Gulp to 
/ watch for compilation, and assign tasks to each. As you 
/ can see we have a couple of tasks set up for SASS, along 
/ a JS task, our img task and ones for HTML, PHP and JS that 
/ run the BrowserSync.reload method
**/

gulp.task('watch', function() {
	gulp.watch('css/src/**/*.scss', gulp.series('sass'));
	gulp.watch('js/src/*.js', gulp.series('js'));
	gulp.watch('img/src/*.{png,jpg,gif}', gulp.series('img'));
	gulp.watch('*.html', browserSync.reload);
	gulp.watch('*.php', browserSync.reload);
	gulp.watch('js/**/*.js', browserSync.reload);
	});

/**
/ This is our default Gulp build. Unless we define and flag other 
/ builds, this task will run.
**/



gulp.task( 'default', gulp.parallel('sass', 'browserSync', 'js', 'img', 'watch'));