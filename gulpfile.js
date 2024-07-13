"use strict";

const { series, src, dest, parallel, watch } = require("gulp");
const autoprefixer = require("gulp-autoprefixer");
const babel = require('gulp-babel');
const browsersync = require("browser-sync");
const concat = require("gulp-concat");
const CleanCSS = require("gulp-clean-css");
const del = require("del");
const fileinclude = require("gulp-file-include");
const imagemin = require("gulp-imagemin");
const inquirer = require("inquirer");
const npmdist = require("gulp-npm-dist");
const newer = require("gulp-newer");
const rename = require("gulp-rename");
const rtlcss = require("gulp-rtlcss");
const sourcemaps = require("gulp-sourcemaps");
const sass = require("gulp-sass")(require("sass"));
const uglify = require("gulp-uglify");


const paths = {
    baseSrc: "src/",                // source directory
    baseSrcAssets: "src/assets/",   // source assets directory
    baseDist: "dist/",              // build directory
    baseDistAssets: "dist/assets/", // build assets directory
};

const demoPaths = {
    Saas: "saas",
    Modern: "modern",
    Creative: "creative",
};

var demo = "";
var demoPath = "";

const input = async function (done) {
    let message =
        "--------------------------------------------------------------\n";
    message += "Hyper - v5.4.0\n";
    message += "Which demo version would you like to run?\n";
    message +=
        "----------------------------------------------------------------\n";
    const res = await inquirer.prompt({
        type: "list",
        name: "demo",
        message,
        default: "Saas",
        choices: [
            "Saas",
            "Modern",
            "Creative",
        ],
        pageSize: "7",
    });
    demo = res.demo;
    demoPath = demoPaths[demo];
    done();
};


const clean = function (done) {
    del.sync(paths.baseDist, done());
};


const vendor = function () {
    const out = paths.baseDist + demoPath + "/assets/vendor/";
    return src(npmdist(), { base: "./node_modules" })
        .pipe(rename(function (path) {
            path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '');
        }))
        .pipe(dest(out));
};

const html = function () {
    const srcPath = paths.baseSrc + demoPath + "/";
    const out = paths.baseDist + demoPath + "/";
    return src([
        srcPath + "*.html",
        srcPath + "*.ico", // favicon
        srcPath + "*.png",
    ])
        .pipe(
            fileinclude({
                prefix: "@@",
                basepath: "@file",
                indent: true,
            })
        )
        .pipe(dest(out));
};

const data = function () {
    const out = paths.baseDist + demoPath + "/assets/data/";
    return src([paths.baseSrcAssets + "data/**/*"])
        .pipe(dest(out));
};

const fonts = function () {
    const out = paths.baseDist + demoPath + "/assets/fonts/";
    return src([paths.baseSrcAssets + "fonts/**/*"])
        .pipe(newer(out))
        .pipe(dest(out));
};

const images = function () {
    var out = paths.baseDist + demoPath + "/assets/images";
    return src(paths.baseSrcAssets + "images/**/*")
        .pipe(newer(out))
        // .pipe(imagemin())
        .pipe(dest(out));
};

const javascript = function () {
    const out = paths.baseDist + demoPath + "/assets/js/";

    // vendor.min.js
    src([
        "./node_modules/jquery/dist/jquery.min.js",
        "./node_modules/bootstrap/dist/js/bootstrap.bundle.js",
        "./node_modules/simplebar/dist/simplebar.min.js",
        "./node_modules/lucide/dist/umd/lucide.min.js",
    ])
        .pipe(concat("vendor.js"))
        .pipe(uglify())
        .pipe(rename({ suffix: ".min" }))
        .pipe(dest(out));

    // copying and minifying all other js
    src([paths.baseSrcAssets + "js/**/*.js", "!" + paths.baseSrcAssets + "js/hyper-layout.js", "!" + paths.baseSrcAssets + "js/hyper-main.js"])
        .pipe(uglify())
        // .pipe(rename({ suffix: ".min" }))
        .pipe(dest(out));

    // app.js (hyper-main.js + hyper-layout.js)
    return src([paths.baseSrcAssets + "js/hyper-main.js", paths.baseSrcAssets + "js/hyper-layout.js"])
        .pipe(concat("app.js"))
        .pipe(dest(out))
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(uglify())
        .pipe(rename({ suffix: ".min" }))
        .pipe(dest(out));
};

