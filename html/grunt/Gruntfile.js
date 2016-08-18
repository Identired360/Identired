module.exports = function(grunt) {
    grunt.initConfig({
        less: {
            dev: {
                options: {
                    compress: false
                },
                files: {
                    "css/main.css": "../css/main.less"
                }
            },
            prod: {
                options: {
                    compress: true
                },
                files: {
                    "css/main.min.css": "../css/main.less"
                }
            }
        },
        uglify: {
            options: {
                mangle: false
            },
            all: {
                files: {
                    'js/all.min.js': [
                        '../js/vendor/jquery.js',
                        '../js/vendor/foundation.js',
                        '../js/modernizr.custom.js',
                        '../js/wow.min.js',
                        '../js/jquery.validate.min.js',
                        '../js/js.cookie.js',
                        '../js/app.js',
                        '../js/slick.min.js',
                        '../js/scripts-home.js',
                        '../js/canvas.js',
                        '../js/snap.svg-min.js',
                        '../js/proyectos.js'
                    ]
                }
            }
        },
        copy: {
            main: {
                files: [{
                    expand: true,
                    flatten: true,
                    src: ['css/main.min.css'],
                    dest: '../../jekyll/css/',
                    filter: 'isFile'
                }, {
                    expand: true,
                    flatten: true,
                    src: ['js/all.min.js'],
                    dest: '../../jekyll/js/',
                    filter: 'isFile'
                }, {
                    expand: true,
                    flatten: true,
                    src: ['../fonts/*'],
                    dest: '../../jekyll/fonts/',
                    filter: 'isFile'
                }, {
                    src: ['../img/**'],
                    dest: '../../jekyll/img/',
                    filter: 'isFile'
                }]
            }
        },
        jekyll: { // Task
            options: {
                src: '../../jekyll/'
            },
            serve: { // Another target
                options: {
                    dest: '../../public_html',
                    serve: false
                }
            }
        },
        watch: {
            typescript: {
                files: ['assets/ts/*.ts'],
                tasks: ['typescript', 'uglify:all'],
                options: {
                    livereload: true
                }
            },
            js: {
                files: ['assets/js/**/*.js', 'assets/js/all.json'],
                tasks: ['concat_sourcemap', 'uglify:lib'],
                options: {
                    livereload: true
                }
            },
            less: {
                files: ['assets/less/**/*.less'],
                tasks: ['less'],
                options: {
                    livereload: true
                }
            },
            fonts: {
                files: [
                    'vendor/bower/bootstrap/fonts/*'
                ],
                tasks: ['copy'],
                options: {
                    livereload: true
                }
            }
        }
    });

    // Plugin loading
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-jekyll');

    // Task definition
    //grunt.registerTask('default', ['less', 'uglify', 'copy', 'jekyll']);
    grunt.registerTask('build', ['less', 'uglify', 'copy', 'jekyll']);
    grunt.registerTask('serve', ['jekyll']);

    //grunt.registerTask('build', ['less', 'typescript', 'copy', 'concat_sourcemap', 'uglify']);
    //grunt.registerTask('default', ['watch']);
    //grunt.registerTask('build', ['concat_sourcemap', 'uglify', 'cssmin', 'copy']);
    //grunt.registerTask('build', ['concat_sourcemap', 'uglify', 'cssmin', 'copy']);
};
