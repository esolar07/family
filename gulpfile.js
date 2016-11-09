var gulp = require('gulp'),
	postcss = require('gulp-postcss')
	watch = require('gulp-watch'),
	csswring = require("csswring"),
	precss = require("precss"),
	autoprefixer = require('gulp-autoprefixer');


gulp.task('styles', function() {
	var processors = [
		csswring,
		precss({}),
		autoprefixer({browsers: ['last 2 versions']})
	]
	  
    return watch('*.css', { ignoreInitial: false })
		.pipe(postcss(processors))
        .pipe(gulp.dest('stylesheet'));
  
});

