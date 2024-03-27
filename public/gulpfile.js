const { src, dest, watch, series, parallel } = require("gulp");
const browserSync = require("browser-sync").create();
const sass = require("gulp-sass")(require("sass"));
const sourcemaps = require("gulp-sourcemaps");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const replace = require("gulp-replace");
const cssnano = require("cssnano");
const webpack = require("webpack-stream");

const cssVersion = new Date().getTime();
const sassEntryFile = "src/styles/index.scss";
const sassFiles = [
  "src/components/**/*.scss",
  "src/components/styles/icon-font/*.scss",
];
const jsFiles = ["src/components/**/*.js"];

const ENV = process.env.ENV || "prod";

function browsersyncServe(cb) {
  browserSync.init({
    server: {
      baseDir: ["./src/pages", "./build"],
    },
  });
  cb();
}

function browsersyncReload(cb) {
  browserSync.reload();
  cb();
}

function scssTask() {
  if (ENV === "prod") {
    return src(sassEntryFile)
      .pipe(sass())
      .pipe(postcss([autoprefixer(), cssnano()]))
      .pipe(dest("dist"));
  }
  return src(sassEntryFile)
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(postcss([autoprefixer()]))
    .pipe(sourcemaps.write("."))
    .pipe(dest("build"))
    .pipe(browserSync.stream());
}

function jsTask() {
  if (ENV === "prod") {
    return src(jsFiles)
      .pipe(
        webpack({
          output: {
            filename: "index.js",
          },
          mode: 'production',
          module: {
            rules: [
              {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                  loader: "babel-loader",
                  options: {
                    presets: [["@babel/preset-env"]],
                  },
                },
              },
            ],
          },
        })
      )
      .pipe(dest("dist"));
  }
  return src(jsFiles)
    .pipe(
      webpack({
        output: {
          filename: "index.js",
        },
        mode: "development",
        module: {
          rules: [
            {
              test: /\.js$/,
              exclude: /node_modules/,
              use: {
                loader: "babel-loader",
                options: {
                  presets: [["@babel/preset-env"]],
                },
              },
            },
          ],
        },
      })
    )
    .pipe(dest("build"))
    .pipe(browserSync.stream());
}

function copyFont() {
  return src(["src/styles/icon-font/*.{svg,ttf,woff}"]).pipe(
    dest(`${ENV === "prod" ? "dist" : "build"}/icon-font`)
  );
}

function copyImages() {
  return src(["src/images/*.{png,jpg,jpeg}"]).pipe(
    dest(`${ENV === "prod" ? "dist" : "build"}/images`)
  );
}

function copyImages() {
  return src(["src/images/*.{png,jpg,jpeg}"]).pipe(
    dest(`${ENV === "prod" ? "dist" : "build"}/images`)
  );
}

function preventCachingTask() {
  return src("src/pages/*.html")
    .pipe(replace(/v=\d+/g, "v=" + cssVersion))
    .pipe(dest("./src/pages"));
}

function watchTask(cb) {
  watch("src/pages/*.html", series(browsersyncReload));
  watch([sassEntryFile, ...sassFiles], series(scssTask, preventCachingTask));
  watch(jsFiles, series(jsTask));
  cb();
}

exports.default = series(
  parallel(copyFont, copyImages),
  parallel(scssTask, jsTask),
  browsersyncServe,
  preventCachingTask,
  watchTask
);

exports.build = series(
  parallel(copyFont, copyImages),
  parallel(scssTask, jsTask)
);
