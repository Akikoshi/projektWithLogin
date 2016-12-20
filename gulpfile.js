var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var sass = require('gulp-sass');

// the paths to the files
var config = {
	defaultConfigDir: './Templates/Default',
	defaultBootstrapDir: './Templates/Default/resources/bootstrap',
	defaultCustomDir: './Templates/Default/resources/custom',
	defaultJqueryDir: './Templates/Default/resources/jquery',
	templateConfigDir: './src/Configurations',
	publicDir: './public'
};

// copying the template configuration for templates
gulp.task(
	'default:template',function(){
		gulp.src( config.defaultConfigDir + '/TemplateConfig.php' )
				.pipe( gulp.dest( config.templateConfigDir ) );
	});
// copying the fonts from bootstrap into the public dir
gulp.task(
	'default:fonts',function(){
	gulp.src( [
		config.defaultBootstrapDir + '/fonts/bootstrap/*',
		config.defaultCustomDir + '/fonts/*'
						] )
		.pipe( gulp.dest( config.publicDir + '/fonts' ) );
});

// copying the fonts from bootstrap into the public dir
gulp.task(
	'default:images',function(){
		gulp.src( config.defaultConfigDir + '/_images/*' )
				.pipe( gulp.dest( config.publicDir + '/img' ) );
	});

// merge, complile and compress all scss files to only on css
gulp.task(
	'default:css',
	function (  ) {
		var success = [false,false]
		success[0] = gulp.src(config.defaultCustomDir + '/scss/app.scss')
										 .pipe(
											 sass().on( 'error', sass.logError )
										 )
										 .pipe( gulp.dest( config.publicDir + '/css') );

		success[1] = gulp.src(config.defaultCustomDir + '/scss/app.scss')
										 .pipe(
											 sass({outputStyle: 'compressed'}).on( 'error', sass.logError )
										 )
										 .pipe(
											 rename({suffix: ".min"})
										 )
										 .pipe( gulp.dest( config.publicDir + '/css') );

		return success[0] && success[1];
	}
);


// merge and compress much js file to only once
gulp.task(
	'default:js',function () {
	return gulp.src([
										config.defaultJqueryDir + '/jquery.js',
										config.defaultBootstrapDir + '/javascripts/bootstrap/transition.js',
										config.defaultBootstrapDir + '/javascripts/bootstrap/alert.js',
										config.defaultBootstrapDir + '/javascripts/bootstrap/button.js',
										config.defaultBootstrapDir + '/javascripts/bootstrap/carousel.js',
										config.defaultBootstrapDir + '/javascripts/bootstrap/collapse.js',
										config.defaultBootstrapDir + '/javascripts/bootstrap/dropdown.js',
										config.defaultBootstrapDir + '/javascripts/bootstrap/modal.js',
										config.defaultBootstrapDir + '/javascripts/bootstrap/tab.js',
										config.defaultBootstrapDir + '/javascripts/bootstrap/affix.js',
										config.defaultBootstrapDir + '/javascripts/bootstrap/scrollspy.js',
										config.defaultBootstrapDir + '/javascripts/bootstrap/tooltip.js',
										config.defaultBootstrapDir + '/javascripts/bootstrap/popover.js',
										config.defaultCustomDir + '/js/*.js'
									])
						 .pipe( concat('app.min.js') )
						 .pipe( uglify() )
						 .pipe( gulp.dest( config.publicDir + '/js' ) );
});

// starts all tasks
gulp.task('default',['default:js','default:css','default:fonts','default:template','default:images']);

// starts css task when a scss file is changed
gulp.task('default:css:watch', function (  ) {
	gulp.watch([
							 config.defaultBootstrapDir + '/stylesheets/bootstrap/*.scss',
							 config.defaultCustomDir + '/scss/*.scss'
						 ], ['default:css'] );
});
// starts js task when a js file is changed
gulp.task('default:js:watch', function (  ) {
	gulp.watch(config.defaultCustomDir + '/js/*.js',['default:js']);
});
