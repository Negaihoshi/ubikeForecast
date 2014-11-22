gulp = require("gulp")
gulpLoadPlugins = require("gulp-load-plugins")
plugins = gulpLoadPlugins()

gulp.task "coffee", ->

	return gulp.src "src/*.coffee"
	.pipe plugins.coffee()
	.on('error', plugins.util.log)
	.pipe gulp.dest "./public/js"
	.pipe plugins.jshint()
	.pipe plugins.uglify preserveComments: 'some'
	.pipe plugins.rename extname: '.min.js'
	.pipe gulp.dest './public/js'

gulp.task "watch", ->
	gulp.watch "src/*.coffee", ['coffee']
