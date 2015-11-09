var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');

var paths = {
    legacy_scripts: [
        'bower_components/html5shiv/dist/html5shiv.min.js',
        'bower_components/respond/src/respond.js',
    ],
};

gulp.task('scripts', function() {
    return gulp.src(paths.legacy_scripts)
        .pipe(concat('legacy.min.js'))
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('public/static/js'));
});

gulp.task('watch', function() {
    gulp.watch(paths.legacy_scripts, ['scripts']);
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['watch', 'scripts']);