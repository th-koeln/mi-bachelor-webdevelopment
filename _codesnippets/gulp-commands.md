---
titel:  Gulp Commands
autor: cn
---


## SASS für assets und snippets kompilieren

{% highlight sass %}
const gulp = require('gulp');
const sass = require('gulp-sass');
const del = require('del');
const concat = require('gulp-concat')
const sourcemaps = require('gulp-sourcemaps');

const snippets = "src/site/snippets/";
const paths = {
  styles: {
    src:  ['src/assets/scss/*.scss', snippets + '**/*.scss'],
    tmp:  'src/tmp/',
    dest: 'src/assets/css/'
  }
}

gulp.task('styles', () => {
  return gulp.src(paths.styles.src)
    .pipe(gulp.dest(paths.styles.tmp))
    .pipe(sourcemaps.init())
    .pipe(concat('site.scss'))
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest(paths.styles.dest));
});

gulp.task('clean', () => {
    return del([
      paths.styles.tmp, paths.styles.dest
    ]);
});

gulp.task('default', gulp.series(['clean', 'styles']));
gulp.task('watch', () => {
  gulp.watch(paths.styles.src, (done) => {
      gulp.series(['clean', 'styles'])(done);
  });
});
{% endhighlight %}