// CSS
const scss = function () {
    const out = paths.baseDist + demoPath + "/assets/css/";

     src(paths.baseSrcAssets + `scss/app-${demoPath}.scss`)
        .pipe(sourcemaps.init())
        .pipe(sass.sync().on('error', sass.logError)) // scss to css
        .pipe(
            autoprefixer({
                overrideBrowserslist: ["last 2 versions"],
            })
        )
        .pipe(dest(out))  // app.css
        .pipe(CleanCSS()) 
        .pipe(rename({ suffix: ".min" })) // app.min.css
        .pipe(sourcemaps.write("./")) // source maps
        .pipe(dest(out));

    // Generate RTL
    return src(paths.baseSrcAssets + `scss/app-${demoPath}.scss`)
        .pipe(sourcemaps.init())
        .pipe(sass.sync().on('error', sass.logError)) // scss to css
        .pipe(
            autoprefixer({
                overrideBrowserslist: ["last 2 versions"],
            })
        )
        .pipe(rtlcss())
        .pipe(rename({ suffix: "-rtl" }))
        .pipe(dest(out))
        .pipe(CleanCSS())
        .pipe(rename({ suffix: ".min" }))
        .pipe(sourcemaps.write("./")) // source maps
        .pipe(dest(out));
};

// Icons 
const icons = function () {
    const out = paths.baseDist + demoPath + "/assets/css/";
    return src(paths.baseSrcAssets + "scss/icons.scss")
        .pipe(sourcemaps.init())
        .pipe(sass.sync().on('error', sass.logError)) // scss to css
        .pipe(
            autoprefixer({
                overrideBrowserslist: ["last 2 versions"],
            })
        )
        .pipe(dest(out))
        .pipe(CleanCSS())
        .pipe(rename({ suffix: ".min" }))
        .pipe(sourcemaps.write("./")) // source maps
        .pipe(dest(out));
};


// live browser loading
const initBrowserSync = function (done) {
    const startPath = "/index.html";
    browsersync.init({
        startPath: startPath,
        server: {
            baseDir: paths.baseDist + demoPath + "/",
            middleware: [
                function (req, res, next) {
                    req.method = "GET";
                    next();
                },
            ],
        },
    });
    done();
}

const reloadBrowserSync = function (done) {
    browsersync.reload();
    done();
}

function watchFiles() {
    watch(paths.baseSrc + "**/*.html", series(html, reloadBrowserSync));
    watch(paths.baseSrcAssets + "data/**/*", series(data, reloadBrowserSync));
    watch(paths.baseSrcAssets + "fonts/**/*", series(fonts, reloadBrowserSync));
    watch(paths.baseSrcAssets + "images/**/*", series(images, reloadBrowserSync));
    watch(paths.baseSrcAssets + "js/**/*", series(javascript, reloadBrowserSync));
    watch(paths.baseSrcAssets + "scss/icons.scss", series(icons, reloadBrowserSync));
    watch([paths.baseSrcAssets + "scss/**/*.scss", "!" + paths.baseSrcAssets + "scss/icons.scss"], series(scss, reloadBrowserSync));
}

// dist clean Tasks
exports.clean = series(
    clean,
);

// Production Tasks
exports.default = series(
    input,
    html,
    vendor,
    parallel(data, fonts, images, javascript, scss, icons),
    parallel(watchFiles, initBrowserSync)
);


// Build Tasks
exports.build = series(
    input,
    clean,
    html,
    vendor,
    parallel(data, fonts, images, javascript, scss, icons)
);