const { src, dest, watch, series } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const lineec = require("gulp-line-ending-corrector");
const sourcemaps = require("gulp-sourcemaps");
const gulp = require("gulp")

var fontsSRC = "assets/fonts/**/*",
  fontsDEST = "css/fonts";

function buildStyles() {
  return src("assets/scss/**/*.scss")
    .pipe(sourcemaps.init()) // Initialise les sourcemaps
    .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
    .pipe(lineec())
    .pipe(sourcemaps.write(".")) // Écrit les sourcemaps dans le répertoire courant
    .pipe(dest("css"));
}

function watchTask() {
  watch("assets/scss/**/*.scss", buildStyles);
}

function css() {
  return gulp
    .src(scss + "main.scss", { sourcemaps: true })
    .pipe(
      sass({
        outputStyle: "compressed",
      }).on("error", sass.logError)
    )
    .pipe(autoprefixer("last 2 versions"))
    .pipe(lineec())
    .pipe(gulp.dest("dist/css", { sourcemaps: "." }));
}

function fonts() {
  return gulp.src(fontsSRC).pipe(gulp.dest(fontsDEST));
}

const build = gulp.series(buildStyles, watchTask, css, fonts)
gulp.task("build", build);