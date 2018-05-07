var gulp           = require('gulp'), 
		settings = require('./settings'),
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

gulp.task('common-js', function() {
	return gulp.src([
		settings.themeLocation + 'js/common.js',
		])
	.pipe(concat('common.min.js'))
	// .pipe(uglify())
	.pipe(gulp.dest(settings.themeLocation + 'js/')); //or without slash
});

gulp.task('js', ['common-js'], function() {
	return gulp.src([
		settings.themeLocation + 'libs/jquery/dist/jquery.min.js',
		settings.themeLocation + 'libs/animate/animate-css.js',
		settings.themeLocation + 'js/common.min.js', // Always at the end
		])  
	.pipe(concat('scripts.min.js'))
	// .pipe(uglify()) // Minimyze oll js (on yout choice)
	.pipe(gulp.dest(settings.themeLocation + 'js/'))
	.pipe(browserSync.reload({stream: true}));
});

gulp.task('browser-sync', function() {
	browserSync.init({
		notify: false,
		proxy: settings.urlToPreview,
		ghostMode: false
		// tunnel: true,
		// tunnel: "myblog", //Demonstration page: http://projectmane.localtunnel.me
	});

});

gulp.task('sass', function() {
	return gulp.src(settings.themeLocation + 'sass/**/*.sass')
	.pipe(sass({outputStyle: 'expand'}).on("error", notify.onError()))
	.pipe(rename("style.css"))
	.pipe(autoprefixer(['last 15 versions']))
	// .pipe(cleanCSS()) // Optionnal, comment for debag
	.pipe(gulp.dest(settings.themeLocation))
	.pipe(browserSync.reload({stream: true}));
});

gulp.task('watch', ['sass', 'js', 'browser-sync'], function() {
	gulp.watch(settings.themeLocation + 'sass/**/*.sass', ['sass']);
	gulp.watch([settings.themeLocation + 'libs/**/*.js', settings.themeLocation + 'js/common.js'], ['js']);
	gulp.watch(settings.themeLocation + '*.php', browserSync.reload);
});



gulp.task('default', ['watch']);
