// Import Gulp and plugins
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const terser = require('gulp-terser');
const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');

// Paths
const paths = {
  styles: {
    src: './scss/**/*.scss', // Path to your SCSS files
    dest: './css',
  },
  scripts: {
    src: './js/**/*.js', // Path to your JavaScript files
    dest: './js',
  },
};

// Compile Sass to CSS
function styles() {
  return gulp
    .src(paths.styles.src)
    .pipe(sourcemaps.init())
    .pipe(sass({
        includePaths: [
            './node_modules', // Example: Add the node_modules directory
            './vendor/styles', // Add other directories as needed
          ],
    }).on('error', sass.logError))
    .pipe(sourcemaps.write('./')) // Writes source maps
    .pipe(gulp.dest(paths.styles.dest));
}

// Process JavaScript
function scripts() {
  return gulp
    .src(['./js/**/*.js', '!./js/scripts.min.js']) // Exclude the output file
    .pipe(sourcemaps.init()) // Initialize sourcemaps
    .pipe(concat('scripts.min.js')) // Combine files into one
    .pipe(terser()) // Minify the JS
    .pipe(sourcemaps.write('./')) // Write sourcemaps
    .pipe(gulp.dest(paths.scripts.dest)); // Output destination
}

// Watch for Changes
function watchFiles() {
  gulp.watch(paths.styles.src, styles); // Watches SCSS
  gulp.watch(['./js/**/*.js', '!./js/scripts.min.js'], scripts); // Watches JS but excludes minified file
}

// Default Task
const build = gulp.series(gulp.parallel(styles, scripts), watchFiles);

exports.styles = styles;
exports.scripts = scripts;
exports.watch = watchFiles;
exports.default = build; // Define and export the default task
