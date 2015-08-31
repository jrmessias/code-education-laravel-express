'use strict';

module.exports = function(grunt) {
    /************************************
     * Show elapsed time after tasks run
     ***********************************/
    require('time-grunt')(grunt);

    /***********************
     * Load all Grunt tasks
     **********************/
    require('jit-grunt')(grunt);

    grunt.initConfig({
        /***********
         * WATCH
         ************/
        watch: {
            options: {
                interrupt: true,
                debounceDelay: 2000,
                livereload: true
            },
            less: {
                files: [
                    'less/*.less'
                ],
                tasks: ['less', 'cssmin']

            },
            js: {
                files: [
                    'js/*.js'
                ],
                tasks: ['uglify']
            },
            img: {
                files: [
                    'img/*.{jpg,png,gif}'
                ],
                tasks: ['copy']
            },
            grunt: {
                files: [
                    'Gruntfile.js'
                ],
                tasks: ['all']
            }
        },
        /***********
         * LESS
         ************/
        less: {
            app: {
                options: {
                    paths: ["/less/"],
                    cleancss: true,
                    compress: false
                },
                files: {
                    /* Blog */
                    '_assets/css/blog.css': '_assets/less/blog.less'
                }
            }
        },
        /***********
         * CSSMIN
         ************/
        cssmin: {
            app: {
                options: {
                    keepSpecialComments: 0
                },
                files: {
                    /* Blog */
                    'public/assets/css/blog.min.css': [
                        '_assets/css/blog.css'
                    ],
                    /* Blog - Plugins */
                    'public/assets/css/blog.plugins.min.css': [
                        'bower_components/bootstrap/dist/css/bootstrap.css',
                        'bower_components/fontawesome/css/font-awesome.css'
                    ]
                }
            }
        },
        /***********
         * JS
         ************/
        uglify: {
            app: {
                options: {
                    mangle: false,
                    compress: false,
                    preserveComments: false
                },
                files: {
                    /* Blog */
                    'public/assets/js/blog.min.js': [
                        '_assets/js/blog.js'
                    ],
                    /* Blog - Plugins */
                    'public/assets/js/blog.plugins.min.js': [
                        'bower_components/jquery/dist/jquery.min.js',
                        'bower_components/bootstrap/dist/js/bootstrap.js'
                    ]
                }
            }
        },
        /***********
         * COPY
         ************/
        copy: {
            app: {
                files: [{
                    expand: true,
                    cwd: '_assets/img/',
                    src: ['**'],
                    dest: 'public/assets/img/'
                }, {
                    expand: true,
                    cwd: 'bower_components/fontawesome/fonts',
                    src: ['**'],
                    dest: 'public/assets/fonts/'
                }]
            }
        },
        /***********
         * CONNECT
         ************/
        connect: {
            app: {
                options: {
                    port: 8000,
                    base: "/",
                    hostname: "localhost",
                    livereload: true,
                    open: true
                }
            }
        }
    });

    /***************
     * TASKS
     **************/

    /***************
     * All Tasks
     **************/
    grunt.registerTask('default', [
        'less',
        'cssmin',
        'uglify',
        'copy'
    ]);

    /***************
     * Connect + Watch = Default
     **************/
    grunt.registerTask('cw', [
        'connect', 'watch'
    ]);
};