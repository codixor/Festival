var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');

var paths = {
    legacy_scripts: [
        'bower_components/html5shiv/dist/html5shiv.min.js',
        'bower_components/respond/src/respond.js',
    ],
    react_scripts: [
        'bower_components/react/react.min.js',
        'bower_components/react/react-dom.min.js',
    ],
};

gulp.task('legacy-scripts', function() {
    return gulp.src(paths.legacy_scripts)
        .pipe(concat('legacy.min.js'))
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('public/static/js'));
});

gulp.task('react-scripts', function() {
    return gulp.src(paths.react_scripts)
        .pipe(concat('react.min.js'))
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('public/static/js'));
});

gulp.task('watch', function() {
    gulp.watch(paths.legacy_scripts, ['legacy-scripts']);
    gulp.watch(paths.react_scripts, ['react-scripts']);
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['watch', 'legacy-scripts', 'react-scripts']);