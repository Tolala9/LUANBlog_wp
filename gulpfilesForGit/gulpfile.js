var gulp           = require('gulp'), 
		settings       = require('./settings'),
		webpack        = require('webpack'),
		gutil          = require('gulp-util' ),
		sass           = require('gulp-sass'),
		browserSync    = require('browser-sync'),
		concat         = require('gulp-concat'),
		uglify         = require('gulp-uglify'),
		cleanCSS       = require('gulp-clean-css'),
		rename         = require('gulp-rename'),
		del            = require('del'),
		imagemin       = require('gulp-imagemin'),
		cache          = require('gulp-cache'),
		autoprefixer   = require('gulp-autoprefixer'),
		ftp            = require('vinyl-ftp'),
		notify         = require("gulp-notify");

// Project Scripts
gulp.task('scripts', function(callback) {
  webpack(require('./webpack.config.js'), function(err, stats) {
    if (err) {
      console.log(err.toString());
    }

    console.log(stats.toString());
    callback();
  });

});

// Project Styles
gulp.task('styles', function() {
	return gulp.src(settings.themeLocation + 'sass/**/*.sass')
	.pipe(sass({outputStyle: 'expand'}).on("error", notify.onError()))
	.pipe(rename("style.css"))
	.pipe(autoprefixer(['last 15 versions']))
	// .pipe(cleanCSS()) // Optionnal, comment for debag
	.pipe(gulp.dest(settings.themeLocation))
	.pipe(browserSync.reload({stream: true}));
});
// Watch
gulp.task('watch', function() {
  browserSync.init({
    notify: false,
    proxy: settings.urlToPreview,
    ghostMode: false
  });

  gulp.watch(settings.themeLocation + './**/*.php', function() {
    browserSync.reload();
  });
  gulp.watch(settings.themeLocation + 'sass/**/*.sass', ['waitForStyles']);
  gulp.watch([settings.themeLocation + 'js/modules/*.js', settings.themeLocation + 'js/scripts.js'], ['waitForScripts']);
});

gulp.task('waitForStyles', ['styles'], function() {
  return gulp.src(settings.themeLocation + 'style.css')
    .pipe(browserSync.stream());
});

gulp.task('waitForScripts', ['scripts'], function() {
  browserSync.reload();
});



gulp.task('clearcache', function () { return cache.clearAll(); });

gulp.task('default', ['watch']);
