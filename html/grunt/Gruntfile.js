module.exports = function (grunt) {
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
                        '../js/typed.js',
                        '../js/app.js',
                        '../js/slick.min.js',
                        '../js/scripts-home.js',
                        '../js/snap.svg-min.js',
                        '../js/proyectos.js'
                    ]
                }
            },
            home: {
              files: {
                  'js/home.min.js': [
                      '../js/canvas.js'
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
            },
            javascript: {
                files: [{
                        expand: true,
                        flatten: true,
                        src: ['js/all.min.js'],
                        dest: '../../jekyll/js/',
                        filter: 'isFile'
                    }]
            },
            css: {
                files: [{
                        expand: true,
                        flatten: true,
                        src: ['css/main.min.css'],
                        dest: '../../jekyll/css/',
                        filter: 'isFile'
                    }]
            },
            fonts: {
                files: [{
                        expand: true,
                        flatten: true,
                        src: ['../fonts/*'],
                        dest: '../../jekyll/fonts/',
                        filter: 'isFile'
                    }]
            },
            img: {
                files: [{
                        src: ['../img/**'],
                        dest: '../../jekyll/img/',
                        filter: 'isFile'

                    }]
            }
        },
        jekyll: {// Task
            options: {
                src: '../../jekyll/'
            },
            dist: {// Target
                options: {// Target options
                    dest: '../../public_html',
                    serve: false
                }
            },
            serve: {// Another target
                options: {
                    dest: '../../public_html',
                    serve: true
                }
            }
        },
        watch: {
            js: {
                files: ['../js/**/*.js'],
                tasks: ['uglify', 'copy:javascript'],
                options: {
                    livereload: false
                }
            },
            less: {
                files: ['../css/**/*.less'],
                tasks: ['less:prod', 'copy:css'],
                options: {
                    livereload: false
                }
            },
            fonts: {
                files: [
                    '../fonts/*'
                ],
                tasks: ['copy:fonts'],
                options: {
                    livereload: false
                }
            },
            img: {
                files: [
                    '../img/**'
                ],
                tasks: ['copy:img'],
                options: {
                    livereload: false
                }
            }
        },
        concurrent: {
            target1: {
                tasks: ['watch', 'jekyll:serve'],
                options: {
                    logConcurrentOutput: true
                }
            }
        }
    });

    // Plugin loading
    grunt.loadNpmTasks('grunt-concurrent');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-jekyll');

    // Task definition
    grunt.registerTask('build', ['less:prod', 'uglify', 'copy:main', 'jekyll:dist']);
    grunt.registerTask('default', ['concurrent:target1']);
};
