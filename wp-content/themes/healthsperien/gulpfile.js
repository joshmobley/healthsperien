var gulp = require('gulp');
var sass = require('gulp-sass');
var minify = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('styles', function() {
    return gulp.src('scss/main.scss')
        .pipe(sass({ style: 'expanded' }))
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        })
        .pipe(minify())
        .pipe(gulp.dest('css')));
});

gulp.task('default', function() {
    gulp.run('styles');
});

gulp.watch('scss/**/*', function(event) {
    gulp.run('styles');
});
