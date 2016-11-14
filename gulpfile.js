var gulp = require('gulp'),
	postcss = require('gulp-postcss'),
	csswring = require('csswring'),
    precss = require("precss"),
	watch = require('gulp-watch'),
	cssnext = require('postcss-cssnext'),
	autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function () {
  var processors = [
	csswring,
	precss({}),
	cssnext({browsers: ['last 1 version']})
  ];
  return gulp.src('./*.css')
    .pipe(postcss(processors))
	.pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
    .pipe(gulp.dest('./dest'));
});

gulp.task("watch:css", function(){
	gulp.watch('**/*.css', ['css'])
});