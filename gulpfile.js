const gulp = require("gulp");
var sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const csso = require("gulp-csso");
const rename = require("gulp-rename");
const uglify = require('gulp-uglify');
// CSS
function sassCompile() {
    return gulp
        .src("assets/scss/app.scss")
        .pipe(sourcemaps.init())
        .pipe(
            sass({
                outputStyle: "compressed"
            }).on("error", sass.logError)
        )
        .pipe(
            autoprefixer({
                overrideBrowserslist: ["last 6 versions"]
            })
        )
        .pipe(csso())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(sourcemaps.write('maps'))
        .pipe(gulp.dest("assets/dist/css"))
}

function watchSass() {
    return gulp.watch('assets/scss/**/*.scss', sassCompile);
}


// Scripts
function scripts() {
    return gulp
        .src("assets/js/main.js")
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(sourcemaps.write("maps"))
        .pipe(gulp.dest("assets/dist/js"));
}

function watchScripts() {
    return gulp.watch('assets/js/*.js', scripts);
}

exports.watchScripts = watchScripts;
exports.watchSass = watchSass;
exports.devApp = gulp.parallel(watchScripts, watchSass);